<?php

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
Route::get('/seksuele-intimidatie', function () {
    return view('seksuelteIntimidatie');
});
Route::get('/wat-kan-je-zelf-doen', function () {
    return view('wat-kan-je-zelf-doen');
});
Route::get('/statistieken', function () {
    return view('statistieken');
});