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
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id_articulo');
            $table->string('descripcion',30);
            $table->decimal('precio_venta',10,0);
            $table->decimal('precio_costo',10,0);
            $table->integer('stock');
            $table->unsignedInteger('cod_tipo_articulo');
            $table->foreign('cod_tipo_articulo')
            ->references('id_tipo_articulo')
            ->on('tipo_articulos')
            ->onDelete('cascade');
            $table->string('cod_proveedor',20);
            $table->foreign('cod_proveedor')
            ->references('no_documento')
            ->on('proveedors')
            ->onDelete('cascade');
            $table->string('fecha_ingreso',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
