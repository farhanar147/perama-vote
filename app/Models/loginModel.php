<?php

namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model
{
    
    public function cek_login($nim, $tanggal_lahir)
    {
        return $this->db->table('pemilih')
        ->where(array(
            'nim' => $nim,
            'tanggal_lahir' =>$tanggal_lahir
            ))
        ->get()->getRowArray();
    }

    public function admin_login($user, $password)
    {
        return $this->db->table('admin')
        ->where(array(
            'username' => $user,
            'password' =>$password
            ))
        ->get()->getRowArray();
    }



}