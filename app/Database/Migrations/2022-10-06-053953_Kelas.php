<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class kelas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'tigkat'=> [ 'type'=>'tinyint', 'constraint'=>3,'null'=>true, 'unsigned'=>true],
            'kelas' => ['type'=>'char', 'constraint'=>1],
            'pegawai_id'=> ['type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true],
            'tahun_ajaran_id'=> ['type'=>'int', 'constraint'=>11,'null'=>true, 'unsigned'=>true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('kelas');
    }

    public function down()
    {
        $this->forge->dropTable('kelas');
    }
}
