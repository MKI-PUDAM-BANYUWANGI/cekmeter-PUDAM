<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'merk_meter_id',
        'kondisi_meter',
        'tanggal_cek'
    ];

    protected $hidden = [];

    public function merkMeter()
    {
        return $this->belongsTo(MerkMeter::class, 'merk_meter_id');
    }

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
}
