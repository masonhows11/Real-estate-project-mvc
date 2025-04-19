<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{


    public function login()
    {
        dd('login view');
    }


    public function logout()
    {
        redirect('/login');
    }

}