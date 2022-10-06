<?php

namespace App\database\Migrations;

use CodeIgniter\database\Migration;
use Config\Migrations;

class pegawai extends Migrations
{
    public function up()
    {
        //
    $this->forge->addfield([
        'id'    => [ 'type'=>'int', 'constraint'=>10, 'unsigned'=>true, 'auto_increment'=>true ],
        'nip'   => [ 'type'=>'varchar', 'constraint'=>10, 'null'=>true],
        'nama_depan'=> [ 'type'=>'varchar', 'constraint'=>50, 'null'=>false],
        'nama_belakang'=> [ 'type'=>'varchar', 'constraint'=>50, 'null'=>true],
        'gender'=> [ 'type'=>'enum("L","P")', 'null'=>true ],
        'no_telp'=> [ 'type'=>'varchar', 'constraint'=>17, 'null'=>true],
        'no_wa'=> [ 'type'=>'varchar', 'constraint'=>17, 'null'=>true],
        'email'=> [ 'type'=>'varchar', 'constraint'=>128, 'null'=>true],
        'bagian_id'=> [ 'type'=>'int', 'constraint'=>10, 'null'=>true],
        'alamat'=> [ 'type'=>'varchar', 'constraint'=>255, 'null'=>true],
        'kota'=> [ 'type'=>'varchar', 'constraint'=>30, 'null'=>true],
        'tgl_lahir'=> [ 'type'=>'date','null'=>true],
        'tempat_lahir'=> [ 'type'=>'varchar', 'constraint'=>80, 'null'=>true],
        'foto'=> [ 'type'=>'varchar', 'constraint'=>255, 'null'=>true],
        'sandi'=> [ 'type'=>'varchar', 'constraint'=>60, 'null'=>true],
        'token_reset'=> [ 'type'=>'varchar', 'constraint'=>10, 'null'=>true],   
        'created_at'=> [ 'type'=>'datetime','null'=>true],
        'deleted_at'=> [ 'type'=>'datetime','null'=>true],     
        
    ]);
    $this->forge->createTable('pegawai');
    $this->forge->addPrimaryKey('nip');
    $this->forge->addForeignKey('bagian_id','bagian','nip','cascade','set null');
}
    public function down()
    {
        //
        $this->forge->dropTable('pegawai');  
    }
}
