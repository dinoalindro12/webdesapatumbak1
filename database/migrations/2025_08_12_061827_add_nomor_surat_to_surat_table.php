<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    // Isi migration
    public function up()
    {
        Schema::table('surat', function (Blueprint $table) {
            $table->string('nomor_surat')->nullable()->after('status');
            $table->date('tanggal_cetak')->nullable()->after('nomor_surat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surat', function (Blueprint $table) {
            //
        });
    }
};
