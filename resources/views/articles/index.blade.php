@extends('app')

@section('content')
    <h1> Articles :</h1>

    @foreach($articles as $article)
        <h3><a href="articles/{{$article->id}}">{{$article->name}} </a></h3>
        <p> {{$article->text}}<p>
    @endforeach

@stop