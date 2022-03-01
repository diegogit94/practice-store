<footer>
    <ul>
        <li><a href="{{ route('information.about') }}" class="{{ request()->routeIs('information.about') ? 'active' : '' }}">About Us</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</footer>
