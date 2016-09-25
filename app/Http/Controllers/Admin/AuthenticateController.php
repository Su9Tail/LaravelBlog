<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\LoginRequest;

class AuthenticateController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('admin.authenticate.login');
    }

    public function authenticate(LoginRequest $request)
    {
        $inputs = $request->all();
        if (Auth::attempt(['username' => $inputs['username'], 'password' => $inputs['password']])) {
            return redirect('/');
        }
        return back()->withInput()->with('failedMessage', '用户名或密码不正确！');
    }

    public function logout()
    {
        if (!Auth::check()) {
            return redirect('login')->with('failedMessage', '当前尚未登录！');
        }
        Auth::logout();
        return redirect('login')->with('succeedMessage', '退出成功！');
    }
}
