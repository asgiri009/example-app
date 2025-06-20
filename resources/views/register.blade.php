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
        .registration-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }

        .registration-section .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
}

        .registration-section .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
}
        
        .registration-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .registration-header {
            padding: 2rem;
            background-color: var(--primary-color);
            color: white;
            text-align: center;
        }
        
        .registration-body {
            padding: 2rem;
        }
        
        .type-toggle {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
            border-radius: 0.5rem;
            overflow: hidden;
            background: white;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
        }
        
        .type-toggle-btn {
            padding: 0.75rem 1.5rem;
            border: none;
            background: transparent;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            flex: 1;
            text-align: center;
        }
        
        .type-toggle-btn.active {
            background-color: var(--primary-color);
            color: #fff;
        }
        
        .form-container {
            display: none;
        }
        
        .form-container.active {
            display: block;
            animation: fadeIn 0.3s ease-in-out;
        }
        
        .benefit-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }
        
        .benefit-icon {
            width: 2.5rem;
            height: 2.5rem;
            background: rgba(13, 110, 253, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            flex-shrink: 0;
        }
        
        .benefit-icon i {
            color: var(--bs-primary);
        }

        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @media (min-width: 992px) {
            .registration-card {
                max-width: 900px;
                margin: 0 auto;
            }
            
            .registration-body {
                padding: 3rem;
            }
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

    <!-- Registration Section -->
    <section class="registration-section">
        <div class="container">
            <div class="registration-card">
                <div class="registration-header">
                    <h2>Join TicketEase</h2>
                    <p class="mb-0">Create your account to discover or host amazing events</p>
                </div>
                
                <div class="registration-body">
                    <div class="type-toggle">
                        <button class="type-toggle-btn active" data-type="customer">I'm an Attendee</button>
                        <button class="type-toggle-btn" data-type="organizer">I'm an Organizer</button>
                    </div>
                    
                    <!-- Customer Registration Form -->
                    <form id="customerForm" class="form-container active needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="customerFirstName" placeholder="First Name" required>
                                    <label for="customerFirstName">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="customerLastName" placeholder="Last Name" required>
                                    <label for="customerLastName">Last Name</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="customerEmail" placeholder="Email Address" required>
                            <label for="customerEmail">Email Address</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="customerPassword" placeholder="Password" required minlength="8">
                            <label for="customerPassword">Password</label>
                            <div class="form-text">Minimum 8 characters</div>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="customerConfirmPassword" placeholder="Confirm Password" required>
                            <label for="customerConfirmPassword">Confirm Password</label>
                        </div>
                        
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="customerTerms" required>
                            <label class="form-check-label" for="customerTerms">
                                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold">
                            Create Customer Account
                        </button>
                        
                        <div class="text-center mt-3">
                            <p>Already have an account? <a href="login.html">Sign in</a></p>
                        </div>
                    </form>
                    
                    <!-- Organizer Registration Form -->
                    <form id="organizerForm" class="form-container needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="organizerFirstName" placeholder="First Name" required>
                                    <label for="organizerFirstName">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="organizerLastName" placeholder="Last Name" required>
                                    <label for="organizerLastName">Last Name</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="organizerEmail" placeholder="Email Address" required>
                            <label for="organizerEmail">Email Address</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="organizerPassword" placeholder="Password" required minlength="8">
                            <label for="organizerPassword">Password</label>
                            <div class="form-text">Minimum 8 characters</div>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="organizerConfirmPassword" placeholder="Confirm Password" required>
                            <label for="organizerConfirmPassword">Confirm Password</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="organizationName" placeholder="Organization Name">
                            <label for="organizationName">Organization Name (optional)</label>
                        </div>
                        
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="organizerTerms" required>
                            <label class="form-check-label" for="organizerTerms">
                                I agree to the <a href="#">Organizer Terms</a> and <a href="#">Privacy Policy</a>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold">
                            Create Organizer Account
                        </button>
                        
                        <div class="text-center mt-3">
                            <p>Already have an account? <a href="login.html">Sign in</a></p>
                        </div>
                    </form>
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

    <script src="js/bootstrap.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle between customer and organizer forms
            const toggleButtons = document.querySelectorAll('.type-toggle-btn');
            const forms = document.querySelectorAll('.form-container');
            
            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons and forms
                    toggleButtons.forEach(btn => btn.classList.remove('active'));
                    forms.forEach(form => form.classList.remove('active'));
                    
                    // Add active class to clicked button and corresponding form
                    const formType = this.getAttribute('data-type');
                    this.classList.add('active');
                    document.getElementById(`${formType}Form`).classList.add('active');
                });
            });
        });
    </script>

    </body>
    </html>