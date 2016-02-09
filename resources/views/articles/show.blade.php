@extends('app')

@section('content')
    <h1> {{$article->name}} {{$article->text}}</h1>
    <p>Date: <b>{{$article->date}}</b></p>
@stop