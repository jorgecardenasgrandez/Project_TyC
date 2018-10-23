<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecInicio');
            $table->date('fecFin');
            
            $table->integer('profesor_id')->unsigned();
            $table->foreign('profesor_id')->references('id')->on('profesors')->onDelete('cascade');
            
            $table->integer('modulo_id')->unsigned();
            $table->foreign('modulo_id')->references('id')->on('modulos')->onDelete('cascade');
            
            $table->integer('turno_id')->unsigned();
            $table->foreign('turno_id')->references('id')->on('turnos')->onDelete('cascade');
            
            $table->integer('frecuencia_id')->unsigned();
            $table->foreign('frecuencia_id')->references('id')->on('frecuencias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
