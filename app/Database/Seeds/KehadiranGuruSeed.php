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
            'Pegawai_id'=> '1',
            'jadwal_id' => '1',
            'berita_acara' => 'KehadiranGuru',
        ]);
       
        $id = (new KehadiranGuruModel())->insert([
            'waktu_masuk'   => '10:00:00',
            'waktu_keluar'  => '12:00:00',
            'pertemuan'     => '1',
            'pegawai_id'    => '1',
            'jadwal_id'     => '1',
            'berita_acara'  => 'Mengajar Bahasa Indonesia',
        ]);
        echo "hasil id = $id";

    }
}
