<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->char('dni',8)->primary();
            $table->string('nombres',50);
            $table->string('apePaterno',20);
            $table->string('apeMaterno',20);
            $table->char('sexo',1);
            $table->string('ecivil',15);
            $table->string('gradoInstruccion',20);
            $table->date('fnacimiento');
            $table->string('ocupacion',15);
            $table->char('telefono',9);
            $table->string('correo',50);
            $table->string('domicilio',100);
            
            $table->integer('distrito_id')->unsigned();
            $table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade');
            
            $table->tinyInteger('estado_alumno');
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
        Schema::dropIfExists('alumnos');
    }
}
