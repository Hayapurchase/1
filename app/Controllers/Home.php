<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('Home/index');
    }
}
