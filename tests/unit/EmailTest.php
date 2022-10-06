<?php

use CodeIgniter\Email\Email;
use CodeIgniter\Test\CIUnitTestCase;
use Config\Email as ConfigEmail;

class EmailTest extends CIUnitTestCase{

    public function testKirimEmail(){
        $email = new Email (new ConfigEmail());
        $email->setFrom('antoniaasiu02@gmail.com');
        $email->setTo('yusufaristokrat@gmail.com');
        $email->setSubject('testing kirim email ke yusuf');
        $email->setMessage('hallo my heart <b> LOP LOP </b>');

        $this->assertTrue( $email->send());

    }
}