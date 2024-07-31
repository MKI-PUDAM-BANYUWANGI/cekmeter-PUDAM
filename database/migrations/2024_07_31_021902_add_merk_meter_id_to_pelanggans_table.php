<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMerkMeterIdToPelanggansTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            $table->unsignedBigInteger('merk_meter_id')->nullable()->after('foto_meter');
            $table->foreign('merk_meter_id')->references('id')->on('merk_meters');
            $table->dropColumn('merk_meter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            $table->string('merk_meter')->nullable()->after('foto_meter');
            $table->dropForeign(['merk_meter_id']);
            $table->dropColumn('merk_meter_id');
        });
    }
};
