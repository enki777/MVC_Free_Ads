<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //you can watch for Http\Controllers\Auth\RegisterController.php
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
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        // $user = auth()->user();
        foreach ($request->request as $key => $value) {
            if (isset($value) && $key != '_token' && $key != '_method') {
                if (!empty($request['currentPassword'])){
                    if(Hash::check($request['currentPassword'], $user->password)) {
                        if ($request['password'] == $request['passwordCheck']) {
                            $arr[$key] = $value;
                            $arr['password'] = Hash::make($value);
                            unset($arr['passwordCheck']);
                            unset($arr['currentPassword']);
                        } else {
                            return back()->with('error', 'Vos mots de passe ne sont pas identiques !');
                        }
                    }else{
                        return back()->with('error', 'Mot de passe incorrect !');
                    }
                } else {
                    return back()->with('error', 'Vous devez renseigner votre mot de passe !');
                }
            }
        }
        $user->update($arr);
        return redirect()->route('profile.index');
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
            return back()->with('error', 'les mots de passe ne sont pas identiques');
        } elseif (empty($request['password']) || empty($request['passwordCheck'])) {
            return back()->with('error', 'Vous devez remplir les champs pour valider la suppression !');
        } elseif (Hash::check($request['password'], $user->password)) {
            $user->delete();
            return redirect()->route('profile.index');
        } else {
            return back()->with('error', 'Votre mot de passe est incorrect !');
        }
    }
}
