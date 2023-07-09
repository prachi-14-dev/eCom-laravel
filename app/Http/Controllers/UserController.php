<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $request){
        $user=User::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            return "username or password does not matched";
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }

    function signup(Request $request){
        $signupUser = new User;
        $signupUser->name=$request->name;
        $signupUser->email=$request->email;
        $signupUser->password=Hash::make($request->password);
        $signupUser->save();

        return redirect('/login');
    }
}
