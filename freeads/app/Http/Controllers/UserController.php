<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('users.profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //you can watch for Http\Controllers\Auth\RegisterController.php
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user = auth()->user();
        $user = User::find(Auth::user()->id);
        // var_dump($user);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find(Auth::user()->id);
        $password= Hash::make($request['password']);
        // $user = auth()->user();
        $pwds = [$request['password'], $request['passwordCheck']];

        if ($request['password'] !== $request['passwordCheck']) {
            return back()->with('error', 'les mdp ne sont pas identiques');
        } else {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:8',
            ]);
            $user->update([
                'name'=>$request['name'],
                'email'=>$request['email'],
                'password'=>$password
            ]);
            return redirect()->route('profile.index');
        }


        // $password = Hash::make($user->password);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userDeleteForm($id)
    {
        $user = User::find(Auth::user()->id);
        return view('users.deleteUser', compact('user'));
    }

    public function destroy(Request $request, $id)
    {
        $user = User::find(Auth::user()->id);
        if ($request['password'] !== $request['passwordCheck']) {
            return back()->with('error', 'les mdp ne sont pas identiques');
        }elseif(empty($request['password']) || empty($request['passwordCheck'])){
            return back()->with('error', 'Vous devez remplir les champs pour valider la suppression !');
        }elseif (Hash::check($request['password'], $user->password)) {
            $user->delete();
            return redirect()->route('profile.index');
        } else {
            return back()->with('error', 'Votre mot de passe est incorrect !');;
        }
    }
}
