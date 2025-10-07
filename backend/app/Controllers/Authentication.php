<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Authentication extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }
    public function sign_up()
    {
        return view('auth/sign_up');
    }
}
