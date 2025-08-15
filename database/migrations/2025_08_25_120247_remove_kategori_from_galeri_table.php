<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveKategoriFromGaleriTable extends Migration
{
    public function up()
    {
        Schema::table('galeri', function (Blueprint $table) {
            $table->dropColumn('kategori');
        });
    }

    public function down()
    {
        Schema::table('galeri', function (Blueprint $table) {
            $table->string('kategori')->nullable()->after('type');
        });
    }
}