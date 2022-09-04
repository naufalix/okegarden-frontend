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
    return view('index');
});

// Route::get('/dashboard/login', function () {
//     return view('dashboard/login');
// });

// Route::get('/dashboard/register', function () {
//     return view('dashboard/register');
// });

// Route::get('/dashboard/', function () {
//     return view('dashboard/main');
// });

// Route::get('/dashboard/main', function () {
//     return view('dashboard/main');
// });

// Route::get('/dashboard/course', function () {
//     return view('dashboard/course');
// });