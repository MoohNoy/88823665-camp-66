<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;
Route::get('/hello', function () {
    return "<h1>Happy very much!</h1>";
});

Route::get("/mylaravel/{id?}", 
[Mycontroller::class,'myfunction']);

Route::post("/mylaravel/{id?}", 
[Mycontroller::class,'myfunction']);

Route::get('/', function () {
    return view('layouts.default');
});
Route::get("/login", [Logincontroller::class,'index']);