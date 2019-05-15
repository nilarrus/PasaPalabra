// estructura por concretar
//timer
function tiempoJuego(timeTotal){
	console.log("tiempo de juego: "+timeTotal);
	var tLeft = timeTotal;
	var downTimer = setInterval(function () {
		$(".timer").text(tLeft);
		tLeft -=1;
		if(tLeft<=0){
			clearInterval(downTimer);
			$(".timer").text(0);
			console.log("fin Timer");
		}
	},1000);

}


//boton inicio del juego
function inicio() {
	$('.welcome-user').hide();
	$('.question-controls').show();
	tiempoJuego($(".timer").text());
}

