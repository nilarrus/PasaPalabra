@extends('layouts.app')
@section('content')
<!-- Valores pasados por parametro de dificultad de timer-->
<body>
<!-- css unico para esta pagina -->
<link rel="stylesheet" href="{{asset('css/game.css')}}">
<!-- js unico para esta pagina -->
<?php
    echo '<script>';
    $i= $_GET['dif'];
    //print($i);
    echo 'console.log("'.$i.'");';
     echo '</script>';
?>
<section class="game">
    <div class="circle-container">
            <ul class="scoreboard">
                    <li id="timer" class="timer"></li>
                    <li id="score" class="score">25</li>
                </ul>
                    <ul class="circle">
                    <li class="item">A</li>
                    <li class="item">B</li>
                    <li class="item">C</li>
                    <li class="item">D</li>
                    <li class="item">E</li>
                    <li class="item">F</li>
                    <li class="item">G</li>
                    <li class="item">H</li>
                    <li class="item">I</li>
                    <li class="item">J</li>
                    <li class="item">K</li>
                    <li class="item">L</li>
                    <li class="item">M</li>
                    <li class="item">N</li>
                    <li class="item">O</li>
                    <li class="item">P</li>
                    <li class="item">Q</li>
                    <li class="item">R</li>
                    <li class="item">S</li>
                    <li class="item">T</li>
                    <li class="item">U</li>
                    <li class="item">V</li>
                    <li class="item">X</li>
                    <li class="item">Y</li>
                    <li class="item">Z</li>
                </ul>
    </div>
    <div class="controls-container">
        <!-- Turorial -->
        <div class="welcome-user">
            <h4>Bienvenidos al Pasapalabra</h4>
            <p>Juego basado en el programa de tevelision del mismo nombre, las reglas son muy sencillas:</p>
            <p>Se mostrara por pantalla una definicion de una palabara el usuario debera elegir si escribir y enviar la palabra o pasar de palabra y dejarla para mas adelante. </p>
            <p>El juego no reconoce las tildes no hay que colocarlas.</p>
            <a id="begin" class="btn" href="#">Iniciar</a>
        </div>
        <!-- Cotroles jugar -->
        <div id="js--question-controls" class="question-controls" >
            <span id="js--hint" class="hint">"Empieza/contiene"</span>
            <p id="js--definition" class="definition">"Definicion"</p>

            <input id="js--user-answer" type="text" placeholder="Introduce tu respuesta">

            <a id="js--send" class="btn btn--blue" href="#">Enviar</a>
            <a id="js--pasapalabra" class="btn" href="#">Pasapalabra</a>
        </div>
        <!-- final -->
        <div class="end-game" > 
            <p> final del juego</p>
        </div>
    </div>
</section>

</body>
@endsection