<?php

namespace App\Http\Controllers\Auth;


use App\Http\Request\ResetPasswordRequest;
use App\Models\User;


class ResetPasswordController
{

    private const string redirectTo = '/login_form';
    public function resetPasswordView($token)
    {

        $user = User::where('remember_token' ,$token)->where('remember_token_expire','>=',date('Y-m-d H:i:s'))->get();
        if(empty($user))
        {
            die('لینک بازیابی اعتبار ندارد');
            // return redirect('auth.forgot.view');
        }
        $user = $user[0];
        return view('auth.reset_password',compact('token'));
    }

    public function resetPassword($token)
    {
        $req = new ResetPasswordRequest();

        $inputs = $req->all();

        $user = User::where('remember_token' ,$token)->where('remember_token_expire','>=',date('Y-m-d H:i:s'))->get();
        if(empty($user))
        {
            error('reset_password_error', 'کاربر وجود ندارد');
            return back();
        }

        // check password & confirmed is equal
        if($inputs['password'] !== $inputs['new_password'] )
        {
            error('reset_password_error', 'رمز عبور جدید و تکرار آن یکسان نیستند');
            return back();
        }

        $user = $user[0];
        $user->password = password_hash($inputs['password'],PASSWORD_DEFAULT);
        $user->save();

        return  redirect(self::redirectTo);



    }
}