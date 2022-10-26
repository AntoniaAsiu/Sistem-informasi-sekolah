<?php

namespace App\Database\Seeds;

use App\Models\JadwalModel;
use CodeIgniter\Database\Seeder;

class JadwalSeed extends Seeder
{
    public function run()
    {
        $id = (new JadwalModel())->insert([
            'hari'=> '1',
            'mapel_id'=>'',
            'jam_mulai'=>'07:00:00',
            'jam_selesai'=>'12:09:00',
            'pegawai_id'=>''
        ]);
        echo "hasil id = $id";
    }
}
