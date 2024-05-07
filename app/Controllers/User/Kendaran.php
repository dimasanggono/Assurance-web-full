<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ModelKendaran;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelDashboardUser;

class Kendaran extends BaseController

{
    public function __construct()
    {
        $this->ModelKendaran = new ModelKendaran();
        $this->ModelDashboardUser = new ModelDashboardUser();
    }
    public function index()
    {
        $tgl = date('Y-m-d');

        $data = [
            'title' => 'Kendaran',
            "subtitle" => "kendaran",
            "menu" => "kendaran",
            "pages" => "User/Kendaran/index",
            "kendaraan" => $this->ModelKendaran->AllData($id_user = session()->get('id_user')),
            'getnotif' => $this->ModelDashboardUser->getnotif($tgl),
        ];
        return view('v_template_user', $data);
    }

    public function Add()
    {
        $data = [
            'title' => 'Kendaraan',
            "subtitle" => "kendaraan",
            "menu" => "kendaraan",
            "pages" => "User/Kendaran/add",
        ];
        return view('v_template_user', $data);
    }

    public function insert()
    {
        $id_user = session()->get('id_user');
        $nopol = $this->request->getPost('nopol');

        // Lakukan pengecekan apakah nomor polisi sudah ada di database
        if ($this->ModelKendaran->isNopolUnique($nopol)) {
            $data = [
                'nopol' => $nopol,
                'norang' => $this->request->getPost('norang'),
                'nosin' => $this->request->getPost('nosin'),
                'merk' => $this->request->getPost('merk'),
                'tipe' => $this->request->getPost('tipe'),
                'tahun' => $this->request->getPost('tahun'),
                'warna' => $this->request->getPost('warna'),
            ];
            $this->ModelKendaran->insertData($data, $id_user);
            session()->setFlashdata('success', 'Data Berhasil ditambahkan');
            return redirect()->to(base_url('User/Kendaran'));
        } else {
            session()->setFlashdata('error', 'Nomor Polisi sudah ada');
            return redirect()->back()->withInput();
        }
    }

    public function edit($id_kendaran)
    {
        $id_user = session()->get('id_user');
        $data = [
            'title' => 'Edit Kendaraan',
            "subtitle" => "Edit Kendaraan",
            "menu" => "kendaraan",
            "pages" => "User/Kendaran/edit",
            "kendaraan" => $this->ModelKendaran->DetailData($id_kendaran),
        ];
        return view('v_template_user', $data);
    }

    public function UpdateData($id_kendaran)
    {
        $data = [
            'id_kendaran' => $id_kendaran,
            'nopol' => $this->request->getPost('nopol'),
            'norang' => $this->request->getPost('norang'),
            'nosin' => $this->request->getPost('nosin'),
            'merk' => $this->request->getPost('merk'),
            'tipe' => $this->request->getPost('tipe'),
            'tahun' => $this->request->getPost('tahun'),
            'warna' => $this->request->getPost('warna'),
        ];
        // Meneruskan $id_kendaran ke model saat memanggil UpdateData()
        $this->ModelKendaran->UpdateData($data, $id_kendaran);
        session()->setFlashdata('success', 'Data Berhasil ditambahkan');
        return redirect()->to(base_url('User/Kendaran'));
    }


    public function deleteData($id_kendaran)
    {
        $this->ModelKendaran->deleteData($id_kendaran);
        session()->setFlashdata('success', 'Data Berhasil dihapus');
        return redirect()->to(base_url('User/Kendaran'));
    }
}
