<?php

namespace App\Database\Seeds;

use App\Models\PegawaiModel;
use CodeIgniter\Database\Seeder;

class PegawaiSeed extends Seeder
{
    public function run()
    {
        $id = (new PegawaiModel())->insert([
            'nip'=>'2',
            'nama_depan'=>'abraham',
            'nama_belakang'=>'ilham',
            'gelar_depan'=>'spd',
            'gelar_belakang'=>'Dr',
            'gender'=>'L',
            'no_telp'=>'08575755787',
            'no_wa'=>'08575755787',
            'email' =>'abraham@gmail.com',
            'bagian_id'=>'',
            'alamat'=>'bangkong',
            'kota'=>'pontianak',
            'tgl_lahir'=>'08',
            'tempat_lahir'=>'bangkong',
            'foto'=>'abraham.jpg',
            'sandi' =>password_hash('12345',PASSWORD_BCRYPT),
            'token_reset'=>'1',
        ]);
        echo "hasil id = $id";
    }
}
