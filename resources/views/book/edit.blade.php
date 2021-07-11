@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit New Book</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

<div class="container-fluid px-4">
  <div class="card mb-4 mt-4 shadow p-2 bg-body rounded">
    <div class="card-body">

      <form class="row g-3 mx-2" action="{{ route('books.update', $book->id) }}" method="POST">
        <h1>Edit Existing Book</h1>
        @csrf
        @method('PUT')
        <div class="col-md-4">
          <label class="form-label">Title</label>
          <input type="text" name="title" class="form-control" placeholder="Book Title" required value="{{ $book->title }}">
        </div>

        <div class="col-md-4">
          <label class="form-label">Description</label>
          <input type="text" name="description" class="form-control" placeholder="Book Description" required value="{{ $book->description }}">
        </div>
        <div class="col-md-4">
          <label class="form-label">Genre</label>
          <input type="text" name="genre" class="form-control" placeholder="Movie Genre" required value="{{ $book->genre }}">
        </div>

        <div class="col-md-6">
          <label class="form-label">Rating</label>
          <input type="text" name="rating" class="form-control" placeholder="Book's Rating" required value="{{ $book->rating }}">
        </div>
        <div class="col-md-12">
          <label class="form-label">Volume</label>
          <input type="number" name="volume" class="form-control" placeholder="Volume" required value="{{ $book->volume }}">
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Book Image</label>
          <input class="form-control" type="text" name="img" value="{{ $book->img }}" required >
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-dark btn-lg">Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection