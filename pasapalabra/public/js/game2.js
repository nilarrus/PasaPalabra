var posicionRosco1 = 0;//posiciondelRosco en la que estas
var posicionRosco2 = 0;// posicion rosco j2
var continuar = true;//control pasaPalabra
//contadores
var aciertos = 0;
var fallos = 0;
var fallar = false;
var downTimer;//timer
var tInicial = 0;

//Mostrar y esconder los controles de cada jugador
function mostrarOcultar(jugador) {
	if(jugador==1){
		/*
		$('.q1').hide();
		$('.q2').show();
		*/
	}else if(jugador==2){
		/*
		$('.q2').hide();
		$('.q1').show();
	*/
	}
}

//reniciar los colores del rosco
function resetRosco(dif) {
	$('.item').each(function(index){
		//console.log(index);
		$('.item')[index].setAttribute('class','item');
	});
	//console.log(dif);
	newRoscos(dif);
}

//Fin del juego
function endGame() {
	clearInterval(downTimer);//limpiar el timer

	$('.question-controls').hide();//escondemos la interfaz del usuario para jugar
	$('.tp1').text(0);//colocamos el 0 en el tiempo
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
	$('.timtp1er').text(tInicial);//reiniciamos el contador de tiempo
	$('.sp1').text(25);//reiniciamos el contador del la palabras
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
function VerificarPalabra(palabra,id,jugador) {
	var score = ".sp"+jugador;
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
		marcador = $('.sp1').text()-1;
		$('.sp1').text(marcador);
		
		//comprobamos si la palabra es correcta
		if(bienMal(palabra,res[0]['Palabra'])){
			$('.item')[roscoJuego1[posicionRosco1]["Relacion"]].setAttribute('class','item item--success');
			aciertos++;
			fallar = false;
		}else{
			$('.item')[roscoJuego1[posicionRosco1]["Relacion"]].setAttribute('class','item item--failure');
			fallos++;
			fallar = true;
		}
		//fin del juego
		if($(score).text()==0){
			//console.log("fin");
			endGame();
		}
		//Eliminar palabra 
		roscoJuego1.splice(posicionRosco1,1);
		//correccion de la posicion del rosco
		if(posicionRosco1 == roscoJuego1.length || posicionRosco1>roscoJuego1.length){
			posicionRosco1 = 0;
		}
		//Pasamos de palabra
		if($(score).text()!=0){
			
			if(fallar){
				console.log("fallo");
				pasaPalabra(false,jugador);
			}else{
				console.log("acierto");
				avanzarPalabra(false,jugador);
			}
			
		}
	 })
	 .fail(function(jqXHR,textStatus){
		 console.log("Ajax Fail: "+textStatus);
	});
}

//rellena la informacion por pantalla para el usuario
function generarDescripcion(posicionActual) {
	$hint = roscoJuego1[posicionActual]["Tipo"]+" con "+roscoJuego1[posicionActual]["Letra"]+":";
	$descripcion = roscoJuego1[posicionActual]["Descripcion"];
	$('#hint').text($hint);
	$('#definition').text($descripcion);
}

//comparar lo escrito con la palabra 
function enviar(jugador) {
	//console.log($('#user-answer').val());
	VerificarPalabra($('#user-answer').val(),roscoJuego1[posicionRosco1]["id"],jugador);

}
//pasarpalabra en funcion de si aun no la a "enviado"
function pasaPalabra(continuar,jugador){
	if(jugador==1){
		console.log("Pasapalabra Juagador1");
		//j1
		if(continuar){
			if(roscoJuego1.length-1==posicionRosco1){
				posicionRosco1 = 0;
			}else{
				posicionRosco1++;
			}
			generarDescripcion(posicionRosco1);
			//limpiamos el input
			$('#user-answer').val('');
			mostrarOcultar(jugador);
		}else{
			generarDescripcion(posicionRosco1);
			//limpiamos el input
			$('#user-answer').val('');
			continuar = true;
			mostrarOcultar(jugador);
		}
		
		
	}else if(jugador==2){
		console.log("Pasapalabra Juagador2");
		//j2
		if(continuar){
			if(roscoJuego2.length-1==posicionRosco2){
				posicionRosco2 = 0;
			}else{
				posicionRosco2++;
			}
			//generarDescripcion(posicionRosco2);
			//limpiamos el input
			$('#user-answer').val('');
			mostrarOcultar(jugador);
		}else{
			//generarDescripcion(posicionRosco2);
			//limpiamos el input
			$('#user-answer').val('');
			continuar = true;
			mostrarOcultar(jugador);
		}
		
		
	}
}
//pasarpalabra del boton enviar
function avanzarPalabra(continuar,jugador){
	if(jugador==1){
		console.log("AvanzarPalabra Juagador1");
		//j1
		if(continuar){
			if(roscoJuego1.length-1==posicionRosco1){
				posicionRosco1 = 0;
			}else{
				posicionRosco1++;
			}
			generarDescripcion(posicionRosco1);
			//limpiamos el input
			$('#user-answer').val('');
			
		}else{
			generarDescripcion(posicionRosco1);
			//limpiamos el input
			$('#user-answer').val('');
			continuar = true;
		}
		
		
	}else if(jugador==2){
		console.log("AvanzarPalabra Juagador2");
		//j2
		if(continuar){
			if(roscoJuego2.length-1==posicionRosco2){
				posicionRosco2 = 0;
			}else{
				posicionRosco2++;
			}
			//generarDescripcion(posicionRosco2);
			//limpiamos el input
			$('#user-answer').val('');
			
		}else{
			//generarDescripcion(posicionRosco2);
			//limpiamos el input
			$('#user-answer').val('');
			continuar = true;
		}

		
		
	}
	
}
//tiempo de juego segun dificultad
function tiempoJuego(timeTotal){
	var tLeft = timeTotal;
	//console.log("tiempo de juego: "+timeTotal);
	//var jugador = ".tp"+player;
	//console.log(jugador);
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
	var roscoInvisible=document.getElementsByClassName("game")[0];
	roscoInvisible.style.visibility = 'visible';
	$('.welcome-user').hide();//ocultamos el welcome + inicio 
	$('.question-controls').show();//mostramos los controles del juego
	tInicial = $('.timer').text();
	$("#begin").hide();
	//tiempoJuego(tInicial); 
	generarDescripcion(0);

}


/* ruta muerta


//funcion cambiar de relog contador
function changeTimer(p1,p2) {
	console.log(p1+" "+p2);
	downTimer
}

//Funcion para probar los timers
function timer1() {
	tInicial = $('.tp1').text();
	tiempoJuego(tInicial,1);
}
*/