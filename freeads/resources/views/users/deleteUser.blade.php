@extends('layouts.app')
@section('content')
<a href="{{route('profile.index')}}" class="btn btn-primary" style="margin-left: 15px;">retour</a>
<br><br>
<div class="card">
    <div class="card-header">
        <h1>Suppression de votre compte</h1>
        <h4>Entrez votre mot de passe pour confirmer la suppression votre compte</h4>
    </div>
    <div class="card-body">
        {{ Form::open( ['method'=> 'DELETE', 'route'=>['profile.destroy', $user->id], 'style'=>'display: inline;'])  }}
        <div class="row">
            <div class="col-sm-2">
                {{ Form::label('password', 'Mot de passe :') }}
            </div>
            <div class="col-sm-10">
                <div class="form-group">
                    {{ Form::password('password',NULL,['class'=>'form-control', 'id'=>'password', 'placeholder'=>'password']) }}
                    @error('password')
                    <div class="alert alert-danger col-sm-6">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                {{ Form::label('passwordCheck', 'Confirmer mot de passe :') }}
            </div>
            <div class="col-sm-10">
                <div class="form-group">
                    {{ Form::password('passwordCheck',NULL,['class'=>'form-control', 'id'=>'passwordCheck', 'placeholder'=>'confirm password']) }}
                    @error('password')
                    <div class="alert alert-danger col-sm-6">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        @if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
        @endif

        <button type="submit" class="btn btn-danger btn-md">Delete</button>
        {{ Form::close() }}
    </div>
</div>
@endsection