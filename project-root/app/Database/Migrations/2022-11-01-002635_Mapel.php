<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mapel extends Migration
{
    public function up() 
    {
        
        $this->forger->addField([
            'id'        => ['type'=>'int', 'constain'=>10, 'unsigned'=>true, 'auto increment'=>true],
            'mapel'     => ['type'=>'text', 'null'=>true, 'null'=>true],
            'kelompok'  => ['type'=>'enum("A","B")', ' null'=>true],
            'tingkat'   => ['type'=>'tinyint', 'constain'=>4, 'null'=>true],
            'kkm'       => ['type'=>' tinyint', 'constain'=>4, 'null'=>true ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('mapel');
        
    }

    public function down()
    {
        $this->forger->dropTable('mapel');
    }
}
