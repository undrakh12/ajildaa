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
Route::get('/', function() {
	return redirect()->route('home');
});
Route::get('/home', function() {
    return view('index');
})->name('home');
Route::get('/result', 'JobController@showResult');
Route::get('/apply', function() {
    return view('apply');
});
// Нэвтэрсэн хэрэглэгч хандах эрхтэй route
Route::group(['middleware' => ['auth']], function() {
    Route::resource('user', 'UserController');
    Route::resource('job', 'JobController');
    Route::resource('resume', 'ResumeController');
    Route::post('/logout','Auth\AuthController@logout');
});
Auth::routes();