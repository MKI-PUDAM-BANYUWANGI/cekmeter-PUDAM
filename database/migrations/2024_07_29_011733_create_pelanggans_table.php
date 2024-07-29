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
            $table->text('alamat');
            $table->string('wilayah');
            $table->string('foto_meter')->nullable();
            $table->string('nama_merk')->nullable();
            $table->string('kondisi_meter')->nullable();
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
