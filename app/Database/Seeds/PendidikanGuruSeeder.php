<?php

namespace App\Database\Seeds;

use App\Models\PendidikanGuruModel;
use CodeIgniter\Database\Seeder;

class PendidikanGuruSeeder extends Seeder
{
    public function run()
    {
            $id = (new PendidikanGuruModel())->insert([
                'pegawai_id'            => '1',
                'jenjang'               => 'SMK',
                'jurusan'               => 'Multimedia',
                'asal_sekolah'          => 'SMKN 1',
                'tahun_lulus'           => '2019',
                'nilai_ijasah'          => '99.9',
            ]);
            echo "hasil id= $id";
        }
    }
    
