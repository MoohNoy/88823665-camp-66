<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Registercontroller extends Controller
{
    function index(){
        return view("register");
    }
    function create(Request $req){
        $User = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
        ]);
        return redirect('/user');
    }
}
