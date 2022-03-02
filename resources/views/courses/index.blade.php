@extends('layouts.layout')

@section('title', 'Courses')

@section('content')
    <h1>See the courses ;)</h1>
    <hr>

    <a href="{{ route('courses.create') }}">Create a course</a>

    <ul>
        @forelse ($courses as $course)
            {{-- <li>{{ $course->name }}</li>
            <li>{{ $course->description }}</li>
            <li>{{ $course->category }}</li> --}}
            <a href="{{ route('courses.show', $course) }}">{{ $course->name }}</a>
            <li>{{ $course->description }}</li>
            <li>{{ $course->category }}</li>
            <br>
        @empty
            <h2>There's no courses available</h2>
        @endforelse
    </ul>

    {{ $courses->links() }}

@endsection
