<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelDashboard;

class User extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
        $this->ModalDashboard = new ModelDashboard();
    }
    public function index()
    {
        $tgl = date('Y-m-d');
        $data = [
            'title' => 'Data User',
            "subtitle" => "Data User",
            "pages" => "Admin/user/index",
            "user" => $this->ModelUser->allData(),
            "menu" => "User",
            'getnotif' => $this->ModalDashboard->getnotif($tgl),
        ];
        return view('v_template_back', $data);
    }

    public function insert()
    {
        $data = [
            "nama_user" => $this->request->getPost('nama_user'),
            "no_tlpn" => $this->request->getPost('no_tlpn'),
            "email" => $this->request->getPost('email'),
            "password" => sha1($this->request->getPost('password')),
        ];
        $this->ModelUser->insertData($data);
        session()->setFlashdata('success', 'Data Berhasilsil Ditambahkan');
        return redirect()->to(base_url('admin/user'));
    }
    public function edit($id_user)
    {
        $data = [
            'title' => 'Edit User',
            "subtitle" => "Edit User",
            "menu" => "User",
            "pages" => "Admin/user/edit",
            "user" => $this->ModelUser->DetailData($id_user),
        ];
        return view('v_template_back', $data);
    }

    public function update($id_user)
    {
        $data = [
            "id_user" => $id_user,
            "nama_user" => $this->request->getPost('nama_user'),
            "no_tlpn" => $this->request->getPost('no_tlpn'),
            "email" => $this->request->getPost('email'),
            "password" => sha1($this->request->getPost('password')),
        ];
        $this->ModelUser->editData($data);
        session()->setFlashdata('update', 'Data Berhasil Diupdate');
        return redirect()->to(base_url('admin/user'));
    }

    public function delete($id_user)
    {
        $data = [
            'id_user' => $id_user,
        ];
        $this->ModelUser->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasilsil Dihapus');
        return redirect()->to(base_url('admin/user'));
    }
}
