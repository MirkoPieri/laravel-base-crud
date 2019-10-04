@extends('layoute.layoute')

@section('content')
  <div class="container">
    <div class="button">
      <a href="{{ route('create.category') }}">CREATE NEW BOOK</a>
    </div>
    @foreach ($books as $value)
      <div class="box">
        <div class="text">
          <span><p>Name:</p> {{$value -> name}}</span>
          <span><p>Description:</p> {{$value -> description}}</span>
          <span><p>Author:</p> {{$value -> author}}</span>
        </div>

        <div class="haref">
          <div class="link">
            <a href="{{ route('edit.category', $value -> id) }}"><img src="image/edit.png" alt="edit"></a>
            <a href="{{ route('destroy.category', $value -> id) }}"><img src="image/delete.png" alt="delete"></a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
