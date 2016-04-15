<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCampoIdturnoAAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alumnos', function (Blueprint $table) {
            $table->integer('turno_id')->unsigned();
            $table->integer('carrera_id')->unsigned();
            $table->foreign('turno_id')
            ->references('id')
            ->on('turnos')
            ->onDelete('cascade');
            $table->foreign('carrera_id')
            ->references('id')
            ->on('carreras')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alumnos', function (Blueprint $table) {
            $table->dropForeign('alumnos_turno_id_foreign');
            $table->dropForeign('alumnos_carrera_id_foreign');
            $table->dropColumn('carrera_id');
            $table->dropColumn('turno_id');
        });
    }
}
