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
        Schema::create('log_data', function (Blueprint $table) {
            $table->id();
            $table->string('petugas_id');
            $table->string('no_sp');
            $table->string('merk_meter_id');
            $table->string('foto_meter');
            $table->string('kondisi_meter');
            $table->string('ket_kondisi')->nullable();
            $table->datetime('tanggal_cek');
            $table->timestamps();
            $table->foreign('petugas_id')->references('nip')->on('staffs');
            $table->foreign('no_sp')->references('no_sp')->on('pelanggans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_data');
    }
};
