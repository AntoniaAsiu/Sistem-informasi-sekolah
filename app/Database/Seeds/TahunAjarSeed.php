<?php

namespace App\Database\Seeds;

use App\Models\TahunAjarModel;
use CodeIgniter\Database\Seeder;

class TahunAjarSeed extends Seeder
{
    public function run()
    {
        $id = (new TahunAjarModel())->insert([
            'Tahun_ajaran'=>'2020',
            'tgl_mulai'=>'2020,09,03',
            'tgl_selesai'=>'2023,09,03',
            'status_aktif'=>"T"
        ]);
        echo"hasil insert";
    }
}
