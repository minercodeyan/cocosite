<?php

namespace App\Http\Controllers;

use App\Models\ClientApplication;
use App\Models\User;
use Illuminate\Http\Request;

class ClientApplicationsController extends Controller
{
    public function makeApp(Request $request){

        $data = $request->all();

        ClientApplication::create(
            [
                'client_name'=>$data['client_name'],
                'client_phone'=>$data['client_phone'],
                'client_comment'=>$data['client_phone']??null,
                'application_status'=>ClientApplication::STATUS_STARTED,
                'application_type'=>$data['app_type']
            ]
        );


        return back()->with('success','Заявка упешно отправлена!');
    }
}
