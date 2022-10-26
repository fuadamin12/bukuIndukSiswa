<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('namaSiswa',50);
            $table->string('nisn',25);
            $table->timestamp('tanggalLahir',0);
            $table->string('tempatLahir',25);
            $table->enum('jenisKelamin',['L','P']);
            $table->text('alamat');
            $table->string('namaOrangTua',50);
            $table->text('alamatOrangTua');
            $table->string('pekerjaanOrangTua',25);
            $table->string('asalSekolah',50);
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
        Schema::dropIfExists('siswa');
    }
}
