@extends('layouts.app');

@section('page-title', 'Home page')

@section('content')
    @foreach ($comics as $comic)
        <div>{{$comic['title']}}</div>
    @endforeach
@endsection