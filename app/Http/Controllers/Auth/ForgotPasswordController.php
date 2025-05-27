<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use App\Http\Services\MailService;
use App\Http\Request\ForgotRequest;
use System\Session\Session;

class ForgotPasswordController
{


    private const string home = '/';

    public function forgotView()
    {
        return view('auth.forgot');
    }

    public function forgotPassword()
    {
        $req = new ForgotRequest();

        //        Session::remove('forgot.time');
        //        return back();

        if (Session::get('forgot.time') && Session::get('forgot.time') > time()) {

            error('forgot_pass_token', 'please wait for 2 min then try again');
            return back();
        } else {

            Session::set('forgot.time', time() + 120);


            $inputs = $req->all();

            $user = User::where('email', $inputs['email'])->get();
            if (empty($user)) {
                error('forgot_pass_token', 'کاربر وجود ندارد');
                return back();
            }
            $user = $user[0];
            $user->remember_token = generateToken();
            $user->remember_token_expire = date("Y-m-d H:i:s", strtotime('+ 10 min'));
            $user->save();

            $message = '
            <div>
            <h2 style="text-align: center">ایمیل بازیابی رمز عبور</h2>
            <p style="text-align: center">کاربر گرامی برای بازیابی رمز عبور روی لینک زیر کلیک کنید</p>
            <p style="text-align: center">
            <a href="' . route('auth.reset_password.view', [$user->remember_token]) . '">بازیابی رمز عبور</a>
            </p>
            </div>';


            $mail = new MailService();
            $subject = "بازیابی رمز عبور";
            $mail->send($inputs['email'], $subject, $message);

            flash('forgot','ایمیل بازیابی رمز عبور با موفقیت ارسال شد');

            return redirect(self::home);
        }
        return redirect('/login_form');
    }




}
