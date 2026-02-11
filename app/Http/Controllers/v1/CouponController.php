<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\HttpResponse as AppHttpResponse;

class CouponController extends Controller
{
     use AppHttpResponse;
     public function getCoupon(Request $request){

         $coupon = Coupon::whereName($request->coupon)->first();

          if($coupon){
    
             if($coupon->status === 1){

              return $this->success([
                'id' => $coupon->id,
                'name' => $coupon->name,
                'percentage' => $coupon->percentage,
                'status' => $coupon->status,
                'used' => $coupon->used
              ], 'You coupon is active');

             }else{
              
              return $this->error('Coupon expired', 401);

             }
          
          }

          return  $this->error('Invalid coupon',401);
     }
}
