<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about() {
        return response("This is about page");
    }

    function aboutme() {
        return response("This is about me page");
    }
}
