@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="pull-left">
            <h2>Article Show</h2>
        </div>
        <div class="col-sm-12">
            <a href="{{route('articles.index')}}" class="btn btn-primary">retour</a>
        </div><br>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>Titre</th>
        <th>Contenu</th>
    </tr>         
    <tr>
        <td>{{$article->title}}</td>
        <td>{{$article->body}}</td>
    </tr>   
</table>
@endsection