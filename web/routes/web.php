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
    return view('index.home');
});

Route::get('/process', function () {
    return view('process.process');
});
Route::get('/carinfo', function () {
    return view('car.info');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/security', function () {
    return view('security');
});
Route::get('/account_setting', function () {
    return view('account_setting');
});
Route::get('/info', function () {
    return view('info');
});
