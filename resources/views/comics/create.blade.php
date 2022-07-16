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
      <label for="type" class="form-label">Type</label>
    <select class="form-select" name="type" id="type">
      <option value="comic book">Comic Book</option>
      <option value="graphic novel">Graphic Novel</option>
    </select>
    </div>

    <div class="mb-3">
      <label for="series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" name="series">
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>

    <div class="mb-3">
      <label for="sale_date" class="form-label">Sale Date</label>
      <input type="date" class="form-control" id="sale_date" name="sale_date">
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Insert an Image</label>
      <input type="text" class="form-control" id="image" name="image">
    </div>
 
    <button type="submit" class="btn btn-primary">Insert</button>
  </form>
@endsection