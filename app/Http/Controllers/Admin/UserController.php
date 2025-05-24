<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Request\Admin\UserRequest;
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
        return view('admin.users.edit', compact('user'));
    }

    public function update($id)
    {
        $req = new UserRequest();
        $inputs = $req->all();

        $inputs['id'] = $id;
        $file = $req->file('avatar');

        if (!empty($file['tmp_name'])) {
            $path = 'images/users/' . date('Y/m/d');
            $name = date('Y_m_d_H_i_s') . rand(10, 99);
            $inputs['avatar'] = ImageUpload::uploadAndFitImage($req->file('avatar'), $path, $name, 100, 100);

        }

        User::update($inputs);
        return redirect("/admin/users/index");
    }


    public function changeStatus($id)
    {
        // $user is instance of user class
        $user = User::find($id);

        if ($user->is_active == 0)
        {
            $user->is_active = 1;

        } else {

            $user->is_active = 0;

        }
        // then use save method on user obj
        $user->save();
        return back();
    }

}