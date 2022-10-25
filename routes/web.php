<?php

use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminPhongController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// Route::get('/',function(){
//     return view('welcome');
// });


Route::get('/',[DemoController::class,'index']);

// Admin 

Route::get('/adminhome',[AdminPhongController::class,'index'])->name('Admin.home');
Route::get('/adminthongtindathang',[OrderController::class,'index'])->name('Admin.thongtindathang');
Route::get('/adminkhachhang',[AdminCustomerController::class,'index'])->name('Admin.khachhang');
Route::get('/adminaddRoom',[AdminPhongController::class,'create'])->name('AdminAddRoom');
Route::post('/adminstoreRoom',[AdminPhongController::class,'store'])->name('AdminStoreRoom');
