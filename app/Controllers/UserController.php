<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgnither\Email\Email;
use Config\Email as ConfigEmail;

class UserController extends BaseController
{
    public function login()
    {
        $email = $this->request->getPost('email');
        $password =$this->request->getPost('sandi');

        $pengguna = (new UserModel())->where('email', $email)->first();

        if($pengguna == null){
            return $this->response ->setJSON(['message'=>'email tidakterdaftar'])
            ->setStatusCode(404);
        }

        $cekPassword = password_verify($password, $pengguna['sandi']);
        if($cekPassword == false){
            return $this->response->setJSON(['message'=>'email dan sandi tidak cocok'])
            ->setStatusCode(403);
        }

        $this->session->set('pengguna', $pengguna);
        return $this->response->setJSON(['message'=>"selamat datang {$pengguna['nama']}"])
        ->setStatusCode(200);
    

    }



}
