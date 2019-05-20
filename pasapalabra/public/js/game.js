var posicionRosco = 0;
var letrasRosco = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24];

//comparar lo escrito con la palabra 
function enviar() {
	console.log();
}
//pasarpalabra en funcion de si aun no la a "dicho"
function pasaPalabra(){
	//incompleta y por acabar 
	$tipo = roscoJuego[letrasRosco[posicionRosco]]["Tipo"];
	$letra = roscoJuego[letrasRosco[posicionRosco]]["Letra"];
	$definicion = roscoJuego[letrasRosco[posicionRosco]]["Descripcion"];

	console.log($tipo+"\n"+$definicion+"\n"+$letra);
	
	if(posicionRosco>=24){
		posicionRosco= 0;
	}else{
		posicionRosco++;
	}
	/*
	if($('.item')[letrasRosco[posicionRosco]].getAttribute("class")!="item"){
		if(posicionRosco>=24){
			posicionRosco= 0;
		}else{
			posicionRosco++;
		}

		$tipo = roscoJuego[letrasRosco[posicionRosco]]["Tipo"];
		$letra = roscoJuego[letrasRosco[posicionRosco]]["Letra"];
		$definicion = roscoJuego[letrasRosco[posicionRosco]]["Descripcion"];

		console.log($('.item')[letrasRosco[posicionRosco]].getAttribute("class"));
		console.log("diferente");

	}else{
		$tipo = roscoJuego[letrasRosco[posicionRosco]]["Tipo"];
		$letra = roscoJuego[letrasRosco[posicionRosco]]["Letra"];
		$definicion = roscoJuego[letrasRosco[posicionRosco]]["Descripcion"];

		console.log($('.item')[letrasRosco[posicionRosco]].getAttribute("class"));
		console.log("igual");
	}

	if(posicionRosco>=24){
		posicionRosco= 0;
	}else{
		posicionRosco++;
	}

	if(($tipo)=="Empieza"){
		$(".hint").text($tipo+" por "+$letra);
	}else if($tipo=="Contiene"){
		$(".hint").text($tipo+" la "+$letra);
	}
	$(".definition").text($definicion);
	*/
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
			$('.end-game').show();//mostramos el fin del juego
		}
		tLeft -=1;
	},1000);

}
//boton inicio del juego
function inicio() {
	$('.welcome-user').hide();//ocultamos el welcome + inicio 
	$('.question-controls').show();//mostramos los controles del juego
	//tiempoJuego($(".timer").text());
	console.log("Funcion Inicio");
	console.log(roscoJuego);
	pasaPalabra();
}
