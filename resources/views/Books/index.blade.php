@extends('layouts.main')
 
@section('title', 'Books')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')

    {{Session::get('status')}}

    <table>
        <tr>
            <th>Title</th>
            <th>Langauage</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    @foreach($books as $book)

        <tr>
            <td>{{$book->title}}</td>
            <td>{{$book->language}}</td>

            <td>
                <a href="{{ route('books.show', [$book->id]) }}">Show</a>
            </td>

            <td>
                <a href="{{ route('books.edit', [$book->id]) }}">Edit</a>
            </td>

            <td>
                <form action="{{ route('books.destroy', $book->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>

    @endforeach()
        </table>
@endsection
