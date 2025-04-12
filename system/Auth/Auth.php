<?php

namespace System\Auth;


use App\Models\User;
use System\Session\Session;

class Auth
{


    private string $redirectTo = '/login';


    private function userMethod()
    {
        if (!Session::get('user')) {
            return redirect($this->redirectTo);
        }

        $user = User::find(Session::get('user'));

        if (empty($user)) {
            Session::remove('user');
            return redirect($this->redirectTo);

        } else {

            return $user;
        }


    }

    private function checkMethod()
    {

        if (!Session::get('user')) {
            return redirect($this->redirectTo);
        }

        $user = User::find(Session::get('user'));

        if (empty($user)) {
            Session::remove('user');
            return redirect($this->redirectTo);

        } else {

            return true;
        }

    }

    private function checkLoginMethod(): bool
    {

        if (!Session::get('user')) {
            return false;
        }

        $user = User::find(Session::get('user'));

        if (empty($user))
        {
            return false;

        } else {

            return true;
        }

    }

    // login by email but create session by user id
    private function loginByEmailMethod($email,$password): bool
    {

        $user = User::where('email',$email)->get();

        if(empty($user))
        {
            error('login','کاربری وجود ندارد');
            return false;
        }
        if(password_verify($password,$user[0]->password) && $user[0]->is_active == 1)
        {
            Session::set("user",$user[0]->id);
            return  true;
        }
        else {
            error('login','اطلاعات ورود صحیح نمی باشد');
            return false;
        }

    }

    // login by id and create session by user id
    private function loginByIdMethod($id): bool
    {
        $user = User::where('id',$id)->get();

        if(empty($user))
        {
            error('login','کاربری وجود ندارد');
            return false;

        }else {

            Session::set("user",$user->id);
            return  true;

        }

    }

    private function logOut()
    {
        Session::remove('user');
        return redirect($this->redirectTo);
    }

    //    private function idMethod()
    //    {
    //
    //    }


    public function __call(string $name, array $arguments)
    {
        return $this->methodCaller($name, $arguments);
    }

    public static function __callStatic(string $name, array $arguments)
    {
        $instance = new self;
        return $instance->methodCaller($name, $arguments);
    }

    protected function methodCaller($method, $args)
    {
        $suffix = 'Method';
        $methodName = $method . $suffix;
        return call_user_func_array(array($this, $methodName), $args);

    }
}