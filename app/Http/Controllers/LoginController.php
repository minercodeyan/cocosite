<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Dotenv\Validator;
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
        return view('reg-step2');
    }

    public function registerStepSecond(Request $request)
    {
        $userInfo = new UserInfo();
        $userInfo->first_name = $request->post('firstname');
        $userInfo->phone_number = $request->post('phone');
        $userInfo->birth_date = $request->post('date_of_b');
        $userInfo->category = $request->post('select');
        $userInfo->save();

        return view('reg-step3',['clientInfoId'=>$userInfo->id]);
    }

    public function registerStepThirt(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $name = explode('@',$request->post('email'));

        $user = User::create([
            'name'=>$name[0],
            'email'=>$request->post('email'),
            'password'=>bcrypt($request->post('password')),
        ]);
        $userInfo = UserInfo::findOrFail($request->post('client_info_id'));
        $userInfo->user_id = $user->id;
        $userInfo->save();

        Auth::login($user);

        return redirect('/');
    }

}
