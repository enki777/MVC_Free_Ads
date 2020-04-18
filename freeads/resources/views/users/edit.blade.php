@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('profile.index')}}" class="btn btn-primary" style="margin-left: 15px;">retour</a><hr>
        <h1>Editer profil</h1>
    </div>
    <div class="card-body">
        {{ Form::model($user, ['route'=>['profile.update',$user->id], 'method'=>'PATCH']) }}
            @include('users.form_control')
        {{ Form::close() }}
    </div>
</div>
@endsection
