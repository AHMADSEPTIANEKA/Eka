<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Saya')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/KnightWarrior.otf') }}">
</head>
<body>
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Aplikasi Saya. Semua hak dilindungi.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> 