@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Book</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="container-fluid px-4">
  <div class="card mb-4 mt-4 shadow p-2 bg-body rounded">
    <div class="card-body">
      <form class="row g-3 mx-2" action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="col-md-4">
          <label class="form-label">Title</label>
          <input type="text" name="title" class="form-control" placeholder="Book Title" required>
        </div>
        <div class="col-md-12">
          <label class="form-label">Description</label>
          <input type="text" name="description" class="form-control" placeholder="Book Description" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Genre</label>
          <input type="text" name="genre" class="form-control" placeholder="Book Genre" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Rating</label>
          <input type="text" name="rating" class="form-control" placeholder="Rating" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Volume</label>
          <input type="number" name="volume" class="form-control" placeholder="Volume" required>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Book Image</label>
          <input class="form-control" type="text" name="img" required>
        </div>
        <div class="col-4">
          <button type="submit" class="btn btn-dark btn-lg">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif



{!! Form::open(array('route' => 'books.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Genre:</strong>
            {!! Form::text('genre', null, array('placeholder' => 'Genre','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rating:</strong>
            {!! Form::text('rating', null, array('placeholder' => 'Rating','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Volume:</strong>
            {!! Form::text('volume', null, array('placeholder' => 'Volume','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Image URL','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!} -->


<p class="text-center text-primary"><small>All rights reserved by ReadMore</small></p>
@endsection