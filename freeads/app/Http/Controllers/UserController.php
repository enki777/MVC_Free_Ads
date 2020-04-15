<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    public function showprofile(){
        return view('profile');
    }
}
