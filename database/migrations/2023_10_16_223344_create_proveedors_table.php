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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('Num_documento',20);
            $table->unsignedBigInteger('cod_tipo_documento');
            $table->foreign('cod_tipo_documento')
                ->references('id')
                ->on('tipo_de_documentos')
                ->onDelete('cascade');
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->string('nombre_comercial',20);
            $table->string('direccion',20);
            $table->unsignedBigInteger('cod_ciudad');
            $table->foreign('cod_ciudad')
                ->references('id')
                ->on('ciudads')
                ->onDelete('cascade');
            $table->string('telefono',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
