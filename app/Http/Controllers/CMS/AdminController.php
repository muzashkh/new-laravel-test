<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function showloginForm()
    {

        return view('cms.login');
    }

    public function login(Request $request)
    {
        dd($request);
    }

    public function showregisterForm()
    {
        return view('cms.register');
    }

    public function register(Request $request)
    {
        dd($request);
    }
}
