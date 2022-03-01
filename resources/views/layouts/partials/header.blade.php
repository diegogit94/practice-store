<header>
    <h1>{{ config('app.name') }}</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home.index') }}" class="{{ request()->routeIs('home.index') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('courses.index') }}" class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">Courses</a></li>
        </ul>
    </nav>
</header>
