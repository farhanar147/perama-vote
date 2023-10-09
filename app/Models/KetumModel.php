<?php

namespace App\Models;

use CodeIgniter\Model;

class KetumModel extends Model
{
    protected $table      = 'kotak_ketum';
    protected $primaryKey = 'id_kotak';
    protected $allowedFields = ['nim_pemilih', 'nama_ketum', 'nim_ketum', 'hima'];

  
    public function ketum_himakom()
    {
        return $this->db->table('calon_ketum')
        ->join('program_ketum', 'calon_ketum.id_ketum = program_ketum.id_ketum')
        ->join('misi_ketum', 'calon_ketum.id_ketum = misi_ketum.id_ketum')
        ->where('hima', 'himakom')
        ->get()->getResultArray();
    }

    public function ketum_himak()
    {
        return $this->db->table('calon_ketum')
        ->join('program_ketum', 'calon_ketum.id_ketum = program_ketum.id_ketum')
        ->join('misi_ketum', 'calon_ketum.id_ketum = misi_ketum.id_ketum')
        ->where('hima', 'himak')
        ->get()->getResultArray();
    }

    public function ketum_himen()
    {
        return $this->db->table('calon_ketum')
        ->join('program_ketum', 'calon_ketum.id_ketum = program_ketum.id_ketum')
        ->join('misi_ketum', 'calon_ketum.id_ketum = misi_ketum.id_ketum')
        ->where('hima', 'himen')
        ->get()->getResultArray();
    }

    public function ketum_hikom()
    {
        return $this->db->table('calon_ketum')
        ->join('program_ketum', 'calon_ketum.id_ketum = program_ketum.id_ketum')
        ->join('misi_ketum', 'calon_ketum.id_ketum = misi_ketum.id_ketum')
        ->where('hima', 'hikom')
        ->get()->getResultArray();
    }

    public function ketum_elsa()
    {
        return $this->db->table('calon_ketum')
        ->join('program_ketum', 'calon_ketum.id_ketum = program_ketum.id_ketum')
        ->join('misi_ketum', 'calon_ketum.id_ketum = misi_ketum.id_ketum')
        ->where('hima', 'elsa')
        ->get()->getResultArray();
    }



    

   
}