<?php

namespace App\database\Migrations;

use CodeIgniter\database\Migration;
use Config\Migrations;

class tahun_ajar extends Migrations
{
    public function up()
    {
        //
    $this->forge->addfield([
        'id'    => [ 'type'=>'int', 'constraint'=>10, 'unsigned'=>true, 'auto_increment'=>true ],
        'tahun_ajar'=> [ 'type'=>'varchar', 'constraint'=>9, 'null'=>true],
        'tgl_mulai'=> [ 'type'=>'date', 'null'=>true],
        'tgl_selesai' => [ 'type'=>'date', 'null'=>true],
        'status_aktif' => [ 'type'=>'enum("Y","T""T")', 'null'=>true ],
    ]);
    $this->forge->addPrimaryKey('id');
    $this->forge->createTable('tahun_ajar');
}

    public function down()
    {
        //
        $this->forge->dropTable('tahun_ajar');  
    }
}

