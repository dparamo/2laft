<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           $table->increments('id');
            $table->string('nit_entidad',15);
            $table->string('razon_social',120);
            $table->string('direccion',100);
            $table->string('telefono',15);
            $table->string('celular',15);
            $table->string('resolucion_licencia',20);
            $table->datetime('fecha_resolucion');
            $table->datetime('fecha_notificacion');
            $table->integer('anios_licencia');
            $table->datetime('fecha_vencimiento');
            $table->unsignedInteger('id_tipo_servicio');
            $table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicio');
            $table->unsignedInteger('id_departamento');
            $table->foreign('id_departamento')->references('id_departamento')
            ->on('departamento');
            $table->unsignedInteger('id_ciudad');
            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudad');
            $table->enum('tipo_persona',['Juridica','Natural']);
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
