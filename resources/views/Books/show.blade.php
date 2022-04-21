@extends('layouts.main')
 
@section('title', 'Show Book')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')

<div class="book">
    {{ $book->title }}
    {{ $book->language->language }}
</div>


@endsection
