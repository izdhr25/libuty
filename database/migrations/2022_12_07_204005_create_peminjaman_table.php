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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pinjam')->unique();
            $table->string('kode_rfid');
            $table->string('nip_nis');
            $table->string('name');
            $table->string('judul');
            $table->string('isbn');
            $table->date('pinjam')->nullable();
            $table->date('kembali')->nullable();
            $table->date('kembali_asli')->nullable();
            $table->string('telat')->nullable();
            $table->string('denda')->nullable();
            $table->string('status')->nullable();
            $table->string('bayaran')->nullable();
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
        Schema::dropIfExists('rental');
    }
};
