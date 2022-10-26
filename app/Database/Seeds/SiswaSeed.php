<?php

namespace App\Database\Seeds;

use App\Models\SiswaModel;
use CodeIgniter\Database\Seeder;

class SiswaSeed extends Seeder
{
    public function run()
    {
        $id = (new SiswaModel())->insert([
            'nisn'=>'12323243',
            'nis'=>'1203928884',
            'status_masuk'=>"A",
            'thn_masuk'=>'2012',
            'nama_depan'=>"budi",
            'nama_belakang'=>'sudi',
            'nik'=>'00109392303',
            'no_kk'=>'0019239983',
            'gender'=>'L',
            'tgl_lahir'=>'2001,09,03',
            'tempat_lahir'=>'pontianak',
            'alamat'=>'jln parit demang',
            'kota'=>'pontianak',
            'skr_kelas_id'=>'',
            'no_telp_rumah'=>'0855776564',
            'no_hp_ibu'=>'09838627367',
            'no_hp_ayah'=>'08929839223',
            'nm_ayah'=>'udin',
            'nm_ibu'=>'uteh',
            'nm_wali'=>'jejejp',
            'foto'=>'budi.jpg'
        ]);
        echo "hasil id = $id";
    }
}
