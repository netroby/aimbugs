<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return "hello world";
    }
}
