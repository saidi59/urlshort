<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $latest_link =  Link::first();
       return view('front.blank',compact('latest_link'));
    }
}
