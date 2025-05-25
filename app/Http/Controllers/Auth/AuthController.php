<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\ImageUpload;
use App\Http\Request\RegisterRequest;
use App\Http\Services\MailService;
use App\Models\User;
use Exception;

class AuthController
{


    private string $redirectTo = '/login_form';

    public function registerForm()
    {
        return view('auth.register');
    }


    /**
     * @throws Exception
     */
    public function register()
    {
        $req = new RegisterRequest();
        $inputs = $req->all();

        $file = $req->file('avatar');
        if (!empty($file['tmp_name'])) {
            $path = 'images/avatar/' . date('Y/m/d');
            $name = date('Y_m_d_H_i_s') . rand(10, 99);
            $inputs['avatar'] = ImageUpload::uploadAndFitImage($req->file('avatar'), $path, $name, 100, 100);

        }

        // make random & unique token for register new user
        // mak token with generateToken() helper method
        $inputs['verify_token'] = generateToken();
        $inputs['is_active'] = 0;
        $inputs['user_type'] = 'user';
        $inputs['status'] = 0;
        $inputs['remember_token'] = null;
        $inputs['remember_token_expire'] = null;
        $inputs['password'] = password_hash($req->password, PASSWORD_DEFAULT);

        User::create($inputs);

        $message = '
        <div>
        <h2 style="text-align: center">ایمیل فعال سازی</h2>
        <p style="text-align: center">کاربر گرامی ثبت نام شما با موفقیت انجام شد ، برای فعال سازی حساب کاربری روی لینک زیر کلیک کنید</p>
        <p style="text-align: center">
        <a href="' . route('auth.activation', [$inputs['verify_token']]) . '">لینک فعال سازی</a>
        </p>
        </div>';


        $mail = new MailService();
        $subject = 'ایمیل فعال سازی';
        $mail->send($inputs['email'], $subject, $message);
        return redirect($this->redirectTo);
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        dd('jo');
    }


    public function activation($token)
    {
        $user = User::where('verify_token', $token)->get();
        if (empty($user)) {
            die('مد فعال سازی معتبر نمی باشد');
        }
        $user = $user[0];
        $user->is_active = 1;
        $user->save();
        die('حساب کاربری فال شد');
    }

    public function logout()
    {

       return redirect('/login_form');
    }

}