<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCampoFacultadIdACarreras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carreras', function (Blueprint $table) {
            $table->integer('facultad_id')->unsigned();
            $table->foreign('facultad_id')
            ->references('id')
            ->on('facultad')
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
        Schema::table('carreras', function (Blueprint $table) {
            $table->dropForeign('carreras_facultad_id_foreign');
            $table->dropColumn('facultad_id');
        });
    }
}
