<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;
use App\Models\ModelDashboard;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardAdmin extends BaseController
{
    public function __construct()
    {
        $this->ModalDashboard = new ModelDashboard();
        $this->ModelAdmin = new ModelAdmin();
    }
    public function index()
    {
        $tgl = date('Y-m-d');

        $data = [
            'title' => 'Dashboard Admin',
            "subtitle" => "Dashboard",
            "menu" => "Dashboard",
            "pages" => "Admin/dashboard",
            'total_user' => $this->ModalDashboard->total_user(),
            'total_pegawai' => $this->ModalDashboard->total_pegawai(),
            "klaim" => $this->ModalDashboard->AllData($tgl),
            "total_klaim" => $this->ModalDashboard->total_klaim(),
            "total_day" => $this->ModalDashboard->total_klaim_day($tgl),
            'getnotif' => $this->ModalDashboard->getnotif($tgl),
        ];
        return view('v_template_back', $data);
    }

    public function editData($id_klaim)
    {
        $data = [
            'title' => 'Edit Klaim',
            "subtitle" => "Edit Klaim",
            "menu" => "Klaim",
            "pages" => "Admin/Klaim/edit",
            'klaim' => $this->ModelKlaim->DetailData($id_klaim)
        ];
        return view('v_template_back', $data);
    }

    public function UpdateStatus($id_klaim)
    {
        $data = [
            'id_klaim' => $id_klaim,
            'status' => $this->request->getPost('status'),
            'tgl_update' => date('Y-m-d'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'id_admin' => session()->get('id_admin'),
        ];
        $this->ModelKlaim->UpdateData($data);
        return redirect()->to(base_url('Admin/Klaim/index'));
    }

    public function DetailData($id_klaim)
    {
        $data = [
            'title' => 'Detail Klaim',
            "subtitle" => "detail klaim",
            "menu" => "Klaim",
            "pages" => "Admin/klaim/detail",
            "klaim" => $this->ModelKlaim->detailData($id_klaim),
        ];
        return view('v_template_back', $data);
    }
}
