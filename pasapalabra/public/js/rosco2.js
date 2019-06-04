const roscoJuego1 = [];
const roscoJuego2 = [];
var dificultad;
var letras = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','X','Y','Z'];

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
//llamadas al server desde ajax para generar el rosco 1
function ajaxPalabra1(dif) {
    var lurl = "/game/palabra";
    for (let index = 0; index < letras.length; index++) {
        $.ajax({
            url:lurl,
            data:{dificultad:dif,letra:letras[index]}
        })
         .done(function(res){
             
            var palabra;
            palabra = randomElement(res);
             //creamos un objeto con toda informacion necesaria para generar el rosco
            var ObjPalabra = {
                "Relacion":index,
                "Tipo":palabra.Tipo,
                "Descripcion":palabra.Descripcion,
                "Letra":palabra.Letra,
                "id":palabra.id
            };
            roscoJuego1[index] = ObjPalabra;
         })
         .fail(function(jqXHR,textStatus){
             console.log("Ajax Fail: "+textStatus);
        });
    }
}
//llamadas al server desde ajax para generar el rosco 2
function ajaxPalabra2(dif) {
    var lurl = "/game/palabra";
    for (let index = 0; index < letras.length; index++) {
        $.ajax({
            url:lurl,
            data:{dificultad:dif,letra:letras[index]}
        })
         .done(function(res){
             
            var palabra;
            palabra = randomElement(res);
             //creamos un objeto con toda informacion necesaria para generar el rosco
            var ObjPalabra = {
                "Relacion":index,
                "Tipo":palabra.Tipo,
                "Descripcion":palabra.Descripcion,
                "Letra":palabra.Letra,
                "id":palabra.id
            };
            roscoJuego2[index] = ObjPalabra;
         })
         .fail(function(jqXHR,textStatus){
             console.log("Ajax Fail: "+textStatus);
        });
    }
    //ajaxPalabra2(dif);
}
//formar el array del rosco con objetos {"id":id,"letra":Letra,"descripcion":des} recividos de ajax;
function Roscos(dif) {
    ajaxPalabra1(dif);
    ajaxPalabra2(dif);
}

//lanzamos la funcion de crear el array del rosco
function newRoscos(dif) {
    dificultad = dif;
    Roscos(dif);
}