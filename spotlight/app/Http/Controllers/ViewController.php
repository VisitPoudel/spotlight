<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view("pages.index");
    }

    public function lost()
    {
        return view("pages.posts");
    }
    public function found()
    {
        return view("pages.posts");
    }
    public function contact()
    {
        return view("pages.contact");
    }
}
