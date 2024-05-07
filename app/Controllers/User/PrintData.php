<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelKlaim;
use App\Models\ModelAdmin;

class PrintData extends BaseController
{
    public function __construct()
    {
        $this->ModelKlaim = new ModelKlaim();
        $this->ModelAdmin = new ModelAdmin();
    }
    public function index($id_klaim)
    {
        $data = [
            'title' => 'Print klaim',
            'menu' => 'Klaim',
            'pages' => 'User/Klaim/v_printDetail',
            'klaim' => $this->ModelKlaim->DetailData($id_klaim),
        ];
        return view('user/v_template_print', $data);
    }

    public function PrintData($id_klaim)
    {
        $data = [
            'title' => 'Print klaim',
            'menu' => 'Klaim',
            'pages' => 'User/Klaim/v_printDetail',
            'klaim' => $this->ModelKlaim->DetailData($id_klaim),
        ];
        return view('user/v_template_print', $data);
    }
}
