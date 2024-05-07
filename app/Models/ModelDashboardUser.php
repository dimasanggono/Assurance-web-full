<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDashboardUser extends Model
{
    public function getnotif($tgl)
    {
        // Misalnya, Anda ingin mendapatkan status klaim untuk pengguna yang saat ini masuk
        $id_user = session()->get('id_user');

        // Ambil status klaim untuk pengguna saat ini berdasarkan tanggal
        $status_klaim = $this->db->table('tbl_klaim')
            ->where('tgl_update', $tgl)
            ->where('id_user', $id_user)
            ->select('status')
            ->get()
            ->getRow();
        // Jika status_klaim tidak null, kembalikan status
        if ($status_klaim) {
            return $status_klaim->status;
        } else {
            // Jika tidak ada status klaim, kembalikan nilai default atau sesuai kebutuhan Anda
            return "Tidak ada status";
        }
    }
}
