<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */
class SiswaTest extends CIUnitTestCase{

    use FeatureTestTrait;

    public function testLogin(){
        $this->call('post', 'login', [
            'email' => 'antonia@gmail.com',
            'sandi' => '12345'
        ])->assertStatus(200);
    }
    
    public function testCreateShowUpdateDelete(){
        $json = $this->call('post', 'siswa', [
            'nisn'          => '0912382934',
            'nis'           => '29293',
            'status_masuk'  => 'A',
            'thn_masuk'     => '2013',
            'nama_depan'    => 'tia',
            'nama_belakang' => 'azika',
            'nik'           => '6111238928398408',
            'no_kk'         => '6118273829393804',
            'gender'        => 'P',
            'tgl_lahir'     => '1999-09-09',
            'tempat_lahir'  => 'Tayan',
            'alamat'        => 'Tayan raya',
            'kota'          => 'Tayan Kota',
            'kelas_id'      => '1',
            'no_telp_rumah' => '081284738492',
            'no_hp_ibu'     => '085123827382',
            'no_hp_ayah'    => '081255176232',
            'nm_ayah'       => 'ujang',
            'nm_ibu'        => 'rela',
            'nm_wali'       => 'Ruslan',
            'email'         => 'tiazika@gmail.com',
            'sandi'         => '123456',
        ])->getJSON();
        $js = json_decode($json, true);

        $this->assertNotTrue(isset( $js['id']) > 0);

        $this->call('get', "siswa/". isset ($js['id']))
            ->assertStatus(302);
        
        $this->call('patch', 'siswa', [
            'nisn'          => '091238293',
            'nis'           => '29293',
            'status_masuk'  => 'A',
            'thn_masuk'     => '2013',
            'nama_depan'    => 'tia',
            'nama_belakang' => 'azika',
            'nik'           => '6111238928398408',
            'no_kk'         => '6118273829393804',
            'gender'        => 'P',
            'tgl_lahir'     => '1999-09-09',
            'tempat_lahir'  => 'Tayan',
            'alamat'        => 'Tayan raya',
            'kota'          => 'Tayan Kota',
            'kelas_id'      => '1',
            'no_telp_rumah' => '081284738492',
            'no_hp_ibu'     => '085123827382',
            'no_hp_ayah'    => '081255176232',
            'nm_ayah'       => 'ujang',
            'nm_ibu'        => 'rela',
            'nm_wali'       => 'Ruslan',
            'email'         => 'tiazika@gmail.com',
            'sandi'         => '123456',
            'id' => isset($js['id'])
        ])->assertStatus(302);

        $this->call('delete', 'siswa', [
            'id' => isset($js['id'])
        ])->assertStatus(302);
    }


    public function testRead(){
        $this->call('get', 'siswa/all')
             ->assertStatus(200);
    }

    public function testLogout(){
        $this->call('delete', 'logout')
             ->assertStatus(302);
    }
}