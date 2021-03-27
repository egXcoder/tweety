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

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweet','TweetsController@store')->name('tweets.store');
    Route::get('/profile/{user}','ProfileController@show')->name('profile.show');
    Route::post('/profile/{user}/toggle-follow','ProfileController@toggleFollow')->name('profile.toggle_follow');
    Route::get('/profile/{user}/edit','ProfileController@edit')->name('profile.edit');
});


// Route::get('/home', 'HomeController@index')->name('home');
