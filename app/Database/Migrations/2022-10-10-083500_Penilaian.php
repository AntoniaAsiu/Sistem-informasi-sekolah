<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penilaian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'mapel_id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true],
            'siswa_id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true],
            'total_nilai'=> [ 'type'=>'double'],
            'deskripsi_nilai'=> [ 'type'=>'text']
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('penilaian');
    }

    public function down()
    {
        $this->forge->dropTable('penilaian');
    }
}
