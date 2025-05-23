<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\User;
use System\Auth\Auth;
use App\Http\Services\ImageUpload;

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
        $user = User::find($id);

        $inputs = [];

        if ($user->is_active == 0) {

            $inputs['id'] = $id;
            $inputs['is_active'] = 1;
            User::update($inputs);

        } else {

            $inputs['id'] = $id;
            $inputs['is_active'] = 0;

            User::update($inputs);
        }


        return back();
    }

}