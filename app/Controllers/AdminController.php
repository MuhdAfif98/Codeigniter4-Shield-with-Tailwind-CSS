<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function __construct()
    {
        return auth()->user()->inGroup('admin') ?  $this->index() : redirect()->to('/');
    }

    public function index()
    {
        return 'admin index';
    }
}
