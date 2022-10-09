<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class bagian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => ['type'=>'int', 'constraint'=>10, 'unsigned'=>true, 'auto_increment'=>true],
            'nama'  => ['type'=>'varchar', 'constraint'=>60, 'null'=>true],
            'fungsi'=> ['type'=>'text', 'null'=>true],
            'tugas_pokok' => ['type'=>'varchar', 'null'=>true]
        ]);
    }
    public function down()
    {
        $this->forge->dropTable('Bagian');
    }
}
