@extends('layouts.base');

@section('page-title')
    Home Page
@endsection

@section('page-content')
    <h1>Home Page</h1>
    @dump($comics);
@endsection