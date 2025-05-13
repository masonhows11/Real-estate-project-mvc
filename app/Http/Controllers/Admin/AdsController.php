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
        // dd($inputs);
        $inputs['user_id'] = Auth::user()->id;
        $inputs['status'] = 0;
        $inputs['view'] = 0;

        $path = 'images/ads/'.date('Y/m/d');
        $name = date('Y_m_d_H_i_s').rand(10,99);
        $inputs['image'] = ImageUpload::uploadAndFitImage($req->file('image'),$path,$name,800,532);

        Ads::create($inputs);

        return redirect("/admin/ads/index");

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
        Ads::delete($id);

        return redirect("/admin/ads/index");

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