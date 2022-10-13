<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KehadiranGuru extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'waktu_masuk'=>[ 'type'=>'datetime'],
            'waktu_keluar'=>[ 'type'=>'datetime'],
            'pertemuan'=> ['type'=>'tinyint', 'constraint'=>3, 'unsigned'=>true],
            'pegawai_id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true],
            'jadwal_id'=> [ 'type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true],
            'berita_acara'=> ['type'=>'text'],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('kehadiran_guru');
    }

    public function down()
    {
        //
    }
}
