<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     public function Login(LoginRequest $request){
   
        if(Auth::attempt($request->only(['email','password']), $request->remember)){
            if(Auth::user()->role_id === 1){
                return redirect()->route('ClientDashboard');
            }else{
                return 'Admin';
            }
        }
          
         return back()->with('LoginError','Invalid Credentials');
     }

     public function Logout(){
        Auth::logout();
        return 'Logout';
     }
}
