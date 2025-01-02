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
    <div class="content">
        <h2>Edit Produk</h2>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('admin.produk.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk:</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
            </div>
            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk:</label>
                <input type="number" name="harga_produk" id="harga_produk" class="form-control" value="{{ $produk->harga_produk }}" required>
            </div>
            <div class="mb-3">
                <label for="stok_produk" class="form-label">Stok Produk:</label>
                <input type="number" name="stok_produk" id="stok_produk" class="form-control" value="{{ $produk->stok_produk }}" required>
            </div>
            <div class="mb-3">
                <label for="gambar_produk" class="form-label">Gambar Produk (opsional):</label>
                <input type="file" name="gambar_produk" id="gambar_produk" class="form-control">
                @if ($produk->gambar_produk)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $produk->gambar_produk) }}" alt="Gambar Produk" style="width: 150px; height: auto;">
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.produk') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>