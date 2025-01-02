<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <link rel="stylesheet" href="/path-to-your-css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Edit Data Pelanggan</h2>

        <!-- Tampilkan pesan error jika ada -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pelanggan.update', $pelanggan->id_pelanggan) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan:</label>
                <input type="text" id="nama_pelanggan" name="nama_pelanggan" class="form-control" value="{{ $pelanggan->nama_pelanggan }}" required>
            </div>

            <div class="form-group">
                <label for="email_pelanggan">Email Pelanggan:</label>
                <input type="email" id="email_pelanggan" name="email_pelanggan" class="form-control" value="{{ $pelanggan->email_pelanggan }}" required>
            </div>

            <div class="form-group">
                <label for="nomer_telp">Nomor Telepon:</label>
                <input type="text" id="nomer_telp" name="nomer_telp" class="form-control" value="{{ $pelanggan->nomer_telp }}" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" class="form-control" required>{{ $pelanggan->alamat }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="/admin/pelanggan" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
