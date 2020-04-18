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
            <a href="{{route('userDeleteForm', $user->id)}}" class="btn btn-danger btn-md">Delete</a>
        </td>
    </tr>   
</table>
@endsection