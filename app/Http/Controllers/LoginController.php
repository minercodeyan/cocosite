<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function getLogin()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        $credentials = ['email' => $request->email, 'password' => $request->password];
        $remember = $request->remember;

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/profile');
        }

        return redirect()->back()->withInput($request->only('email, remember'))->withErrors([
            'auth' => 'Неправильный логин или пароль'
        ]);
    }

    public function getRegPage()
    {
        return view('reg-step1');
    }

    public function registerStepFirst(Request $request)
    {
        return redirect('/register/step2');
    }

    public function getRegSecondPage()
    {
        return view('reg-step2');
    }

    public function registerStepSecond(Request $request)
    {
        return redirect('/register/step3');
    }

    public function getRegThirtPage()
    {
        return view('reg-step3');
    }

    public function registerStepThirt(Request $request)
    {
        return redirect('/');
    }

}
