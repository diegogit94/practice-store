@extends('layouts.layout')

@section('title', 'Create')

@section('content')
    <h1>Edit this course :0</h1>
    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{ $course->name }}">
        </label>
        <br>
        <label>
            Description:
            <br>
            <textarea type="text" name="description" rows="5">{{ $course->description }}</textarea>
        </label>
        <br>
        <label>
            Category:
            <br>
            <input type="text" name="category" value="{{ $course->category }}">
        </label>
        <br>
        <br>
        <button type="submit">Update Course</button>
    </form>
@endsection
