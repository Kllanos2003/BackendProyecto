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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable(false);
            $table->string('description', 100)->nullable(false);
            $table->string('image', 100)->nullable(false);
            $table->double('price', 10, 2)->nullable(false);
            $table->timestamps(); // Remove the 'nullable(false)' here
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product'); // You should use 'Schema' with a capital 'S'
    }
};