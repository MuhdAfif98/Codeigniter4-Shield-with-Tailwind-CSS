<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SekolahController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "sekolah") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("sekolah/index/index");
    }
}