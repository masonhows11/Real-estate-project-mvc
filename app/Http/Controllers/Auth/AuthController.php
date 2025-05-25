<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\ImageUpload;
use App\Http\Request\RegisterRequest;
use App\Http\Services\MailService;
use App\Models\User;

class AuthController
{


    private string $redirectTo = '/login';

    public function registerForm()
    {
        return view('auth.register');
    }


    public function register()
    {
        dd('jo');
    }

    public function loginForm()
    {
       return view('auth.login');
    }

    public function login()
    {
        dd('jo');
    }


    public function logout()
    {

        redirect('/login');
    }

}