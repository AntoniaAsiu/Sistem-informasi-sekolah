<?php

namespace App\Database\Seeds;

use App\Models\PendidikanGuruModel;
use CodeIgniter\Database\Seeder;

class PendidikanGuruSeed extends Seeder
{
    public function run()
    {
        $id = (new PendidikanGuruModel())->insert([
            'Pegawai_id' => '',
            'Jenjang' => 'S2',
            'Jurusan' => 'Informatika',
            'Asal_sekolah'=> 'BSI',
            'Tahun_lulus' => '2012',
            'Nilai_ijasah' => '80',
        ]);
        $id = (new PendidikanGuruModel())->insert([
            'pegawai_id'            => '1',
            'jenjang'               => 'SMK',
            'jurusan'               => 'TKJ',
            'asal_sekolah'          => 'SMK2',
            'tahun_lulus'           => '2023',
            'nilai_ijasah'          => '80.9',
        ]);
        echo "hasil id = $id";
    }
}
