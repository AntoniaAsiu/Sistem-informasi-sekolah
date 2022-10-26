<?php

namespace App\Database\Seeds;

use App\Database\Migrations\KehadiranGuru;
use App\Database\Migrations\Pegawai;
use App\Models\KehadiranGuruModel;
use CodeIgniter\Database\Seeder;

class KehadiranGuruSeed extends Seeder
{
    public function run()
    {
        $id = (new KehadiranGuruModel())->insert([
            'Waktu_masuk' => '07:00',
            'Waktu_keluar' => '17:00',
            'Pertemuan' => '05',
            'Pegawai_id'=> '',
            'jadwal_id' => '',
            'berita_acara' => 'KehadiranGuru',
        ]);
        echo "hasil id = $id";

    }
}
