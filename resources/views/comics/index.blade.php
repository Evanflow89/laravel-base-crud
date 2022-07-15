@extends('layouts.base');

@section('page-title')
    Home Page
@endsection

@section('page-content')
<div class="container">
    <h1>Comics</h1>

    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Type</th>
            <th scope="col">Series</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
     @foreach ($comics as $comic)
         
     @endforeach
        </tbody>
      </table>
</div>
    
@endsection