<?php

namespace App\Database\Seeds;

use App\Models\BagianModel;
use CodeIgniter\Database\Seeder;

class BagianSeeder extends Seeder
{
    public function run()
    {
        $id=(new BagianModel())->insert([
            'nama'        => 'Guru',
            'fungsi'      => 'Mengajar Murid',
            'tugas_pokok' => 'Membuat Murid Bisa Berfikir Lebih Aktif',
        ]);
        echo "hasil id = $id";

        $id=(new BagianModel())->insert([
            'nama'        => 'Staff TU',
            'fungsi'      => 'Bagian Administrasi dan Pengadaan barang',
            'tugas_pokok' => 'Membantu Guru Dengan Keperluannya',
        ]);
        echo "hasil id = $id";
    }
}
