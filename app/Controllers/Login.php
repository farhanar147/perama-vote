<?php

namespace App\Controllers;

use \App\Models\LoginModel;

class Login extends BaseController
{
    protected $loginModel;
    public function __construct(){
       $this->loginModel = new loginModel();
    }
    public function cek_login()
    {

       if (!$this->validate([
           'nim' => 'required',
           'tanggal_lahir' => 'required'
       ])) {
        return redirect()->to('/pages/login');
       } 
       $nim = $this->request->getPost('nim');
       $tanggal_lahir = $this->request->getPost('tanggal_lahir');
       

        $cek = $this->loginModel->cek_login($nim, $tanggal_lahir);

            
        if 
        (empty($cek)) {

            session()->setFlashdata('pesan', 'NIM dan tanggal lahir tidak terdaftar!');

            return redirect()->to('/pages/login');
            
        }else if 
        (($cek['nim']==$nim) && ($cek['tanggal_lahir']==$tanggal_lahir)) {
            
            session()->set('nim',$cek['nim']);
            session()->set('nama',$cek['nama']);
            session()->set('hima',$cek['hima']);
            
            
            return view('pemilih/home');
            
            
        }
    }

    public function cek_dpt()
    {
        if (!$this->validate([
            'nim' => 'required',
            'tanggal_lahir' => 'required'
        ])) {
         return redirect()->to('/pages/cek_dpt');
        } 
        $nim = $this->request->getPost('nim');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $kosong = '';
 
         $cek = $this->loginModel->cek_login($nim, $tanggal_lahir);

         if 
        (empty($cek)) {

            session()->setFlashdata('salah', 'NIM dan tanggal lahir tidak terdaftar silakan hubungi admin!');
            
             return redirect()->to('/pages/cek_dpt');
            
        }else if 
        (($cek['nim']==$nim) && ($cek['tanggal_lahir']==$tanggal_lahir)) {
            
             session()->setFlashdata('benar', 'NIM dan tanggal lahir terdaftar silakan Login!');

             return redirect()->to('/pages/cek_dpt');
             
         }
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/pages/login');

    }

    public function admin_login()
    {

       if (!$this->validate([
           'username' => 'required',
           'password' => 'required'
       ])) {
        return redirect()->to('/pages/login_admin');
       } 
       $user = $this->request->getPost('username');
       $password = $this->request->getPost('password');

        $cek = $this->loginModel->admin_login($user, $password);

        if (($cek['username']==$user) && ($cek['password']==$password)) {
            
            session()->set('username',$cek['username']);
            session()->set('nama',$cek['nama']);
            session()->set('jabatan',$cek['jabatan']);
            
            return view('/admin/home');
        }else {
            session()->setFlashdata('pesan', 'Username dan password tidak ditemukan!');

            return redirect()->to('/pages/admin_login');
        }
    }
}
