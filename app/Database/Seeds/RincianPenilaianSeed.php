<?php

namespace App\Database\Seeds;

use App\Models\RincianPenilaianModel;
use CodeIgniter\Database\Seeder;

class RincianPenilaianSeed extends Seeder
{
    public function run()
    {
        $id = (new RincianPenilaianModel())->insert([
            'penilaian_id'          => '1',
            'nama_nilai'            => 'delapan_puluh',
            'nilai_angka'           => '78',
            'nilai_deskripsi'       => 'teruskan',
        ]);
        echo "hasil id = $id";
    }
}
