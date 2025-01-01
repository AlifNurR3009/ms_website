<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

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
                                </nav>
                            @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
    </div>

    <main class="l-main">
        <div style="background-color: #007BFF;">
        <section class="about section bd-container" id="about" >
            <span class="section-subtitle" style="font-size: 40px; color: #fff;">About us</span>
            <div class="about__container bd-grid">
                <div class="about__data">
                    <h2 class="section-title about__initial" style="color: #fff;">We provide the best material products</h2>
                    <p class="about__description" style="color: #fff;">
                        Material store is a website engaged in the sale of materials for building houses, which provides several tools or materials for carpenters. With the existence of the Material Store e-commerce website, it can help market products using the internet media so that it can attract many customers and customers around the world can see and buy products without having to come directly to the store.</p>
                </div>
                <img src="image/loginimage.jpg" alt="" class="about__img">
            </div>
        </section>
    </div>
    <h1 class="home__title" style="text-align: center; font-size: 3em;">Our Team</h1>
    <div class="products__container bd-grid slick_two">
        <div class="products__content">
            <img src="image/about.jpeg" alt="" class="product__img">
            <h3 class="products__name">Alif Nur Rachman</h3>
        </div>
            <div class="products__content">
                <img src="image/about1.jpeg" alt="" class="product__img">
                <h3 class="products__name">Mujahid Ul-haq</h3>
            </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var myCarousel = document.querySelector('#carouselExample');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000, // Slide otomatis setiap 2 detik
            ride: 'carousel'
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
