@extends('layouts.app')

@section('main')
<div class="container mt-3">
  <h2>Categories <a class="btn btn-sm btn-info float-right " href="/create_category">Add Category</a></h2>
  @if(session()->has('success'))
  <div class="alert alert-info">
      <strong>{{ session()->get('success') }}</strong>
  </div>
  @endif
  <table class="table table-striped mt-4">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)

      <tr>
        <td>{{ $loop->index+1 }}</td>
        <!-- <td>{{ $category->id }}</td> -->
        <td>{{ $category->title }}</td>
        <td>
            <a href="/category-edit/{{ $category->id }}" class="btn btn-sm btn-info">Edit</a>
            <!-- <a href="/category-delete/{{ $category->id }}" class="btn btn-sm btn-danger">Delete</a> -->
            <!-- new delete method  -->
            <form action="/category-delete/{{ $category->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('are you sure you want to delete this data')">Delete</button>
            </form>

        </td>
      </tr>
    @endforeach
    </tbody>
  </table>

  {{ $categories->links() }}
</div>
@endsection