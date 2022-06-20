<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function loginRender()
    {

        return view('login');
    }

    public function doLogin(Request $request)
    {

        $login_inputs = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($login_inputs)) {

            return redirect('/');
        }

        return back()->withErrors('Your email or password is not correct');
    }
}
