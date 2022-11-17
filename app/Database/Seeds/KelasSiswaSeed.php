<?php

namespace App\Database\Seeds;

use App\Models\KelasSiswaModel;
use CodeIgniter\Database\Seeder;

class KelasSiswaSeed extends Seeder
{
    public function run()
    {
        $id = (new KelasSiswaModel())->insert([
            'kelas_id' => '1',
            'siswa_id' => '1',
        ]);
        echo "hasil id = $id";
    }
}
