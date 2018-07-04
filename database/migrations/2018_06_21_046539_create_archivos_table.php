<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivostable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('archivos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_nombre');
            $table->foreign('id_nombre')->references('id_tipo')
            ->on('tipo_archivos');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')
            ->on('users');
            $table->string('url');
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
