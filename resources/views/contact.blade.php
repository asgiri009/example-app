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
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact">Contact</a>
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
    <header class="contact-hero" data-aos="fade-down">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-8 text-center mx-auto">
                    <h1 class="display-3 fw-bold mb-4">Get In Touch</h1>
                    <p class="lead">We'd love to hear from you! Reach out with questions, feedback, or partnership opportunities.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Methods -->
    <section class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="contact-method text-center p-4 rounded-4 h-100">
                        <div class="contact-icon mb-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Visit Us</h4>
                        <p class="mb-0">28 Pedris Rd<br>Colombo 03</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-method text-center p-4 rounded-4 h-100">
                        <div class="contact-icon mb-4">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Call Us</h4>
                        <p class="mb-2">+94 112 567 890</p>
                        <p class="mb-0 small text-muted">Mon-Fri, 9am-5pm PST</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-method text-center p-4 rounded-4 h-100">
                        <div class="contact-icon mb-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Email Us</h4>
                        <p class="mb-0">hello@ticketEase.com<br>support@ticketEase.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-5 bg-light" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center mb-5">
                        <h2 class="fw-bold">Send Us a Message</h2>
                        <p class="text-muted">We typically respond within 24 hours</p>
                    </div>
                    
                    <form class="contact-form p-4 p-md-5 rounded-4 bg-white shadow-sm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                                    <label for="email">Email Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" placeholder="Your Message" style="height: 150px" required></textarea>
                                    <label for="message">Your Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold">Frequently Asked Questions</h2>
                <p class="text-muted">Quick answers to common questions</p>
            </div>
            
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            How do I get a refund for my ticket?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Refund policies vary by event. You can request a refund through your Eventify account under "My Tickets." Most events offer refunds up to 48 hours before the event start time.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Can I transfer my ticket to someone else?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes! Most tickets can be transferred. Go to your ticket details in the Eventify app and select "Transfer Ticket." You'll need the recipient's email address.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            How do I become an event organizer?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We'd love to have you! Visit our <a href="about.html#organizer">organizer page</a> to learn about hosting events through Eventify. You can also contact our partnerships team through the form above.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-0" data-aos="fade-up">
        <div class="container-fluid px-0">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8886156777235!2d79.8553992745628!3d6.903921393095414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25964013b054b%3A0x942b60808c5807d!2s28%20Pedris%20Rd!5e0!3m2!1sen!2slk!4v1750345931241!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 120
        });
    </script>
</body>
</html>