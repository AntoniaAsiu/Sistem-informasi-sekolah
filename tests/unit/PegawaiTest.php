<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */
class PegawaiTest extends CIUnitTestCase{

    use FeatureTestTrait;

    public function testLogin(){
        $this->call('post', 'login', [
            'email' => 'antonia@gmail.com',
            'sandi' => '12345'
        ])->assertStatus(404);
    }
    
    public function testCreateShowUpdateDelete(){
        $json = $this->call('post', 'pegawai', [
            'nip'                   => '123456',
            'nama_depan'            => 'antonia',
            'nama_belakang'         => 'asiu',
            'gelar_depan'           => 'I.T',
            'gelar_belakang'        => 'M',
            'gender'                => 'P',
            'no_telp'               => '08092349892',
            'no_wa'                 => '08982342383',
            'email'                 => 'antoniaasiu8@gmail.com',
            'bagian_id'             => '1',
            'alamat'                => 'Pontianak',
            'kota'                  => 'Pontianak',
            'tgl_lahir'             => '2003-03-03',
            'tempat_lahir'          => 'Pontianak',
            'sandi'                 => '123456',
        ])->getJSON();
        $js = json_decode($json, true);

        $this->assertNotTrue(isset( $js['id']) > 0);

        $this->call('get', "pegawai/". isset ($js['id']))
            ->assertStatus(302);
        
        $this->call('patch', 'pegawai', [
            'nip'                   => '12345',
            'nama_depan'            => 'antonia',
            'nama_belakang'         => 'asiu',
            'gelar_depan'           => 'I.T',
            'gelar_belakang'        => 'M',
            'gender'                => 'P',
            'no_telp'               => '08092349892',
            'no_wa'                 => '08982342383',
            'email'                 => 'antoniaasiu8@gmail.com',
            'bagian_id'             => '1',
            'alamat'                => 'Pontianak',
            'kota'                  => 'Pontianak',
            'tgl_lahir'             => '2003-03-03',
            'tempat_lahir'          => 'Pontianak',
            'sandi'                 => '123456',
            'id' => isset($js['id'])
        ])->assertStatus(302);

        $this->call('delete', 'pegawai', [
            'id' => isset($js['id'])
        ])->assertStatus(302);
    }


    public function testRead(){
        $this->call('get', 'pegawai/all')
             ->assertStatus(302);
    }

    public function testLogout(){
        $this->call('delete', 'logout')
             ->assertStatus(302);
    }
}