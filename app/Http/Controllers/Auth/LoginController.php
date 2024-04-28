<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function login(Request $request)
    {
        $currentPage = 'login';

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home');
        } else {
            return redirect()->route('login')->with('error', 'Credenciales inválidas')->with('currentPage',$currentPage);
        }
    }
    public function showLoginForm()
    {
        $currentPage = 'login';
        return view('auth.login', compact('currentPage'));
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
