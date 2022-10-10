<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KehadiranSiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'kehadiran_guru_id'=> [ 'type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true ],
            'siswa_id'=> [ 'type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true ],
            'status_masuk'=>['type'=>'enum("Y","T")','default'=>'Y']
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('kehadiran_siswa');
    }

    public function down()
    {
        $this->forge->dropTable('kehadiran_siswa');
    }
}
