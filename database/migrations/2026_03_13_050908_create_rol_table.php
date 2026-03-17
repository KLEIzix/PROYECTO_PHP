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
        Schema::create('rol', function (Blueprint $table) {
            $table->id();
            $table->string('rol_name', 50);
            $table->timestamps(); //    -> es como un tipo log, se encarga de crear dos columnas, created_at y updated_at,
                                //         para llevar un registro de cuándo se creó y actualizó cada registro en la tabla.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rol');
    }
};
