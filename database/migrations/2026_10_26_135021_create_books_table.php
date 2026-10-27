<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('buku_0114', function (Blueprint $table) {
            $table->id('id_0114');
            $table->string('judul_0114');
            $table->string('isbn_0114');
            $table->integer('tahun_terbit_0114');
            $table->string('pengarang_0114');
            $table->string('kategori_0114');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buku_0114');
    }
};