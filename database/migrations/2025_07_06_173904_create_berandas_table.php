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
        Schema::create('berandas', function (Blueprint $table) {
            $table->id();
            $table->integer('total_penduduk')->nullable();
            $table->decimal('anggaran_desa', 15, 2)->nullable();
            $table->string('jumlah_program')->nullable();
            $table->string('aktivitas_terkini')->nullable();
            $table->string('jumlah_umkm')->nullable();
            $table->string('prestasi')->nullable();
            $table->string('keberhasilan')->nullable();
            $table->decimal('anggaran_terpakai', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berandas');
    }
};