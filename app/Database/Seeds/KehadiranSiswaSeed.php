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
            'kehadiran_guru_id' => '1',
            'siswa_id' => '1',
            'status_Masuk' => 'masuk',
        ]);
        
        $id = (new KehadiranSiswaModel())->insert([
            'kehadiran_guru_id' => '1',
            'siswa_id'          => '1',
            'status_hadir'      => 'Y',
        ]);

        echo "hasil id= $id";
    }
}
