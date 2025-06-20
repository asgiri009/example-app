<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketEase | Book Tickets for Events</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate on Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <style>
        .login-type-toggle {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
        }
        .login-type-btn {
            padding: 0.75rem 1.5rem;
            border: 1px solid #dee2e6;
            background: white;
            cursor: pointer;
        }
        .login-type-btn:first-child {
            border-radius: 0.375rem 0 0 0.375rem;
        }
        .login-type-btn:last-child {
            border-radius: 0 0.375rem 0.375rem 0;
        }
        .login-type-btn.active {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }
        .login-section .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
}

        .login-section .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
}
        .login-form {
            display: none;
        }
        .login-form.active {
            display: block;
        }
    </style>
</head>
<body>

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <img src="images/logo.png" alt="Logo" width="25" height="25" class="me-2">
            <a class="navbar-brand" href="index.html">TicketEase</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                </ul>
        <div class="ms-3 d-flex">
            <a href="login" class="btn btn-outline-light me-2">Login</a>
            <a href="register" class="btn btn-primary">Register</a>
        </div>
            </div>
        </div>
    </nav>
    
    <section class="login-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-5">
                            <div class="login-type-toggle">
                                <button class="login-type-btn active" data-type="customer">Customer Login</button>
                                <button class="login-type-btn" data-type="organizer">Organizer Login</button>
                            </div>
                            
                            <!-- Customer Login Form -->
                            <form id="customerLoginForm" class="login-form active">
                                <h2 class="text-center mb-4">Customer Login</h2>
                                <div class="mb-3">
                                    <label for="customerEmail" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="customerEmail" required>
                                </div>
                                <div class="mb-3">
                                    <label for="customerPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="customerPassword" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="text-center mt-3">
                                    <p>Don't have an account? <a href="register.html">Register here</a></p>
                                </div>
                            </form>
                            
                            <!-- Organizer Login Form -->
                            <form id="organizerLoginForm" class="login-form">
                                <h2 class="text-center mb-4">Organizer Login</h2>
                                <div class="mb-3">
                                    <label for="organizerEmail" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="organizerEmail" required>
                                </div>
                                <div class="mb-3">
                                    <label for="organizerPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="organizerPassword" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="text-center mt-3">
                                    <p>Don't have an account? <a href="register.html">Register here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
            <img src="images/logo.png" alt="Logo" width="24" height="24" class="me-2">
            <a class="navbar-brand" href="/">TicketEase</a>
                    <p>Your one-stop platform for discovering and booking events of all kinds.</p>
                    <div class="social-icons mt-4">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="/#events" class="text-white text-decoration-none">Events</a></li>
                        <li class="mb-2"><a href="/#categories" class="text-white text-decoration-none">Categories</a></li>
                        <li class="mb-2"><a href="about" class="text-white text-decoration-none">About</a></li>
                        <li><a href="contact" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="mb-4">Categories</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Concerts</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Workshops</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Seminars</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Theater</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="mb-4">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-map-marker-alt me-2"></i> 28 Pedris Rd, Colombo 03</li>
                        <li class="mb-3"><i class="fas fa-phone me-2"></i> +94 112 567 890</li>
                        <li><i class="fas fa-envelope me-2"></i> info@ticketEase.com</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 TicketEase. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        <a href="#" class="text-white text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class="text-white text-decoration-none">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButtons = document.querySelectorAll('.login-type-btn');
            const loginForms = document.querySelectorAll('.login-form');
            
            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons and forms
                    toggleButtons.forEach(btn => btn.classList.remove('active'));
                    loginForms.forEach(form => form.classList.remove('active'));
                    
                    // Add active class to clicked button and corresponding form
                    this.classList.add('active');
                    const formType = this.getAttribute('data-type');
                    document.getElementById(`${formType}LoginForm`).classList.add('active');
                });
            });
        });
    </script>
</body>
</html>