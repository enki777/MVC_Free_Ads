@extends('layouts.app')
@section('content')

<a href="{{route('articles.index')}}" class="btn btn-primary">retour</a>
<br><br>
<div class="row">
    <div class="col-sm-12">
        <h1>Article Create</h1><br>
    </div>
    <div class="col-sm-6">
        {{ Form::open(['route'=>'articles.store', 'method'=>'POST']) }}
                @include('articles.form_control')
        {{ Form::close() }}
    </div>
</div>
@endsection