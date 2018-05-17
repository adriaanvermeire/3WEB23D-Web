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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'wat-is-het', 'as' => 'what.'], function(){
  Route::get('/', 'WhatController@index')->name('index');
  Route::get('/{section}', 'WhatController@showSection')->name('section');
});

Route::group(['prefix' => 'hoe-reageren', 'as' => 'reaction.'], function(){
  Route::get('/', 'ReactionController@index')->name('index');
});

Route::group(['prefix' => 'hun-verhaal', 'as' => 'testimonials.'], function(){
  Route::get('/', 'TestimonialController@index')->name('index');
  Route::get('/{id}', 'TestimonialController@show')->name('show');
});

Route::group(['prefix' => 'mijn-verhaal', 'as' => 'testimonials.'], function(){
  Route::get('/', 'TestimonialController@create')->name('create');
  Route::post('/', 'TestimonialController@post')->name('post');
});

Route::group(['prefix' => 'waar-kan-je-terecht', 'as' => 'contact.'], function(){
  Route::get('/', 'ContactController@index')->name('index');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function(){
  Route::get('/', 'AdminController@index')->name('index');
  Route::get('/wat-is-het', 'AdminController@what')->name('what');
  Route::post('/', 'AdminController@create_section')->name('create-section');
  Route::post('/publish', 'AdminController@toggle_published')->name('toggle_published');

  // Admin Testimonial
  Route::get('/testimonials', 'AdminController@testimonials')->name('testimonials');
  Route::get('/accept/{id}', 'TestimonialController@accept_testimonial')->name('accept_testimonial');
  Route::get('/reject/{id}', 'TestimonialController@reject_testimonial')->name('reject_testimonial');
  Route::get('/highlight/{id}', 'TestimonialController@highlight')->name('highlight');
  Route::get('/review/{id}', 'TestimonialController@review')->name('review');
});

Route::get('/admin/login', 'AdminController@login')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login')->name('authenticate');
