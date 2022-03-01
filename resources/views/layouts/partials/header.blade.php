<header>
    <h1>{{ config('app.name') }}</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home.index') }}">Home</a></li>
            <li><a href="{{ route('courses.index') }}">Courses</a></li>
            <li><a href="{{ route('courses.create') }}">Create a course</a></li>
        </ul>
    </nav>
</header>
