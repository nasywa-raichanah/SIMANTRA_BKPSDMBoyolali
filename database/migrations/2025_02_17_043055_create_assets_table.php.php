<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('intra_kompatabel', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->index();
            $table->string('nama_barang')->unique();
            $table->string('nomor_register');
            $table->string('merk_type');
            $table->string('bahan');
            $table->integer('tahun_pembelian');
            $table->decimal('harga', 15, 2);
            $table->string('keterangan')->nullable(); // Hanya keterangan yang boleh kosong
            $table->timestamps();
        });

        Schema::create('ekstra_kompatabel', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->index();
            $table->string('nama_barang')->unique();
            $table->string('nomor_register');
            $table->string('merk_type');
            $table->string('bahan');
            $table->integer('tahun_pembelian');
            $table->decimal('harga', 15, 2);
            $table->string('keterangan')->nullable(); // Hanya keterangan yang boleh kosong
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('intra_kompatabel');
        Schema::dropIfExists('ekstra_kompatabel');
    }
};
