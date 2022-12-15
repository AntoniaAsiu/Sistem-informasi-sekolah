<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */

 class tahunajarTest extends CIUnitTestCase{
    
    use FeatureTestTrait;

    public function testCreateShowUpdateDelete(){
        $json = $this->call('post' , 'tahunajar' , [
            'tahun_ajaran'       => '2022',
            'tgl_mulai'          => '2003-03-03',
            'tgl_selesai'        => '2003-03-03',
            'status_aktif'       => 'Y',
        ])->getJSON();
        $js = json_decode($json, true);
        $this->assertNotTrue(isset( $js['id']) > 0);

        $this->call('get', "tahunajar/". isset($js['id']))
             ->assertStatus(302);

        $this->call('patch' , 'tahunajar' ,[
            'tahun_ajaran'       => '2022',
            'tgl_mulai'          => '2003-03-03',
            'tgl_selesai'        => '2003-03-03',
            'status_aktif'       => 'Y',
            
            'id' => isset($js['id'])
            ])->assertStatus(302);
            
        $this->call('delete' , 'tahunajar', [
            'id' => isset($js['id'])
        ])->assertStatus(302);
    }

    public function testRead(){
        $this->call('get' , 'tahunajar/all' )
             ->assertStatus(200);
    }
 }