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
        Schema::create('devolucions', function (Blueprint $table) {
            $table->string('cod_detalle_factura',20);
            $table->foreign('cod_detalle_factura')
            ->references('cod_factura')
            ->on('detalle_facturas')
            ->onDelete('cascade');
            $table->unsignedInteger('cod_detalle_articulo');
            $table->foreign('cod_detalle_articulo')
            ->references('cod_articulo')
            ->on('detalle_facturas')
            ->onDelete('cascade');
            $table->primary(['cod_detalle_factura','cod_detalle_articulo']);
            $table->string('motivo',15);
            $table->string('fecha_devolucion',10);
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devolucions');
    }
};
