<?php

namespace App\Database\Seeds;

use App\Models\RincianPenilaianModel;
use CodeIgniter\Database\Seeder;

class RincianPenilaianSeeder extends Seeder
{
    public function run()
    {
            $id = (new RincianPenilaianModel())->insert([
                'penilaian_id'          => '1',
                'nama_nilai'            => 'Delapan Lima',
                'nilai_angka'           => '85',
                'nilai_deskripsi'       => 'Baik',
            ]);
    
            echo "hasil id= $id";
        }
    }
    