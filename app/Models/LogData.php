<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogData extends Model
{
    use HasFactory;

    protected $table = 'log_data';

    protected $fillable = [
        'petugas_id',
        'no_sp',
        'merk_meter_id',
        'foto_meter',
        'kondisi_meter',
        'ket_kondisi',
        'tanggal_cek'
    ];

    protected $hidden = [];

    // Relasi ke tabel staff menggunakan 'nip'
    public function petugas()
    {
        return $this->belongsTo(Staff::class, 'petugas_id', 'nip'); // petugas_id dikaitkan dengan nip
    }

    // Relasi ke tabel pelanggans menggunakan 'no_sp'
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'no_sp', 'no_sp'); // Langsung gunakan no_sp
    }

    public function merkMeter()
    {
        return $this->belongsTo(MerkMeter::class, 'merk_meter_id');
    }
}
