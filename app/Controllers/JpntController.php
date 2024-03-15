<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class JpntController extends BaseController
{
    public function __construct()
    {
        return auth()->user()->inGroup('jpnt') ?  $this->index() : redirect()->to('/');
    }

    public function index()
    {
        return 'jpnt index';
    }
}