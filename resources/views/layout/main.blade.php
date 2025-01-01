<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>

    <!-- CSS Global -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    <!-- CSS Khusus Halaman -->
    @yield('css')
</head>
<body>
    <!-- Navbar -->
    <nav>
        @auth
            <a href="{{ route('logout') }}">Logout</a>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </nav>

    <!-- Konten Utama -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 My E-commerce</p>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/global.js') }}"></script>
    @yield('js')
</body>
</html>
