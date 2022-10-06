<?php

namespace App\database\Seeds;

use App\Models\bagianmodel;
use CodeIgniter\Database\Exceptions\DataException;
use CodeIgniter\Database\Seeder;

class bagianseeder extends Seeder
{
    public function run()
    {
        
    $id = (new bagianmodel())->insert([
        'nama'  => 'Nurul azika',
        'fungsi'=> 'mencari',
        'tugas' => 'mencatat data',
    ]);
    echo"hasil id=$id";
}
    }
