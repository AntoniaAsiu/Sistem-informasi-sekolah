<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
    public function up()
    {

        $this->forger->addField([
            'id'                =>['type'=>'int', 'constain'=>10, 'unsignet'=>true, 'auto_increment'=>true],
            'tingkat'           =>['type'=>'tinyint', 'constain'=>3, 'unsignet'=>true],
            'kelas'             =>['type'=>'char', 'constain'=>1, 'null'=>true],
            'pegawai_id'        =>['type'=>'int', 'constain'=>10, 'unsignet'=>true],
            'tahun_ajaran_id'   =>['type'=>'int', 'constain'=>11, 'unsignet'=>true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('kelas');
        
    }

    public function down()
    {
        $this->forger->dropTable('kelas');
    }
}
