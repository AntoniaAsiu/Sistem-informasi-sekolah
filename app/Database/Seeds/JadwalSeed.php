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
            'mapel_id'=>'1',
            'jam_mulai'=>'07:00:00',
            'jam_selesai'=>'12:09:00',
            'pegawai_id'=>''
        ]);
        $id = (new JadwalModel())->insert([
            'hari'          => '5',
            'kelas_id'      => '1',
            'mapel_id'      => '2',
            'jam_mulai'     => '10:00',
            'jam_selesai'   => '12:00',
            'pegawai_id'    => '1',
        ]);
        $id = (new JadwalModel())->insert([
            'hari'          => '3',
            'kelas_id'      => '1',
            'mapel_id'      => '2',
            'jam_mulai'     => '10:00',
            'jam_selesai'   => '12:00',
            'pegawai_id'    => '1',
        ]);
        $id = (new JadwalModel())->insert([
            'hari'          => '4',
            'kelas_id'      => '1',
            'mapel_id'      => '2',
            'jam_mulai'     => '10:00',
            'jam_selesai'   => '12:00',
            'pegawai_id'    => '1',
        ]);
        $id = (new JadwalModel())->insert([
            'hari'          => '6',
            'kelas_id'      => '1',
            'mapel_id'      => '2',
            'jam_mulai'     => '10:00',
            'jam_selesai'   => '12:00',
            'pegawai_id'    => '1',
        ]);

        echo "hasil id = $id";
    }
}
