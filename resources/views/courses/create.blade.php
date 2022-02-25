@extends('layouts.layout')

@section('title', 'Create')

@section('content')
    <h1>Create a course :)</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @error('name')
            <br>
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            Description:
            <br>
            <textarea type="text" name="description" rows="5">{{ old('description') }}</textarea>
        </label>
        @error('description')
            <br>
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label>
            Category:
            <br>
            <input type="text" name="category" value="{{ old('category') }}">
        </label>
        @error('category')
            <br>
            <small>{{ $message }}</small>
        @enderror
        <br>
        <br>
        <button type="submit">Create Course</button>
    </form>
@endsection
