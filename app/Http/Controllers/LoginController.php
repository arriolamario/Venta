<?php

namespace Venta\Http\Controllers;

use Illuminate\Http\Request;
use Venta\usuario;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //

    public function index(){
        $user = new usuario();


        return view('login', ['user' => $user]);
    }

    public function login(Request $request){
        
        $user =   usuario::where('nombre','=',$request->nombre)->First();

        if($user){

            return $user->toJson();
        }
        else{
            return "{}";
        }
        
    }
}
