@extends('layouts.main')

@section('title', 'Books')

@section('sidebar')
    @parent

    <p>Called from books/edit.blade.php</p>
@endsection

@section('content')

<form action="{{route('books.update', [$book->id])}}" method="POST">
    @method('PUT')
    @csrf

    <label for="title">Title:
        <input type="text" placeholder="title" value="{{$book->title}}" name="title">
    </label>

    <label for="Lanauge">Language: </label>
    <select name="language" id="language" value="{{$book->language}}">
        @foreach($languages as $language)
          <option value="{{$language->language}}" >{{$language->language}}</option>
        @endforeach()
    </select>

    <input type="submit" value="Edit Book">
</form>

@endsection
