<?php

use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
        	DB::table('departamentos')->insert([
        		'codigo' => 'COD'. str_random(5),
        		'nombre' => str_random(10) 
        	]);
    	}
	}
}
