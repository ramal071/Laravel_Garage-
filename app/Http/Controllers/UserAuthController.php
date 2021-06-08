<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\User;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function register()
    {
        return view('auth.register');
    }

    function create(Request $request)
    {
       // return $request->input();

        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:users',   //users = db
           'password'=>'required|min:3|max:12',
        ]);

       $user = new User;
       $user ->name = $request->name;
       $user ->email = $request->email;
       $user ->password = Hash::make($request->password);
       $query = $user->save();

        if($query){
           return back()->with('success', 'registered');
        } else {
           return back()->with('fail', 'Error !!');
        }
    }

    function check(Request $request)
    {
      //  return $request->input();
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:3|max:12'
        ]);

        $user = User::where('email','=', $request->email)->first();
            if($user){
                if(Hash::check($request->password, $user->password))
                {
                    $request->session()->put('LoggedUser', $user->id);
                    return redirect('home');
                }
                else{
                    return back()->with('fail','Invalid password');
                }
            }
                else
                {
                    return back()->with('fail', 'Not email');
                }
        }

        function profile()
        {
          //  return view('admin.profile');
          if(session()->has('LoggedUser')){
              $user = User::where('id', '=', session('LoggedUser'))->first();
              $data = [
                  'LoggedUserInfo'=>$user
              ];
          }
          return view('home', $data);
        }
    
        function logout()
        {
            if(session()->has('LoggedUser'))
            {
                session()->pull('LoggedUser');
                return redirect('login');
            }
        }
    }
    


