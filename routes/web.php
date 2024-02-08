<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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

Route::get('/admin-login',[AuthController::class,'adminlogin']);
Route::post('/adminsignin',[AuthController::class,'adminsignin']);
Route::post('/verifylogin',[AuthController::class,'verifyOtp']);
Route::post('/resend-otp',[AuthController::class,'resendotp']);
Route::get('/admin-logout',[AuthController::class,'authlogout']);

Route::middleware(['Auth'=>'admin'])->group(function(){
    Route::get('/admin/index',[AdminController::class,'index']);
    Route::get('/admin/excludestate',[AdminController::class,'excludestate']);
    Route::post('/admin/addexcludestate',[AdminController::class,'addexcluedstate']);
});
