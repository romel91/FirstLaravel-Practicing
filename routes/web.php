<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FileController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about' , [AboutController::class , 'about']);
Route::get('/about/me' , [AboutController::class , 'aboutme']);
Route::get('/download' , [FileController::class , 'download']);
Route::get('/download/invoice/{id}' , [FileController::class , 'downloadInvoice']);
Route::get('/download/invoice' , [FileController::class , 'showError']);
Route::get('/home', [App\Http\Controllers\SiteController::class, 'index']);