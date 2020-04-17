<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class IndexController extends Controller
{
    public function showIndex(){
        $user = auth()->user();
        return view('users.index',compact('user'));
    }
}
