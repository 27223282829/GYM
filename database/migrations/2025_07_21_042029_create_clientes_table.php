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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('correo');
            $table->unsignedBigInteger('id_trabajadores');
            $table->foreign('id_trabajadores')->references('id')->on('trabajadores')->onDelete('cascade');
=======
             $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Telefono');
            $table->string('Correo');
            $table->unsignedBigInteger('id_trabajador');
            $table->foreign('id_trabajador')->references('id')->on('trabajadors')->onDelete('cascade');
>>>>>>> b510957 (Integrar el dashboard al proyecto)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
