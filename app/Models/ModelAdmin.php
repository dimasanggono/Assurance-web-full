<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_admin')->get()->getResultArray();
    }

    public function insertData($data)
    {
        return $this->db->table('tbl_admin')->insert($data);
    }


    public function DetailData($id_admin)
    {
        return $this->db->table('tbl_admin')->where('id_admin', $id_admin)->get()->getRowArray();
    }

    public function Edit($id_admin)
    {
        return $this->db->table('tbl_admin')->where('id_admin', $id_admin)->get()->getRowArray();
    }

    public function UpdateData($data)
    {
        return $this->db->table('tbl_admin')->where('id_admin', $data['id_admin'])->update($data);
    }

    public function DeleteData($data)
    {
        return $this->db->table('tbl_admin')->delete($data);
    }
}
