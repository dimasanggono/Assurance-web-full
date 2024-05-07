<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuthAdmin extends Model
{
    public function loginAdmin($email, $password)
    {
        return $this->db->table('tbl_admin')
            ->where([
                'email' => $email,
                'password' => $password
            ])->get()->getRowArray();
    }
}
