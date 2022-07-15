@extends('layouts.base');

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')
    <h1>{{$comic->title}}</h1>
    <div class="pt-3">
        {{$comic->description}}
        <h3 class="pt-3">Prezzo: {{$comic->price}}</h3>
    </div>
    <p class="pt-5">
        <a class="btn btn-primary" href="{{route('comics.index')}}">Go Back</a>
    </p>
@endsection