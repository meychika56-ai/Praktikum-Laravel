
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sistem Informasi Surat')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header class="navbar">
        <h2>🌸 Sistem Informasi Surat</h2>

        <nav class="nav-links">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('surat-masuk.index') }}">Surat Masuk</a>
            <a href="{{ route('surat-keluar.index') }}">Surat Keluar</a>
        </nav>
    </header>

    <main class="page-container">
        @yield('content')
    </main>

</body>
</html>
