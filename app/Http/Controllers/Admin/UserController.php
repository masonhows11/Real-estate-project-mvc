<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\User;

class UserController extends AdminController
{


    public function index()
    {

        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
    }

    public function update($id)
    {

    }


    public function changeStatus($id)
    {

    }

}