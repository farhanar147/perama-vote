<?php

namespace App\Models;

use CodeIgniter\Model;

class BemModel extends Model
{
    protected $table      = 'calon_presma';
    protected $primaryKey = 'id_presma ';
    protected $allowedFields = ['nama', 'nim', 'tanggal_lahir', 'no_urut', 'visi', 'foto'];

  
    public function Presma()
    {
        return $this->db->table('calon_presma')->get()->getResultArray();
    }

    public function getPresma($id = false)
    {
        if ($id == false) {
             return $this->findAll();
        }

        return $this->where(['id_presma' => $id])->first();
    }

   
    
}