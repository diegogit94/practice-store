<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <title>@yield('title', 'Demo')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('courses.index') }}">Courses</a></li>
            <li><a href="{{ route('courses.create') }}">Create</a></li>
            <li><a href="{{ route('courses.show', 'course') }}">Course</a></li>
        </ul>
    </nav>
    @yield('content')
    <nav>
        <ul>
            <li><a href="{{ route('information.about') }}">About Us</a></li>
            <li><a href="/about-us">Contact</a></li>
        </ul>
    </nav>
</body>
</html>
