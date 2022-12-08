<?php

namespace App\Database\Seeds;

use App\Models\TahunAjarModel;
use CodeIgniter\Database\Seeder;

class TahunAjarSeeder extends Seeder
{
    public function run()
    {
        $id = (new TahunAjarModel())->insert([
            'tahun_ajar'          => '2022',
            'tgl_mulai'             => '2001-03-09',
            'tgl_selesai'           => '2006-02-08',
            'status_aktif'          => 'Y',
        ]);
        
        $id = (new TahunAjarModel())->insert([
            'tahun_ajar'          => '2022',
            'tgl_mulai'             => '2003-01-08',
            'tgl_selesai'           => '2008-06-09',
            'status_aktif'          => 'T',
        ]);

        echo "hasil id= $id";
    }
}
