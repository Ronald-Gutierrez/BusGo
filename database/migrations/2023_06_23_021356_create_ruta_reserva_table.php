<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ruta', function (Blueprint $table) {
            $table->id('id_ruta');
            $table->string('origen',30);
            $table->string('destino',30);
            $table->unsignedBigInteger('encargado');
            $table->foreign('encargado')->references('id_usuario')->on('businesses');
            $table->timestamps();
        });
        Schema::create('viajes', function (Blueprint $table) {
            $table->id('id_viaje');
            $table->date('fecha_inicio');
            $table->date('fecha_retorno');
            $table->unsignedTinyInteger('estado');
            $table->unsignedBigInteger('id_ruta');
            $table->foreign('id_ruta')->references('id_ruta')->on('ruta');
            $table->timestamps();
        });
        Schema::create('reserva', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cliente');
            $table->integer('num_asiento');
            $table->unsignedBigInteger('id_viaje');
            $table->foreign('id_cliente')->references('id_usuario')->on('clientes');
            $table->foreign('id_viaje')->references('id_viaje')->on('viajes');
            $table->timestamps();
        });
        Schema::create('bus', function (Blueprint $table) {
            $table->id('id_bus');
            $table->integer('num_bus');
            $table->integer('capacidad');
            $table->unsignedTinyInteger('estado');
            $table->unsignedBigInteger('id_viaje');
            $table->foreign('id_viaje')->references('id_viaje')->on('viajes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
        Schema::dropIfExists('reserva');
        Schema::dropIfExists('viajes');
        Schema::dropIfExists('rutas');
    }
};
