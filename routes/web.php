<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/counselor', function () {
    return view('counselor');
});


Route::get('/create', function () {
    return view('create');
});


Route::get('/dean', function () {
    return view('dean.dean');
});

// routes/web.php
Route::get('/student', function () {
    return view('student.student');
});

