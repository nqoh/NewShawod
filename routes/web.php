<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\auth\AuthController;
use App\Http\Controllers\v1\auth\ResetPasswordController;
use App\Http\Controllers\v1\CancellationController;
use App\Http\Controllers\v1\NotificationController;
use App\Http\Controllers\v1\PaymentController;
use App\Http\Controllers\v1\ProjectController;
use App\Http\Resources\NotificationsResource;
use App\Http\Resources\PaymentResource;
use App\Models\Coupon;
use App\Models\Rate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Number;

Route::inertia('login','auth/Login')->name('login');
Route::get('/test', function(){
  return view('emails.project_complete_thank_you');
});
Route::domain('portal.shawod.co.za')->group(function(){

    Route::middleware('guest')->group(function(){
    Route::inertia('/','auth/Login')->name('login');
    Route::post('/Login', [AuthController::class, 'Login'])->name('Login');
    Route::post('/logout', [AuthController::class, 'Logout'])->name('Logout');
    Route::post('/password/reset/link', [ResetPasswordController::class, 'getResetPasswordLink'])->name('getResetPasswordLink');
    Route::get('/password/reset/{token}',[ResetPasswordController::class, 'showResetPasswordForm'])->name('showResetPasswordForm');
    Route::post('/password/reset', [ResetPasswordController::class, 'resetPassword'])->name('resetPassword');
   });

    Route::middleware('auth')->group(function(){

       Route::get('/', function(){
        $user = User::with(['project','rateus','notifications'])->whereId(Auth::user()->id)->first();
        return Inertia('Portal/Client/Dashboard',[
            'rateUs' => $user->rateus->status,
            'progress'=> $user->project->progress,
            'project' => $user->project,
            'notifications' => NotificationsResource::collection($user->notifications()->latest('id')->get())
            ]
        );
       })->name('ClientDashboard');

        Route::post('/rateus', function(Request $request){
        Rate::where('user_id',Auth::user()->id)->update(['status' => $request->rateUs]);
        return redirect()->back()->with('RateUs','Thank you for rating us');
       })->name('RateUs');
       
       Route::post('/updateNotificationStatus', [NotificationController::class, 'updateNotificationsStatus'])->name('updateNotificationStatus');
       Route::post('/updatePassword', [ResetPasswordController::class, 'updatePassword'])->name('updatePassword');
       Route::post('/DeleteNotification', [NotificationController::class,'delete'])->name('DeleteNotification');
       Route::post('/cancellation', [CancellationController::class,'store'])->name('cancellation');

       ///Admin Routes
       Route::get('/admin', function(){
        $users = User::with('project')->where('role_id',1)->get();
        return Inertia('Portal/Admin/index',[
            'users' => $users,
        ]);
       })->name('AdminDashboardIndex');

       Route::get('/viewClient/{id}', function($id){
        $user = User::with(['project','rateus','notifications','payment'])->whereId($id)->first();
        return Inertia('Portal/Admin/Dashboard',[
            'project' => $user->project,
            'payment' => new PaymentResource($user->payment),
            'coupon' => Coupon::whereId($user->project->coupon_id)->first(),
        ]);
       })->name('viewClient');

       Route::post('/updateProgress',[ProjectController::class, 'updateProgess'])->name('updateProgess');
       Route::post('/acceptClient', [ProjectController::class, 'acceptClient'])->name('acceptClient');
       Route::post('/notification', [NotificationController::class, 'store'])->name('StoreNotification');
       Route::post('/PaymentAlert', [PaymentController::class, 'SendPaymentAlert'])->name('PaymentAlert');
    });

});


Route::domain('shawod.co.za')->group(function(){
Route::middleware('guest')->group(function(){
    Route::inertia('/','Welcome')->name('home');
    Route::inertia('/website','Websites')->name('websites');
    Route::inertia('/packages','Packages')->name('packages');
    Route::inertia('/portfolio','Portfolio')->name('portfolio');
    Route::inertia('/aboutus','Aboutus')->name('aboutus');
    Route::inertia('/contactus','Contact')->name('contactus');
    Route::inertia('/howitwork','HowItWork')->name('howitworks');
    Route::inertia('/createawebsite','HowToCreateWebsite')->name('createawebsite'); 
    Route::inertia('/seo','Seo')->name('seo');
    Route::inertia('/hosting','Hosting')->name('hosting');
    Route::inertia('/domain','Domain')->name('domain');
    Route::inertia('/getpackage','GetPackage')->name('getpackage');
    Route::inertia('/getwebsite','GetWebsite')->name('getwebsite');
    Route::inertia('/portal/login','Portal/Auth/Login')->name('portal');
    Route::inertia('/blog','Blog')->name('blog');
    Route::inertia('/blog1','Blog1')->name('blog1');
    Route::inertia('/blog2','Blog2')->name('blog2');
    Route::inertia('/blog3','Blog3')->name('blog3');
    Route::inertia('/blog4','Blog4')->name('blog4');
    Route::inertia('/blog5','Blog5')->name('blog5');
    Route::inertia('/faq','Faqs')->name('faq');
    Route::inertia('/privacy','Privacy')->name('privacy'); 
    Route::inertia('/terms','Terms')->name('terms');
});
});

