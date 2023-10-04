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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer("role_id");
            $table->string('name', 50);
            $table->string('email', 30)->unique();
            $table->string('password');
            $table->string('alamat', 100)->nullable();
            $table->string('kota', 30)->nullable();
            $table->bigInteger('no_handphone')->nullable(); // Mengubah menjadi BIGINT
            $table->bigInteger('nik')->nullable(); // Mengubah menjadi BIGINT
            $table->string('pekerjaan', 50)->nullable();
            $table->string('upload_ktp')->nullable();
            $table->string('upload_sim')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
