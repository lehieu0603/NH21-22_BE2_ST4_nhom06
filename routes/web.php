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
Route::get('/{page?}', function ($page="index") {
    return view($page);
});
/*
Route::get('/gioithieu', function () {
    return view('gioithieu');
});
Route::get('/sanpham', function () {
    return view('sanpham');
});
Route::get('/lienhe', function () {
    return view('lienhe');
});
Route::get('/ban', function () {
    return view('ban');
});
Route::get('/ghe', function () {
    return view('ghe');
});
*/
