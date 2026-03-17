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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->DateTime('fecha');
            $table->enum('estado',  ['pendiente', 'enviado', 'entregado'])->default('pendiente');
            $table->unsignedBigInteger('Id_client');
            $table->unsignedBigInteger('Id_Usuario');
            $table->timestamps();


            $table->foreign('Id_client')->references('id')->on('client')->onDelete('cascade');
            $table->foreign('Id_Usuario')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
