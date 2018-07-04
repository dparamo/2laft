<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\facades\DB;

class tipo_archivos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipo_archivos')->insert([
        'nombre' => 'Política de Gestión de Riesgos de LA/FT/CO/SO'
        ]);

        DB::table('tipo_archivos')->insert([
        'nombre' => 'Designación Responsable de Cumplimiento'
        ]);                

        DB::table('tipo_archivos')->insert([
        'nombre' => 'Manual de Prevención de LA/FT/CO/SO'
        ]);

        DB::table('tipo_archivos')->insert([
        'nombre' => 'Capacitación a funcionarios de la empresa en todos los niveles'
        ]);

        DB::table('tipo_archivos')->insert([
        'nombre' => 'Código de Conducta en materia de LA/FT/CO/SO'
        ]);

        DB::table('tipo_archivos')->insert([
        'nombre' => 'Aprobar, Adoptar y Actualizar el Manual de Procedimientos'
        ]);

        DB::table('tipo_archivos')->insert([
        'nombre' => 'Mecanismos de Control de LA/FT/CO/SO'
        ]);

        DB::table('tipo_archivos')->insert([
        'nombre' => 'Ausencia de Reporte de Operaciones Sospechosas AROS'
        ]);

        DB::table('tipo_archivos')->insert([
        'nombre' => 'Reporte de Operaciones Sospechosas ROS'
        ]);

        DB::table('tipo_archivos')->insert([
        'nombre' => 'Política de Gestión de Riesgos de LA/FT/CO/SO'
        ]);

        DB::table('tipo_archivos')->insert([
        'nombre' => 'Inscripción en la UIAF al Sistema de Reporte en Línea SIREL'
        ]);

        DB::table('tipo_archivos')->insert([
        'nombre' => 'Análisis Exposición de Riesgos de LA/FT/CO/SO'
        ]);
    }
}
