<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPracticas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula');
            $table->integer('unidad_rec_id')->unsigned();
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->string('carta_aceptacion');
            $table->string('reporte_parcial');
            $table->string('carta_liberacion');
            $table->boolean('status'); //0 = proceso; 1 = liberado;
            $table->foreign('matricula')
            ->references('matricula')
            ->on('alumnos')
            ->onDelete('cascade');
            $table->foreign('unidad_rec_id')
            ->references('id')
            ->on('unidades_receptoras')
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
        Schema::drop('practicas');
    }
}
