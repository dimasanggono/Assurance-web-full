<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelDashboard;


class Pegawai extends BaseController
{
    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin();
        $this->ModalDashboard = new ModelDashboard();
    }
    public function index()
    {
        $tgl = date('Y-m-d');
        $data = [
            'title' => 'Pegawai',
            "subtitle" => "Pegawai",
            "menu" => "Pegawai",
            "pages" => "Admin/Pegawai/index",
            'pegawai' => $this->ModelAdmin->AllData(),
            'getnotif' => $this->ModalDashboard->getnotif($tgl),
        ];
        return view('v_template_back', $data);
    }
    public function add()
    {
        $tgl = date('Y-m-d');
        $data = [
            'title' => 'Pegawai',
            "subtitle" => "Pegawai",
            "menu" => "Pegawai",
            "pages" => "Admin/Pegawai/add",
            'getnotif' => $this->ModalDashboard->getnotif($tgl),
        ];
        return view('v_template_back', $data);
    }
    public function insert()
    {
        if ($this->validate([

            'nama_admin' => [
                'label'  => 'Nama Admin',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi !!',
                ],
            ],
            'email' => [
                'label'  => 'Email',
                'rules'  => 'required|is_unique[tbl_admin.email]',
                'errors' => [
                    'required' => '{field} Wajib diisi !!',
                    'is_unique' => '{field} Sudah ada, harap Input {field} yang lain !!'
                ],
            ],
            'password' => [
                'label'  => 'Password',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi !!',

                ],
            ],
            'level' => [
                'label'  => 'Level',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi !!',

                ],
            ],

            // 'foto' => [
            //     'label'  => 'Foto',
            //     'rules'  => 'uploaded[foto]|max_size[foto,2024]|mime_in[field_name,image/png,image/jpeg]',
            //     'errors' => [
            //         'uploaded' => '{field} Wajib diisi !!',
            //         'max_size' => 'Ukuran {field} maksimal 20024 KB !!',
            //         'mime_in' => 'Format {field} harus JPG/PNG !!',
            //     ],
            // ],
        ])) {
            // // JIKA valid
            // $foto = $this->request->getFile('foto');
            // // merandom nama file\\
            // $nama_file = $foto->getRandomName();
            $data = [
                'nama_admin' => $this->request->getPost('nama_admin'),
                'email' => $this->request->getPost('email'),
                'password' => sha1($this->request->getPost('password')),
                'level' => $this->request->getPost('level'),
                // 'foto' => $nama_file,
            ];

            // $foto->move('foto', $nama_file);  //direction upload file
            $this->ModelAdmin->insertData($data);
            session()->setFlashdata('message', 'Data berhasil ditambahkan!');
            return redirect()->to(base_url('Admin/Pegawai'));
        } else {
            // jia tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Admin/Pegawai/Add'));
        }
    }

    public function edit()
    {
        $data = [
            'title' => 'Pegawai',
            "subtitle" => "Pegawai",
            "menu" => "Pegawai",
            "pages" => "Admin/Pegawai/edit",
        ];
        return view('v_template_back', $data);
    }

    public function deleteData($id_admin)
    {

        $admin = $this->ModelAdmin->DetailData($id_admin);
        if ($admin['tand_tgn'] != "") {
            unlink('foto/' .  $admin['tand_tgn']);
        }

        $data = [
            'id_admin' => $id_admin
        ];
        $this->ModelAdmin->deleteData($data);
        session()->setFlashdata('message', 'Data berhasil dihapus!');
        return redirect()->to(base_url('Admin/Pegawai'));
    }
}
