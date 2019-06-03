@extends('layouts.app')
@section('content')
<!-- Valores pasados por parametro de dificultad de timer-->
<body>
<!-- css unico para esta pagina -->
<link rel="stylesheet" href="{{asset('css/cssJ1.css')}}">
<section class="game">
    <!-- Dibujo del rosco -->
    <div class="circle-container">
            <ul class="scoreboard">
                    <li id="timer" class="timer"></li>
                    <li id="score" class="score">25</li>
                </ul>
                    <ul  class="circle">
                    <li id="0" class="item">A</li>
                    <li id="1" class="item">B</li>
                    <li id="2" class="item">C</li>
                    <li id="3" class="item">D</li>
                    <li id="4" class="item">E</li>
                    <li id="5" class="item">F</li>
                    <li id="6" class="item">G</li>
                    <li id="7" class="item">H</li>
                    <li id="8" class="item">I</li>
                    <li id="9" class="item">J</li>
                    <li id="10" class="item">K</li>
                    <li id="11" class="item">L</li>
                    <li id="12" class="item">M</li>
                    <li id="13" class="item">N</li>
                    <li id="14" class="item">O</li>
                    <li id="15" class="item">P</li>
                    <li id="16" class="item">Q</li>
                    <li id="17" class="item">R</li>
                    <li id="18" class="item">S</li>
                    <li id="19" class="item">T</li>
                    <li id="20" class="item">U</li>
                    <li id="21" class="item">V</li>
                    <li id="22" class="item">X</li>
                    <li id="23" class="item">Y</li>
                    <li id="24" class="item">Z</li>
                </ul>
    </div>
    <div class="controls-container">
        <!-- controles Turorial -->
        <div class="welcome-user">
            <h4>Bienvenidos al Pasapalabra para 1 jugador</h4>
            <p>Juego basado en el programa de tevelision del mismo nombre, las reglas son muy sencillas:</p>
            <p>Se mostrara por pantalla una definicion de una palabara el usuario debera elegir si escribir y enviar la palabra o pasar de palabra y dejarla para mas adelante. </p>
            <p>El juego ni mayusculas ni las tildes no hay que colocarlas o la palabra sera un fallo</p>
            <a id="begin" class="btn" href="#">Iniciar</a>
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
            <a id="reset" class="btn btn--blue" href="#">Reiniciar</a>
        </div>
    </div>
</section>
<?php
$dificultad = $_GET['dif'];
echo"
<script>
    window.onload = function() {
        newRosco('".$dificultad."');
        $('.question-controls').hide();
        $('.end-game').hide();
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