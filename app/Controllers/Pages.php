<?php

namespace App\Controllers;

use \App\Models\PresmaModel;

class Pages extends BaseController
{
    protected $presmaModel;
    public function __construct(){
       $this->presmaModel = new PresmaModel();
    }

    public function index()
    {
        return view('pages/home');
    }

    public function cek_dpt(){
        return view('pages/cek_dpt');
    }

    public function login(){
        return view('pages/login');
    }
    
    public function admin_login(){
        return view('pages/login_admin');
    }

    public function biodata(){
        $presma = $this->presmaModel->getPresma();
        
        $data = [
            'presma' => $presma
        ];
        
        return view('pages/biodata', $data);
    }
    public function presma($id_presma){
        $presma = $this->presmaModel->detailPresma($id_presma);
        $program = $this->presmaModel->programPresma($id_presma);
        $misi = $this->presmaModel->misiPresma($id_presma);
        $data = [
            'presma' => $presma,
            'program' => $program,
            'misi' => $misi
        ];

        return view('pages/presma', $data);
    }

    public function himakom()
    {
        $himakom = $this->presmaModel->himakom();
        $data = [
            'himakom' => $himakom 
        ];

        return view('pages/himakom', $data);
    }
    
    public function himak()
    {
        $himak = $this->presmaModel->himak();
        $data = [
            'himak' => $himak 
        ];

        return view('pages/himak', $data);
    }
    
    public function himen()
    {
        $himen = $this->presmaModel->himen();
        $data = [
            'himen' => $himen 
        ];

        return view('pages/himen', $data);
    }

    public function hikom()
    {
        $hikom = $this->presmaModel->hikom();
        $data = [
            'hikom' => $hikom 
        ];

        return view('pages/hikom', $data);
    }

    public function elsa()
    {
        $elsa = $this->presmaModel->elsa();
        $data = [
            'elsa' => $elsa 
        ];

        return view('pages/elsa', $data);
    }


}

