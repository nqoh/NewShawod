<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

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


     public function updatePassword(Request $request){
        $request->validate(['password' => 'required| min:6 | confirmed']);
        User::whereId(Auth::user()->id)->update(['password' => Hash::make(request('password'))]);
        return redirect()->back()->with('updatePassword','Password updated successfully');
     }

     public function Logout(){
        Auth::logout();
        return redirect()->route('login');
     }
}
