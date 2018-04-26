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

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'wat-is-het', 'as' => 'what.'], function(){
  Route::get('/', 'WhatController@index')->name('index');
  Route::get('/{section}', 'WhatController@showSection')->name('section');
});

Route::group(['prefix' => 'hoe-reageren', 'as' => 'reaction.'], function(){
  Route::get('/', 'ReactionController@index')->name('index');
});

Route::group(['prefix' => 'hun-verhaal', 'as' => 'testimonials.'], function(){
  Route::get('/', 'TestimonialController@index')->name('index');
});

Route::group(['prefix' => 'mijn-verhaal', 'as' => 'testimonials.'], function(){
  Route::get('/', 'TestimonialController@create')->name('create');
  Route::post('/', 'TestimonialController@post')->name('post');
});

Route::group(['prefix' => 'waar-kan-je-terecht', 'as' => 'contact.'], function(){
  Route::get('/', 'ContactController@index')->name('index');
  Route::get('/online-chats', 'ContactController@onlineChats')->name('chats');
  Route::get('/meldpunten', 'ContactController@hotlines')->name('hotlines');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
  Route::get('/', 'AdminController@index')->name('panel');
});
