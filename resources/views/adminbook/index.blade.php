@extends('layouts.adminlayout')


@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2 style="color:whitesmoke">Book Management</h2>
    </div>
    <br>
    <div class="pull-right">
      <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
    </div>
  </div>
</div>
<br>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered" style="background-color:whitesmoke">
  <tr>
    <th>Image</th>
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
    <th>Genre</th>
    <th>Rating</th>
    <th>Volume</th>
    <th>Source</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach ($books as $book)
  <tr>
    <td> <img class="img-fluid" src="{{ $book->img }}" alt="" style="width:80pt; height:auto;"></td>
    <td>{{ $book->id }}</td>
    <td>{{ $book->title }}</td>
    <td>{{ $book->description }}</td>
    <td>{{ $book->genre}}</td>
    <td>{{ $book->rating}}</td>
    <td>{{ $book->volume }}</td>
    <td>{{ $book->readSrc }}</td>
    <td> <a type="button" href="{{ route('books.edit', $book->id) }}" class="btn btn-dark ">Edit</a>
    </td>
    <td>
      <form action="{{ route('books.destroy', $book->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger ">Delete</button>
      </form>
    </td>
  </tr>

  @endforeach
</table>

<p class="text-center text-primary"><small>All rights reserved by ReadMore</small></p>
@endsection
