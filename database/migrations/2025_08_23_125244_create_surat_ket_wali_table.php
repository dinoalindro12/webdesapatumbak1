<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('surat_ket_wali', function (Blueprint $table) {
            $table->id();
            // Data pemohon (wali)
            $table->string('nik');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('bangsa');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->text('tempat_tinggal');
            
            // Data anak
            $table->string('nik_anak');
            $table->string('nama_anak');
            $table->date('tanggal_lahir_anak');
            $table->string('tempat_lahir_anak');
            $table->string('bangsa_anak');
            $table->string('agama_anak');
            $table->string('pekerjaan_anak');
            $table->text('tempat_tinggal_anak');
            
            // Keperluan dan administrasi
            $table->text('keperluan')->nullable();
            $table->string('status')->default('diajukan');
            $table->string('nomor_surat')->nullable();
            $table->date('tanggal_cetak')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surat_ket_wali');
    }
};