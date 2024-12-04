<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function index(){
        return view('Site.home');
    }

    function about(){
        return view('Site.about');
    }
}
