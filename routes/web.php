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

Route::get('/result', function () {
    return view('search-result');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/profile', function () {
        return view('user');
    });

    Route::get('/apply', function () {
        return view('apply');
    });

    Route::get('/post-job', function () {
        return view('post-job');
    });

    Route::resource('job','JobController');
});

Auth::routes();
