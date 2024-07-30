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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('no_sp');
            $table->string('nama_pelanggan');
            $table->string('alamat');
            $table->string('wilayah');
            $table->string('foto_meter')->nullable();
            $table->string('merk_meter')->nullable();
            $table->string('kondisi_meter')->nullable();
            $table->date('tanggal_cek')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
