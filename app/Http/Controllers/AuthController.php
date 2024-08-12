<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller 
{
    public function loginIndex()
    {
        return view('login/index');
    }
    
    public function login(Request $request) {
        $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required|string|min:8',
        ]); 

       $input = [
        'username' => $request->username,
        'password' => $request->password, 
       ];

       if(Auth::attempt($input))
        {
            return redirect('/');
        }

        else
        {
            return back()->with('error', 'username or password is incorrect');
        } 
    }

}
               
