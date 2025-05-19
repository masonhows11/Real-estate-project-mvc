<?php

namespace App\Http\Controllers\Admin;

use App\Http\Request\Admin\SliderRequest;
use App\Http\Services\ImageUpload;
use App\Models\Slider;


class SliderController extends AdminController
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {

        return view('admin.slider.create');
    }

    public function store()
    {

        # code...
        $req = new SliderRequest();
        $inputs = $req->all();

        $path = 'images/slider/' . date('Y/m/d');
        $name = date('Y_m_d_H_i_s') . rand(10, 99);
        $inputs['image'] = ImageUpload::uploadAndFitImage($req->file('image'), $path, $name, 1500, 900);

        Slider::create($inputs);

        return redirect("/admin/slider/index");

    }

    public function edit($id)
    {
        $slide = Slider::find($id);
        return view('admin.slider.edit', compact('slide'));
    }

    public function update($id)
    {
        # code...
        $req = new SliderRequest();
       // dd($req);
        $inputs = $req->all();
        $file = $req->file('image');
        $inputs['id'] = $id;
        if (!empty($file['tmp_name'])) {
            $path = 'images/slider/' . date('Y/m/d');
            $name = date('Y_m_d_H_i_s') . rand(10, 99);
            $inputs['image'] = ImageUpload::uploadAndFitImage($req->file('image'), $path, $name, 1500, 900);

        }

        Slider::update($inputs);
        return redirect("/admin/slider/index");

    }

    public function delete($id)
    {
        # code...
        Slider::delete($id);
        return redirect("/admin/slider/index");

    }
}