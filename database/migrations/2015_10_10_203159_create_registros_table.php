<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->increments('idRegistro');
            $table->integer('idUsuario');
            $table->integer('idHabitacion');
            $table->integer('idEmpresa')->nullable();
            $table->integer('idReserva')->nullable();
            $table->timestamp('inicio_servicio')->nullable();
            $table->dateTime('fin_servicio')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('estado')->default('Activo');
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
        Schema::drop('registro');
    }
}
