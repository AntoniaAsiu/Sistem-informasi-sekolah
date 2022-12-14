<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TahunAjar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                   => ['type'=>'int', 'constraint'=>10, 'unsigned'=>true, 'auto_increment'=>true,'null'=>false],
            'tahun_ajar'         => ['type'=>'varchar', 'constraint'=>10, 'null'=>false],
            'tgl_mulai'            => ['type'=>'date','null'=>true],
            'tgl_selesai'          => ['type'=>'date','null'=>true],    
            'status_aktif'         => ['type'=>'enum("Y", "T")','default' =>'Y','null'=>true],              
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createtable('tahun_ajar');
    }

    public function down()
    {
        $this->forge->dropTable('tahun_ajar');
    }
}
