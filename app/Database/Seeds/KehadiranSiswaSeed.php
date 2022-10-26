<?php

namespace App\Database\Seeds;

use App\Database\Migrations\KehadiranSiswa;
use App\Models\KehadiranSiswaModel;
use CodeIgniter\Database\Seeder;

class KehadiranSiswaSeed extends Seeder
{
    public function run()
    {
        $id = (new KehadiranSiswaModel())->insert([
            'kehadiran_guru_id' => '',
            'siswa_id' => '',
            'status_Masuk' => 'masuk',
        ]);
        echo "hasil id = $id";
    }
}
