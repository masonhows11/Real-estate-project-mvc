<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use System\Auth\Auth;

// use System\Database\DbBuilder\DbBuilder;

class AdminController extends Controller
{

    public function __construct()
    {
        Auth::check();
        if (Auth::user()->user_type != 'admin') {

             redirect('/login');
             exit();
        }
    }

    public function index(): null
    {
        return view('admin.index');
    }

}