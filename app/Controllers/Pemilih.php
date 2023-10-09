<?php

namespace App\Controllers;

use \App\Models\PemilihModel;
use \App\Models\KetumModel;

class Pemilih extends BaseController
{

    protected $pemilihModel;
    protected $ketumModel;
    public function __construct(){
       $this->pemilhModel = new PemilihModel();
       $this->ketumModel = new KetumModel();
    }
    public function index()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        return view('pemilih/home');
    }

    public function Presma()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }
        $presma = $this->pemilhModel->calonPresma();
     

        $data = [
            'presma' => $presma, 
            'validation' => \Config\Services::validation()
        ];


        return view('pemilih/presma', $data);
    }

    

    public function vote_presma()
    {
        if (!$this->validate( [ 
            'nim_pemilih' => [
                'rules' => 'is_unique[kotak_presma.nim_pemilih]',
                'errors' => [
                    'is_unique' => 'Vote hanya diperbolehkan sekali!!'
                ] ]
            ] )) 
        { 
            $validation = \Config\Services::validation();
            return redirect()->to('/pemilih/presma')->withInput()->with('validation', $validation);
        }
        $pemilih = $this->request->getVar('nim_pemilih');
        $presma = $this->request->getVar('nim_presma');
        $nama = $this->request->getVar('nama_presma');

        

        $this->pemilhModel->save([
            'nim_pemilih' => $pemilih,
            'nim_presma' => $presma,
            'nama_presma' => $nama
        ]);
        session()->setFlashdata('pesan', 'Selamat Anda sudah memilih , Terimakasih atas partisipasinya.');
        return redirect()->to('/pemilih/presma');

        
        
    }

    public function ketum_himakom()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }

        $hima = $this->ketumModel->ketum_himakom();
     

        $data = [
            'hima' => $hima, 
            'validation' => \Config\Services::validation()
        ];


        return view('pemilih/ketum_himakom', $data);
    }

    public function vote_himakom()
    {
        if (!$this->validate( [ 
            'nim_pemilih' => [
                'rules' => 'is_unique[kotak_ketum.nim_pemilih]',
                'errors' => [
                    'is_unique' => 'Vote hanya diperbolehkan sekali!!'
                ] ]
            ] )) 
        { 
            $validation = \Config\Services::validation();
            return redirect()->to('/pemilih/ketum_himakom')->withInput()->with('validation', $validation);
        }
        $pemilih = $this->request->getVar('nim_pemilih');
        $ketum = $this->request->getVar('nim_ketum');
        $nama = $this->request->getVar('nama_ketum');
        $hima = $this->request->getVar('hima');
        
      
        $this->ketumModel->save([
            'nim_pemilih' => $pemilih,
            'nama_ketum' => $nama,
            'nim_ketum' => $ketum,
            'hima' => $hima
        ]);
        session()->setFlashdata('pesan', 'Selamat Anda sudah memilih , Terimakasih atas partisipasinya.');
        return redirect()->to('/pemilih/ketum_himakom');
    }

    public function ketum_himak()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }

        $hima = $this->ketumModel->ketum_himak();
     

        $data = [
            'hima' => $hima, 
            'validation' => \Config\Services::validation()
        ];


        return view('pemilih/ketum_himak', $data);
    }

    public function vote_himak()
    {
        if (!$this->validate( [ 
            'nim_pemilih' => [
                'rules' => 'is_unique[kotak_ketum.nim_pemilih]',
                'errors' => [
                    'is_unique' => 'Vote hanya diperbolehkan sekali!!'
                ] ]
            ] )) 
        { 
            $validation = \Config\Services::validation();
            return redirect()->to('/pemilih/ketum_himak')->withInput()->with('validation', $validation);
        }
        $pemilih = $this->request->getVar('nim_pemilih');
        $ketum = $this->request->getVar('nim_ketum');
        $nama = $this->request->getVar('nama_ketum');
        $hima = $this->request->getVar('hima');
        
      
        $this->ketumModel->save([
            'nim_pemilih' => $pemilih,
            'nama_ketum' => $nama,
            'nim_ketum' => $ketum,
            'hima' => $hima
        ]);
        session()->setFlashdata('pesan', 'Selamat Anda sudah memilih , Terimakasih atas partisipasinya.');
        return redirect()->to('/pemilih/ketum_himak');
    }

    public function ketum_hikom()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }

        $hima = $this->ketumModel->ketum_hikom();
     

        $data = [
            'hima' => $hima, 
            'validation' => \Config\Services::validation()
        ];


        return view('pemilih/ketum_hikom', $data);
    }

    public function vote_hikom()
    {
        if (!$this->validate( [ 
            'nim_pemilih' => [
                'rules' => 'is_unique[kotak_ketum.nim_pemilih]',
                'errors' => [
                    'is_unique' => 'Vote hanya diperbolehkan sekali!!'
                ] ]
            ] )) 
        { 
            $validation = \Config\Services::validation();
            return redirect()->to('/pemilih/ketum_hikom')->withInput()->with('validation', $validation);
        }
        $pemilih = $this->request->getVar('nim_pemilih');
        $ketum = $this->request->getVar('nim_ketum');
        $nama = $this->request->getVar('nama_ketum');
        $hima = $this->request->getVar('hima');
        
      
        $this->ketumModel->save([
            'nim_pemilih' => $pemilih,
            'nama_ketum' => $nama,
            'nim_ketum' => $ketum,
            'hima' => $hima
        ]);
        session()->setFlashdata('pesan', 'Selamat Anda sudah memilih , Terimakasih atas partisipasinya.');
        return redirect()->to('/pemilih/ketum_hikom');
    }

    public function ketum_himen()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }

        $hima = $this->ketumModel->ketum_himen();
     

        $data = [
            'hima' => $hima, 
            'validation' => \Config\Services::validation()
        ];


        return view('pemilih/ketum_himen', $data);
    }

    public function vote_himen()
    {
        if (!$this->validate( [ 
            'nim_pemilih' => [
                'rules' => 'is_unique[kotak_ketum.nim_pemilih]',
                'errors' => [
                    'is_unique' => 'Vote hanya diperbolehkan sekali!!'
                ] ]
            ] )) 
        { 
            $validation = \Config\Services::validation();
            return redirect()->to('/pemilih/ketum_himen')->withInput()->with('validation', $validation);
        }
        $pemilih = $this->request->getVar('nim_pemilih');
        $ketum = $this->request->getVar('nim_ketum');
        $nama = $this->request->getVar('nama_ketum');
        $hima = $this->request->getVar('hima');
        
      
        $this->ketumModel->save([
            'nim_pemilih' => $pemilih,
            'nama_ketum' => $nama,
            'nim_ketum' => $ketum,
            'hima' => $hima
        ]);
        session()->setFlashdata('pesan', 'Selamat Anda sudah memilih , Terimakasih atas partisipasinya.');
        return redirect()->to('/pemilih/ketum_himen');

    }

    public function ketum_elsa()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }

        $hima = $this->ketumModel->ketum_elsa();
     

        $data = [
            'hima' => $hima, 
            'validation' => \Config\Services::validation()
        ];


        return view('pemilih/ketum_elsa', $data);
    }

    public function vote_elsa()
    {
        if (!$this->validate( [ 
            'nim_pemilih' => [
                'rules' => 'is_unique[kotak_ketum.nim_pemilih]',
                'errors' => [
                    'is_unique' => 'Vote hanya diperbolehkan sekali!!'
                ] ]
            ] )) 
        { 
            $validation = \Config\Services::validation();
            return redirect()->to('/pemilih/ketum_elsa')->withInput()->with('validation', $validation);
        }
        $pemilih = $this->request->getVar('nim_pemilih');
        $ketum = $this->request->getVar('nim_ketum');
        $nama = $this->request->getVar('nama_ketum');
        $hima = $this->request->getVar('hima');
        
      
        $this->ketumModel->save([
            'nim_pemilih' => $pemilih,
            'nama_ketum' => $nama,
            'nim_ketum' => $ketum,
            'hima' => $hima
        ]);
        session()->setFlashdata('pesan', 'Selamat Anda sudah memilih , Terimakasih atas partisipasinya.');
        return redirect()->to('/pemilih/ketum_elsa');
        
    }

    public function biodata_himakom()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }

        $hima = $this->ketumModel->ketum_himakom();
        $presma = $this->pemilhModel->calonPresma();
        
     

        $data = [
            'hima' => $hima, 
            'presma' => $presma,
            'validation' => \Config\Services::validation()
        ];
        return view('pemilih/biodata_himakom', $data);
    }

    public function biodata_himak()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }

        $hima = $this->ketumModel->ketum_himak();
        $presma = $this->pemilhModel->calonPresma();
        
     

        $data = [
            'hima' => $hima, 
            'presma' => $presma,
            'validation' => \Config\Services::validation()
        ];
        return view('pemilih/biodata_himak', $data);
    }

    public function biodata_hikom()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }

        $hima = $this->ketumModel->ketum_hikom();
        $presma = $this->pemilhModel->calonPresma();
        
     

        $data = [
            'hima' => $hima, 
            'presma' => $presma,
            'validation' => \Config\Services::validation()
        ];
        return view('pemilih/biodata_himakom', $data);
    }

    public function biodata_himen()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }

        $hima = $this->ketumModel->ketum_himen();
        $presma = $this->pemilhModel->calonPresma();
        
     

        $data = [
            'hima' => $hima, 
            'presma' => $presma,
            'validation' => \Config\Services::validation()
        ];
        return view('pemilih/biodata_himen', $data);
    }

    public function biodata_elsa()
    {
        if (session()->get('nim')=='') {
            session()->setFlashdata('pesan', 'Anda harus login!!');

            return redirect()->to('/pages/login');
        }

        $hima = $this->ketumModel->ketum_elsa();
        $presma = $this->pemilhModel->calonPresma();
        
     

        $data = [
            'hima' => $hima, 
            'presma' => $presma,
            'validation' => \Config\Services::validation()
        ];
        return view('pemilih/biodata_elsa', $data);
    }





}