<?php

namespace App\Http\Controllers\Auth;

class ForgotPasswordController
{


    public function forgotView()
    {
        return view('auth.forgot');
    }

    public function forgotPassword($token)
    {
        dd($token);
    }


}