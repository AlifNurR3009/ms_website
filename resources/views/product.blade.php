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
                        <li class="nav-item">
                            <a class="nav-link" href="/login">
                                <img src="image/LOGIN.jpg" alt="Login" style="height: 30px;"> 
                            </a>
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
            <!-- Gambar 1 - 20 -->
            <div class="col">
                <div class="card h-100">
                    <img src="image/card1.jpeg" class="card-img-top" alt="Image 1">
                    <h5>Fosroc Membran Tempel</h5>
                    <p><b>Rp. 1,850,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card2.jpeg" class="card-img-top" alt="Image 2">
                    <h5>Spider P SA 3,5 KG</h5>
                    <p><b>Rp. 1,350,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card3.jpeg" class="card-img-top" alt="Image 3">
                    <h5>Spider P SA 1,5 Mm</h5>
                    <p><b>Rp. 1,550,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card4.jpeg" class="card-img-top" alt="Image 4">
                    <h5>Sikabit Pro P-30 Grey</h5>
                    <p><b>Rp. 900,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card5.jpeg" class="card-img-top" alt="Image 5">
                    <h5>Primer Fosroc Nitoproof 30</h5>
                    <p><b>Rp. 735,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card6.jpeg" class="card-img-top" alt="Image 6">
                    <h5>Membrane Brai Granulle</h5>
                    <p><b>Rp. 750,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card7.jpeg" class="card-img-top" alt="Image 7">
                    <h5>ITLS Plura</h5>
                    <p><b>Rp. 900,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card8.jpeg" class="card-img-top" alt="Image 8">
                    <h5>Fosroc Proofex</h5>
                    <p><b>Rp. 680,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card9.jpeg" class="card-img-top" alt="Image 9">
                    <h5>BASF Green 4mm</h5>
                    <p><b>Rp. 1,400,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card10.jpeg" class="card-img-top" alt="Image 10">
                    <h5>Casali Grey 3mm</h5>
                    <p><b>Rp. 700,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card11.jpeg" class="card-img-top" alt="Image 11">
                    <h5>Awazel Superseal sand</h5>
                    <p><b>Rp. 550,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card12.jpeg" class="card-img-top" alt="Image 12">
                    <h5>Thinner HG</h5>
                    <p><b>Rp. 45,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card13.jpeg" class="card-img-top" alt="Image 13">
                    <h5>Talk Powder @40KG</h5>
                    <p><b>Rp. 125,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card14.jpeg" class="card-img-top" alt="Image 14">
                    <h5>Fosroc Nitoflor Hardtop</h5>
                    <p><b>Rp. 115,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card15.jpeg" class="card-img-top" alt="Image 15">
                    <h5>Epoxy Finish Coating</h5>
                    <p><b>Rp. 2,700,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card16.jpeg" class="card-img-top" alt="Image 16">
                    <h5>Sika Floor 81 Epocem</h5>
                    <p><b>Rp. 900,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card17.jpeg" class="card-img-top" alt="Image 17">
                    <h5>Serat Viselin Tissue</h5>
                    <p><b>Rp. 900,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card18.jpeg" class="card-img-top" alt="Image 18">
                    <h5>Pantens T305TH</h5>
                    <p><b>Rp. 520,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card19.jpeg" class="card-img-top" alt="Image 19">
                    <h5>Pantens T-200H White</h5>
                    <p><b>Rp. 1,650,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="image/card20.jpeg" class="card-img-top" alt="Image 20">
                    <h5>Pantens PU300</h5>
                    <p><b>Rp. 4,500,000,-</b></p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
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

        <div class="container-fluid footer">
            <footer class="container text-center">
                <p>Email: <a href="mailto:info@materialbuilding.com">info@materialbuilding.com</a></p>
                <p>Alamat: Jl. Raya Material No. 123, Jakarta</p>
                <p>&copy; 2024 Material Building. All rights reserved.</p>
        </div>

        </footer>

</body>
</html>
