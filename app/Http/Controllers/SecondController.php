<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:users2');
    }
    public function index()
    {
        return view('users.index2');
    }


}
