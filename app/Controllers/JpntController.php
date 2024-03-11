<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class JpntController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "jpnt") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("jpnt/index/index");
    }
}