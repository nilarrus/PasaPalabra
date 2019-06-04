@extends('layouts.app')
@section('content')
<!-- Valores pasados por parametro de dificultad de timer-->
<body>
<!-- css unico para esta pagina -->
<link rel="stylesheet" href="{{asset('css/game.css')}}">
<script src="{{asset('js/rosco2.js')}}"></script>
<script src="{{asset('js/game2.js')}}"></script>

<div class="inicio">
    <a id="begin" class="btn btn-dark" href="#">Iniciar</a>
    <a id="reset" class="btn btn-dark" href="#">Reiniciar</a>
</div>
<section class="game">
        
        <!-- Dibujo del rosco -->
        <div class="circle-container c2 p1">
            <h2>Jugador 1</h2>
                <ul class="scoreboard marcador p1">
                        <li id="timer1" class="timer tp1"></li>
                        <li id="score1" class="score sp1">25</li>
                </ul>
                <ul  class="circle player p1">
                        <li id="0" class="item p1">A</li>
                        <li id="1" class="item p1">B</li>
                        <li id="2" class="item p1">C</li>
                        <li id="3" class="item p1">D</li>
                        <li id="4" class="item p1">E</li>
                        <li id="5" class="item p1">F</li>
                        <li id="6" class="item p1">G</li>
                        <li id="7" class="item p1">H</li>
                        <li id="8" class="item p1">I</li>
                        <li id="9" class="item p1">J</li>
                        <li id="10" class="item p1">K</li>
                        <li id="11" class="item p1">L</li>
                        <li id="12" class="item p1">M</li>
                        <li id="13" class="item p1">N</li>
                        <li id="14" class="item p1">O</li>
                        <li id="15" class="item p1">P</li>
                        <li id="16" class="item p1">Q</li>
                        <li id="17" class="item p1">R</li>
                        <li id="18" class="item p1">S</li>
                        <li id="19" class="item p1">T</li>
                        <li id="20" class="item p1">U</li>
                        <li id="21" class="item p1">V</li>
                        <li id="22" class="item p1">X</li>
                        <li id="23" class="item p1">Y</li>
                        <li id="24" class="item p1">Z</li>
                </ul>
        </div>
        <div class="circle-container c2 p2">
        <h2>Jugador 2</h2>

                <ul class="scoreboard marcador p2">
                        <li id="timer2" class="timer tp2"></li>
                        <li id="score2" class="score sp2">25</li>
                    </ul>
                        <ul  class="circle player p2">
                        <li id="0" class="item p2">A</li>
                        <li id="1" class="item p2">B</li>
                        <li id="2" class="item p2">C</li>
                        <li id="3" class="item p2">D</li>
                        <li id="4" class="item p2">E</li>
                        <li id="5" class="item p2">F</li>
                        <li id="6" class="item p2">G</li>
                        <li id="7" class="item p2">H</li>
                        <li id="8" class="item p2">I</li>
                        <li id="9" class="item p2">J</li>
                        <li id="10" class="item p2">K</li>
                        <li id="11" class="item p2">L</li>
                        <li id="12" class="item p2">M</li>
                        <li id="13" class="item p2">N</li>
                        <li id="14" class="item p2">O</li>
                        <li id="15" class="item p2">P</li>
                        <li id="16" class="item p2">Q</li>
                        <li id="17" class="item p2">R</li>
                        <li id="18" class="item p2">S</li>
                        <li id="19" class="item p2">T</li>
                        <li id="20" class="item p2">U</li>
                        <li id="21" class="item p2">V</li>
                        <li id="22" class="item p2">X</li>
                        <li id="23" class="item p2">Y</li>
                        <li id="24" class="item p2">Z</li>
                    </ul>
        </div>
</section>
<section class="controles">
        <div class="controls-container">
                <!-- controles Turorial -->
                <div class="welcome-user">
                    <h4>Bienvenidos al Pasapalabra para 2 jugadores</h4>
                    <p>Juego basado en el programa de tevelision del mismo nombre, las reglas son muy sencillas:</p>
                    <p>Se mostrara por pantalla una definicion de una palabara el usuario debera elegir si escribir y enviar la palabra o pasar de palabra y dejarla para mas adelante. </p>
                    <p>El juego ni mayusculas ni las tildes no hay que colocarlas o la palabra sera un fallo</p>
                </div>
                <!-- Cotroles jugar -->
                <div id="question-controls" class="question-controls" >
                    <span id="hint" class="hint">"Empieza/contiene"</span>
                    <p id="definition" class="definition">"Definicion"</p>
        
                    <input id="user-answer" type="text" placeholder="Introduce tu respuesta">
        
                    <a id="send" class="btn btn--blue" href="#">Enviar</a>
                    <a id="pasapalabra" class="btn" href="#">Pasapalabra</a>
                </div>
                <!-- controles final -->
                <div class="end-game" > 
                    <p> Fin del juego</p>
                    <p id="aciertos"></p>
                    <p id="fallos"></p>
                </div>
            </div>
            <div class="controls-container">
                <!-- Cotroles jugar -->
                <div id="question-controls" class="question-controls" >
                    <span id="hint" class="hint">"Empieza/contiene"</span>
                    <p id="definition" class="definition">"Definicion"</p>
        
                    <input id="user-answer" type="text" placeholder="Introduce tu respuesta">
        
                    <a id="send" class="btn btn--blue" href="#">Enviar</a>
                    <a id="pasapalabra" class="btn" href="#">Pasapalabra</a>
                </div>
                <!-- controles final -->
                <div class="end-game" > 
                    <p> Fin del juego</p>
                    <p id="aciertos"></p>
                    <p id="fallos"></p>
                </div>
            </div>
</section>
<?php
$dificultad = $_GET['dif'];
echo"
<script>
    window.onload = function() {
        newRoscos('".$dificultad."');
        $('.welcome-user').hide();
        /*$('.question-controls').hide();*/
        $('.end-game').hide();
        $('#reset').hide();
        $('#begin').on('click',inicio);
        $('#reset').on('click',reset);
        if('".$dificultad."'=='0'){
            $('.timer').text('300');
        }
        if('".$dificultad."'=='1'){
            $('.timer').text('240');
        }
        if('".$dificultad."'=='2'){
            $('.timer').text('180');
        }
        $('#send').on('click',enviar);
        $('#pasapalabra').on('click',function(){
            pasaPalabra(true);    
        });
    }; 
</script>";
?>

</body>
@endsection