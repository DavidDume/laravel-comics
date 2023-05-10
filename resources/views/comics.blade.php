@extends('layouts.app');

@section('page-title', 'Home page')

@section('content')
    <div class="row">
        @foreach ($comics as $comic)
            
            <div class="col-3">
                <div class="card">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                        <p class="card-text">{{substr($comic['description'], 1, 100)}}</p>
                    </div>
                </div>
            </div>
        
            
        @endforeach
    </div>
@endsection