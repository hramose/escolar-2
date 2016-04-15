<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaExtraordinarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extraordinarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula');
            $table->integer('materia_id')->unsigned();
            $table->integer('calificacion');
            $table->boolean('pago');
            $table->foreign('matricula')
            ->references('matricula')
            ->on('alumnos')
            ->onDelete('cascade');
            $table->foreign('materia_id')
            ->references('id')
            ->on('materias')
            ->onDelete('cascade');
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
        Schema::drop('extraordinarios');
    }
}
