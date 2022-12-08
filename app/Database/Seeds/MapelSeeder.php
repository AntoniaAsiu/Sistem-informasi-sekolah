<?php

namespace App\Database\Seeds;

use App\Models\MapelModel;
use CodeIgniter\Database\Seeder;

class MapelSeeder extends Seeder
{
    public function run()
    {
        $id = (new MapelModel())->insert([
            'mapel'      => 'IPA',
            'kelompok'   => 'a',
            'keterangan' => 'Pelajaran IPA',
            'tingkat'    => '3',
            'kkm'        => '65',
        ]);

        echo "hasil id = $id";
        $id = (new MapelModel())->insert([
            'mapel'      => 'Bahasa Inggris',
            'kelompok'   => 'B',
            'keterangan' => 'Pelajaran Bahasa Inggris',
            'tingkat'    => '1',
            'kkm'        => '85',
        ]);
        echo "hasil id = $id";
        
    }
}
