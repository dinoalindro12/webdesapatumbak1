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
        Schema::create('galeri', function (Blueprint $table) {
             $table->id();
            $table->string('gambar')->nullable(); // path gambar
            $table->string('keterangan_gambar')->nullable();
            $table->string('link_video')->nullable();
            $table->string('keterangan_video')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('kategori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri');
    }
};
