<?php

namespace App\Database\Seeds;

use App\Models\KelasSiswaModel;
use CodeIgniter\Database\Seeder;

class KelasSiswaSeed extends Seeder
{
    public function run()
    {
        $id = (new KelasSiswaModel())->insert([
            'kelas_id' => '',
            'siswa_id' => '',
        ]);
        echo "hasil id = $id";
    }
}
