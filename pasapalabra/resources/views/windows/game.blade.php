@extends('layouts.app2')
@section('content')
<!-- Valores pasados por parametro de dificultad de timer-->
<body>
<section class="game">
    <div class="circle-container">
            <div class="title-circle">
                    <p>PASAPALABRA</p>
                </div>
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
                    <li class="item">R</li>
                    <li class="item">T</li>
                    <li class="item">U</li>
                    <li class="item">V</li>
                    <li class="item">X</li>
                    <li class="item">Y</li>
                    <li class="item">Z</li>
                </ul>
                <ul class="scoreboard">
                    <li id="timer" class="timer"></li>
                    <li id="score" class="score">25</li>
                </ul>
    </div>
    <div class="controls-container">
        <!-- Turorial -->
        <div>
            <h4>Bienvenidos al Pasapalabras</h4>
            <p>Falta cosas por escribir</p>
        </div>
        <!-- Cotroles jugar -->
        <div></div>
        <!-- final -->
        <div></div>
    </div>


</section>

</body>
@endsection