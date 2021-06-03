<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; // 2. 
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // login function
    function login(Request $req)
    {
       // return $req->input();

     //  return User::where(['email'=>$req->email])->first();

     $user= User::where(['email'=>$req->email])->first();
        // return $user->password; password harida balanawa
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password not match";
        }
        else {
            $req->session()->put('user', $user);
            return redirect('/header');
        }
    }
}
