<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_prof');
            $table->string('apePaterno_prof');
            $table->string('apeMaterno_prof');
            $table->char('sexo_prof',1);
            $table->date('fechaNac_prof');
            $table->string('domicilio');
                
            $table->integer('distritoDom_id')->unsigned();
            $table->foreign('distritoDom_id')->references('id')->on('distritos')->onDelete('cascade');
            
            $table->string('dni')->unique();
            $table->string('correo')->unique();
            $table->tinyInteger('estado_prof');
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
        Schema::dropIfExists('profesores');
    }
}
