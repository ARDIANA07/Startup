<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth');
    }

    public function post_login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/admin');
        } else {
            return back();
        }
    }
}
