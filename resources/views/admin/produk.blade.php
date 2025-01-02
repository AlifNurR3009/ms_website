<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeAdmin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .sidebar {
            width: 250px;
            background: linear-gradient(180deg,  #364351, #475666);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            color: #fff;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 5px 0;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .search-bar {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .search-bar input {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            width: 300px;
        }

        .search-bar button {
            padding: 8px 16px;
            background-color: #3b82f6;
            color: #fff;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #2563eb;
        }

        .welcome {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Material Store ADMIN</h2>
        <a href="/admin/home">Dashboard</a>
        <a href="/admin/produk">Produk</a>
        <a href="/admin/pembelian">Pembelian</a>
        <a href="/admin/pelanggan">Pelanggan</a>
        <a href="/admin/logout">Logout</a>
    </div>
    <div class="content">
        <div class="search-bar">
            <input type="text" placeholder="Search for...">
            <button>🔍</button>
        </div>
    
        <h2>Data Produk</h2>
    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>Rp {{ number_format($item->harga_produk, 2, ',', '.') }}</td>
                    <td>{{ $item->stok_produk }}</td>
                    <td>
                        @if ($item->gambar_produk)
                            <img src="{{ asset('storage/' . $item->gambar_produk) }}" alt="Gambar Produk" style="width: 100px; height: auto;">
                        @else
                            Tidak Ada Gambar
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.produk.edit', $item->id_produk) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.produk.destroy', $item->id_produk) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
        <a href="{{ route('admin.produk.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
</body>
</html>


