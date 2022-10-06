<?php

namespace App\database\Seeds;

use App\Models\tahun_ajarmodel;
use CodeIgniter\Database\Seeder;

class tahun_ajarseeder extends Seeder
{
    public function run()
    {
        
        $r = (int)(new tahun_ajarmodel())->insert([
            'tahun_ajar'=> '2018',
            'tgl_mulai'=> '14-06-2018',
            'tgl_selesai' => '18-06-2023',
            'status_aktif' => 'Y',
        ]);
       
        echo"hasil insert $r";
    }
}

