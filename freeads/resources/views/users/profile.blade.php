@extends('layouts.app')
@section('content')

<table class="table table-bordered">
    <tr>
        <th class="text text-primary">Votre nom :</th>
        <th class="text text-primary">Votre email :</th>
        <th class="text text-primary">Date de creation :</th>
        <th class="text text-dark">Options de profil :</th>
    </tr>
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td with="140px" class="text-center">
            <a href="{{route('profile.edit', $user->id)}}" class="btn btn-dark btn-md">Editer</a>
            <a href="{{route('userDeleteForm', $user->id)}}" class="btn btn-danger btn-md">Supprimer</a>
        </td>
    </tr>
</table>

<div class="card  border border-dark" style="margin: 25px">
    <div class="card-header">
        <h1 class="text text-dark">Annonces</h1>
    </div>
    <div class="card-header">
        <a class="btn btn-dark btn-md" href="{{route('annonces.create')}}">Creer Annonce</a>
    </div>
    <div class="card-body">

        @foreach($annonces as $each)
        <div class="card border border-dark" style="margin: 30px;">
            <div class="card-header">
                <div style="float: left">
                    <h3> {{$each->name}} </h3>
                </div>
                <div style="float: right">
                    <a href="{{route('annonces.edit',$each->id)}}" class="btn btn-dark btn-md">Editer</a>
                    {{ Form::open( ['method'=> 'DELETE', 'route'=>['annonces.destroy', $each->id], 'style'=>'display: inline;'])  }}
                    <button type="submit" class="btn btn-danger btn-md">Supprimer</button>
                    {{ Form::close() }}
                </div>
            </div>
            <div class="card-body">
                <h4>{{$each->title}}</h4>
                <hr>
                <p class="text font-italic">{{$each->created_at}}</p>
                <hr>
                <h6>{{$each->body}}</h6>
                <h6>{{$each->prix}} €</h6>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection