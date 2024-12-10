<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitedemoController extends Controller
{
    function home() {
        return view('site.home');
    }
    function menu(){
        return view('site.menu'); 
    }
    function about()  {
        return view('site.about');
        
    }

}
