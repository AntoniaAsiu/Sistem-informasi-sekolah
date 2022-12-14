<?php

namespace App\Controllers;
use Agoenxz21\Datatables\Datatable;
use App\Controllers\BaseController;
use App\Models\KehadiranguruModel;
use App\Models\PegawaiModel;
use App\Models\PendidikanguruModel;
use CodeIgniter\Exceptions\PageNotFoundException;

use function PHPUnit\Framework\returnSelf;

class PendidikanGuruController extends BaseController
{
    
    public function index()
    {
         // jika user belum login
         if(! session()->get('pengguna')){
            // maka redirct ke halaman login
            return redirect()->to('/login'); 
        }else{
            return view('backend/pendidikanguru/table',[
                'pegawai' => (new PegawaiModel())->findAll()
                ]);
        };          
    }
    public function all(){
        
        $pgm = PendidikanguruModel::view();
      
        
        return (new Datatable ($pgm))
                ->setFieldFilter([ 'nama_depan','nama_belakang', 'jenjang', 'jurusan', 'asal_sekolah'])
                ->draw();
    }
    public function show($id){
        $r = (new PendidikanguruModel())->where('id', $id)->first();
        if ($r == null) throw PageNotFoundException::forPageNotFound();

        return $this->response->setJSON($r);
    }
    public function store(){
        $pgm = new PendidikanguruModel();

        $id =  $pgm -> insert([
            'pegawai_id'  => $this->request->getVar('pegawai_id'),
            'jenjang'     => $this->request->getVar('jenjang'),
            'jurusan'     => $this->request->getVar('jurusan'),
            'asal_sekolah'=> $this->request->getVar('asal_sekolah'),
            'tahun_lulus'=> $this->request->getVar('tahun_lulus'),
            'nilai_ijasah'=> $this->request->getVar('nilai_ijasah'),
        ]);
        return $this->response->setJSON(['id' => $id])
        ->setStatusCode(intval($id)> 0 ? 200 : 406);  
    }
    public function update(){
        $pgm = new PendidikanguruModel();
        $id = (int)$this->request->getVar('id');
        
        if($pgm->find($id) == null)
        throw PageNotFoundException::forPageNotFound();
        
        $hasil = $pgm->update($id,[
            'pegawai_id'  => $this->request->getVar('pegawai_id'),
            'jenjang'     => $this->request->getVar('jenjang'),
            'jurusan'     => $this->request->getVar('jurusan'),
            'asal_sekolah'=> $this->request->getVar('asal_sekolah'),
            'tahun_lulus'=> $this->request->getVar('tahun_lulus'),
            'nilai_ijasah'=> $this->request->getVar('nilai_ijasah'),
        ]);
        return $this->response->setJSON(['result'=>$hasil]);
    }
    public function delete(){
        $pgm = new PendidikanguruModel();
        $id = $this->request->getVar('id');
        $hasil = $pgm->delete($id);
        return $this->response->setJSON(['result' => $hasil]);
    }    
}
