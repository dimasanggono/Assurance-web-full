<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelKlaim;
use App\Models\ModelDashboard;

class Klaim extends BaseController
{
    public function __construct()
    {
        $this->ModelKlaim = new ModelKlaim();
        $this->ModalDashboard = new ModelDashboard();

    }
    public function index()
    {
        $tgl = date('Y-m-d');
        $data = [
            'title' => 'Klaim',
            "subtitle" => "Klaim",
            "menu" => "Klaim",
            "pages" => "Admin/klaim/index",
            'klaim' => $this->ModelKlaim->AllData(),
            'getnotif' => $this->ModalDashboard->getnotif($tgl),

        ];
        return view('v_template_back', $data);
    }

    public function editData($id_klaim)
    {
        $tgl = date('Y-m-d');
        $data = [
            'title' => 'Edit Klaim',
            "subtitle" => "Edit Klaim",
            "menu" => "Klaim",
            "pages" => "Admin/Klaim/edit",
            'klaim' => $this->ModelKlaim->DetailData($id_klaim),
            'getnotif' => $this->ModalDashboard->getnotif($tgl),

        ];
        return view('v_template_back', $data);
    }

    public function UpdateStatus($id_klaim)
    {
        $data = [
            'id_klaim' => $id_klaim,
            'bengkel' => $this->request->getPost('bengkel'),
            'status' => $this->request->getPost('status'),
            'tgl_update' => date('Y-m-d'),
            'id_admin' => session()->get('id_admin'),
            'deskripsi' => $this->request->getPost('deskripsi'),

        ];
        $this->ModelKlaim->UpdateData($data);
        return redirect()->to(base_url('Admin/Klaim/index'));
    }

    public function DetailData($id_klaim)
    {
        $tgl = date('Y-m-d');
        $data = [
            'title' => 'Detail Klaim',
            "subtitle" => "detail klaim",
            "menu" => "Klaim",
            "pages" => "Admin/klaim/detail",
            "klaim" => $this->ModelKlaim->detailData($id_klaim),
            'getnotif' => $this->ModalDashboard->getnotif($tgl),
        ];
        return view('v_template_back', $data);
    }
}
