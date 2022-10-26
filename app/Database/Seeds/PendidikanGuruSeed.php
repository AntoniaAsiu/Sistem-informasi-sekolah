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
        echo "hasil id = $id";
    }
}
