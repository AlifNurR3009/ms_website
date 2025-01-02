<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pembelian</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2>Form Pembelian</h2>
  <form id="formPembelian">
    <!-- Nama Pelanggan -->
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Pelanggan</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan nama pelanggan" required>
    </div>

    <!-- Tanggal Pembelian -->
    <div class="mb-3">
      <label for="tanggal" class="form-label">Tanggal Pembelian</label>
      <input type="date" class="form-control" id="tanggal" required>
    </div>

    <!-- Total Pembelian -->
    <div class="mb-3">
      <label for="total" class="form-label">Total Pembelian</label>
      <input type="number" class="form-control" id="total" placeholder="Masukkan total pembelian" required>
    </div>

    <!-- Button Submit -->
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
