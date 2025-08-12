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
<<<<<<< HEAD
            $table->unsignedBigInteger('id_clientes');
=======
            $table->unsignedBigInteger('id_cliente');
>>>>>>> b510957 (Integrar el dashboard al proyecto)
            $table->string('tipo');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->string('estado');
<<<<<<< HEAD


            $table->foreign('id_clientes')
            ->references('id')->on('clientes')
            ->onDelete('cascade');

=======
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
>>>>>>> b510957 (Integrar el dashboard al proyecto)
            $table->timestamps();
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
