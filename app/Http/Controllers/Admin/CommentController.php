<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;



class CommentController extends AdminController{


    public function index()
    {
       $comments = Comment::all();
       return view('admin.comments.index',compact('comments'));
    }


    public function changeStatus($id)
    {
        # code...
    }

    public function approved($id)
    {
        # code...
    }


}