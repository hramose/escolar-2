<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCampoIdturnoASemestres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('semestres', function (Blueprint $table) {
            $table->integer('turno_id')->unsigned();
            $table->foreign('turno_id')
            ->references('id')
            ->on('turnos')
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
        Schema::table('semestres', function (Blueprint $table) {
            $table->dropForeign('semestres_turno_id_foreign');
            $table->dropColumn('turno_id');
        });
    }
}
