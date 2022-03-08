@extends('layouts.layout')

@section('content')
    
    <h1>Contact Us</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <label for="name">
            Name:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @error('name')
            <br>
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label for="description">
            Description:
            <br>
            <textarea name="description" id="description" rows="5">{{ old('description') }}</textarea>
        </label>
        @error('description')
            <br>
            <small>{{ $message }}</small>
        @enderror
        <br>
        <label for="email">
            Email:
            <br>
            <input type="text" name="email" value="{{ old('email') }}">
        </label>
        @error('email')
            <br>
            <small>{{ $message }}</small>
        @enderror
        <br>
        <br>
        <button type="submit">Send</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif

@endsection
