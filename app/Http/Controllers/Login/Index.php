<?php

namespace App\Http\Controllers\Login;

use Laravel\Lumen\Routing\Controller as BaseController;

class Index extends BaseController
{
    public function index()
    {
        return view('login.index');
    }
}