<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Portfolio') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')

</head>
<body>
    <header>
        <nav>
        @include ('layouts.navbar')
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

    
