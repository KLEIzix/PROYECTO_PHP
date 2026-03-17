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
        Schema::create('pedido_detalles', function (Blueprint $table) {
            $table->id();
            $table->decimal('price_unitario', 10, 2);
            $table->amount('cantidad');
            $table->unsignedBigInteger('Id_order');
            $table->unsignedBigInteger('Id_producto');
            $table->timestamps();


            $table->foreign('Id_order')->references('id')->on('pedido')->onDelete('cascade');
            $table->foreign('Id_producto')->references('id')->on('producto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
