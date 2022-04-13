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

                <form action="{{ route('books.destroy', $book->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>

            </div>
        </div>
    @endforeach()
@endsection
