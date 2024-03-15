<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SchoolController extends BaseController
{
    public function __construct()
    {
        return auth()->user()->inGroup('school') ?  $this->index() : redirect()->to('/');
    }

    public function index()
    {
        return 'school index';
    }
}