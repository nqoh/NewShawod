<?php

use Illuminate\Support\Facades\Route;

Route::domain('portal.shawod.co.za')->group(function(){
  Route::get('/', function(){
    return "testing";
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
   // Route::inertia('/howtocreatewebsite','HowToCreateWebsite')->name('howtocreatewebsite');
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

Route::middleware('auth')->group(function(){

});

