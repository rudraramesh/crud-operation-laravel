@extends('layouts.app')

@section('main')

<div class="container mt-5">
  <h2>New Category <a class="btn btn-sm btn-info" href="showcategory">Show Category</a></h2>
  <div class="row">
      <div class="col-sm4">
          <form action="/category-store" method="POST">
                @csrf
              <label for="">Title</label>
              <input type="text" name="title" class="form-control"
                value="{{ old('title') }}"
              />
              @if($errors->has('title'))
              <p class="text-danger">{{ $errors->first('title')}}</p>
              @endif
              <button class="btn btn-info mt-4" type="submit">Add</button>
          </form>
      </div>
  </div>
</div>


@endsection