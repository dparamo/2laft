<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ciudad', function (Blueprint $table) {
            $table->increments('id_ciudad');
            $table->string('nombre');
            $table->unsignedInteger('id_departamento');
            $table->foreign('id_departamento')->references('id_departamento')
            ->on('departamento');
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
        //
    }
}
