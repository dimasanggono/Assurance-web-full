<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKendaran extends Model
{
    public function AllData($id_user)
    {
        return $this->db->table('tbl_kendaran')->join('tbl_user', 'tbl_user.id_user = tbl_kendaran.id_user', 'left')->where('tbl_kendaran.id_user', $id_user)->get()->getResultArray();
    }

    public function InsertData($data, $id_user)
    {
        $data["id_user"] = $id_user;

        $this->db->table('tbl_kendaran')->insert($data);
    }

    public function DetailData($id_kendaran)
    {
        return $this->db->table('tbl_kendaran')->join('tbl_user', 'tbl_user.id_user = tbl_kendaran.id_user', 'left')->where('id_kendaran', $id_kendaran)->get()->getRowArray();
    }

    public function UpdateData($data, $id_kendaran)
    {
        // Update hanya pada data yang sesuai dengan id_kendaran
        $this->db->table('tbl_kendaran')
            ->where('id_kendaran', $id_kendaran)
            ->update($data);
    }



    public function deleteData($id_kendaran)
    {
        return $this->db->table('tbl_kendaran')->delete(['id_kendaran' => $id_kendaran]);
    }

    public function isNopolUnique($nopol)
    {
        $query = $this->db->table('tbl_kendaran')->where('nopol', $nopol)->get();
        return $query->getRow() === null;
    }
}
