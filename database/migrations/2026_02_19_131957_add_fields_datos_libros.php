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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('isbn')->unique();
            $table->integer('total_copies');
            $table->integer('available_copies')->default(0);
            $table->string('status')->default('disponible');
        });

        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
            $table->string('responsable_name');
            $table->date('loan_date');
            $table->timestamp('return_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
        Schema::dropIfExists('loans');
    }
};
