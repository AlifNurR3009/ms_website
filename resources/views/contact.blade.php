<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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

        <div class="container">
            <h1 class="text-center">Contact Us</h1>
            <form onsubmit="return validateForm()">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Your Phone Number" required pattern="[0-9]*">
                    <div class="invalid-feedback">
                        Please enter a valid phone number.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea class="form-control" id="comment" rows="4" placeholder="Your Comment" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

<script>
    function validateForm() {
        const emailInput = document.getElementById('email');
        const phoneInput = document.getElementById('phone');
        
        // Email validation
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(emailInput.value)) {
            alert('Please enter a valid email address (must include "@" and ".com")');
            emailInput.focus();
            return false;
        }
    
        // Phone validation
        const phonePattern = /^[0-9]+$/;
        if (!phonePattern.test(phoneInput.value)) {
            alert('Please enter a valid phone number (numbers only).');
            phoneInput.focus();
            return false;
        }
    
        return true; // Allow form submission
    }
    </script>
        </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
