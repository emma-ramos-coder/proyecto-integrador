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
            $table->string('documento',15)->primary();
            $table->integer('cod_tipo_documento');
            $table->foreign('cod_tipo_documento')
                ->references('id_tipo_documento')
                ->on('tipo_de_documentos')
                ->onDelete('cascade');
            $table->string('nombres',30);
            $table->string('apellidos',30);
            $table->string('direccion',20);
            $table->integer('cod_ciudad');
            $table->foreign('cod_ciudad')
                ->references('codigo_ciudad')
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
        Schema::dropIfExists('clientes');
    }
};
