<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class pendidikan_guru extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => ['type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'pegawai_id'    => ['type'=>'int', 'constraint'=>10,'null'=>true, 'unsigned'=>true],
            'jenjang'  => ['type'=>'varchar', 'constraint'=>25, 'null'=>true],
            'jurusan'  => ['type'=>'varchar', 'constraint'=>70],
            'asal_sekolah'  => ['type'=>'varchar', 'constraint'=>100],
            'tahun_lulus'=> ['type'=>'year', 'constraint'=>4],
            'nilai_ijasah' => ['type'=>'double']
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('pendidikan_guru');
    }

    public function down()
    {
        $this->forge->dropTable('pendidikan_guru');
    }
}
