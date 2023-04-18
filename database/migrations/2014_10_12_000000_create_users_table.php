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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nip_nis')->nullable();
            $table->string('kode_rfid')->unique();
            $table->string('image')->default('profile2.jpg');
            $table->string('name')->nullable();
            $table->string('jk')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('telepon')->nullable();
            $table->string('kelas')->nullable();
            $table->text('alamat')->nullable();
            $table->string('status')->nullable();
            $table->string('role_id')->nullable();
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
        Schema::dropIfExists('users');
    }
};
