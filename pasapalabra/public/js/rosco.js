var roscoJuego = [];
var letras = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','X','Y','Z']


//id + definicion de una palabra.
function palabra(dif,letra) {
    //falta consultar a la base de datos
    //funcion informacion para recibir de la base de datos en ajax.
    //enviar dificultad y letra y regresa id + deficinion de 1 palabra.
    var res = {"id":dif,"def":letra};
    return res;
}
//formar el array del rosco con objetos {"id":id,"des":des};
function Rosco(dif) {
    letras.forEach(letra => {
        //console.log(palabra(dif,letra));
        roscoJuego.push(palabra(dif,letra));
    });
    console.log(roscoJuego);
}
//lanzamos la funcion de crear el array del rosco
function newRosco(dif) {
    //console.log("Dificultad del rosco: "+dif);
    Rosco(dif);
    if(roscoJuego.length != 0){
        //alert("inicio ok");
    }
}