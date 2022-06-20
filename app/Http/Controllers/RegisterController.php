<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function RegisterRender()
    {

        return view('register');
    }

    public function doRegister(Request $request)
    {

        $register_inputs = $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'phone' => 'numeric',
            'password' => 'required|confirmed'
        ]);

        auth()->login(
            
            User::create([
                'name' => $register_inputs['name'],
                'email' => $register_inputs['email'],
                'phone' => $register_inputs['phone'],
                'password' => Hash::make($register_inputs['password']),
            ])
        );

        return redirect('/');
    }
}
