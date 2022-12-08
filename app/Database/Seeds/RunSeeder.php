<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RunSeeder extends Seeder
{
    public function run()
    {
        $this->call('BagianSeeder');
        $this->call('PegawaiSeeder');
        $this->call('TahunAjarSeeder');
        $this->call('PendidikanGuruSeeder');
        $this->call('KelasSeeder');
        $this->call('MapelSeeder');
        $this->call('JadwalSeeder');
        $this->call('KehadiranGuruSeeder');
        $this->call('SiswaSeeder');
        $this->call('KelasSiswaSeeder');
        $this->call('KehadiranSiswaSeeder');
        $this->call('PenilaianSeeder');
        $this->call('RincianPenilaianSeeder');
    }
}
