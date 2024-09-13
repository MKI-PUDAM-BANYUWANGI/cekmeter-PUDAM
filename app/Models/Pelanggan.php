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
        'no_sp',
        'nama_pelanggan',
        'alamat',
        'wilayah',
    ];

    protected $hidden = [];

    public function logData()
    {
        return $this->hasMany(LogData::class, 'pelanggan_id');
    }

    // /**
    //  * image
    //  *
    //  * @return Attribute
    //  */
    // protected function image(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($image) => url('/storage/posts/' . $image),
    //     );
    // }
}
