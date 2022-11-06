<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PendidikanGuru extends Migration
{
    public function up()
    {

        $this->forger->addField([
            'id'            =>['type'=>'int', 'constain'=>10, 'unsigned'=>true, 'auto_increment'=>true],
            'pegawai_id'    =>['type'=>'int', 'constain'=>10, 'unsigned'=>true],
            'jenjang'       =>['type'=>'varchar', 'constain'=>25, 'null'=>true],
            'jurusan'       =>['type'=>'varchar', 'constain'=>70, 'null'=>true],
            'asal_sekolah'  =>['type'=>'varchar', 'constain'=>100, 'null'=>true],
            'tahun_lulus'   =>['type'=>'year', 'constain'=>4, 'null'=>true],
            'nilai_ijasah'  =>['type'=>'double', 'null'=>true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Pendidikan_Guru');
        
    }

    public function down()
    {
        $this->forger->dropTable('pendidikan_guru');
    }
}
