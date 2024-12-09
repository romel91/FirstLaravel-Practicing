<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about' , [AboutController::class , 'about']);
Route::get('/about/me' , [AboutController::class , 'aboutme']);
Route::get('/download' , [FileController::class , 'download']);
Route::get('/download/invoice/{id}' , [FileController::class , 'downloadInvoice']);
Route::get('/download/invoice' , [FileController::class , 'showError']);
// Route::get('/home', [App\Http\Controllers\SiteController::class, 'showPage']);
Route::get('/{page}', [SiteController::class, 'showPage']);
Route::get('/file/d1' , [FileController::class , 'download2']);
Route::get('/download2/d2' , [FileController::class , 'download2']);

//request
Route::post('/file/d1' , [FileController::class , 'download2']);
Route::post('/about2' , [AboutController::class , 'about']);
Route::get('/tasks/index' , [TaskController::class , 'index']);
Route::get('/tasks/showTasks' , [TaskController::class , 'showTasks']);