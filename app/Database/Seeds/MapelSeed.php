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
        echo "hasil id = $id";
    }
}
