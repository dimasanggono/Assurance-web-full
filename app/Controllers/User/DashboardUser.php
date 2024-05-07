<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelKlaim;
use App\Models\ModelDashboardUser;


class DashboardUser extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
        $this->ModelKlaim  = new ModelKlaim();
        $this->ModelDashboardUser = new ModelDashboardUser();
    }
    public function index()
    {
        $id_user = session()->get('id_user');
        $tgl = date('Y-m-d');
        $data = [
            'title' => 'Dashboard',
            "subtitle" => "Dashboard",
            "menu" => "Dashboard",
            "pages" => "User/dashboard",
            "user" => $this->ModelUser->AllData($id_user),
            'getnotif' => $this->ModelDashboardUser->getnotif($tgl),
        ];
        return view('v_template_user', $data);
    }
}
