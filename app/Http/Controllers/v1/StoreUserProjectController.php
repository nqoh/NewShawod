<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserProjectRequest;
use App\Mail\OrderConfirmationMail;
use App\Models\Coupon;
use App\Models\Rate;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StoreUserProjectController extends Controller
{
    public function store(StoreUserProjectRequest $request)
    {
        
        try{
            
            DB::beginTransaction();
            
            $password = Str::random(6);

            $user = User::create([
                 'role_id' => 1,  
                 'name' => $request->name,
                 'surname' => $request->surname,
                 'phone' => $request->phone,
                 'email' => $request->email,
                 'password' => Hash::make($password)
            ]);

            $reference = $request->type == 'package' ? "WP".rand(10,99).date("s") : "WS".rand(10,99).date("s");

            $user->project()->create([
                'package' => $request->package,
                'description' => $request->description,
                'features' => $request->features,
                'reference' => $reference,
                'progress' => 0,
                'price' => $request->price,
                'coupon_id' => $request->coupon_id
            ]);

            $user->rateus()->create(['status'=> 50]);
            
            if($request->coupon_id){
                $coupon = Coupon::whereId($request->coupon_id)->first();
                Coupon::whereId($request->coupon_id)->update(['used' => $coupon->used += 1]);
            }

            Mail::to($request->email)->queue(new OrderConfirmationMail($request->name, $request->package,
             $reference, $request->price, now()));
    
            DB::commit();

            return response()->json([
                'Status' => 'Successful',
                'Message' => 'Your order was successful submitted ! check you email address',
                'StatusCode' => 201,
                'password' => $password
           ]);


        }catch(Exception $e){
            DB::rollBack();
            return response()->json(['Error' => $e->getMessage(), 500]);
        }
    }
}
