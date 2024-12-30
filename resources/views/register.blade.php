<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2 class="text-center">Register</h2>
            <form onsubmit="return validateRegister()">
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Username" required>
                </div>
                <div class="mb-3">
                    <label for="register-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="register-email" placeholder="Enter your email" required>
                    <div class="invalid-feedback">Please enter a valid email address with '@' and '.com'.</div>
                </div>
                <div class="mb-3">
                    <label for="register-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="register-password" placeholder="Enter your password" required>
                    <div class="invalid-feedback">Please enter your password.</div>
                </div>
                <button type="submit" class="btn btn-custom w-100">Register</button>
                <div class="mt-3 text-center">
                    <a href="login.html" class="text-decoration-none">Already have an account? Login</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validateRegister() {
            const emailInput = document.getElementById('register-email');
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            // Simple email validation
            if (!emailPattern.test(emailInput.value)) {
                emailInput.classList.add('is-invalid');
                return false; // Prevent submission
            }

            // Redirect to login.html on successful registration
            window.location.href = "login.html";
            return false; // Prevent actual form submission
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
