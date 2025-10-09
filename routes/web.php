<?php

use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function(){

    Route::inertia('/','Welcome')->name('home');
    Route::inertia('/website','Websites')->name('websites');
    Route::inertia('/packages','Packages')->name('packages');
    Route::inertia('/portfolio','Portfolio')->name('portfolio');
    Route::inertia('/aboutus','Aboutus')->name('aboutus');

});


