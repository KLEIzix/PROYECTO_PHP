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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 50);
            $table->string(' password', 250);
            $table->enum('estado',  ['activo', 'inactivo'])->default('activo');
            $table->unsignedBigInteger('rol_id');
            $table->timestamps();




            $table->foreign('rol_id')->references('id')->on('rol')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};


