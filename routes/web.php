<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\homepagecontroller;
use App\Http\Controllers\front\coursecontroller;
use App\Http\Controllers\front\contactController;
use App\Http\Controllers\front\MessageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::namespace('front')->group(function (){
    Route::get('/',[homepagecontroller::class,'index'])->name('front.homepage');
    Route::get('/cat/{id}',[coursecontroller::class,'cat'])->name('front.cat');
    Route::get('/cat/{id}/course/{c_id}',[coursecontroller::class,'show'])->name('front.show');
    Route::get('/contact',[contactController::class,'index'])->name('front.contact');
    Route::post('/message/newsLetter',[MessageController::class,'NewsLetter'])->name('front.message.newsletter');
    Route::post('/message/contact',[MessageController::class,'contact'])->name('front.message.contact');
    Route::post('/message/enroll',[MessageController::class,'enroll'])->name('front.message.enroll');


});




