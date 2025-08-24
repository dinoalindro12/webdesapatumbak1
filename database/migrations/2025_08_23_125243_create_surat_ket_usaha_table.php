<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('surat_ket_usaha', function (Blueprint $table) {
            $table->id();
            // Data pemohon
            $table->string('nik');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin');
            $table->string('status_perkawinan');
            $table->string('bangsa');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->text('tempat_tinggal');
            
            // Data usaha
            $table->string('nama_usaha');
            $table->string('tempat_usaha');
            
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
        Schema::dropIfExists('surat_ket_usaha');
    }
};