<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\session;
Route::get('/', function () {
  
   return view('welcome');
});//نعرض الصفحة 
Route::get('/mobile',function(){
   return view('nokia.nokia');
})->name('mobile');
Route::get('/invo',function(){
   return view('invo');
});
Route::get('/register',function(){
   return view('register');
});


Route::get('/A1',[MobileController::class,'A1'])->name('A1');
Route::get('/A2',[MobileController::class,'A2'])->name('A2');
Route::get('/register',[MobileController::class,'register']);
Route::get('/mobile',[MobileController::class,'mobiletype']);
Route::get('/mobiletype',[MobileController::class,'mobiletype'])->name('mobiletype');
Route::get('/checkout/{id}',[MobileController::class,'Checkout'])->name('checkout');
Route::get('/invo',[MobileController::class,'invoce'])->name('invoce');
Route::post('/invoic',[MobileController::class,'invoic'])->name('invoic');
//Route::get('/getmobiletype',[MobileController::class,'getmobiletype'])->name('getmobiletype');

Route::get('/GetEmpid',[EmployeeController::class,'GetEmpid'])->name('GetEmpid');
Auth::routes();

Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');

