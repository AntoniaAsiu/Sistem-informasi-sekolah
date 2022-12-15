<?php

namespace App\Controllers;
use Agoenxz21\Datatables\Datatable;
use App\Controllers\BaseController;
use App\Models\TahunAjarModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class TahunAjarController extends BaseController
{
    
    public function index()
    {
         // jika user belum login
         if(! session()->get('pengguna')){
            // maka redirct ke halaman login
            return redirect()->to('/login'); 
        }else{
            return view('backend/tahunajar/table'); 
        };     
    }
    public function all(){
        $mm = new TahunAjarModel();
        $mm->select(['id', 'tahun_ajar', 'tgl_mulai', 'tgl_selesai', 'status_aktif']);
        
        return (new Datatable ($mm))
                ->setFieldFilter(['tahun_ajar', 'tgl_mulai' , 'tgl_selesai', 'status_aktif'])
                ->draw();
    }
    public function show($id){
        $r = (new TahunAjarModel())->where('id', $id)->first();
        if ($r == null) throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }
    public function store(){
        $mm = new TahunAjarModel();

        $id =  $mm -> insert([
            'tahun_ajar'       => $this->request->getVar('tahun_ajar'),
            'tgl_mulai'    => $this->request->getVar('tgl_mulai'),
            'tgl_selesai'  => $this->request->getVar('tgl_selesai'),
            'status_aktif'     => $this->request->getVar('status_aktif'),
        ]);
        return $this->response->setJSON(['id' => $id])
        ->setStatusCode(intval($id)> 0 ? 200 : 406);  
    }
    public function update(){
        $mm = new TahunAjarModel();
        $id = (int)$this->request->getVar('id');
        
        if($mm->find($id) == null)
        throw PageNotFoundException::forPageNotFound();
        
        $hasil = $mm->update($id,[
            'tahun_ajar'       => $this->request->getVar('tahun_ajar'),
            'tgl_mulai'    => $this->request->getVar('tgl_mulai'),
            'tgl_selesai'  => $this->request->getVar('tgl_selesai'),
            'status_aktif'     => $this->request->getVar('status_aktif'),
        ]);
        return $this->response->setJSON(['result'=>$hasil]);
    }
    public function delete(){
        $mm = new TahunAjarModel();
        $id = $this->request->getVar('id');
        $hasil = $mm->delete($id);
        return $this->response->setJSON(['result' => $hasil]);
    }   
}

