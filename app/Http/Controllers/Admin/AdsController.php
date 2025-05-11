<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ads;
use App\Models\Category;
use App\Models\Gallery;
use App\Http\Request\Admin\AdsRequest;
use App\Http\Services\ImageUpload;
use System\Auth\Auth;

class AdsController extends AdminController{




    public function index()
    {
        $ads = Ads::all();
        return view('admin.ads.index',compact('ads'));
    }

     public function create()
    {
       
        $categories = Category::all();
        return view('admin.ads.create',compact('categories'));
    }

     public function store()
    {

        # code...
        $req = new AdsRequest();
        $inputs = $req->all();
        dd($inputs);

    }


     public function edit($id)
    {
         $ads = Ads::find($id);
         $categories = Category::all();
         return view('admin.ads.edit',compact('ads','categories'));
    }

     public function update($id)
    {
        # code...
    }

     public function delete($id)
    {
        # code...
    }

     public function changeStatus($id)
    {
        # code...
    }

    public function gallery($id): null
    {
        return view('admin.ads.gallery');
    }

    public function storeGallery($id)
    {

    }

    public function deleteGallery($gallery_id)
    {

    }



}