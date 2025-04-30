<?php

namespace App\Http\Controllers\Admin;

use App\Http\Request\Admin\PostRequest;
use App\Models\Post;

class PostController extends AdminController
{

    public function index()
    {
        $categories = Post::all();
        return view('admin.post.index',['categories' => $categories]);
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

        if(empty($req->parent_id)) unset($inputs['parent_id']);

        Post::create($inputs);

        return redirect('admin/post/index');
    }


    public function edit($id)
    {

        $category = Post::find($id);
        $categories = Category::all();

        return view('admin.post.edit',compact('category','categories'));

    }


    public function update($id)
    {
        $req = new PostRequest();
        $inputs = $req->all();

        // if(empty($req->parent_id)) unset($inputs['parent_id']);

        Post::update(array_merge($inputs,['id' => $id]));

        return redirect('admin/category/index');
    }


    public function delete($id)
    {

        Post::delete($id);

        return redirect('admin/post/index');
    }


}