<?php

namespace App\Http\Controllers\CMS;

use App\Http\Requests\ValidateCMSUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{

    public function showloginForm()
    {

        return view('cms.login');
    }

    public function login(Request $request)
    {
        //dd($request);

        $this->validateLogin($request);

        if(\Auth::guard('cms')->attempt(request(['email', 'password']), $request->filled('remember')))
        {
            $request->session()->regenerate();
            return redirect()->to(route('admin.news'));
        }else{
            return redirect()->to(route('admin.login'));
        }
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function showregisterForm()
    {
        return view('cms.register');
    }

    public function register(ValidateCMSUser $request)
    {

        $user = \App\Models\CMSUsers::create(request(['username', 'email', 'password', 'first_name', 'last_name']));
        //auth()->guard('cms')->login($user);
        \Auth::guard('cms')->login($user);
        return redirect()->to(route('admin.news'));
    }

    public function logout()
    {
        \Auth::guard('cms')->logout();
        return redirect()->to(route('admin.login'));
    }

}
