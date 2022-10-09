<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class mapel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'mapel'=> ['type'=>'varchar', 'constraint'=>50],
            'kelompok'=> ['type'=>'enum("A","B")'],
            'mapel'=> ['type'=>'text'],
            'tingkat'=> ['type'=>'tinyint', 'constraint'=>4],
            'kkm'=> ['type'=>'tinyint', 'constraint'=>4]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('mapel');
    }

    public function down()
    {
        $this->forge->dropTable('mapel');
    }
}
