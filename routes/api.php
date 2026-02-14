<?php

use App\Http\Controllers\v1\AuthController;
use App\Http\Controllers\v1\CouponController;
use App\Http\Controllers\v1\StoreUserProjectController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->prefix('v1')->group(function(){
    Route::post('/store',[StoreUserProjectController::class,'store']);
    Route::get('/coupon/{coupon}', [CouponController::class,'getCoupon']);
});
