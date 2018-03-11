<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout()
    {
    	Auth::logout();

    	return redirect('/')->with('message', 'Logout хийгдлээ.');
    }
}
