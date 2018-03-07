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
Route::get('/company', function() {
    return view('company.create');
});
Route::get('/', function() {
	return redirect()->route('home');
});
Route::get('/home', function() {
    return view('index');
})->name('home');
Route::get('/result', 'JobController@showResult');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('user', 'UserController');
    Route::resource('job', 'JobController');
    Route::resource('resume', 'ResumeController');
    Route::resource('apply', 'ApplyController');
    Route::get('/user/jobs', 'ApplyController@showAppliedJobs');
    Route::get('/applications', 'ApplyController@showReceivedApplication');
    Route::post('/logout','Auth\AuthController@logout');
});
Auth::routes();