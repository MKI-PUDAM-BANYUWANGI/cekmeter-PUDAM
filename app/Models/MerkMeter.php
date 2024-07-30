<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerkMeter extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_merk',
        'created_at',
        'updated_at'
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
