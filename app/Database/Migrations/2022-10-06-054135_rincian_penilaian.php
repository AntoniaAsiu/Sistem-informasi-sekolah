<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class rincian_penilaian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'penilaian_id'=> [ 'type'=>'int', 'constraint'=>11,'null'=>true, 'unsigned'=>true],
            'nama_nilai'=> [ 'type'=>'varchar', 'constraint'=>50,'null'=>true, 'unsigned'=>true],
            'nilai_angka'=> [ 'type'=>'double'],
            'nilai_deskripsi'=> [ 'type'=>'text']
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('rincian_penilaian');
    }

    public function down()
    {
        $this->forge->dropTable('rincian_penilaian');
    }
}
