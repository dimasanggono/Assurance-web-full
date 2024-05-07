<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDashboard extends Model
{

    public function total_user()
    {
        return $this->db->table('tbl_user')->countAll();
    }

    public function total_pegawai()
    {
        return $this->db->table('tbl_admin')->countAll();
    }

    public function total_klaim()
    {
        return $this->db->table('tbl_klaim')->countAll();
    }

    public function total_klaim_day($tgl)
    {
        return $this->db->table('tbl_klaim')->where('DATE(tgl_upload)', $tgl)->countAllResults();
    }
    public function AllData($tgl)
    {
        return $this->db->table('tbl_klaim')->join('tbl_user', 'tbl_user.id_user = tbl_klaim.id_user', 'left')->join('tbl_kendaran', 'tbl_kendaran.id_kendaran = tbl_klaim.id_kendaran', 'left')->where('tgl_upload', $tgl)->get()->getResultArray();
    }

    public function getnotif($tgl)
    {
        return $this->db->table('tbl_klaim')->join('tbl_user', 'tbl_user.id_user = tbl_klaim.id_user', 'left')->join('tbl_kendaran', 'tbl_kendaran.id_kendaran = tbl_klaim.id_kendaran', 'left')->where('tgl_upload', $tgl)->where('status', 'pending')->countAllResults();
    }
}
