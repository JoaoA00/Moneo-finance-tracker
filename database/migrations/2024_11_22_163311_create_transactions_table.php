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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('date');
            $table->text('description');
            $table->decimal('value', 10, 2);
            $table->json('category');
            $table->enum('type', ['RECEITA', 'DESPESA', 'INVESTIMENTO']);
            $table->string('payment');
            $table->enum('status', ['PAGO', 'PAGANDO', 'PAGAR']);
            $table->string('proof');
            $table->text('note');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
