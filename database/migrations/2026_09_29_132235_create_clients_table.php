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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa', 150);
            $table->string('contacto_pricipal', 100);
            $table->string('telefono_whasaapp', 100);
            $table->enum (zona_geografico, ['Cabudare', 'Zona Industrial', 'Este', 'Oeste', 'Centro']);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('origin_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
