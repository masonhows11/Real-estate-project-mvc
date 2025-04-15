<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
// use System\Database\DbBuilder\DbBuilder;

class AdminController extends Controller
{


    public function index()
    {
        // $migrate = new DbBuilder();

        return view('admin.index');
    }

}