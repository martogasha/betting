<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.standings');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function result(){
        return view('frontend.result');
    }
    public function schedule(){
        return view('frontend.schedule');
    }
}
