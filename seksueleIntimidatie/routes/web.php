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
use App\Websection;

Route::get('/', 'SiteController@index');

Route::get('/admin', 'AdminController@index')->name('admin'); 

Route::post('/addWebsection',['as' => 'form_url', 'uses' => 'AdminController@save_data']);

Route::post('/editWebsection',['as' => 'form_url', 'uses' => 'AdminController@edit_data']);
Route::post('/deleteWebsection',['as' => 'form_url', 'uses' => 'AdminController@delete_data']);




Route::get('edit/{id}', array('as' => 'websection.edit', function($id) 
{
    // return our view and Nerd information
    return View::make('edit') // pulls app/views/nerd-edit.blade.php
        ->with('websection', Websection::find($id));
}));




