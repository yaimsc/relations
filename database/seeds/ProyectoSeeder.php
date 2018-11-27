<?php

use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
        	DB::table('proyectos')->insert([
        		'nombre' => str_random(10), 
        		'titulo' => str_random(10), 
        		'fechainicio' => '2018-12-20', 
        		'fechafin' => '2019-'.random_int(1, 12).'-'.random_int(1, 30), 
        		'horasestimadas' => random_int(1000, 8520)

        	]);
        }
    }
}
