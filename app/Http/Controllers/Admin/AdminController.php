<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        return view('admin.index');
    }
}
