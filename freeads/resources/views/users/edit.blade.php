@extends('layouts.app')
@section('content')
<a href="{{route('profile.index')}}" class="btn btn-primary" style="margin-left: 15px;">retour</a>
<br><br>
<div class="card">
    <div class="card-header">
        <h1>User Edit</h1>
    </div>
    <div class="card-body">
        {{ Form::model($user, ['route'=>['profile.update',$user->id], 'method'=>'PATCH']) }}
            @include('users.form_control')
        {{ Form::close() }}
    </div>
</div>
@endsection
