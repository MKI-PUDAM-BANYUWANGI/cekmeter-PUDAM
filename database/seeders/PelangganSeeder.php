<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::create([
            'no_sp' => '01223344',
            'nama_pelanggan' => 'Rio Adjie',
            'alamat' => ('Jajang Surat'),
            'wilayah' => ('02 - Rogojampi')
        ]);
    }
}
