<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggans';

    protected $fillable = [
        'id',
        'no_sp',
        'nama_pelanggan',
        'alamat',
        'wilayah',
        'foto_meter',
        'merk_meter',
        'kondisi_meter',
        'tanggal_cek'
    ];

    protected $hidden = [];

    public function nama_merk()
    {
        return $this->belongsTo(MerkMeter::class, 'id_merk', 'id');
    }
}
