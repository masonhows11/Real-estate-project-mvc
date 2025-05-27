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
        // dd($token);

        if (Session::get('forgot.time') != false && Session::get('forgot.time') > time()) {

            error('forgot_pass_token', 'please wait for 2 min then try again');

        } else {

            Session::set('forgot.time', time() + 120);

            $req = new ForgotRequest();
            $inputs = $req->all();

            $user = User::where('email',$inputs['email'])->get();

        }
    }


}