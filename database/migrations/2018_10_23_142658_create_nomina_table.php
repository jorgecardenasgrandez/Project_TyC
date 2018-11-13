<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominas', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('nota1');
            $table->tinyInteger('nota2');
            $table->tinyInteger('nota3');
            $table->string('observacion',100)->nullable($value = true);
            
            $table->integer('matricula_id')->unsigned();
            $table->foreign('matricula_id')->references('id')->on('matriculas')->onDelete('cascade');
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
        Schema::dropIfExists('nominas');
    }
}
