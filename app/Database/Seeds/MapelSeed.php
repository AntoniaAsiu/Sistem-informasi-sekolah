<?php

namespace App\Database\Seeds;

use App\Models\MapelModel;
use CodeIgniter\Database\Seeder;

class MapelSeed extends Seeder
{
    public function run()
    {
        $id = (new MapelModel())->insert([
            'Mapel' => 'web Programing',
            'Kelompok' => '03',
            'Tingkat'=> '03',
            'KKM' => '80',
        ]);
        $id = (new MapelModel())->insert([
            'mapel'      => 'Bahasa Indonesia',
            'kelompok'   => 'a',
            'keterangan' => 'Pelajaran Bahasa Indonesia',
            'tingkat'    => '3',
            'kkm'        => '65',
        ]);
        echo "hasil id = $id";
    }
}
