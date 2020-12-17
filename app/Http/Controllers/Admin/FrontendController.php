<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function portfolio(){
        return view('frontend.portfolio');
    }
    public function products(){
        return view('frontend.product');
    }
    public function profile(){
        return view('frontend.company_profile');
    }
    public function rmg(){
        return view('frontend.rmg');
    }
}
