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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_trabajador');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_membrecia');
            $table->integer("iva");
            $table->integer("total");
            $table->date("fecha_fac");

            $table->foreign('id_trabajador')->references("id")->on('trabajadors')->onDelete('cascade');
            $table->foreign('id_cliente')->references("id")->on('clientes')->onDelete('cascade');
            $table->foreign('id_membrecia')->references("id")->on('membrecias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
