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
            <div class="options" style='display: inline;'>
                <a href="{{ route('books.show', [$book->id]) }}">Show</a>
                <a href="{{ route('books.destroy', [$book->id]) }}">Destroy</a>
                <a href="{{ route('books.destroy', [$book->id]) }}">{{ route('books.destroy', [$book->id])}}</a>
            </div>
        </div>
    @endforeach()
@endsection
