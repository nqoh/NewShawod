<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DepositMail;
use App\Mail\finalPaymentMail;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function SendPaymentAlert(Request $request)
    {
        $user = User::whereId($request->id)->first();

       if($request->alertType === 'deposit')
       {

        Notification::create([
            'user_id'=>$request->id,
            'status' => 1, 
            'title'=> 'Initial Deposit',
            'description' => 'Hi <b>'. $user->name.'</b></br>
                               I am excited to officially kik off your website! To secure
                               your sport in my schedule and begin, i require a 50% upfront deposit.
                               I am looking forward to getting started!<br><br>
                               <b>Best regards,</b><br>
                               Nqobile Ngobese<br>
                               Web Developer
                              '
          ]);
           Mail::to($user->email)->queue(new DepositMail($user->name,$user->project->reference,$user->project->package, $user->payment->price * 0.5, $user->payment->price));
           return redirect()->back();

       }else if($request->alertType === 'final')
       {

        Notification::create([
            'user_id'=>$request->id,
            'status' => 1, 
            'title'=> 'Final Deliverable',
            'description' => 'Hello <b>'. $user->name.'</b></br>
                               I am happy to share that the final versions of your website are finished and look fantastic.
                               I am ready to deploy your website to live server as soon as the remaining balance is settled.
                               I am looking forward to deploy your website!<br><br>
                               <b>Best regards,</b><br>
                               Nqobile Ngobese<br>
                               Web Developer
                              '
          ]);
           Mail::to($user->email)->queue(new finalPaymentMail($user->name,$user->project->reference,$user->project->package, $user->payment->price * 0.5, $user->payment->price));
           return redirect()->back();
        
       }else{
        
       }
    }
}
