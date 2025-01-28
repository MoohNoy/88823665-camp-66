<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\Homecontroller;

Route::get('/hello', function () {
    return "<h1>Happy very much!</h1>";
});

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
[Logincontroller::class,'index']);