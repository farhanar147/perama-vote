<?php

namespace App\Controllers;

use \App\Models\AdminModel;
use \App\Models\BemModel;

class Admin extends BaseController
{

    protected $pemilih;
    protected $presma;
    public function __construct(){
       $this->pemilih = new AdminModel();
       $this->presma = new BemModel();
      
    }
    public function index()
    {
        if (session()->get('username')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        return view('admin/home');
    }

    //pemilih
    public function pemilih()
    {
        if (session()->get('username')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        $pemilih = $this->pemilih->Pemilih();
     

        $data = [
            'pemilih' => $pemilih, 
            'validation' => \Config\Services::validation()
        ];

        return view('admin/pemilih', $data);
    }

    
    public function create()
    {
        if (session()->get('username')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create' ,$data);

    }

    public function save()
    {
        if (session()->get('username')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        //validasi

        if (!$this->validate([
            'nama' => 'required',
            'nim' => 'required|is_unique[pemilih.nim]',
            'tanggal_lahir' => 'required',
            'hima' =>'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/create')->withInput()->with('validation', $validation);
        }

        $nama = $this->request->getVar('nama');
        $nim = $this->request->getVar('nim');
        $tanggal_lahir = $this->request->getVar('tanggal_lahir');
        $hima = $this->request->getVar('hima');
        $status = $this->request->getVar('status');

        $this->pemilih->save([
            'nama' => $nama,
            'nim' => $nim,
            'tanggal_lahir' => $tanggal_lahir,
            'hima' => $hima,
            'status' => $status
        ]);
        session()->setFlashdata('pesan', 'Data telah ditambahkan');
        return redirect()->to('/admin/pemilih');
    }

    public function delete($id)
    {
        $this->pemilih->delete($id);
        session()->setFlashdata('pesan', 'Data telah dihapus');
        return redirect()->to('/admin/pemilih');
    }

    public function edit($id)
    {
        if (session()->get('username')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        $data = [
            'title' => 'Form Edit Data',
            'validation' => \Config\Services::validation(),
            'pemilih' => $this->pemilih->getPemilih($id)
        ];

        return view('admin/edit' ,$data);
    }

    public function update($id)
    {
        if (session()->get('username')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        $nama = $this->request->getVar('nama');
        $nim = $this->request->getVar('nim');
        $tanggal_lahir = $this->request->getVar('tanggal_lahir');
        $hima = $this->request->getVar('hima');
        $status = $this->request->getVar('status');


        $this->pemilih->save([
            'id_pemilih' => $id,
            'nama' => $nama,
            'nim' => $nim,
            'tanggal_lahir' => $tanggal_lahir,
            'hima' => $hima,
            'status' => $status
        ]);
        session()->setFlashdata('pesan', 'Data telah diedit');
        return redirect()->to('/admin/pemilih');
    }
    //pemilih

    //Calon Presma
    public function Presma()
    {
        if (session()->get('username')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        $presma = $this->presma->Presma();
     

        $data = [
            'presma' => $presma, 
            'validation' => \Config\Services::validation()
        ];

        return view('admin/presma', $data);
    }

    
    public function create_presma()
    {
        if (session()->get('username')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create_presma' ,$data);

    }

    public function save_presma()
    {
        if (session()->get('username')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        //validasi

        if (!$this->validate([
            'nama' => 'required',
            'nim' => 'required|is_unique[calon_presma.nim]',
            'tanggal_lahir' => 'required',
            'no_urut' =>'required',
            'visi' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/create_presma')->withInput()->with('validation', $validation);
        }



        $nama = $this->request->getVar('nama');
        $nim = $this->request->getVar('nim');
        $tanggal_lahir = $this->request->getVar('tanggal_lahir');
        $no_urut = $this->request->getVar('no_urut');
        $visi = $this->request->getVar('visi');
        //ambil gambar
        $filefoto =  $this->request->getFile('foto');
        //nggak upload gambar
        if ($filefoto->getError() == 4) {
            $namafoto = 'default.jpg';
        }else {
            //pindah file ke folder img
            $filefoto->move('img');
            //ambil nama file
            $namafoto = $filefoto->getName();
        }


        $this->presma->save([
            'nama' => $nama,
            'nim' => $nim,
            'tanggal_lahir' => $tanggal_lahir,
            'no_urut' => $no_urut,
            'visi' => $visi,
            'foto' => $namafoto
        ]);
        session()->setFlashdata('pesan', 'Data telah ditambahkan');
        return redirect()->to('/admin/presma');
    }

    public function delete_presma($id)
    {
        $this->presma->delete($id);
        session()->setFlashdata('pesan', 'Data telah dihapus');
        return redirect()->to('/admin/presma');
    }

    public function edit_presma($id)
    {
        if (session()->get('username')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        $data = [
            'title' => 'Form Edit Data',
            'validation' => \Config\Services::validation(),
            'presma' => $this->presma->getPresma($id)
        ];

        return view('admin/edit_presma' ,$data);
    }

    public function update_presma($id)
    {
        if (session()->get('username')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        $nama = $this->request->getVar('nama');
        $nim = $this->request->getVar('nim');
        $tanggal_lahir = $this->request->getVar('tanggal_lahir');
        $no_urut = $this->request->getVar('no_urut');
        $visi = $this->request->getVar('visi');
         //ambil gambar
         $filefoto =  $this->request->getFile('foto');
         //nggak upload gambar
         if ($filefoto->getError() == 4) {
             $namafoto = 'default.jpg';
         }else {
             //pindah file ke folder img
             $filefoto->move('img');
             //ambil nama file
             $namafoto = $filefoto->getName();
         }

        $this->presma->save([
            'id_presma' => $id,
            'nama' => $nama,
            'nim' => $nim,
            'tanggal_lahir' => $tanggal_lahir,
            'no_urut' => $no_urut,
            'visi' => $visi,
            'foto' => $namafoto
        ]);
        session()->setFlashdata('pesan', 'Data telah diedit');
        return redirect()->to('/admin/presma');
    }
    //Calon Presma

}