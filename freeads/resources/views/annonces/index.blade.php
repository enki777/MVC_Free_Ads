@extends('layouts.app')
@section('content')

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
                @if($each->user_id == auth()->user()->id)
                <div style="float: right">
                    <a href="{{route('annonces.edit',$each->id)}}" class="btn btn-dark btn-md">Editer</a>
                    {{ Form::open( ['method'=> 'DELETE', 'route'=>['annonces.destroy', $each->id], 'style'=>'display: inline;'])  }}
                    <button type="submit" class="btn btn-danger btn-md">Delete</button>
                    {{ Form::close() }}
                </div>
                @endif
            </div>
            <div class="card-body">
                <h4>{{$each->title}}</h4>
                <hr>
                <h6>{{$each->body}}</h6>
                <hr>
                <h6>{{$each->prix}} €</h6>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection