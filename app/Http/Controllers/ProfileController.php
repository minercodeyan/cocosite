<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('profile-main');
    }

    public function changePassword(Request $request){
        if($request->isMethod('get')){
            return view('profile-change-password');
        }
        elseif($request->isMethod('post')){

            $user = Auth::user();

            if(!Hash::check($request->post('old_password'),$user->getAuthPassword())){

                return redirect()->back()->withErrors([
                    'auth' => 'Неправильный старый пароль'
                ]);

            }
            $user->password = $request->post('new_password');
            $user->save();

            return back()->with('success','Пароль упешно сменен!');
        }
    }

}
