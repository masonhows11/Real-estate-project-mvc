<?php

namespace App\Http\Controllers\Admin;

use App\Http\Request\Admin\PostRequest;
use App\Models\Category;
use App\Models\Post;
use System\Auth\Auth;

class PostController extends AdminController
{

    public function index()
    {

        $posts = Post::all();
        return view('admin.post.index',['posts' => $posts]);
    }


    public function create()
    {

        $categories = Category::all();

        return view('admin.post.create',compact('categories'));
    }


    public function store()
    {
        $req = new PostRequest();
        $inputs = $req->all();
        
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;

        if(empty($req->parent_id)) unset($inputs['parent_id']);

        Post::create($inputs);

        return redirect('admin/post/index');
    }


    public function edit($id)
    {

        $post = Post::find($id);
        $categories = Category::all();

        return view('admin.post.edit',compact('post','categories'));

    }


    public function update($id)
    {
        $req = new PostRequest();
        $inputs = $req->all();

        // if(empty($req->parent_id)) unset($inputs['parent_id']);

        Post::update(array_merge($inputs,['id' => $id]));

        return redirect('admin/post/index');
    }


    public function delete($id)
    {

        Post::delete($id);

        return redirect('admin/post/index');
    }


}