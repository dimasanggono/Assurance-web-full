<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelAuthUser;
use App\Models\ModelAuthAdmin;
use App\Models\ModelUser;
use App\Models\ModelAdmin;

class AuthController extends BaseController
{
    public function __construct()
    {
        $this->ModelAuthUser = new ModelAuthUser();
        $this->ModelAuthAdmin = new ModelAuthAdmin();
        $this->ModelUser = new ModelUser();
    }

    public function login()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('User/v_login_user', $data);
    }
    public function loginAdmin()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('Admin/v_login_admin', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register User'
        ];
        return view('User/v_register_user', $data);
    }

    public function addUser()
    {
        // Validasi input pengguna
        if ($this->validate([
            'nama_user' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'no_tlpn' => [
                'label' => 'No Telpon',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[tbl_user.email]', // Pastikan email unik
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'valid_email' => 'Format email tidak valid',
                    'is_unique' => 'Email sudah digunakan',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]', // Minimal panjang password adalah 8 karakter
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal harus terdiri dari 8 karakter',
                ]
            ]
        ])) {
            // Jika validasi sukses, tambahkan pengguna baru ke database
            $userData = [
                'nama_user' => $this->request->getPost('nama_user'),
                'no_tlpn' => $this->request->getPost('no_tlpn'),
                'email' => $this->request->getPost('email'),
                'password' => sha1($this->request->getPost('password')), // Disarankan untuk menggunakan hashing yang lebih aman
                'roles' => 'user',
            ];

            // Panggil model untuk menyimpan data pengguna
            $this->ModelAuthUser->saveData($userData);
            // Redirect pengguna ke halaman login dengan pesan sukses
            session()->setFlashdata('message', 'Registrasi berhasil. Silakan login.');
            return redirect()->to(base_url('AuthController/login'));
        } else {
            // Jika validasi gagal, tampilkan pesan kesalahan dan kembali ke halaman pendaftaran
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('AuthController/register');
        }
    }
    public function cekLogin()
    {
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ]
        ])) {
            $email = $this->request->getPost('email');
            $password = sha1($this->request->getPost('password'));
            $cek = $this->ModelAuthUser->loginUser($email, $password);
            $cek1 = $this->ModelAuthAdmin->loginAdmin($email, $password);
            if ($cek) {
                session()->set('log', true);
                session()->set('id_user', $cek['id_user']);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('email', $cek['email']);
                session()->set('password', $cek['password']);
                session()->set('no_tlpn', $cek['no_tlpn']);
                return redirect()->to(base_url('User/DashboardUser'));
            } elseif ($cek1) {
                session()->set('log', true);
                session()->set('id_admin', $cek1['id_admin']);
                session()->set('nama_admin', $cek1['nama_admin']);
                session()->set('email', $cek1['email']);
                session()->set('password', $cek1['password']);
                session()->set('level', $cek1['level']);
                return redirect()->to(base_url('Admin/DashboardAdmin'));
            } else {
                # code...
                session()->setFlashdata('message', 'Login Gagal !! Email atau Passwords Salah!! ');
                return redirect()->to(base_url('AuthController/login'));
            }
        } else {
            // jia tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('AuthController/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('email');
        session()->setFlashdata('message', 'Anda Telah Logout!!');
        return redirect()->to(base_url('AuthController/login'));
    }
}
