<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKlaim extends Model
{

    public function AllData()
    {
        return $this->db->table('tbl_klaim')->join('tbl_user', 'tbl_user.id_user = tbl_klaim.id_user', 'left')->join('tbl_kendaran', 'tbl_kendaran.id_kendaran = tbl_klaim.id_kendaran', 'left')->get()->getResultArray();
    }

    public function history()
    {
        return $this->db->table('tbl_klaim')->join('tbl_kendaran', 'tbl_kendaran.id_kendaran = tbl_klaim.id_kendaran', 'left')->where('tbl_klaim.id_user', session()->get('id_user'))->get()->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tbl_klaim')
            ->join('tbl_user', 'tbl_user.id_user = tbl_klaim.id_user', 'left')
            ->join('tbl_kendaran', 'tbl_kendaran.id_kendaran = tbl_klaim.id_kendaraan', 'left') // Perbaiki alias tabel menjadi 'tbl_kendaraan'
            ->where('id_user', session()->get('id_user'))
            ->insert($data);
    }

    public function DetailData($id_klaim)
    {
        return $this->db->table('tbl_klaim')->join('tbl_user', 'tbl_user.id_user = tbl_klaim.id_user', 'left')->join('tbl_kendaran', 'tbl_kendaran.id_kendaran = tbl_klaim.id_kendaran', 'left')->join('tbl_admin', 'tbl_admin.id_admin = tbl_klaim.id_admin', 'left')->where('id_klaim', $id_klaim)->get()->getRowArray();
    }

    public function UpdateData($data)
    {
        return $this->db->table('tbl_klaim')->where('id_klaim', $data['id_klaim'])->update($data);
    }

    public function getByDate($tgl)
    {
        return $this->db->table('tbl_klaim')->where('tgl_upload', $tgl)->get()->getResultArray();
    }

    public function DeleteData($id_klaim)
    {
        return $this->db->table('tbl_klaim')->where('id_klaim', $id_klaim)->delete();
    }
}
