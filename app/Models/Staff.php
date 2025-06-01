<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    // Atur Primary Key ke nip
    protected $primaryKey = 'nip';
    public $incrementing = false; // Karena no_sp bukan auto-increment
    protected $keyType = 'string'; // Karena no_sp bertipe string

    protected $fillable = [
        'nip',
        'nama_staff',
        'no_telepon',
        'kode_wilayah',
        'password'
    ];

    protected $hidden = [
        'password',
    ];

    public function logData()
    {
        return $this->belongsTo(LogData::class, 'petugas_id', 'nip');
    }

    // Definisikan relasi dengan Wilayah
    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'kode_wilayah', 'kode_wilayah');
    }
}
