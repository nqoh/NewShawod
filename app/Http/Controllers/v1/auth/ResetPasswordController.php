<?php

namespace App\Http\Controllers\v1\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Mail\ResetPasswordMAil;
use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ResetPasswordController extends Controller
{
    public function updatePassword(Request $request){
        $request->validate(['password' => 'required| min:6 | confirmed']);
        User::whereId(Auth::user()->id)->update(['password' => Hash::make(request('password'))]);
        return redirect()->back()->with('updatePassword','Password update successfully');
     }


     public function getResetPasswordLink(Request $request)
     {
        $request->validate(['email' => 'exists:users|email|required']);
        $user = User::whereEmail($request->email)->first();
        $token = Password::getRepository()->create($user);

        PasswordResetToken::updateOrCreate(
            ['email'=> $request->email],
            ['toke' => $token, 'created_at'=>now()]
        );

        Mail::to($request->email)->queue(new ResetPasswordMAil($token, $request->email, $user->name));

        return Inertia('auth/ResetPasswordLinkSent');
     }

     public function showResetPasswordForm(Request $request, $token)
     {
   
        if(! $this->checkResetPasswordLink($request, $token))
        {
             return Inertia('auth/resetPasswordLinkExpired');
        }

            return Inertia('auth/ResetPasswordForm',[
                     'token' => $request->token,
                     'email' => $request->email
            ]);
     }

     public function resetPassword(Request $request)
     {

        if(! $this->checkResetPasswordLink($request,$request->token))
        {
             return Inertia('auth/resetPasswordLinkExpired');
        }

        $request->validate(['password' => 'required| min:6 | confirmed', 'email'=> 'exists:users|required']);
        User::whereEmail($request->email)->update(['password' => Hash::make(request('password'))]);
        PasswordResetToken::whereEmail($request->email)->delete();
        return redirect()->route('login')->with('resetPassword','Password reset successfully');

     }


     private function checkResetPasswordLink(Request $request, $token)
     {
        $record = PasswordResetToken::whereEmail($request->email)->first();

        $expires = config('auth.passwords.users.expire');
        if(!$record || !Hash::check($token, $record->token) || Carbon::parse($record->created_at)->addMinutes($expires)->isPast())
        {
           return false;
        }

           return true;

     }
}
