<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TahunAjar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'Tahun_ajaran'=> [ 'type'=>'varchar', 'constraint'=>9,'null'=>true],
            'tgl_mulai'=>[ 'type'=>'date'],
            'tgl_selesai'=>[ 'type'=>'date'],
            'status_aktif'=> ['type'=>'enum("Y","T")','default'=>"T"]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('tahun_ajar');
    }

    public function down()
    {
        $this->forge->dropTable('tahun_ajar');
    }
}
