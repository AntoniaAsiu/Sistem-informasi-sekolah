<?php

namespace App\Database\Seeds;

use App\Models\BagianModel;
use CodeIgniter\Database\Seeder;

class BagianSeed extends Seeder
{
    public function run()
    {
        $id = (new BagianModel())->insert([
            'nama' => 'guru',
            'fungsi' => 'mencari',
            'tugas_pokok' => 'mencatat data',
        ]);
        $id=(new BagianModel())->insert([
            'nama'        => 'TU',
            'fungsi'      => 'Mengatur tata usaha sekolah',
            'tugas_pokok' => 'Mengatur TU',
        ]);
        $id=(new BagianModel())->insert([
            'nama'        => 'Kepala Sekolah',
            'fungsi'      => 'Memimpin kesatuan sekolah',
            'tugas_pokok' => 'Mengatur dan menerapkan kebijakan di sekolah',
        ]);
        $id=(new BagianModel())->insert([
            'nama'        => 'Wakil Kepala Sekolah',
            'fungsi'      => 'Mewakilkan kepala sekolah',
            'tugas_pokok' => 'Menggantikan kepala sekolah jika ada kendala',
        ]);
        echo "hasil id = $id";
        
    }
}
