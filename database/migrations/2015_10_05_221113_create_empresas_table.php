<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('idEmpresa');
            $table->string('nombre');
            $table->string('ruc')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('contacto')->nullable();
            $table->text('observacion')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empresa');
    }
}
