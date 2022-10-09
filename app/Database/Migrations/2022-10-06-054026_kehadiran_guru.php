<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class kehadiran_guru extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'waktu_masuk'=>[ 'type'=>'datetime'],
            'waktu_keluar'=>[ 'type'=>'datetime'],
            'pertemuan'=> ['type'=>'tinyint', 'constraint'=>3],
            'pegawai_id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true],
            'id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true],
            'berita_acara'=> ['type'=>'text'],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('kehadiran_guru');
    }

    public function down()
    {
        $this->forge->dropTable('kehadiran_guru');
    }
}
