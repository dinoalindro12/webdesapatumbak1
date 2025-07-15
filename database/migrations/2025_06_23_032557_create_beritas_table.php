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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('body');
            $table->date('date');
            $table->string('image')->nullable(); // Optional field for image URL
            // $table->unsignedBigInteger('author_id');
            // $table->foreign('author_id')->references('id')->on('users'); // Optional field for author name
            $table->foreignId('author_id')->constrained('users',indexName:'posts_author_id');
            $table->foreignId('category_id')->constrained('categories',indexName:'posts_category_id');
            $table->string('kategori'); // Default status is 'draft'
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
