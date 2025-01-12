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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('medio_pago');
            $table->string('monto');
            $table->foreignId('helado_id') // Relación con helados
                ->constrained('helados') // Hace referencia a la tabla 'helados'
                ->cascadeOnDelete(); // Elimina las ventas si el helado se elimina
            $table->foreignId('cliente_id') // Relación con clientes
                ->constrained('clientes') // Hace referencia a la tabla 'clientes'
                ->cascadeOnDelete(); // Elimina las ventas si el cliente se elimina
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
