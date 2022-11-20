<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImgSolutionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/képfelismerés', function () {
    return view('kepfelism');
});

Route::get('/eredmény', function () {
    return view('eredmeny');
});

Route::get('/elerhetosegek', function () {
    return view('elerheto');
});

Route::get('imgsolution', [ImgSolutionController::class,'ImageNumber']);
