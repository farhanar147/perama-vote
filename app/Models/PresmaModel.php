<?php

namespace App\Models;

use CodeIgniter\Model;

class PresmaModel extends Model
{
    public function getPresma()
    {
        return $this->db->table('calon_presma')->get()->getResultArray();
    }

    public function programPresma($id_presma)
    {
        return $this->db->table('program_presma')->where('id_presma',$id_presma )->get()->getRowArray();
    }

    public function misiPresma($id_presma)
    {
        return $this->db->table('misi_presma')->where('id_presma',$id_presma )->get()->getRowArray();
    }

    public function detailPresma($id_presma)
    {
        return $this->db->table('calon_presma')->where('id_presma',$id_presma )->get()->getRowArray();
    }

    public function himakom()
    {
        return $this->db->table('calon_ketum')
        ->join('program_ketum', 'calon_ketum.id_ketum = program_ketum.id_ketum')
        ->join('misi_ketum', 'calon_ketum.id_ketum = misi_ketum.id_ketum')
        ->where('hima', 'himakom')
        ->get()->getResultArray();
    }
   
    public function himak()
    {
        return $this->db->table('calon_ketum')
        ->join('program_ketum', 'calon_ketum.id_ketum = program_ketum.id_ketum')
        ->join('misi_ketum', 'calon_ketum.id_ketum = misi_ketum.id_ketum')
        ->where('hima', 'himak')
        ->get()->getResultArray();
    }

    public function himen()
    {
        return $this->db->table('calon_ketum')
        ->join('program_ketum', 'calon_ketum.id_ketum = program_ketum.id_ketum')
        ->join('misi_ketum', 'calon_ketum.id_ketum = misi_ketum.id_ketum')
        ->where('hima', 'himen')
        ->get()->getResultArray();
    }

    public function hikom()
    {
        return $this->db->table('calon_ketum')
        ->join('program_ketum', 'calon_ketum.id_ketum = program_ketum.id_ketum')
        ->join('misi_ketum', 'calon_ketum.id_ketum = misi_ketum.id_ketum')
        ->where('hima', 'hikom')
        ->get()->getResultArray();
    }

    public function elsa()
    {
        return $this->db->table('calon_ketum')
        ->join('program_ketum', 'calon_ketum.id_ketum = program_ketum.id_ketum')
        ->join('misi_ketum', 'calon_ketum.id_ketum = misi_ketum.id_ketum')
        ->where('hima', 'elsa')
        ->get()->getResultArray();
    }
}