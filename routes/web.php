<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
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
    return view('index');
});
Route::get('/au', function () {
    return view('aboutus');
});
Route::get('/cu', function () {
    return view('contactus');
});
Route::get('/l', function () {
    return view('login');
});
Route::get('/s', function () {
    return view('single');
});
Route::get('/1s', function () {
    return view('single1');
});
Route::get('/s2', function () {
    return view('single2');
});
Route::get('/s3', function () {
    return view('single3');
});
Route::get('/r', function () {
    return view('register');
});
Route::get('/d', function () {
    return view('dashboard');
});


Route::get('contactus',[mycontroller::class,'response']);