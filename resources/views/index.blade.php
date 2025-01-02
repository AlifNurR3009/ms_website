<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <div class="container-fluid warna">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="#"><img src="image/logo.jpeg" alt="Brand Logo" class="img-fluid" style="max-height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/product">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="image/LOGIN.jpg" alt="Login" style="height: 30px;">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="loginDropdown">
                                <nav>
                                    @if(session('logged_user'))
                                    <p>Welcome, {{ session('logged_user')->nama_pelanggan }}</p>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form>
                                </nav>
                            @else
                                <nav>
                                    <li><a class="dropdown-item" href="/login">Login user</a></li>
                                </nav>
                            @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    


        <!-- Konten Utama -->
        <div class="container">
            <div class="row">
                <!-- Bagian Gambar (Carousel) -->
                <div class="col-12 py-5 text-center">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/carousel1.jpeg" class="d-block image-custom" alt="Material 1">
                            </div>
                            <div class="carousel-item">
                                <img src="image/carousel2.jpeg" class="d-block image-custom" alt="Material 2">
                            </div>
                            <div class="carousel-item">
                                <img src="image/carousel3.jpeg" class="d-block image-custom" alt="Material 3">
                            </div>
                            <div class="carousel-item">
                                <img src="image/carousel4.jpeg" class="d-block image-custom" alt="Material 3">
                            </div>
                            <div class="carousel-item">
                                <img src="image/carousel5.jpeg" class="d-block image-custom" alt="Material 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- Container Terpisah untuk Produk Grid -->
    <div class="row fade-in">
        <div class="container container-produk">
            <h2 class="text-center">Produk Unggulan</h2>
            <div class="row product-grid">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-item">
                        <img src="image/produk1.jpeg" alt="Produk 1" class="img-fluid">
                        <h5>Sikagrout 215</h5>
                        <p><b>Rp. 153,000,-</b></p>
                        <a 
                            class="btn btn-primary beli-sekarang" 
                            href="form-pembelian.html" 
                            data-name="Sikagrout 215">Beli Sekarang</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-item">
                        <img src="image/produk2.jpeg" alt="Produk 2" class="img-fluid">
                        <h5>Fosroc Integral Conplast</h5>
                        <p><b>Rp. 650,000,-</b></p>
                        <a class="btn btn-primary beli-sekarang" 
                        href="form-pembelian.html" 
                        data-name="Sikagrout 215" >Beli Sekarang</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-item">
                        <img src="image/produk3.jpeg" alt="Produk 3" class="img-fluid">
                        <h5>SikaCim Accelerator 900ml</h5>
                        <p><b>Rp. 35,000,-</b></p>
                        <a class="btn btn-primary beli-sekarang" 
                        href="form-pembelian.html" 
                        data-name="Sikagrout 215" >Beli Sekarang</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-item">
                        <img src="image/produk4.jpeg" alt="Produk 4" class="img-fluid">
                        <h5>Sikamen LN 20KGl</h5>
                        <p><b>Rp. 460,000,-</b></p>
                        <a class="btn btn-primary beli-sekarang" 
                        href="form-pembelian.html" 
                        data-name="Sikagrout 215" >Beli Sekarang</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-item">
                        <img src="image/produk5.jpeg" alt="Produk 5" class="img-fluid">
                        <h5>Sikamen LN 20KGl</h5>
                        <p><b>Rp. 645,000,-</b></p>
                        <a class="btn btn-primary beli-sekarang" 
                        href="form-pembelian.html" 
                        data-name="Sikagrout 215" >Beli Sekarang</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-item">
                        <img src="image/produk6.jpeg" alt="Produk 5" class="img-fluid">
                        <h5>Sika Skim Coat</h5>
                        <p><b>Rp. 69,000,-</b></p>
                        <a class="btn btn-primary beli-sekarang" 
                        href="form-pembelian.html" 
                        data-name="Sikagrout 215" >Beli Sekarang</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-item">
                        <img src="image/produk7.jpeg" alt="Produk 5" class="img-fluid">
                        <h5>Torcing Biasa (Bitumi)</h5>
                        <p><b>Rp. 522,000,-</b></p>
                        <a class="btn btn-primary beli-sekarang" 
                        href="form-pembelian.html" 
                        data-name="Sikagrout 215" >Beli Sekarang</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-item">
                        <img src="image/produk8.jpeg" alt="Produk 5" class="img-fluid">
                        <h5>Pentens FLESEAL T-200H</h5>
                        <p><b>Rp. 1,200,000,-</b></p>
                        <a class="btn btn-primary beli-sekarang" 
                        href="form-pembelian.html" 
                        data-name="Sikagrout 215" >Beli Sekarang</a>
                    </div>
                </div>

            <!-- Image Holder Section -->
          <!-- Image Holder Section -->
            <div class="row fade-in">
                <div class="container text-center">
                    <h2>Our Gallery</h2>
                    <p></p>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-4">
                            <img src="image/imgholder1.jpeg" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover;" alt="Image placeholder 1">
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <img src="image/imgholder2.jpeg" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover;" alt="Image placeholder 2">
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <img src="image/imgholder3.jpeg" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover;" alt="Image placeholder 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var myCarousel = document.querySelector('#carouselExample');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000, // Slide otomatis setiap 2 detik
            ride: 'carousel'
        });

        // Fungsi untuk menambahkan class 'fade-in-visible' ketika elemen muncul di viewport
        function revealOnScroll(entries, observer) {
             entries.forEach(entry => {
                 if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-visible');
                    observer.unobserve(entry.target); // Hentikan pengamatan setelah terlihat
                }
        });
                }

        // Buat Observer
        const observer = new IntersectionObserver(revealOnScroll, {
                    threshold: 0.2 // Elemen terlihat 10% sebelum animasi dimulai
        });

         // Pilih elemen yang ingin diberikan animasi
                    document.querySelectorAll('.fade-in').forEach(element => {
                    observer.observe(element);
        });
    </script>

    <script>
        // Tambahkan query parameter ke URL saat tombol "Beli Sekarang" diklik
        document.querySelectorAll('.beli-sekarang').forEach(button => {
            button.addEventListener('click', event => {
                event.preventDefault(); // Cegah tindakan default

                // Ambil data produk
                const imageSrc = button.dataset.image;
                const productName = button.dataset.name;

                // Buat URL dengan parameter query
                const purchaseUrl = `${button.getAttribute('href')}?image=${encodeURIComponent(imageSrc)}&name=${encodeURIComponent(productName)}`;

                // Alihkan ke halaman formulir pembelian
                window.location.href = purchaseUrl;
            });
        });
        // Periksa apakah pengguna sudah login (nilai ini di-set dari server-side menggunakan session atau variabel lain)
        const isLoggedIn = @json(session('logged_user') !== null);

        // Menambahkan event listener untuk tombol "Beli Sekarang"
        document.body.addEventListener('click', event => {
            if (event.target.classList.contains('beli-sekarang')) {
                event.preventDefault(); // Mencegah aksi default

                // Jika pengguna belum login, tampilkan alert dan arahkan ke halaman login
                if (!isLoggedIn) {
                    alert('Silakan login terlebih dahulu sebelum melakukan pembelian.');
                    window.location.href = '/login'; // Arahkan ke halaman login
                    return; // Hentikan proses lebih lanjut
                }

                // Ambil data produk
                const imageSrc = event.target.dataset.image;
                const productName = event.target.dataset.name;

                // Buat URL dengan query parameter
                const purchaseUrl = `${event.target.getAttribute('href')}?image=${encodeURIComponent(imageSrc)}&name=${encodeURIComponent(productName)}`;

                // Jika sudah login, langsung arahkan ke halaman formulir pembelian
                window.location.href = '/formpembelian';
            }
        });

    </script>
    
        <!-- Footer -->
        @if(session('logged_user'))
        <div class="container-fluid footer">
            <footer class="container text-center">
                <p>Email: <a href="mailto:info@materialbuilding.com">info@materialbuilding.com</a></p>
                <p>Alamat: Jl. Raya Material No. 123, Jakarta</p>
                <p>&copy; 2024 Material Building. All rights reserved.</p>
        </div>
    
    </footer>    
    @else
    <div class="container-fluid footer">
        <footer class="container text-center">
            <p>Email: <a href="mailto:info@materialbuilding.com">info@materialbuilding.com</a></p>
            <p>Alamat: Jl. Raya Material No. 123, Jakarta</p>
            <p>&copy; 2024 Material Building. All rights reserved.</p>
    </div>

</footer>

    @endif

</body>
</html>
