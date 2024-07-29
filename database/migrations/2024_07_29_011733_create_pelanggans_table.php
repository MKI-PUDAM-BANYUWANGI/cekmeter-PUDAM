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
            $table->string('no_sp', 11);
            $table->string('nama_pelanggan', 50);
            $table->string('alamat', 50);
            $table->string('wilayah', 50);
            $table->string('foto_meter')->nullable();
            $table->string('nama_merk', 50)->nullable();
            $table->string('kondisi_meter', 50)->nullable();
            $table->timestamp('tanggal_cek')->nullable();
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
