<?php

namespace App\Controllers;
use Agoenxz21\Datatables\Datatable;
use App\Controllers\BaseController;
use App\Database\Migrations\Pegawai;
use App\Models\PegawaiModel;
use CodeIgniter\Email\Email;
use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Email as ConfigEmail;

class PegawaiController extends BaseController
{
    public function login(){
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('sandi');

        $pegawai = (new PegawaiModel())->where('email', $email)->first();

        if($pegawai == null){
            return $this->response->setJSON(['message'=>'Email tidak terdaftar'])
                        ->setStatusCode(404);
        }

        $cekPaswword = password_verify($password, $pegawai['sandi']);
        if($cekPaswword == false){
            return $this->response->setJSON(['message'=>'Email dan Password tidak cocok'])
                        ->setStatusCode(403);
        }

        $this->session->set('pegawai', $pegawai);
        return $this->response->setJSON(['message'=>"Selamat datang {$pegawai['nama_depan']}"])
                    ->setStatusCode(200);
    }

    public function viewLogin(){
        return view('login');
    }

    public function lupaPassword(){
        $_email = $this->request->getPost('email');
        $password = $this->request->getPost('sandi');

        $pegawai = (new PegawaiModel())->where('email', $_email)->first();

        if($pegawai == null){
            return $this->response->setJSON(['message'=>'Email tidak terdaftar'])
                        ->setStatusCode(404);
        }

        $sandibaru =substr( md5( date('Y-m-dH:i:s')),5,5 );
        $pegawai['sandi'] = password_hash($sandibaru,PASSWORD_BCRYPT);
        $r = (new PegawaiModel())->update($pegawai['id'], $pegawai);

        if($r == false ){
            return $this->response->setJSON(['message'=>'Gagal merubah sandi'])
                        ->setStatusCode(502);
        }

        $email = new Email(new ConfigEmail());
        $email->setFrom('vbona2016@gmail.com', 'Sistem Informasi Sekolah');
        $email->setTo($pegawai['email']);
        $email->setSubject('Reset sandi Pengguna');
        $email->setMessage("Halo {$pegawai['nama_depan']} telah meminta reset baru. Reset baru kamu adalah <b>$sandibaru</b>");
        $r = $email->send();

        if($r == true){
            return $this->response->setJSON(['message'=>"Sandi baru sudah dikirim ke alamat email $_email"])
                                  ->setStatusCode(200);
        }else{
            return $this->response->setJSON(['message'=>"Maaf ada kesalahan pengiriman email $_email"])
                                 ->setStatusCode(500);
        }
    }

    public function viewLupaPassword(){
        return view('lupa_password');
    }

    public function logout(){
        $this->session->destroy();
        return redirect()->to('login');
    }

    public function index()
    {
        return view('pegawai/table');       
    }
    public function all(){
        $pegm = PegawaiModel::view();
         
        return (new Datatable($pegm))
        ->setFieldFilter([ 'nip' , 'nama_depan' , 'gelar' ,  'email', 'nama'])
        ->draw();
    }
    public function show($id){
        $r = (new PegawaiModel())->where('id', $id)->first();
        if ($r == null) throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }
    public function store(){
        $pegm = new PegawaiModel();

        $id =  $pegm -> insert([
            'nip'       => $this->request->getVar('nip'),
            'nama_depan'    => $this->request->getVar('nama_depan'),
            'gelar_depan'         => $this->request->getVar('gelar_depan'),
            'email'  => $this->request->getVar('email'),
            'bagian_id'     => $this->request->getVar('bagian_id'),
        ]);
        return $this->response->setJSON(['id' => $id])
        ->setStatusCode(intval($id)> 0 ? 200 : 406);  
    }
    public function update(){
        $pegm = new PegawaiModel();
        $id = (int)$this->request->getVar('id');
        
        if($pegm->find($id) == null)
        throw PageNotFoundException::forPageNotFound();
        
        $hasil = $pegm->update($id,[
            'nip'       => $this->request->getVar('nip'),
            'nama_depan'    => $this->request->getVar('nama_depan'),
            'gelar_depan'         => $this->request->getVar('gelar_depan'),
            'email'  => $this->request->getVar('email'),
            'bagian_id'     => $this->request->getVar('bagian_id'),
        ]);
        return $this->response->setJSON(['result'=>$hasil]);
    }
    public function delete(){
        $pegm = new PegawaiModel();
        $id = $this->request->getVar('id');
        $hasil = $pegm->delete($id);
        return $this->response->setJSON(['result' => $hasil]);
    }

}