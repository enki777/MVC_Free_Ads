@extends('layouts.app')
@section('content')

<div class="card  border border-dark" style="margin: 25px">
    <div class="card-header">
        <h1>Creer une Annonce</h1><br><hr>
        <a href="{{route('annonces.index')}}" class="btn btn-primary">retour</a>
    </div>
    <div class="card-body">
        {{ Form::open(['route'=>'annonces.store', 'method'=>'POST', 'id'=>'createForm','enctype'=>'multipart/form-data']) }}
            @include('annonces.form_control')
        {{ Form::close() }}
    </div>
</div>
@endsection