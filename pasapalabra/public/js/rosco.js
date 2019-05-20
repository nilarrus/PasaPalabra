roscoJuego = [];
var letras = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','X','Y','Z']
//De 1 array de la misma letra y difucultad elige una palabra random
function randomElement(elements) {
    if(elements.length<=1){
        return elements[0];
    }else{
        //
        r = Math.floor((Math.random() * elements.length));
        return elements[r];
    }
}
//llamadas al server desde ajax
function ajaxPalabra(dif) {
    var lurl = "/game/palabra";
    for (let index = 0; index < letras.length; index++) {
        $.ajax({
            url:lurl,
            data:{dificultad:dif,letra:letras[index]}
        })
         .done(function(res){
             //console.log(res);
             var pal;
             pal = randomElement(res);
             roscoJuego.push(pal);
         })
         .fail(function(jqXHR,textStatus){
             console.log("Ajax Fail: "+textStatus);
        });
    }
}
//formar el array del rosco con objetos {"id":id,"letra":Letra,"descripcion":des};
function Rosco(dif) {
    ajaxPalabra(dif);
    console.log("Rosco cargado");

}
//lanzamos la funcion de crear el array del rosco
function newRosco(dif) {
    //console.log("Dificultad del rosco: "+dif);
    Rosco(dif);
    if(roscoJuego.length != 0){
        console.log("Rosco: "+roscoJuego);
        colocarPalabrasRosco(roscoJuego);
    }
}