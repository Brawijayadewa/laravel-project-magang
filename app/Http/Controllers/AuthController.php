<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller 
{
    public function loginIndex()
    {
        return view('layouts.auth.login.index');
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
            if(Auth::user()->role === 'admin')
            {
                return redirect()->route('admin.index');
            }
            if(Auth::user()->role === 'admin')
            {
                return redirect()->route('admin.index');
            }
        }

        else
        {
            return back()->with('error', 'username or password is incorrect');
        } 
    }

    public function logout() {

        Auth::logout();
        session()->flush();

        return redirect()->route('login.index');
    }

}
               
