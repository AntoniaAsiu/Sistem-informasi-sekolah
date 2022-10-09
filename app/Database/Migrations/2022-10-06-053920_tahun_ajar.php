<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class tahun_ajar extends Migration
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
        $this->forge->createTable('Tahun_Ajar');
    }

    public function down()
    {
        $this->forge->dropTable('Tahun_Ajar');
    }
}
