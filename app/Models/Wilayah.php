<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $table = 'wilayah';

    // Menentukan primary key
    protected $primaryKey = 'kode_wilayah';

    // Primary key bukan integer lagi
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['kode_wilayah', 'nama_wilayah'];

    // Relasi dengan Pelanggan
    public function pelanggan() {
        return $this->hasMany(Pelanggan::class, 'kode_wilayah', 'kode_wilayah');
    }

    // Relasi dengan Staff
    public function staff() {
        return $this->hasMany(Staff::class, 'kode_wilayah', 'kode_wilayah');
    }
}
