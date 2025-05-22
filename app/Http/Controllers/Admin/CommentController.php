<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use App\Http\Request\Admin\CommentRequest;
use System\Auth\Auth;


class CommentController extends AdminController{


    public function index()
    {
       $comments = Comment::all();
       return view('admin.comments.index',compact('comments'));
    }


    public function show($id)
    {
        $comment = Comment::find($id);
        return view('admin.comments.show',compact('comment'));

    }


    public function answer($id)
    {
        $comment = Comment::find($id);
        $req = new CommentRequest();
        $inputs = $req->all();

        $inputs['user_id'] = Auth::user()->id;
        $inputs['post_id'] = $comment->post_id;
        $inputs['parent_id'] = $comment->id;
        $inputs['approved'] = 1;

        Comment::update($inputs);
        return redirect('/admin/comments/index');
    }
    public function changeStatus($id): null
    {
        $comment = Comment::find($id);

        $inputs = [];

        if ($comment->status == 0) {

            $inputs['id'] = $id;
            $inputs['status'] = 1;
            Comment::update($inputs);

        } else {

            $inputs['id'] = $id;
            $inputs['status'] = 0;

            Comment::update($inputs);
        }


        return back();
    }

    public function approved($id): null
    {
        $comment = Comment::find($id);

    
        $inputs = [];

        if ($comment->approved == 0) {

            $inputs['id'] = $id;
            $inputs['approved'] = 1;
            Comment::update($inputs);

        } else {

            $inputs['id'] = $id;
            $inputs['approved'] = 0;

            Comment::update($inputs);
        }


        return back();
    }


}