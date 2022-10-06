<?php

namespace App\database\Seeds;

use App\Models\pegawaimodel;

use CodeIgniter\Database\Exceptions\DataException;
use CodeIgniter\Database\Seeder;

class pegawaiseeder extends Seeder
{
    public function run()
    {
        
        (new pegawaimodel())->insertBatch([
        ['pegawai'=>'tetap'],
        ['pegawai'=>'sementara'],
        ['pegawai'=>'kontrak'],
    ]);
}
    }

