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
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('no_hp');
            $table->string('jenis_surat');
            $table->text('alasan')->nullable();
            $table->string('dokumen')->nullable();
            $table->string('status')->default('diajukan'); // status: diajukan, diproses, selesai, ditolak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
