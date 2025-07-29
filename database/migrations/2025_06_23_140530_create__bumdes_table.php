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
        Schema::create('bumdes', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_peresmian')->nullable();
            $table->text('profil')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('bidang_usaha')->nullable(); // contoh: "Pertanian, Perikanan, Jasa Keuangan, Pariwisata"
            $table->string('direktur')->nullable();
            $table->string('bendahara')->nullable();
            $table->string('koordinator_pertanian')->nullable();
            $table->string('koordinator_keuangan')->nullable();
            $table->string('foto_direktur')->nullable();
            $table->string('foto_bendahara')->nullable();
            $table->string('foto_pertanian')->nullable();
            $table->string('foto_keuangan')->nullable();
            $table->integer('omset_tahunan')->nullable();
            $table->integer('tenaga_kerja')->nullable();
            $table->integer('shu_desa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bumdes');
    }
};
