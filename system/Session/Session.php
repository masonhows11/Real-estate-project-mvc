<?php

namespace System\Session;

class Session
{


    public static function set($name, $value): void
    {
        $_SESSION[$name] = $value;
    }


    public static function get($name)
    {
        return $_SESSION[$name] ?? false;
    }

    // isset($_SESSION[$name]) ? $_SESSION[$name] : false ;

    public static function remove($name): void
    {
        if (isset($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
    }


    // call session method as static
    // like Session::set() , Session::get()
    public static function __callStatic(string $name, array $arguments)
    {
        // return call_user_func_array(self::{$name},$arguments);
        // return self::{$name}($arguments);
        $instance = new self();
        return call_user_func_array([$instance, $name], $arguments);
    }

}