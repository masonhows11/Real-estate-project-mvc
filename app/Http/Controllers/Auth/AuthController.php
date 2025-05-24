<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{


    public function loginForm()
    {
        dd('login view');
    }

    public function login()
    {
        dd('login view');
    }


    public function registerForm()
    {
        
    }


    public function register()
    {

    }

    public function logout()
    {
        redirect('/login');
    }

}