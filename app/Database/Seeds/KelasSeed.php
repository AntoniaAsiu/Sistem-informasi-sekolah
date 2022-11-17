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
            'Pegawai_id' => '0',
            'Tahun_ajaran_id' => '',
        ]);
       
        $id = (new KelasModel())->insert([
            'tingkat'             => '1',
            'kelas'               => '1',
            'pegawai_id'          => '1',
            'tahun_ajaran_id'     => '1',
           
        ]);
        echo "hasil id= $id";
    }
}
