<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Invoice extends BaseController
{

    public function __construct()
    {
        //aktifkan url helper
        helper('url');
    }
    public function index()
    {
        $data['judul'] = 'Aplikasi Invoice';
        return view('/template/layout');
    }
}
