<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function __construct(){
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm(){
        return view('auth.login');
    }
    public function login(){
        $credentials=$this->validate(request(), [
            'email'=>'email|required|string',
            'password'=>'required|string'
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->route('prueba');
        }
        return back()
            ->withErrors(['email' => trans('auth.failed')])
            ->withInput(request(['email']));
    }
}
