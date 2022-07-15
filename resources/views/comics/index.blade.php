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
         <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td><img width="150" src="{{$comic->image}}" alt="{{$comic->title}}"></td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->sale_date}}</td>
            <td><button type="button" class="btn btn-primary">Show More</button></td>
         </tr>
     @endforeach
        </tbody>
      </table>
</div>
    
@endsection