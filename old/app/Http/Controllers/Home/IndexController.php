<?php

namespace App\Http\Controllers\Home;

use Laravel\Lumen\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        return view('home.index', ['message' => 'Test echo']);
    }
}
