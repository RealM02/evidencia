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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->boolean('active');
            $table->foreignid('client_id');
            $table->foreignid('staff_id');
            $table->string('total');
            $table->string('subtotal');
            $table->string('vat');
            $table->boolean('status');
            $table->string('detalles');
            $table->string('photo1');
            $table->string('photo2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
