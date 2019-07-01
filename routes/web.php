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
    if(\auth::guest())
        return view('welcome');
    else
        return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/listening', function(){
    return view('apps.pages.listening');
})->name('listening');

Route::get('/reading', function(){
    return view('apps.pages.reading');
})->name('reading');
