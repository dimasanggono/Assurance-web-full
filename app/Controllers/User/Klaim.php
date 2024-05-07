<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelKlaim;
use App\Models\ModelKendaran;
use App\Models\ModelDashboardUser;

class Klaim extends BaseController
{
    public function __construct()
    {
        $this->ModelKlaim = new ModelKlaim();
        $this->ModelKendaran = new ModelKendaran();
        $this->ModelDashboardUser = new ModelDashboardUser();
    }
    public function index()
    {
        $id_user = session()->get('id_user');
        $tgl = date('Y-m-d');
        $data = [
            'title' => 'Klaim',
            "subtitle" => "klaim",
            "pages" => "User/klaim/AddKlaim",
            "menu" => "Klaim",
            "klaim" => $this->ModelKlaim->AllData(),
            "kendaran" => $this->ModelKendaran->AllData($id_user = session()->get('id_user')),
            'getnotif' => $this->ModelDashboardUser->getnotif($tgl),
        ];
        return view('v_template_user', $data);
    }

    public function insertData()
    {
        $id_user = session()->get('id_user');
        $ktp = $this->request->getFile('ktp');
        $sim = $this->request->getFile('sim');
        $stnk = $this->request->getFile('stnk');
        $kendaraan = $this->request->getFile('f_kendaraan');
        $ken_depan = $this->request->getFile('kendaran_depan');
        $ken_belakang = $this->request->getFile('kendaran_belakang');
        $ken_samping = $this->request->getFile('kendaran_samping');

        $name_sim = $sim->getName();
        $name_ktp = $ktp->getName();
        $name_stnk = $stnk->getName();
        $name_kendaraan = $kendaraan->getName();
        $name_depan = $ken_depan->getName();
        $name_belakang = $ken_belakang->getName();
        $name_samping = $ken_samping->getName();

        $ktp->move('uploads', $name_ktp);
        $stnk->move('uploads', $name_stnk);
        $sim->move('uploads', $name_sim);
        $kendaraan->move('uploads', $name_kendaraan);
        $ken_depan->move('uploads', $name_depan);
        $ken_belakang->move('uploads', $name_belakang);
        $ken_samping->move('uploads', $name_samping);

        $data = [
            'ktp' => $name_ktp, // Simpan nama file yang dipindahkan
            'sim' => $name_sim, // Simpan nama file yang dipindahkan
            'stnk' => $name_stnk, // Simpan nama file yang dipindahkan
            'f_kendaraan' => $name_kendaraan, // Simpan nama file yang dipindahkan
            'kendaran_depan' => $name_depan, // Simpan nama file yang dipindahkan
            'kendaran_belakang' => $name_belakang, // Simpan nama file yang dipindahkan
            'kendaran_samping' => $name_samping, // Simpan nama file yang dipindahkan
            'id_user' => $id_user,
            'id_kendaran' => $this->request->getPost('id_kendaran'),
            'tgl_upload' => date('Y-m-d'),
            'status' => 'Pending',
            'deskripsi' => $this->request->getPost('deskripsi'),
            'id_admin' => $this->request->getPost('id_admin'),
        ];

        $this->ModelKlaim->insertData($data); // Panggil model untuk menyimpan data

        session()->setFlashdata('success', 'Data Berhasil ditambahkan');
        return redirect()->to(base_url('User/Klaim/riwayat'));
    }


    public function riwayat()
    {
        $tgl = date('Y-m-d');
        $data = [
            'title' => 'Riwayat Klaim',
            "subtitle" => "riwayat klaim",
            "menu" => "Klaim",
            "pages" => "User/klaim/index",
            "klaim" => $this->ModelKlaim->history(session()->get('id_user')),
            'getnotif' => $this->ModelDashboardUser->getnotif($tgl),
        ];
        return view('v_template_user', $data);
    }

    public function DetailData($id_klaim)
    {
        $data = [
            'title' => 'Detail Klaim',
            "subtitle" => "detail klaim",
            "menu" => "Klaim",
            "pages" => "User/klaim/v_detail",
            "klaim" => $this->ModelKlaim->detailData($id_klaim),
        ];
        return view('v_template_user', $data);
    }

    public function Delete($id_klaim)
    {
        // Dapatkan detail klaim dari database
        $klaim = $this->ModelKlaim->DetailData($id_klaim);

        // Periksa apakah ada file terkait yang akan dihapus
        if (!empty($klaim['ktp'])) {
            // Hapus file-file terkait dari sistem file
            unlink('uploads/' . $klaim['ktp']);
            unlink('uploads/' . $klaim['sim']);
            unlink('uploads/' . $klaim['stnk']);
            unlink('uploads/' . $klaim['f_kendaraan']);
            unlink('uploads/' . $klaim['kendaran_depan']);
            unlink('uploads/' . $klaim['kendaran_belakang']);
            unlink('uploads/' . $klaim['kendaran_samping']);
        }

        // Hapus entri klaim dari database
        $this->ModelKlaim->DeleteData($id_klaim);

        session()->setFlashdata('success', 'Data Berhasil dihapus');
        return redirect()->to(base_url('User/Klaim/riwayat'));
    }
}
