<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function download() {
        return response("Downloading a file");
    }
    function downloadInvoice($id) {
        return response("Downloading an invoice with ID:{$id}");
    }

    function showError() {
        // abort(404, 'File not found');
        return response("Error! No invoice provided", 404);
    }

    function download2(){
        return response()->file("romel.png");
    }
    function download3(){
        return response()->download("romel.png");
    }
}
