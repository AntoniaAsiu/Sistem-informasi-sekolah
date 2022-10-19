<?php

namespace App\Database\Seeds;

use App\Models\KelasModel;
use App\Models\KelasSiswaModel;
use CodeIgniter\Database\Seeder;

class KelasSeed extends Seeder
{
    public function run()
    {
        $id = (new KelasModel())->insert([
            'Tingkat' => '03',
            'Kelas' => '3A',
            'Pegawai_id' => '12345',
            'Tahun_ajaran_id' => '2022',
        ]);
        echo "hasil id = $id";
    }
}
