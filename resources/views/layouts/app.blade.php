<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Toko Kami')</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('products.index') }}">Katalog</a>
        <a href="{{ route('cart.index') }}">Keranjang</a>
        <a href="{{ route('checkout.index') }}">Checkout</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Toko Kami</p>
    </footer>
</body>
</html>