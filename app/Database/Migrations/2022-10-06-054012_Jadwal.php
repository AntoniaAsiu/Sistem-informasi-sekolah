<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'hari'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true],
            'mapel_id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true],
            'jam_mulai'=> [ 'type'=>'time'],
            'jam_selesai'=> [ 'type'=>'time'],
            'pegawai_id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('jadwal');
    }

    public function down()
    {
        $this->forge->dropTable('jadwal');
    }
}
