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
<<<<<<< HEAD
            $table->unsignedBigInteger('id_trabajadores');
            $table->unsignedBigInteger('id_clientes');
            $table->unsignedBigInteger('id_membrecias');
=======
            $table->unsignedBigInteger('id_trabajador');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_membrecia');
>>>>>>> b510957 (Integrar el dashboard al proyecto)
            $table->integer("iva");
            $table->integer("total");
            $table->date("fecha_fac");

<<<<<<< HEAD
            $table->foreign('id_trabajadores')->references("id")->on('trabajadores')->onDelete('cascade');
            $table->foreign('id_clientes')->references("id")->on('clientes')->onDelete('cascade');
            $table->foreign('id_membrecias')->references("id")->on('membrecias')->onDelete('cascade');
=======
            $table->foreign('id_trabajador')->references("id")->on('trabajadors')->onDelete('cascade');
            $table->foreign('id_cliente')->references("id")->on('clientes')->onDelete('cascade');
            $table->foreign('id_membrecia')->references("id")->on('membrecias')->onDelete('cascade');
>>>>>>> b510957 (Integrar el dashboard al proyecto)
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
