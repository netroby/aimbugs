<?php

namespace App\Http\Controllers\Admin;

use Laravel\Lumen\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        return "hello world";
    }
}
