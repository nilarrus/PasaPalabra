var posicionRosco = 0;//posiciondelRosco en la que estas
var continuar = true;//control pasaPalabra
//contadores
var aciertos = 0;
var fallos = 0;
var downTimer;//timer

// Avengers Fin del juego
function endGame() {
	//clearInterval(downTimer);
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

		//console.log("Li: "+roscoJuego[posicionRosco]["Relacion"]+"\nPalabra del server: "+res[0]['Palabra']+"\nPalabra usuario: "+palabra); 
		//console.log(bienMal(palabra,res[0]['Palabra']));
		console.log("Tamaño actual: "+roscoJuego.length);
		console.log("Posicion actual: "+posicionRosco);
		if($('.score').text()==0){
			console.log("fin");
			endGame();
		}else{
			if(bienMal(palabra,res[0]['Palabra'])){
				//console.log("Acierto Li: "+roscoJuego[posicionRosco]["Relacion"]);
				//console.log(posicionRosco);
				$('.item')[roscoJuego[posicionRosco]["Relacion"]].setAttribute('class','item item--success');
				aciertos++;
				
			}else{
				//console.log("Fallo Li: "+roscoJuego[posicionRosco]["Relacion"]);
				$('.item')[roscoJuego[posicionRosco]["Relacion"]].setAttribute('class','item item--failure');
				fallos++;
			}
			//Eliminar palabra 
			roscoJuego.splice(posicionRosco,1);

			

			//Pasamos de palabra
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
//pasarpalabra en funcion de si aun no la a "dicho"
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
	//console.log("tiempo de juego: "+timeTotal);
	var tLeft = timeTotal;
	var downTimer = setInterval(function () {
		$(".timer").text(tLeft);
		if(tLeft<=0){
			clearInterval(downTimer);
			$(".timer").text(0);
			console.log("fin Juego");
			endGame();
		}
		tLeft -=1;
	},1000);

}
//boton inicio del juego
function inicio() {
	$('.welcome-user').hide();//ocultamos el welcome + inicio 
	$('.question-controls').show();//mostramos los controles del juego
	//tiempoJuego($(".timer").text());
	//console.log("Funcion Inicio");
	//console.log(roscoJuego);
	generarDescripcion(0);
}
