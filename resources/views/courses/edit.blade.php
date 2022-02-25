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
            <input type="text" name="name" value="{{ old('name', $course->name) }}">
        </label>
        @error('name')
            <br>
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            Description:
            <br>
            <textarea type="text" name="description" rows="5">{{ old('description', $course->description) }}</textarea>
        </label>
        @error('description')
            <br>
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            Category:
            <br>
            <input type="text" name="category" value="{{ old('category', $course->category) }}">
        </label>
        @error('category')
            <br>
            <small>{{ $message }}</small>
        @enderror
        <br>
        <br>
        <button type="submit">Update Course</button>
    </form>
@endsection
