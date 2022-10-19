<?php

namespace App\Database\Seeds;

use App\Models\PenilaianModel;
use CodeIgniter\Database\Seeder;

class PenilaianSeed extends Seeder
{
    public function run()
    {
        $id = (new PenilaianModel())->insert([
            'Mapel_id' => '80',
            'Siswa_id' => '12',
            'Total_nilai' => '80',
            'Deskripsi_nilai'=> 'sangat memuaskan',
        ]);
        echo "hasil id = $id";
    }
}
