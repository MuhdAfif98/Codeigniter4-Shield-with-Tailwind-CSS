<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PpdController extends BaseController
{
    public function __construct()
    {
        return auth()->user()->inGroup('ppd') ?  $this->index() : redirect()->to('/');
    }

    public function index()
    {
        return 'ppd index';
    }
}
