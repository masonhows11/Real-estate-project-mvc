<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use System\Auth\Auth;
use System\Session\Session;

// use System\Database\DbBuilder\DbBuilder;

class AdminController extends Controller
{

    public function __construct()
    {

        Auth::loginById(1);
        Auth::check();
        if (Auth::user()->user_type != 'admin') {

             redirect('/login');
             exit();
        }
    }

    public function index()
    {
        return view('admin.index');
    }

}