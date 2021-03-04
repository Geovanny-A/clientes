<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->string('tipo_documento', 45);
            $table->string('documento');
            $table->string('estado', 45);
            $table->string('direccion', 45);
            $table->string('pais', 45);
            $table->string('departamento', 45);
            $table->string('ciudad', 45);
            $table->string('barrio', 45);
            $table->string('celular', 20);
            $table->date('fecha_nacimiento');
            $table->string('genero', 45);
            $table->string('email', 45);
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
        Schema::dropIfExists('clientes');
    }
}
