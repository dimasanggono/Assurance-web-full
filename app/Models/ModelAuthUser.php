<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuthUser extends Model
{

    public function loginUser($email, $password)
    {
        return $this->db->table('tbl_user')
            ->where([
                'email' => $email,
                'password' => $password
            ])->get()->getRowArray();
    }

    public function saveData($data)
    {
        return $this->db->table('tbl_user')->insert($data);
    }
}
