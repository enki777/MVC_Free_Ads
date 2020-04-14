<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showRegister(){
        return view('register');
    }

    public function showRegistered(){
        var_dump($_GET);
        var_dump($_POST);
    }
}
