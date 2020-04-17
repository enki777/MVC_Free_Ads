@extends('layouts.app')
@section('content')

<table class="table table-bordered">
    <tr>
        <th>Votre nom :</th>
        <th>Votre email :</th>
        <th>Date de creation :</th>
        <th>Options de profil :</th>
    </tr>         
    <tr>
        <td>{{$user->name}}</td> 
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td with="140px" class="text-center">
            <a href="{{route('profile.edit', $user->id)}}" class="btn btn-info btn-md">Edit</a>
            {{ Form::open(['method'=> 'DELETE', 'route'=>['profile.destroy', $user->id], 'style'=>'display: inline;'])  }}
                <button type="submit" class="btn btn-danger btn-md">Delete</button>
            {{ Form::close() }}
        </td>
    </tr>   
</table>
@endsection