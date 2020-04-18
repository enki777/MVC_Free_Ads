<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Annonce;
use App\User;
use Illuminate\Support\Facades\DB;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::find(Auth::user()->id);
        $annonces = DB::table('users')
            ->join('annonces', 'users.id', '=', 'annonces.user_id')
            ->select('*')
            ->get();
        return view('annonces.index',compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(Auth::user()->id);
        // var_dump($user->id);
        Annonce::create([
            'title'=> $request['title'],
            'body'=> $request['body'],
            'image'=> '',
            'prix'=> $request['prix'],
            'user_id'=> $user->id
            ]);
        return redirect()->route('annonces.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        echo 'yes';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        return view('annonces.edit',compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annonce $annonce)
    {
        // $this->validate($request,[
        //     'title' => 'required',
        //     'body' => 'required',
        //     'prix' => 'required',
        //     'user_id' => $annonce->user_id
        //     ]);

            $annonce->update([
            'title' => $request['title'],
            'body' => $request['body'],
            'prix' => $request['prix'],
            ]);
            return redirect()->route('annonces.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {   
        $annonce->delete();
        return redirect()->route('annonces.index');
    }
}
