<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') | Admin Donat</title>
</head>
<body>
    <nav>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.orders.index') }}">Pesanan</a>
        <a href="{{ route('home') }}">Lihat Toko</a>
    </nav>

    <main>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>
</body>
</html>
