var posicionRosco = 0;
var letrasRosco = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24];
var continuar = true;
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

		console.log("Li: "+roscoJuego[posicionRosco]["Relacion"]+"\nPalabra del server: "+res[0]['Palabra']
					+"\nPalabra usuario: "+palabra); 
		console.log(bienMal(palabra,res[0]['Palabra']));
		if(bienMal(palabra,res[0]['Palabra'])){
			$('.item')[posicionRosco].setAttribute('class','item item--success');
			
		}else{
			$('.item')[posicionRosco].setAttribute('class','item item--failure');
		}
		//falta eliminar palabra y hacer el pasa palabra y contar los aciertos
		
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
function pasaPalabra(){
	if(roscoJuego.length-1==posicionRosco){
		posicionRosco = 0;
	}else{
		posicionRosco++;
	}
	generarDescripcion(posicionRosco);
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
	//console.log("Funcion Inicio");
	//console.log(roscoJuego);
	generarDescripcion(0);
}
