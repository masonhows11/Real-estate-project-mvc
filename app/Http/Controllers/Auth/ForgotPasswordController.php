<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use App\Http\Services\MailService;
use App\Http\Request\ForgotRequest;
use System\Session\Session;
class ForgotPasswordController
{


    private const string home = '/home';
    
    public function forgotView()
    {
        return view('auth.forgot');
    }

    public function forgotPassword($token)
    {
        dd($token);
    }


}