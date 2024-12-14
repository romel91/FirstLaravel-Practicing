<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SitedemoController;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/download' , [FileController::class , 'download']);
Route::get('/download/invoice/{id}' , [FileController::class , 'downloadInvoice']);
Route::get('/download/invoice' , [FileController::class , 'showError']);
Route::get('/file/d1' , [FileController::class , 'download2']);
Route::get('/download2/d2' , [FileController::class , 'download2']);

//request
Route::post('/file/d1' , [FileController::class , 'download2']);
Route::get('/tasks/index' , [TaskController::class , 'index']);
Route::get('/tasks/showTasks' , [TaskController::class , 'showTasks']);

Route::get('/' , [SitedemoController::class , 'home']);
Route::get('/menu' , [SitedemoController::class , 'menu']);
Route::get('/about' , [SitedemoController::class , 'about']);
Route::get('/reservations' , [SitedemoController::class , 'reservations']);

//assignment task routes

//task2
Route::get('/user-agent', function (Request $request) {
    
    $userAgent = $request->header('User-Agent');
    return response()->json([
        'User-Agent' => $userAgent
    ]);
});


//task1
Route::post('/form-submit', function (Request $request) {
    $email = $request->input('email');
    if ($email) {
        return response()->json([
            'status' => 'success',
            'message' => 'Form submitted successfully.',
            'email' => $email
        ]);
    } else {
        return response()->json([
            'status' => 'failed',
            'message' => 'Form submission failed.'
        ]);
    }
});