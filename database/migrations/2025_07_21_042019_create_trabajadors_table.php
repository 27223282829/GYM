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
        Schema::create('trabajadors', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Telefono');
            $table->string('Correo');
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')->references('id')->on('rols')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajadors');
    }
};
