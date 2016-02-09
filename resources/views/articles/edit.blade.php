@extends('app')


@section('content')
    <h1>Edit: <b>{{$article->name}} {{$article->text}}</b></h1>

    {!! Form::model($article, ['method' => 'PATCH','url'=>'articles/'.$article->id]) !!}
        @include('articles.form',['buttonName'=>'Edit $article'])

    {!! Form::close() !!}


    @include('errors.list')
@stop