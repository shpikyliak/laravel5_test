@extends('app')

@section('content')
    <h1>Add new User</h1>

    {!! Form::open(['url'=>'articles']) !!}

    @include('articles.form',['buttonName'=>'Add $article'])
    {!! Form::close() !!}


    @include('errors.list')

@stop