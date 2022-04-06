@extends('layouts.main')
 
@section('title', 'Books')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    
<form action="{{route('books.store')}}" method="POST">
    <input type="text" placeholder="name" name="title">
    <input type="text" placeholder="language" name="language">
    <input type="submit" value="Create New Book">
</form>

@endsection
