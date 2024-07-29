<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'no_sp',
        'nama_pelanggan',
        'alamat',
        'wilayah',
        'foto_meter',
        'nama_merk',
        'kondisi_meter',
        'tanggal_cek'
    ];
}
