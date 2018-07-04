<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class Departamento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('departamento')->insert([
    	'nombre' => 'Antioquia'
    	]);
    	
    	DB::table('departamento')->insert([
    	'nombre' => 'Atlántico'
    	]);
		DB::table('departamento')->insert([
    	'nombre' => 'Bolívar'
    	]);
		DB::table('departamento')->insert([
    	'nombre' => 'Boyacá'
    	]);
		DB::table('departamento')->insert([
    	'nombre' => 'Caldas'
    	]);
		DB::table('departamento')->insert([
    	'nombre' => 'Cauca'
    	]);
		DB::table('departamento')->insert([
    	'nombre' => 'Cesar'
    	]);
    	DB::table('departamento')->insert([
    	'nombre' => 'Córdoba'
    	]);
    	DB::table('departamento')->insert([
    	'nombre' => 'Cundinamarca'
    	]);
    	DB::table('departamento')->insert([
    	'nombre' => 'Guajira'
    	]); 
		
		DB::table('departamento')->insert([
    	'nombre' => 'Huila'
    	]);

    	DB::table('departamento')->insert([
    	'nombre' => 'Magdalena'
    	]);

    	DB::table('departamento')->insert([
    	'nombre' => 'Meta'
    	]);


    	DB::table('departamento')->insert([
    	'nombre' => 'Nariño'
    	]);

    	DB::table('departamento')->insert([
    	'nombre' => 'Norte de Santander'
    	]);

    	DB::table('departamento')->insert([
    	'nombre' => 'Quindio'
    	]);    

    	DB::table('departamento')->insert([
    	'nombre' => 'Risaralda'
    	]);    

    	DB::table('departamento')->insert([
    	'nombre' => 'Santander'
    	]);

    	DB::table('departamento')->insert([
    	'nombre' => 'Sucre'
    	]);    

    	DB::table('departamento')->insert([
    	'nombre' => 'Tolima'
    	]);    

    	DB::table('departamento')->insert([
    	'nombre' => 'Valle del Cauca'
    	]);    

    }
}
