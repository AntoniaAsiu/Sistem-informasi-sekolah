<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */
class PenggunaTest extends CIUnitTestCase{
    use FeatureTestTrait;

    public function testLogin(){
        $this->call('post','login',[
            'email' =>'antoniaasiu@gmail.com',
            'password' =>'mamaia123'
        ])->assertStatus(200);
    }
    public function testCreateShowUpdateDelete(){
        $json = $this->call('post','Pegawai',[
            'nama_depan' =>'antonia',
            'nama_belakang' =>'asiu',
            'gender' =>'L',
            'email' =>'antoniaasiu@gmail.com',
            'password' =>'mamaia123',
        ])->getJSON();
        $js = json_decode($json,true);
        // 
        $this->assertTrue($js['id'] > 0);
        // 
        $this->call('get',"pengguna/".$js['id'])
            ->assertStatus(200);
    }
    public function testRead(){
        $this->call('get','pengguna/all')->assertStatus(200);
    }
    public function testLogout(){
        $this->call('delete','login')->assertStatus(302);
    }

}