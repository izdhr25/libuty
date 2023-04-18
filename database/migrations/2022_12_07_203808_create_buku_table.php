<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('buku.jpg');
            $table->string('kode_qr');
            $table->string('kategori');
            $table->string('rak');
            $table->string('isbn')->unique();
            $table->string('judul');
            $table->string('penerbit');
            $table->string('tahun_terbit');
            $table->string('penulis');
            $table->text('sinopsis');
            $table->string('halaman');
            $table->string('edisi');
            $table->string('status')->default('Tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
