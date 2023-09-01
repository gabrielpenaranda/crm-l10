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
        Schema::create('oportunidads', function (Blueprint $table) {
            $table->id();
            $table->string('oportunidad')->nullable(false);
            $table->date('fecha_inicio');
            $table->text('notas');
            $table->boolean('cerrada')->default(false);
            $table->string('status');
            $table->foreignId('tipo_oportunidad_id')->references('id')->on('tipo_oportunidad')->onDelete('restrict');
            $table->foreignId('tercero_id')->references('id')->on('terceros')->onDelete('restrict');
            $table->foreignId('oportunidad_id')->references('id')->on('oportunidades')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oportunidads');
    }
};
