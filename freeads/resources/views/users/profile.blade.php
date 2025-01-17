@extends('layouts.app')
@section('content')

<div class="col-sm-11" style="margin-left: 70px;">
    <table class="table table-bordered bg-dark">
        <tr>
            <th class="text text-primary">Votre nom :</th>
            <th class="text text-primary">Votre email :</th>
            <th class="text text-primary">Date de creation :</th>
            <th class="text text-danger">Options de profil :</th>
        </tr>
        <tr>
            <td class="text text-white">{{$user->name}}</td>
            <td class="text text-white">{{$user->email}}</td>
            <td class="text text-white">{{$user->created_at}}</td>
            <td with="140px" class="text-center">
                <a href="{{route('profile.edit', $user->id)}}" class="btn btn-light btn-md">Editer</a>
                <a href="{{route('userDeleteForm', $user->id)}}" class="btn btn-danger btn-md">Supprimer</a>
            </td>
        </tr>
    </table>
</div>

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
                    <h3> {{$each->name}} | <span class="text text-muted font-italic" style="font-size: 13px;">{{$each->updated_at}}</span></h3>
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
                <h6>{{$each->body}}</h6>
                <hr>
                <h6>{{$each->prix}} €</h6>
                <hr>
                <img src="{{$each->image}}" width="5%" height="5%"/>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection