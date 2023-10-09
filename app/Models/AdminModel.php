<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'pemilih';
    protected $primaryKey = 'id_pemilih';
    protected $allowedFields = ['nama', 'nim', 'tanggal_lahir', 'hima', 'status'];

  
    public function Pemilih()
    {
        return $this->db->table('pemilih')->get()->getResultArray();
    }

    public function getPemilih($id = false)
    {
        if ($id == false) {
             return $this->findAll();
        }

        return $this->where(['id_pemilih' => $id])->first();
    }

   
    

   
}