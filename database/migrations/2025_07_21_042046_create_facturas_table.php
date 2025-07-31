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
            $table->unsignedBigInteger('id_trabajadores');
            $table->unsignedBigInteger('id_clientes');
            $table->unsignedBigInteger('id_membrecias');
            $table->integer("iva");
            $table->integer("total");
            $table->date("fecha_fac");

            $table->foreign('id_trabajadores')->references("id")->on('trabajadores')->onDelete('cascade');
            $table->foreign('id_clientes')->references("id")->on('clientes')->onDelete('cascade');
            $table->foreign('id_membrecias')->references("id")->on('membrecias')->onDelete('cascade');
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
