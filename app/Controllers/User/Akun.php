<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelDashboardUser;

class Akun extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
        $this->ModelDashboardUser = new ModelDashboardUser();
    }

    public function index()
    {
        $tgl = date('Y-m-d');
        $data = [
            'title' => 'Data User',
            "subtitle" => "Data User",
            "pages" => "User/Akun/index",
            "user" => $this->ModelUser->DetailData(session()->get('id_user')),
            'getnotif' => $this->ModelDashboardUser->getnotif($tgl),

        ];
        return view('v_template_user', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit Akun',
            "subtitle" => "Edit Akun",
            "pages" => "User/Akun/edit",
            "user" => $this->ModelUser->DetailData(session()->get('id_user')),
        ];
        return view('v_template_user', $data);
    }
    public function updateData()
    {
        $id_user = session()->get('id_user');

        $data = [
            "id_user" => $id_user,
            "nama_user" => $this->request->getPost('nama_user'),
            "no_tlpn" => $this->request->getPost('no_tlpn'),
            "password" => sha1($this->request->getPost('password')),
        ];
        $this->ModelUser->editData($data);
        session()->setFlashdata('success', 'Data Berhasil diupdate');
        return redirect()->to(base_url('User/Akun'));
    }
}
