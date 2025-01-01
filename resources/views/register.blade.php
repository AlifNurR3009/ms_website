<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <h1>Register</h1>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style="color: red;">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <label>Nama:</label>
        <input type="text" name="nama_pelanggan" value="{{ old('nama_pelanggan') }}" required><br>

        <label>Email:</label>
        <input type="email" name="email_pelanggan" value="{{ old('email_pelanggan') }}" required><br>

        <label>Password:</label>
        <input type="password" name="password_pelanggan" required><br>

        <label>Konfirmasi Password:</label>
        <input type="password" name="password_pelanggan_confirmation" required><br>

        <label>Alamat:</label>
        <textarea name="alamat" required>{{ old('alamat') }}</textarea><br>

        <label>Nomor Telepon:</label>
        <input type="text" name="nomer_telp" value="{{ old('nomer_telp') }}" required><br>

        <button type="submit">Register</button>
    </form>

    <script>
        function validateRegister() {
            const emailInput = document.getElementById('register-email');
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            // Simple email validation
            if (!emailPattern.test(emailInput.value)) {
                emailInput.classList.add('is-invalid');
                return false; // Prevent submission
            }

            // Redirect to login.html on successful registration
            window.location.href = "login.html";
            return false; // Prevent actual form submission
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
