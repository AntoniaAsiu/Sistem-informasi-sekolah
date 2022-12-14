<?php

namespace App\Controllers;

use Agoenxz21\Datatables\Datatable;
use App\Controllers\BaseController;

use App\Models\KelasModel;
use App\Models\PegawaiModel;
use App\Models\TahunAjarModel;
use CodeIgniter\Exceptions\PageNotFoundException;



class KelasController extends BaseController
{
    public function index()
    {
         // jika user belum login
         if(! session()->get('pengguna')){
            // maka redirct ke halaman login
            return redirect()->to('/login'); 
        }else{
            return view('backend/kelas/table',[
                'pegawai' => (new PegawaiModel())->findAll()
                ]);          
                return view('backend/kelas/table',[
                    'tahun_ajar' => (new TahunAjarModel())->findAll()
                    ]); 
        };         
    }
    public function all(){
        $km = KelasModel::view();
         
        return (new Datatable($km))
        ->setFieldFilter([ 'tingkat' , 'kelas' , 'nama_depan' ,  'tahun_ajar'])
        ->draw();
    }
    public function show($id){
        $r = (new KelasModel())->where('id', $id)->first();
        if ($r == null) throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }
    public function store(){
        $km = new KelasModel();

        $id =  $km -> insert([
            'tingkat'       => $this->request->getVar('tingkat'),
            'kelas'    => $this->request->getVar('kelas'),
            'pegawai_id'         => $this->request->getVar('pegawai_id'),
            'tahun_ajar_id'  => $this->request->getVar('tahun_ajar_id'),
        ]);
        return $this->response->setJSON(['id' => $id])
        ->setStatusCode(intval($id)> 0 ? 200 : 406);  
    }
    public function update(){
        $km = new KelasModel();
        $id = (int)$this->request->getVar('id');
        
        if($km->find($id) == null)
        throw PageNotFoundException::forPageNotFound();
        
        $hasil = $km->update($id,[
            'tingkat'       => $this->request->getVar('tingkat'),
            'kelas'    => $this->request->getVar('kelas'),
            'pegawai_id'         => $this->request->getVar('pegawai_id'),
            'tahun_ajar_id'  => $this->request->getVar('tahun_ajar_id'),
        ]);
        return $this->response->setJSON(['result'=>$hasil]);
    }
    public function delete(){
        $km = new KelasModel();
        $id = $this->request->getVar('id');
        $hasil = $km->delete($id);
        return $this->response->setJSON(['result' => $hasil]);
    }    
}
