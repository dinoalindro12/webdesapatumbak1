<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('surat_ket_domisili', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('bangsa');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->text('tempat_tinggal');
            $table->text('keperluan')->nullable();
            $table->string('status')->default('diajukan');
            $table->string('nomor_surat')->nullable();
            $table->date('tanggal_cetak')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surat_ket_domisili');
    }
};