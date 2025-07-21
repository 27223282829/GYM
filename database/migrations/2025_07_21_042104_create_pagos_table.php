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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_factura');
            $table->unsignedBigInteger('id_tipo_pago');
            $table->date('fecha_pago');

            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('id_factura')->references('id')->on('facturas')->onDelete('cascade');
            $table->foreign('id_tipo_pago')->references('id')->on('tipo_pagos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
