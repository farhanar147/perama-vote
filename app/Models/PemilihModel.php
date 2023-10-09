<?php

namespace App\Models;

use CodeIgniter\Model;

class PemilihModel extends Model
{
    protected $table      = 'kotak_presma';
    protected $primaryKey = 'id_kotak';
    protected $allowedFields = ['nim_pemilih', 'nim_presma', 'nama_presma'];

  
    public function calonPresma()
    {
        return $this->db->table('calon_presma')
        ->join('program_presma', 'calon_presma.id_presma = program_presma.id_presma')
        ->join('misi_presma', 'calon_presma.id_presma = misi_presma.id_presma')
        ->get()->getResultArray();
    }

    

   
}