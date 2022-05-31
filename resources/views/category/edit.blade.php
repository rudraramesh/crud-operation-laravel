@extends('layouts.app')

@section('main')

<div class="container mt-5">
  <h2>Edit Category <a class="btn btn-sm btn-info" href="showcategory">Show Category</a></h2>
  <div class="row">
      <div class="col-sm4">
          <form action="/category-update/{{ $category->id }}" method="POST">
                @csrf
                @method('put')
              <label for="">Title</label>
              <input type="text" name="title" class="form-control" value="{{ $category ->title }}"/>
              <button class="btn btn-info mt-4" type="submit">Update</button>
          </form>
      </div>
  </div>
</div>

@endsection