<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAlumnosMaterias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_materias', function (Blueprint $table) {
            $table->string('matricula');
            $table->integer('materia_id')->unsigned();
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
        Schema::drop('alumnos_materias');
    }
}
