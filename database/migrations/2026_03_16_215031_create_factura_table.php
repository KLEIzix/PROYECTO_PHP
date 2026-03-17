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
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->DateTime('fecha');
            $table->decimal('total', 10, 2);
            $table->unsignedBigInteger('Id_order');
            $table->unsignedBigInteger('Id_cajero');
            $table->timestamps();


            $table->foreign('Id_order')->references('id')->on('pedido')->onDelete('cascade');
            $table->foreign('Id_cajero')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura');
    }
};
