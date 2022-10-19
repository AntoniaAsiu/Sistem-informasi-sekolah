<?php

namespace App\Database\Seeds;

use App\Models\PegawaiModel;
use CodeIgniter\Database\Seeder;

class PegawaiSeed extends Seeder
{
    public function run()
    {
        $id = (new PegawaiModel())->insert([
            'pegawai' => 'Tetap',
            'pegawai' => 'Sementara',
            'pegawai' => 'Kontrak',
        ]);
        echo "hasil id = $id";
    }
}
