<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMaestrosMaterias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros_materias', function (Blueprint $table) {
            $table->integer('maestro_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->foreign('maestro_id')
            ->references('id')
            ->on('maestros')
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
        Schema::drop('maestros_materias');
    }
}
