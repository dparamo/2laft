<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\facades\DB;

class Tipo_servicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('tipo_servicio')->insert([
    	'nombre' => 'Empresa de Vigilancia y Seguridad Privadas con Armas'
    	]);
    	
    	DB::table('tipo_servicio')->insert([
    	'nombre' => 'Empresa de Vigilancia y Seguridad Privadas sin Armas'
    	]);
		DB::table('tipo_servicio')->insert([
    	'nombre' => 'Cooperativa de Vigilancia y Seguridad Privada'
    	]);
		DB::table('tipo_servicio')->insert([
    	'nombre' => 'Empresa de Transporte de Valores'
    	]);
		DB::table('tipo_servicio')->insert([
    	'nombre' => 'Empresa Blindadora'
    	]);
		DB::table('tipo_servicio')->insert([
    	'nombre' => 'Empresa Arrendadora de Vehículos Blindados'
    	]);
		DB::table('tipo_servicio')->insert([
    	'nombre' => 'Empresa Asesora, Consultora e Investigadora en Vigilancia y Seguridad Privada'
    	]);
    	DB::table('tipo_servicio')->insert([
    	'nombre' => 'Escuela de Capacitación y Entrenamiento en Vigilancia y Seguridad Privada'
    	]);
    	DB::table('tipo_servicio')->insert([
    	'nombre' => 'Inscritas, Fabricantes, Importadores, Comercializadores, Arrendadores e Instaladores'
    	]);
    	DB::table('tipo_servicio')->insert([
    	'nombre' => 'Servicio Comunitario de Vigilancia y Seguridad Privada'
    	]); 
		
		DB::table('tipo_servicio')->insert([
    	'nombre' => 'Departamento de Seguridad Persona Natural'
    	]);

    	DB::table('tipo_servicio')->insert([
    	'nombre' => 'Departamento de Seguridad Persona Jurídica'
    	]);    	    	    	    	    	    	    	    	   

    }
}
