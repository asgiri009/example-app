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
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about">About</a>
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

    <!-- Hero Section -->
    <header class="about-hero">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-3 fw-bold mb-4 ">Our Story</h1>
                    <p class="lead mb-5">Bringing people together through unforgettable experiences since 2015</p>
                    <a href="#mission" class="btn btn-primary btn-lg me-3">Our Mission</a>
                    <a href="#team" class="btn btn-outline-light btn-lg">Meet the Team</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Mission Section -->
    <section id="mission" class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mission-image rounded-4 overflow-hidden shadow-lg">
                        <img src="https://images.unsplash.com/photo-1527525443983-6e60c75fff46?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1705&q=80" alt="Team working together" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4 text-primary">Our Mission</h2>
                    <p class="lead mb-4">At TicketEase, we believe in the power of shared experiences to create lasting memories and meaningful connections.</p>
                    <div class="mission-points">
                        <div class="d-flex mb-4">
                            <div class="me-4">
                                <div class="icon-box bg-primary rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-bolt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="fw-bold">Simplify Event Discovery</h4>
                                <p class="mb-0">Making it effortless to find events that match your passions and interests.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="me-4">
                                <div class="icon-box bg-primary rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-ticket-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="fw-bold">Revolutionize Ticketing</h4>
                                <p class="mb-0">Creating seamless booking experiences with just a few clicks.</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-4">
                                <div class="icon-box bg-primary rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-users text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="fw-bold">Build Community</h4>
                                <p class="mb-0">Connecting people through shared experiences and common interests.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light" data-aos="fade-up">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="stat-box p-4 rounded-4">
                        <h3 class="display-4 fw-bold text-primary">250K+</h3>
                        <p class="mb-0 fw-bold">Tickets Booked</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="stat-box p-4 rounded-4">
                        <h3 class="display-4 fw-bold text-primary">5K+</h3>
                        <p class="mb-0 fw-bold">Events Hosted</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="stat-box p-4 rounded-4">
                        <h3 class="display-4 fw-bold text-primary">80+</h3>
                        <p class="mb-0 fw-bold">Cities</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box p-4 rounded-4">
                        <h3 class="display-4 fw-bold text-primary">98%</h3>
                        <p class="mb-0 fw-bold">Satisfaction Rate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="display-5 fw-bold text-primary">Meet Our Team</h2>
                <p class="lead">The passionate people behind Eventify</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="team-card text-center p-4 rounded-4 h-100">
                        <div class="team-img mb-4 rounded-circle overflow-hidden mx-auto">
                            <img src="images/profile6.jpeg" class="img-fluid" alt="Team Member">
                        </div>
                        <h4 class="fw-bold mb-2">Udari Warnakulasuriya</h4>
                        <p class="text-primary mb-3">CEO & Founder</p>
                        <p class="mb-4">With 15 years in event management, Sarah founded TicketEase to revolutionize how people discover and attend events.</p>
                        <div class="social-links">
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card text-center p-4 rounded-4 h-100">
                        <div class="team-img mb-4 rounded-circle overflow-hidden mx-auto">
                            <img src="images/profile4.jpeg" class="img-fluid" alt="Team Member">
                        </div>
                        <h4 class="fw-bold mb-2">Suren De Silva</h4>
                        <p class="text-primary mb-3">CTO</p>
                        <p class="mb-4">Tech visionary who built our platform from the ground up, ensuring seamless experiences for all users.</p>
                        <div class="social-links">
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-github"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card text-center p-4 rounded-4 h-100">
                        <div class="team-img mb-4 rounded-circle overflow-hidden mx-auto">
                            <img src="images/profile5.jpeg" class="img-fluid" alt="Team Member">
                        </div>
                        <h4 class="fw-bold mb-2">Amaya Fernando</h4>
                        <p class="text-primary mb-3">Head of Partnerships</p>
                        <p class="mb-4">Connects TicketEase with the best venues and organizers to bring you exceptional events.</p>
                        <div class="social-links">
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-decoration-none me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-5 bg-light" data-aos="fade-up">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="display-5 fw-bold text-primary">Our Core Values</h2>
                <p class="lead">What drives us every day</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="value-card p-4 rounded-4 h-100 text-center">
                        <div class="value-icon mb-4 mx-auto">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Passion</h4>
                        <p class="mb-0">We're deeply passionate about creating memorable experiences and bringing people together through events.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-card p-4 rounded-4 h-100 text-center">
                        <div class="value-icon mb-4 mx-auto">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Innovation</h4>
                        <p class="mb-0">We constantly push boundaries to improve how people discover, book, and experience events.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-card p-4 rounded-4 h-100 text-center">
                        <div class="value-icon mb-4 mx-auto">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Community</h4>
                        <p class="mb-0">We believe in the power of community and work to foster meaningful connections through shared experiences.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-gradient-primary text-white" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-3">Ready to experience the difference?</h2>
                    <p class="lead mb-0">Join thousands of happy attendees and organizers who trust TicketEase.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/#events" class="btn btn-light btn-lg me-3">Browse Events</a>
                    <a href="/#organizer" class="btn btn-outline-light btn-lg">Become an Organizer</a>
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
    <!-- Animate on Scroll JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>