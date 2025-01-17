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
        Schema::create('hardware', function (Blueprint $table) {
            $table->id();
            $table->string('usuarioAsignado');
            $table->string('usuarioArea');
            $table->string('marcaHardware');
            $table->string('modeloHardware');
            $table->string('serieHardware');
            $table->string('oficinaResponsable');
            $table->string('descripcionHardware');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware');
    }
};
