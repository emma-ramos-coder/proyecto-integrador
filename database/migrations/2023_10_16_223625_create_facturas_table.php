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
            $table->string('num_factura',20)->primary();
            $table->string('cod_cliente',15);
            $table->foreign('cod_cliente')
                ->references('documento')
                ->on('clientes')
                ->onDelete('cascade');
            $table->string('nombre_empleado',30);
            $table->string('fecha_facturacion',15);
            $table->integer('cod_forma_pago');
            $table->foreign('cod_forma_pago')
                ->references('id_forma_pago')
                ->on('forma_de_pagos')
                ->onDelete('cascade');
            $table->decimal('total_factura',10,0);
            $table->decimal('iva',10,0);
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
