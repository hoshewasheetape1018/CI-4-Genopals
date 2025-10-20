<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Adopt extends BaseController
{
    public function index()
    {
        //
    }

    public function adopt()
    {
        return view('user/adopt_form');
    }
}
