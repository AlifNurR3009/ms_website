<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="login-card p-4">
            <h1 class="text-center">Login Admin</h1>
            <form action="/admin/login" method="POST">
                @csrf
                <!-- Dropdown to choose user or admin -->

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
                    @error('email')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                    @error('password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="text-center mt-3">Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none">Register</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-aqzpkV5I+g8dQNEFywYqWUVaeWZPIkhFpU+q4H8H1zhaEZjWFi9jcDRvtrn9K0kS" crossorigin="anonymous"></script>
</body>
</html>