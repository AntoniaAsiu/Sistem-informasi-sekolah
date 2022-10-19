<?php

namespace App\Database\Seeds;

use App\Models\RincianPenilaianModel;
use CodeIgniter\Database\Seeder;

class RincianPenilaianSeed extends Seeder
{
    public function run()
    {
        $id = (new RincianPenilaianModel())->insert([
            'Penilaian_id' => '70',
            'Nama_nilai' => 'web_80',
            'Nilai_angka' => '80',
            'nilai_deskripsi'=> 'Sangat memuaskan',
        
        ]);
        echo "hasil id = $id";
    }
}
