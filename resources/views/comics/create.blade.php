@extends('layouts.base');

@section('page-title')
    Insert a new Comic
@endsection

@section('page-content')
  <h1>Insert a new Comic</h1>  

  <form>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
   
    <div class="mb-3">
    <select class="form-select">
      <option value="comic book">Comic Book</option>
      <option value="graphic novel">Graphic Novel</option>
    </select>
    </div>
 
    <button type="submit" class="btn btn-primary">Insert</button>
  </form>
@endsection