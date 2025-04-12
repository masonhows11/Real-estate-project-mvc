<?php

namespace System\Session;

class Session
{


    public function set($name, $value): void
    {
        $_SESSION[$name] = $value;
    }


    public function get($name)
    {
        // isset($_SESSION[$name]) ? $_SESSION[$name] : false ;
        return $_SESSION[$name] ?? false;
    }

    public function remove($name): void
    {
        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
    }


    // call session method as static
    // like Session::set() , Session::get()
    public static function __callStatic(string $name, array $arguments)
    {
       $instance = new self();
       return call_user_func_array([$instance,$name],$arguments);
    }

}