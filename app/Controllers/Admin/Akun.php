<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelAdmin;
use App\Models\ModelDashboard;

class Akun extends BaseController
{

    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin();
        $this->ModelDashboard = new ModelDashboard();
    }
    public function index()
    {
        $tgl = date('Y-m-d');
        $data = [
            'title' => 'Akun',
            "subtitle" => "Akun",
            "menu" => "Akun",
            "pages" => "Admin/Akun/index",
            "admin" => $this->ModelAdmin->DetailData(session()->get('id_admin')),
            'getnotif' => $this->ModelDashboard->getnotif($tgl),
        ];
        return view('v_template_back', $data);
    }

    public function editData()
    {
        $data = [
            'title' => 'Edit Akun',
            "subtitle" => "Edit Akun",
            "menu" => "Akun",
            "pages" => "Admin/Akun/edit",
            "admin" => $this->ModelAdmin->DetailData(session()->get('id_admin')),
        ];
        return view('v_template_back', $data);
    }

    public function UpdateData()
    {
        $id_admin = session()->get('id_admin');

        if ($this->validate([
            'tand_tgn' => [
                'label'  => 'Tanda Tangan',
                'rules'  => 'uploaded[tand_tgn]|is_image[tand_tgn]|mime_in[tand_tgn,image/png]',
                'errors' => [
                    'uploaded' => 'Tanda Tangan wajib diunggah!',
                    'is_image' => 'Tanda Tangan harus berupa file gambar.',
                    'mime_in'  => 'Format Tanda Tangan harus PNG.',
                ],
            ],
        ])) {
            $foto = $this->request->getFile('tand_tgn');

            if ($foto->isValid() && !$foto->hasMoved()) {
                $nama_file = $foto->getRandomName();
                $foto->move('foto', $nama_file);

                // Hapus file tanda tangan lama jika ada
                $admin = $this->ModelUser->DetailData($id_admin);
                if ($admin['tand_tgn'] != "") {
                    unlink('foto/' . $admin['tand_tgn']);
                }

                $data = [
                    'id_admin'   => $id_admin,
                    'nama_admin' => $this->request->getPost('nama_admin'),
                    'tand_tgn'   => $nama_file,

                ];

                $this->ModelAdmin->UpdateData($data);

                session()->setFlashdata('message', 'Data berhasil diupdate!');
                return redirect()->to(base_url('Admin/Akun/index'));
            } else {
                session()->setFlashdata('errors', ['Tanda Tangan gagal diunggah.']);
                return redirect()->to(base_url('Admin/Akun/editData'));
            }
        } else {
            // Jika validasi gagal
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Admin/Akun/editData'));
        }
    }
}
