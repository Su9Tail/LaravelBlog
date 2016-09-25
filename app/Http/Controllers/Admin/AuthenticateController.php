<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AuthenticateController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('admin.authenticate.login');
    }

    public function authenticate(Request $request)
    {
    }

    public function logout()
    {
    }
}
