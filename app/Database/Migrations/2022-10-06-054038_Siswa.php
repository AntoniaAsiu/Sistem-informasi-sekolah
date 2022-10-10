<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [ 'type'=>'int', 'constraint'=>10, 'null'=>true, 'unsigned'=>true, 'auto_increment'=>true],
            'nisn'=>['type'=>'varchar','constraint'=>10],
            'nis'=>['type'=>'varchar','constraint'=>5, 'null'=>true],
            'status_masuk'=>['type'=>'enum("A","P")'],
            'thn_masuk'=>['type'=>'year','constraint'=>4, 'null'=>true],
            'nama_depan'=>['type'=>'varchar','constraint'=>50, 'null'=>true],
            'nama_belakang'=>['type'=>'varchar','constraint'=>50],
            'nik'=>['type'=>'varchar','constraint'=>16],
            'no_kk'=>['type'=>'varchar','constraint'=>16],
            'gender'=>['type'=>'enum("L","P")'],
            'tgl_lahir'=>['type'=>'date'],
            'tempat_lahir'=>['type'=>'varchar','constraint'=>50],
            'alamat'=>['type'=>'varchar','constraint'=>255],
            'kota'=>['type'=>'varchar','constraint'=>50],
            'skr_kelas_id'=>['type'=>'int','constraint'=>10,'null'=>true, 'unsigned'=>true,],
            'no_telp_rumah'=>['type'=>'varchar','constraint'=>15],
            'no_hp_ibu'=>['type'=>'varchar','constraint'=>15],
            'no_hp_ayah'=>['type'=>'varchar','constraint'=>15],
            'nm_ayah'=>['type'=>'varchar','constraint'=>30],
            'nm_ibu'=>['type'=>'varchar','constraint'=>30],
            'nm_wali'=>['type'=>'varchar','constraint'=>30],
            'foto'=>['type'=>'varbinary','constraint'=>255],
            'created_at'=> ['type'=>'datetime'],
            'updated_at'=> ['type'=>'datetime'],
            'deleted_at'=> ['type'=>'datetime']


        ]);
        $this->forge->addPrimaryKey('nisn');
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
