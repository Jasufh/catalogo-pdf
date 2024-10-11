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
        Schema::create('catalogo_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('catalogo_id');
            $table->unsignedBigInteger('producto_id');
            $table->timestamps();

            $table->foreign('catalogo_id')->references('id')->on('catalogo')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('producto')->onDelete('cascade');

            // Aseguramos que la relación es única
            $table->unique(['catalogo_id', 'producto_id']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo_producto');
    }
};
