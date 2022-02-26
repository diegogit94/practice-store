@extends('layouts.layout')

@section('title', $course->name . ' course')

@section('content')
    <h1>See the {{ $course->name }} course :3</h1>
    <a href="{{ route('courses.index') }}">Back to courses</a>
    <p><strong>Category: </strong>{{ $course->category }}</p>
    <p>{{ $course->description }}</p>
    <br>
    <a href="{{ route('courses.edit', $course->id) }}">Edit course</a>
    <br>
    <br>
    <form action="{{ route('courses.delete', $course) }}" method="POST">
        @csrf
        @method('delete')
        <button>Delete</button>
    </form>
@endsection
