<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> ['type'=>'int','constraint'=>10,'null'=>true,'unsigned'=>true, 'auto_increment'=>true],
            'nip'=> ['type'=>'varchar','constraint'=>10,'null'=>true],
            'nama_depan'=>[ 'type'=>'varchar', 'constraint'=>50, 'null'=>true],
            'nama_belakang'=>[ 'type'=>'varchar', 'constraint'=>50],
            'gelar_depan'=>[ 'type'=>'varchar', 'constraint'=>10],
            'gelar_belakang'=>[ 'type'=>'varchar', 'constraint'=>10],
            'gender'=> ['type'=>'enum("L","P")', 'null'=>true],
            'no_telp'=>[ 'type'=>'varchar', 'constraint'=>17],
            'no_wa'=>[ 'type'=>'varchar', 'constraint'=>17],
            'email' => ['type'=>'varchar', 'constraint'=>128, 'null'=>true],
            'bagian_id'=> ['type'=>'int','constraint'=>10,'null'=>true,'unsigned'=>true],
            'alamat'=>[ 'type'=>'varchar', 'constraint'=>255],
            'kota'=>[ 'type'=>'varchar', 'constraint'=>30],
            'tgl_lahir'=>[ 'type'=>'date'],
            'tempat_lahir'=>[ 'type'=>'varchar', 'constraint'=>80],
            'foto'=>[ 'type'=>'varchar', 'constraint'=>255],
            'sandi' => ['type'=>'varchar', 'constraint'=>60],
            'token_reset'=>[ 'type'=>'varchar', 'constraint'=>10],
            'created_at'    => ['type'=>'datetime', 'null'=>true],
            'updated_at'    => ['type'=>'datetime', 'null'=>true],
            'deleted_at'    => ['type'=>'datetime', 'null'=>true]
        ]);
        $this->forge->addPrimaryKey('nip');
        $this->forge->createTable('pegawai');
    }

    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}
