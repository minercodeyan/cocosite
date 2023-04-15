<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PermissionHelper
{
    public static function getUserRole(){
        $user = Auth::user();

        $role = DB::table('user_roles')->where('user_id',$user->id)->first();

        if($role){
            return $role->role_name;
        }
        return null;
    }
}
