@extends('layouts.main')
 
@section('title', 'Form Request')
 
@section('content')
    <p>Create Form </p>
    <form action="/store" method="POST">
        <input type="text" value="" name="name">
        <input type="submit" value="Submit">
    </form>
@endsection
