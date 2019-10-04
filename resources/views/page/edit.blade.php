@extends('layoute.layoute')

@section('content')
  <div class="container">

    <div class="button">
        <a href="{{ route('index.category') }}">BACK</a>
    </div>

      <div class="edit">
        <form method="post" action="{{ route('update.category', $category -> id )}}">
          @csrf
          @method('POST')
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $category -> name }}">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" value="{{ $category -> description }}">
          </div>
          <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" value="{{ $category -> author }}">
          </div>
          <button type="submit">Save</button>
        </form>
      </div>

  </div>

@endsection
