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
            $table->unsignedBigInteger('id_clientes');
            $table->unsignedBigInteger('id_facturas');
            $table->unsignedBigInteger('id_tipo_pagos');
            $table->date('fecha_pagos');

            $table->foreign('id_clientes')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('id_facturas')->references('id')->on('facturas')->onDelete('cascade');
            $table->foreign('id_tipo_pagos')->references('id')->on('tipo_pagos')->onDelete('cascade');
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
