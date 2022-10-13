<?php

namespace App\Database\Seeds;

use App\Models\BagianModel;
use CodeIgniter\Database\Seeder;

class BagianSeed extends Seeder
{
    public function run()
    {
        $id = (new BagianModel())->insert([
            'nama' => 'Antonia_asiu',
            'fungsi' => 'mencari',
            'tugas_pokok' => 'mencatat data',
        ]);
        echo "hasil id = $id";
        
    }
}
