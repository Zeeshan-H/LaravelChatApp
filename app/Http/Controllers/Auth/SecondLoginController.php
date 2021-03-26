<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SecondLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:users2')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.seconlogin');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if(Auth::guard('users2')->attempt($credentials))
        {

            return redirect()->route('user2.home');
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::guard('users2')->logout();

        return redirect('/user2/login');

    }

}
