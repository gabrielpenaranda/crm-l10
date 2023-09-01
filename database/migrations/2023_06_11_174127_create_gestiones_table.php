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
        Schema::create('gestions', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->text('resultado');
            $table->date('fecha');
            $table->foreignId('tercero_id')->references('id')->on('terceros')->onDelete('restrict');
            $table->foreignId('tipo_gestion_id')->references('id')->on('tipo_gestiones')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestions');
    }
};
