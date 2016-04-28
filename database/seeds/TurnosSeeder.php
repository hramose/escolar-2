<?php

use Illuminate\Database\Seeder;

class TurnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turnos')->insert([
        	'nombre'	=>	'Matutino',
        	'horario'	=>	'7am a 2pm'
        ]);

        DB::table('turnos')->insert([
        	'nombre'	=>	'Vespertino',
        	'horario'	=>	'5pm a 10pm'
        ]);
    }
}
