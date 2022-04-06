@extends('layouts.main')
 
@section('title', 'Books')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')

    @foreach($books as $book)
        <div class="book">
            {{ $book->title }}
            <span style="font-weight: bold;">{{ $book->language }}</span>
        </div>
    @endforeach()
@endsection
