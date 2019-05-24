var posicionRosco = 0;//posiciondelRosco en la que estas
var continuar = true;//control pasaPalabra
//contadores
var aciertos = 0;
var fallos = 0;
var downTimer;//timer
var tInicial = 0;

//reniciar los colores del rosco
function resetRosco(dif) {
	$('.item').each(function(index){
		//console.log(index);
		$('.item')[index].setAttribute('class','item');
	});
	//console.log(dif);
	newRosco(dif);
}

// Avengers Fin del juego
function endGame() {
	clearInterval(downTimer);
	$('.question-controls').hide();
	$('.timer').text(0);
	$('.end-game').show();
	$('#aciertos').text("Aciertos: "+aciertos);
	$('#fallos').text("Fallos: "+fallos);

}
//resetear todo el juego al inicio
function reset() {
	$('.end-game').hide();
	$('.welcome-user').show();
	aciertos =0;
	fallos =0;
	$('.timer').text(tInicial);
	$('.score').text(25);
	resetRosco(dificultad);
}

//Recives 2 palabras y el return envia true si la palabra es igual
function bienMal(palabraUser,palabraServer) {
	if(palabraServer.toUpperCase() == palabraUser.toUpperCase()){
		return true;
	}else{
		return false;
	}
}
//verificar la palabra del usuario
function VerificarPalabra(palabra,id) {
	if(palabra == ""){
		//console.log("vacia");
		palabra = "0";
	}
	//falta ajax
	//console.log(palabra+" "+id);
	var lurl = "/game/"+id;
	$.ajax({
		url:lurl,
		data:{id:id}
	})
	 .done(function(res){
		//modificaos el marcador 
		marcador = $('.score').text()-1;
		$('.score').text(marcador);
		
		if(bienMal(palabra,res[0]['Palabra'])){
			console.log("Acierto Li: "+roscoJuego[posicionRosco]["Relacion"]);
			//console.log("bien");
			$('.item')[roscoJuego[posicionRosco]["Relacion"]].setAttribute('class','item item--success');
			aciertos++;
			
		}else{
			console.log("Fallo Li: "+roscoJuego[posicionRosco]["Relacion"]);
			//console.log("mal");
			$('.item')[roscoJuego[posicionRosco]["Relacion"]].setAttribute('class','item item--failure');
			fallos++;
		}
		//fin del juego
		if($('.score').text()==0){
			//console.log("fin");
			endGame();
		}
		//Eliminar palabra 
		roscoJuego.splice(posicionRosco,1);

		if(posicionRosco == roscoJuego.length || posicionRosco>roscoJuego.length){
			posicionRosco = 0;
		}
		//Pasamos de palabra
		if($('.score').text()!=0){
			pasaPalabra(false);
		}
	 })
	 .fail(function(jqXHR,textStatus){
		 console.log("Ajax Fail: "+textStatus);
	});
}

//rellena la informacion por pantalla para el usuario
function generarDescripcion(posicionActual) {
	$hint = roscoJuego[posicionActual]["Tipo"]+" con "+roscoJuego[posicionActual]["Letra"]+":";
	$descripcion = roscoJuego[posicionActual]["Descripcion"];
	$('#hint').text($hint);
	$('#definition').text($descripcion);
}

//comparar lo escrito con la palabra 
function enviar() {
	//console.log($('#user-answer').val());
	VerificarPalabra($('#user-answer').val(),roscoJuego[posicionRosco]["id"]);

}
//pasarpalabra en funcion de si aun no la a "enviado"
function pasaPalabra(continuar){
	if(continuar){
		if(roscoJuego.length-1==posicionRosco){
			posicionRosco = 0;
		}else{
			posicionRosco++;
		}
		generarDescripcion(posicionRosco);
		//limpiamos el input
		$('#user-answer').val('');
	}else{
		generarDescripcion(posicionRosco);
		//limpiamos el input
		$('#user-answer').val('');
		continuar = true;
	}
	
}

//tiempo de juego segun dificultad
function tiempoJuego(timeTotal){
	var tLeft = timeTotal;
	//console.log("tiempo de juego: "+timeTotal);
	downTimer = setInterval(function () {
		$(".timer").text(tLeft);
		if(tLeft<=0){
			clearInterval(downTimer);
			$(".timer").text(0);
			//console.log("fin Juego");
			endGame();
		}
		tLeft -=1;
	},1000);

}
//boton inicio del juego
function inicio() {
	$('.welcome-user').hide();//ocultamos el welcome + inicio 
	$('.question-controls').show();//mostramos los controles del juego
	tInicial = $('.timer').text();
	tiempoJuego(tInicial);
	generarDescripcion(0);
}
