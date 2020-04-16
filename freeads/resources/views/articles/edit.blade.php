@extends('layouts.app')
@section('content')
<br><br>
<a href="{{route('articles.index')}}" class="btn btn-primary">retour</a>
<br><br>
<div class="row">
    <div class="col-sm-12">
        <h1>Article Edit</h1><br>
    </div>
    <div class="col-sm-6">
        {{ Form::model($article, ['route'=>['articles.update',$article->id], 'method'=>'PATCH']) }}
            @include('articles.form_control')
        {{ Form::close() }}
    </div>
</div>