<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function singleView(){
        return view("single");
    }

    public function aboutView(){
        return view("about");
    }

    public function contactView(){
        return view("contact");
    }

    public function blogView(){
        return view("blog");
    }

    public function servicesView(){
        return view("service");
    }
}