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
        Schema::create('membrecias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_clientes'); // FK hacia clientes
            $table->string('tipo');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->string('estado');


            $table->foreign('id_clientes')
            ->references('id')->on('clientes')
            ->onDelete('cascade');

            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membrecias');
    }
};
