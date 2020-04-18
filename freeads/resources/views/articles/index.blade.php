@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
                <h2>Articles</h2>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th with="80px">No</th>
            <th>Titre</th>
            <th>Body</th>
            <th>Prix</th>
            <th>Photo descriptive</th>
            <th with="140px" class="text-center">
                <a href="{{route('articles.create')}}" class="btn btn-success btn-md">+</a>
            </th>
        </tr>
        <?php $no=1; ?>
        @foreach($article as $key => $value)
        <tr>
            <td>{{$no++}}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->body }}</td>
            <td>{{ $value->prix }}€</td>
            <td>{{ $value->image }}</td>
            <td with="140px" class="text-center">
                <a href="{{route('articles.show', $value->id)}}" class="btn btn-info btn-md">show</a>
                <a href="{{route('articles.edit', $value->id)}}" class="btn btn-info btn-md">edit</a>
                {{ Form::open(['method'=> 'DELETE', 'route'=>['articles.destroy', $value->id], 'style'=>'display: inline;'])  }}
                    <button type="submit" style="display: inline;" class="btn btn-danger btn-md">delete</button>
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </table>
@endsection