@extends('layouts.layout')

@section('title', 'Create')

@section('content')
    <h1>Create a course :)</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <label>
            Name:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Description:
            <br>
            <textarea type="text" name="description" rows="5"></textarea>
        </label>
        <br>
        <label>
            Category:
            <br>
            <input type="text" name="category">
        </label>
        <br>
        <br>
        <button type="submit">Create Course</button>
    </form>
@endsection
