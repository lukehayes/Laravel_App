@extends('layouts.main')
 
@section('title', 'Books')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    
<form action="{{route('books.store')}}" method="POST">
    @csrf

    <label for="title">Title:
        <input type="text" placeholder="title" name="title">
    </label>

    <label for="Lanauge">Language: </label>
    <select name="language" id="language">
    @foreach($languages as $language)
      <option value="{{$language->language}}">{{$language->language}}</option>
    @endforeach()
    </select>

    <input type="submit" value="Create New Book">
</form>

@endsection
