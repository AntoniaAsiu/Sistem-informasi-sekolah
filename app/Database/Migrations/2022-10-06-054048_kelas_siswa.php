<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class kelas_siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'kelas_id'=> [ 'type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true ],
            'siswa_id'=> [ 'type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true ]
        ]);
        $this->forge->addPrimaryKey('nisn');
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}