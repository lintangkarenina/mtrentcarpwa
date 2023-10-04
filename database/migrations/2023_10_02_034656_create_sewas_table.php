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
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('detail_id');
            $table->integer('rute_id');
            $table->string('jenis_layanan', 50);
            $table->date('tanggal_mulai_sewa');
            $table->date('tanggal_selesai_sewa');
            $table->string('upload_tiket')->nullable();
            $table->string('pesan_tambahan', 100)->nullable();
            $table->double("total")->nullable();
            $table->time("jam_pengambilan")->nullable();
            $table->time("jam_pengembalian")->nullable();
            $table->double("denda")->nullable();
            $table->string('status')->default('Dipesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
