<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <title>@yield('title', 'Demo')</title>
    @include('layouts.partials.header')

    <style>
        .active {
            color: rosybrown;
            font-weight: bold;
        }
    </style>

</head>
<body>
    @yield('content')

    @include('layouts.partials.footer')
</body>
</html>
