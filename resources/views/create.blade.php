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
    <h2>Form Pembelian</h2>

    <form action="{{ route('pembelian.store') }}" method="POST">
        @csrf
        <input type="hidden" name="id_produk" value="{{ $produk->id_produk }}">

        <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" value="{{ $produk->nama_produk }}" readonly>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga per Produk</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $produk->harga_produk }}" required readonly>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Beli Sekarang</button>
    </form>
</div>
</body>
</html>