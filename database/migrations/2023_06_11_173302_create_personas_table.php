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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->string('apellido')->nullable(false);
            $table->string('cargo')->nullable(false);
            $table->string('telefono_oficina');
            $table->string('telefono_celular');
            $table->foreignId('tercero_id')->references('id')->on('terceros')->onDelete('restrict');
            $table->foreignId('tipo_persona_id')->references('id')->on('tipo_personas')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
