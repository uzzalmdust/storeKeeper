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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('client')->nullable();
            $table->string('contacts')->nullable();
            $table->float('amount', 8, 2);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->restrictOnUpdate();
            $table->timestamps();
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
