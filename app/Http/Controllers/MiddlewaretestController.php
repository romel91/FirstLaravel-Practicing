<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewaretestController extends Controller
{
   function publicMessage(Request $request){
    
    return response()->json([
        'message' => 'This is a public message'
    ]);
    }

    function privateMessage(Request $request){
        if(!request()->user()){
            return response()->json(['message' => 'You are not logged in']);
        }
        return response()->json([
            'message' => 'This is a private message'
        ]);
        }

    function secretMessage(Request $request){
        return response()->json([
            'message' => 'This is a secret message'
        ]);
        }

    function downloadFile(Request $request){
        return response()->json([
            'message' => 'file Download'
        ]);
    }

    function simpleMessage(Request $request){
        return response()->json([
            'message' => 'This is a simple message'
        ]);
    }

    function contentForBD(Request $request){
        $headers = $request->headers->all();
        return response()->json([
            'message' => 'You can only see this content from Bangladesh',
            'headers' => $headers
        ]);
    }
}
