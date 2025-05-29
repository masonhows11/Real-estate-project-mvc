<?php

namespace App\Http\Controllers;


use App\Models\Ads;

class HomeController extends Controller
{

    public function index()
    {

        $latestAds = Ads::orderBy('created_at','desc')->limit(0,6)->get();
       return view('app.home');
    }

    public function create()
    {
        echo "create method in HomeController";
    }

    public function store()
    {
        echo "store method in HomeController";
    }

    public function edit($id)
    {
        echo "edit method in HomeController";
    }

    public function update($id)
    {
        echo "update method in HomeController";
    }

    public function delete($id)
    {
        echo "delete method in HomeController";
    }

}