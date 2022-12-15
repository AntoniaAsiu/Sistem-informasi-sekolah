<?php

namespace App\Database\Seeds;

use App\Models\PegawaiModel;
use CodeIgniter\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $id = (new PegawaiModel())->insert([
            'nip'               => '1233234',
            'nama_depan'        => 'Antonia',
            'nama_belakang'     => 'Asiu',
            'gelar_depan'       => 'l.p',
            'gelar_belakang'    => 'n.t',
            'gender'            => 'P',
            'no_telp'           => '081982783833',
            'no_wa'             => '083231230923',
            'email'             => 'antonia@gmail.com',
            'bagian_id'         => '1',
            'alamat'            => 'jalan lurus',
            'kota'              => 'Pontianak',
            'tgl_lahir'         => '1982-08-07',
            'tempat_lahir'      => 'Pontianak', 
            'sandi'             => password_hash('12345', PASSWORD_BCRYPT), 
        ]);
            echo "hasil id = $id";
    }
}

