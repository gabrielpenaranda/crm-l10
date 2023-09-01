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
        Schema::create('terceros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->string('nombre_juridico')->nullable(false);
            $table->string('direccion')->nullable(false);
            $table->string('numero_fiscal')->nullable(false);
            $table->string('telefono');
            $table->string('email');
            $table->string('web');
            $table->text('descripcion_actividad');
            $table->foreignId('tipo_capital_id')->references('id')->on('tipo_capitales')->onDelete('restrict');
            $table->foreignId('ciudad_id')->references('id')->on('ciudades')->onDelete('restrict');
            $table->foreignId('zona_id')->references('id')->on('zonas')->onDelete('restrict');
            $table->foreignId('ramo_id')->references('id')->on('ramos')->onDelete('restrict');
            $table->foreignId('tamano_empresa_id')->references('id')->on('tamano_empresas')->onDelete('restrict');
            $table->foreignId('tipo_empresa_id')->references('id')->on('tipo_empresas')->onDelete('restrict');
            $table->foreignId('tipo_tercero_id')->references('id')->on('tipo_terceros')->onDelete('restrict');
            $table->foreignId('vendedor_id')->references('id')->on('vendedores')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terceros');
    }
};
