<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('gambar')->nullable();
            $table->enum('status',['Tersedia','Tidak Tersedia']);
            $table->string('nama_mobil', 20);
            $table->double('harga');
            $table->string('bahan_bakar', 30);
            $table->integer('jumlah_kursi')->length(3)->unsigned();
            $table->integer('penumpang')->length(3)->unsigned();
            $table->integer('tahun')->length(5)->unsigned();
            $table->string('transmisi', 20);
            $table->string('fasilitas', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
