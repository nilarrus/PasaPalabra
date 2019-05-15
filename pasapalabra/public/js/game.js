// estructura por concretar
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
			$('.end-game').show();//mostramos el fin del juego
		}
		tLeft -=1;
	},1000);

}

//boton inicio del juego
function inicio() {
	$('.welcome-user').hide();//ocultamos el welcome + inicio 
	$('.question-controls').show();//mostramos los controles del juego
	tiempoJuego($(".timer").text());
}

