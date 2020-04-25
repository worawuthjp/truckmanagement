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
Route::get('/employee', function () {
    return view('staff.employee');
});
Route::get('/spare', function () {
    return view('stock.spare');
});
Route::get('gasoline', function () {
    return view('stock.gasoline');
});
Route::get('/carhistory', function () {
    return view('car.historycar');
});
Route::get('/account_setting', function () {
    return view('account_setting');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/employee_reportWork', function () {
    return view('staff.reportWork');
});