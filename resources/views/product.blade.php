<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">

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
                                    <li><a class="dropdown-item" href="/login">Login User</a></li>
                                    <li><a class="dropdown-item" href="/admin/login">Login Admin</a></li>
                                </nav>
                            @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
    </div>

    <!-- Container baru dengan kolom search, carousel, dan grid gambar -->
    <div class="container my-4">
        <!-- Kolom Search -->
        <div class="row mb-4">
            <div class="col-md-6 offset-md-3">
                <form class="d-flex" role="search" onsubmit="return handleSearch()">
                    <input class="form-control me-2" type="search" placeholder="Search" id="searchInput" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>

        <!-- Carousel Slide -->
        <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/carousel1.jpeg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="image/carousel2.jpeg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="image/carousel3.jpeg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="image/carousel4.jpeg" class="d-block w-100" alt="Slide 4">
                </div>
                <div class="carousel-item">
                    <img src="image/carousel5.jpeg" class="d-block w-100" alt="Slide 5">
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

        <!-- Grid Gambar -->
        <div class="row row-cols-2 row-cols-md-4 g-4">
            @foreach ($produk as $item)
            <div class="col">
                <div class="card h-100">
                    <!-- Menampilkan gambar produk jika ada, jika tidak tampilkan placeholder -->
                    <img src="{{ $item->gambar_produk ? asset('storage/' . $item->gambar_produk) : 'path_to_placeholder_image.jpg' }}" class="card-img-top" alt="{{ $item->nama_produk }}">
                    <h5>{{ $item->nama_produk }}</h5>
                    <p><b>Rp. {{ number_format($item->harga_produk, 0, ',', '.') }}</b></p>
                    <a class="btn btn-primary" href="{{ route('pembelian.create', $item->id_produk) }}" role="button">Beli Sekarang</a>
                </div>
            </div>
            @endforeach
        </div>        
            

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var myCarousel = document.querySelector('#carouselExample');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000, // Slide otomatis setiap 2 detik
            ride: 'carousel'
        });
    </script>

    <script>
        function handleSearch() {
            // Ambil kata kunci pencarian
            const searchQuery = document.getElementById("searchInput").value.toLowerCase();
            
            // Ambil semua kartu produk
            const cards = document.querySelectorAll(".card");
            
            // Lakukan penyaringan
            cards.forEach(card => {
                const productName = card.querySelector("h5").textContent.toLowerCase();
                
                if (productName.includes(searchQuery)) {
                    card.style.display = "block"; // Tampilkan jika cocok
                } else {
                    card.style.display = "none"; // Sembunyikan jika tidak cocok
                }
            });

            // Mencegah reload halaman
            return false;
        }
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
