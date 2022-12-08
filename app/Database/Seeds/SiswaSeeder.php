<?php

namespace App\Database\Seeds;

use App\Models\SiswaModel;
use CodeIgniter\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run()
    {
        $id = (new SiswaModel())->insert([
            'nisn'          => '120938349',
            'nis'           => '123123',
            'status_masuk'  => 'A',
            'thn_masuk'     => '2013',
            'nama_depan'    => 'Tia',
            'nama_belakang' => 'Nata',
            'nik'           => '8983874910000121',
            'no_kk'         => '0912938292938880',
            'gender'        => 'P',
            'tgl_lahir'     => '2000-09-11',
            'tempat_lahir'  => 'Landak',
            'alamat'        => 'jl.kenangan',
            'kota'          => 'jeruk',
            'kelas_id'      => '1',
            'no_telp_rumah' => '080921288373',
            'no_hp_ibu'     => '088923247837',
            'no_hp_ayah'    => '089818237833',
            'nm_ayah'       => 'Udin',
            'nm_ibu'        => 'Ipeh',
            'nm_wali'       => 'Amin',
            'email'         => 'TiaNata@gmail.com',
            'sandi'         => password_hash('123456', PASSWORD_BCRYPT), 
        ]);
        echo "hasil id = $id";
    }
}
