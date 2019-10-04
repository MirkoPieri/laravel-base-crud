@extends('layoute.layoute')

@section('content')
  <div class="container">
    <div class="button">
      <a href="{{ route('create.category') }}">CREATE NEW BOOK</a>
    </div>
    @foreach ($books as $value)
      <div class="box">
        <span><p>Name:</p> {{$value -> name}}</span>
        <span><p>Description:</p> {{$value -> description}}</span>
        <span><p>Author:</p> {{$value -> author}}</span>

        <div class="haref">
          <a href="{{ route('edit.category', $value -> id) }}">EDIT</a>
          <a href="{{ route('destroy.category', $value -> id) }}">DELETE</a>
        </div>
      </div>
    @endforeach
  </div>
@endsection
