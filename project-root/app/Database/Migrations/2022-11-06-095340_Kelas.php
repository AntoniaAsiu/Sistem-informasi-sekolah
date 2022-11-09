<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id'                =>['type'=>'int', 'constraint'=>10, 'unsignet'=>true, 'auto_increment'=>true],
            'tingkat'           =>['type'=>'tinyint', 'constraint'=>3, 'unsignet'=>true],
            'kelas'             =>['type'=>'char', 'constraint'=>1, 'null'=>true],
            'pegawai_id'        =>['type'=>'int', 'constraint'=>10, 'unsignet'=>true],
            'tahun_ajaran_id'   =>['type'=>'int', 'constraint'=>11, 'unsignet'=>true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('kelas');
        
    }

    public function down()
    {
        $this->forge->dropTable('kelas');
    }
}
