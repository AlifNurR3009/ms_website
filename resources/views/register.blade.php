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
    <div class="container">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h1>Register</h1>

            @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <p style="color: red;">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <label for="nama_pelanggan">Nama:</label>
            <input type="text" name="nama_pelanggan" value="{{ old('nama_pelanggan') }}" required><br>

            <label for="email_pelanggan">Email:</label>
            <input type="email" name="email_pelanggan" value="{{ old('email_pelanggan') }}" required><br>

            <label for="password_pelanggan">Password:</label>
            <input type="password" name="password_pelanggan" required><br>

            <label for="password_pelanggan_confirmation">Konfirmasi Password:</label>
            <input type="password" name="password_pelanggan_confirmation" required><br>

            <label for="alamat">Alamat:</label>
            <textarea name="alamat" required>{{ old('alamat') }}</textarea><br>

            <label for="nomer_telp">Nomor Telepon:</label>
            <input type="text" name="nomer_telp" value="{{ old('nomer_telp') }}" required><br>

            <button type="submit">Register</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
