<?php

namespace App\Database\Seeds;

use App\Models\KelasSiswaModel;
use CodeIgniter\Database\Seeder;

class KelasSiswaSeed extends Seeder
{
    public function run()
    {
        $id = (new KelasSiswaModel())->insert([
            'kelas_id' => '3A',
            'siswa_id' => '12',
        ]);
        echo "hasil id = $id";
    }
}
