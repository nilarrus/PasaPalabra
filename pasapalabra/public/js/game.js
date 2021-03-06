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

//Fin del juego
function endGame() {
	clearInterval(downTimer);//limpiar el timer
	$('.question-controls').hide();//escondemos la interfaz del usuario para jugar
	$('.timer').text(0);//colocamos el 0 en el tiempo
	$('.end-game').show();//mostramos la informacion del final del juego
	$('#aciertos').text("Aciertos: "+aciertos);//colocamos los aciertos
	$('#fallos').text("Fallos: "+fallos);//colocamos los fallos

}
//resetear todo el juego al inicio
function reset() {
	$('#user-answer').val('');//vaciamos el input del usuario
	$('.end-game').hide();//escondemos el final del juego
	$('.welcome-user').show();//mostramos las instrucciones y el inicio del juego.
	//resetamos los contadores
	aciertos =0;
	fallos =0;
	$('.timer').text(tInicial);//reiniciamos el contador de tiempo
	$('.score').text(25);//reiniciamos el contador del la palabras
	resetRosco(dificultad);//reacemos el rosco no nuevas palabras
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
	//sustitucion si el usuario envia el campo vacio
	if(palabra == ""){
		palabra = "0";
	}
	//validacion por ajax de la palabra enviada por el usuario
	var lurl = "/game/"+id;
	$.ajax({
		url:lurl,
		data:{id:id}
	})
	 .done(function(res){
		//modificaos el marcador 
		marcador = $('.score').text()-1;
		$('.score').text(marcador);
		
		//comprobamos si la palabra es correcta
		if(bienMal(palabra,res[0]['Palabra'])){
			$('.item')[roscoJuego[posicionRosco]["Relacion"]].setAttribute('class','item item--success');
			aciertos++;
			
		}else{
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
		//correccion de la posicion del rosco
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
