<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\ProductController;



Route::get("/product",[ProductController::class,"index"])->middleware([CheckLogin::class,]);
Route::post("/product",[ProductController::class,"store"])->middleware([CheckLogin::class,]);
Route::post('/home', [HomeController::class, 'index'])->middleware([CheckLogin::class,]);

Route::get("/mylaravel/{id?}", 
[Mycontroller::class,'myfunction']);

Route::post("/mylaravel/{id?}", 
[Mycontroller::class,'myfunction']);


Route::match(["get","post"],'/', 
[Homecontroller::class,'index']);
Route::match(["get","post"],'/home', 
[Homecontroller::class,'index']);


Route::match(["get","post"],'/register', 
[Registercontroller::class,'index']);

Route::get("/login", 
[Logincontroller::class,'index']);
Route::post("/login", 
[Logincontroller::class,'login']);

Route::get('/register',  
[Registercontroller::class,'index']);
Route::post('/register',  
[Registercontroller::class,'create']);



Route::get('/user/{id}',  
[Usercontroller::class,'edit']);

Route::get('/user',  
[Usercontroller::class,'index']);

Route::put('/user' ,
[Usercontroller::class, 'edit_user']);

Route::delete('/user',
[Usercontroller::class, 'delete']);


Route::get('/login',function(){
    session()->forget('user');
    session()->flush();
return redirect('/login');
});