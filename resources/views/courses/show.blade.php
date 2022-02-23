@extends('layouts.layout')

@section('title', $course->name . ' course')

@section('content')
    <h1>See the {{ $course->name }} course :3</h1>
    <a href="{{ route('courses.index') }}">Back to courses</a>
    <p><strong>Category: </strong>{{ $course->category }}</p>
    <p>{{ $course->description }}</p>
@endsection
