<?php

namespace App\Http\Controllers\Admin;

use App\Http\Request\Admin\PostRequest;
use App\Http\Request\Admin\PostUpdateRequest;
use App\Http\Services\ImageUpload;
use App\Models\Category;
use App\Models\Post;
use System\Auth\Auth;

class PostController extends AdminController
{

    public function index()
    {

        $posts = Post::all();
        return view('admin.post.index', ['posts' => $posts]);
    }


    public function create()
    {

        $categories = Category::all();

        return view('admin.post.create', compact('categories'));
    }


    public function store()
    {
        $req = new PostRequest();

        $inputs = $req->all();
        //dd($req->file('image'));
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;

        // save image implements
        $path = 'images/posts' . date('Y/M/d');
        $image_name = date('Y_m_d_H_i_s_') . rand(10, 99);
        $inputs['image'] = ImageUpload::uploadAndFitImage($req->file('image'), $path, $image_name, 800, 499);

        Post::create($inputs);

        return redirect('admin/post/index');
    }


    public function edit($id)
    {

        $post = Post::find($id);
        $categories = Category::all();

        return view('admin.post.edit', compact('post', 'categories'));
    }


    public function update($id)
    {
        $req = new PostUpdateRequest();
        $inputs = $req->all();

        $inputs['id'] = $id;
        $file = $req->file('image');

        if (!empty($file['tmp_name'])) {
            // save image implements
            $path = 'images/posts' . date('Y/M/d');
            $image_name = date('Y_m_d_H_i_s_') . rand(10, 99);
            $inputs['image'] = ImageUpload::uploadAndFitImage($req->file('image'), $path, $image_name, 800, 499);
        }

        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;

        Post::update($inputs);

        return redirect('admin/post/index');
    }


    public function delete($id)
    {

        Post::delete($id);
        return back();
        
        //return redirect('admin/post/index');
    }
}
