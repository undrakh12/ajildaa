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

Route::get('/view-job', 'JobController@showJobDetail');

Route::get('/apply', function() {
    return view('apply');
});

// // qзөвхөн нэвтэрсэн хэрэглэгч хандах route
// Route::group(['middleware' => ['student']], function() {
//     Route::get('/profile', function () {
//         return view('user');
//     });

//     Route::get('/apply', function () {
//         return view('apply');
//     });

// });

// Нэвтэрсэн хэрэглэгч хандах эрхтэй route
Route::group(['middleware' => ['auth']], function() {
    Route::get('/profile', function () {
        return view('user');
    });

    Route::resource('job','JobController');

    Route::post('/logout','Auth\AuthController@logout');
});
Auth::routes();