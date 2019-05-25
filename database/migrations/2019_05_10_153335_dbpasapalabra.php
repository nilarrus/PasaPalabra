<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dbpasapalabra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla Palabras
        Schema::create('palabras', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Letra');
            $table->String('Palabra');
            $table->String('Tipo');
            $table->String('Descripcion');
            $table->String('Dificultad');
            $table->timestamps();
        });
        //tabla Ranking
        Schema::create('rankings', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('Id_Usuario')->unsigned();
            $table->String('Correctas');
            $table->String('Incorrectas');
            $table->timestamps();

            $table->foreign('Id_Usuario')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('palabras');
        Schema::dropIfExists('rankings');
    }
}
