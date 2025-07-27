@extends('frontend.layouts.master')

@section('content')
<!-- Hero Section -->
    <header class="hero" data-aos="fade-down">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold">Discover & Book Amazing Events</h1>
                    <p class="lead">From concerts to workshops, find events that match your passion.</p>
                    <div class="search-bar mt-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for events...">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- Featured Events -->
<section id="events" class="py-5">
    <div class="container">
    <div class="section-header d-flex justify-content-between align-items-center mb-5">
        <h2 class="fw-bold text-dark">Upcoming Events</h2>
        <a href="#categories" class="btn btn-primary">View All</a>
    </div>
        
        <!-- First Row of Events -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card event-card h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="event-img card-img-top" alt="Jazz Night Live">
                        <div class="event-date">Oct 15, 2023</div>
                        <span class="badge badge-category position-absolute top-0 end-0 m-2">Concert</span>
                    </div>
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Infinix Live in Concert</h5>
                        <p class="card-text text-muted mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <span class="event-location">Nelum Pokuna Mahinda Rajapaksa Theatre</span>
                        </p>
                        <p class="card-text">
                            <i class="fas fa-clock me-2"></i>
                            <span>19:00</span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button class="btn btn-sm btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card event-card h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" class="event-img card-img-top" alt="Digital Marketing Workshop">
                        <div class="event-date">Oct 20, 2023</div>
                        <span class="badge badge-category position-absolute top-0 end-0 m-2">Workshop</span>
                    </div>
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Digital Marketing Workshop</h5>
                        <p class="card-text text-muted mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <span class="event-location">Bandaranaike Memorial International Conference Hall</span>
                        </p>
                        <p class="card-text">
                            <i class="fas fa-clock me-2"></i>
                            <span>10:00</span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button class="btn btn-sm btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card event-card h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1547153760-18fc86324498?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" class="event-img card-img-top" alt="Shakespeare in the Park">
                        <div class="event-date">Nov 5, 2023</div>
                        <span class="badge badge-category position-absolute top-0 end-0 m-2">Theater</span>
                    </div>
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Shakespeare in the Park</h5>
                        <p class="card-text text-muted mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <span class="event-location">Lionel Wendt Theatre</span>
                        </p>
                        <p class="card-text">
                            <i class="fas fa-clock me-2"></i>
                            <span>16:30</span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button class="btn btn-sm btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Second Row of Events -->
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card event-card h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="event-img card-img-top" alt="AI Future Trends Seminar">
                        <div class="event-date">Nov 12, 2023</div>
                        <span class="badge badge-category position-absolute top-0 end-0 m-2">Seminar</span>
                    </div>
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">AI Future Trends Seminar</h5>
                        <p class="card-text text-muted mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <span class="event-location">Innovation Center</span>
                        </p>
                        <p class="card-text">
                            <i class="fas fa-clock me-2"></i>
                            <span>13:00</span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button class="btn btn-sm btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card event-card h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="event-img card-img-top" alt="Indie Music Festival">
                        <div class="event-date">Nov 18, 2023</div>
                        <span class="badge badge-category position-absolute top-0 end-0 m-2">Concert</span>
                    </div>
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Indie Music Festival</h5>
                        <p class="card-text text-muted mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <span class="event-location">Riverside Park</span>
                        </p>
                        <p class="card-text">
                            <i class="fas fa-clock me-2"></i>
                            <span>16:00</span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button class="btn btn-sm btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card event-card h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="event-img card-img-top" alt="Photography Masterclass">
                        <div class="event-date">Nov 25, 2023</div>
                        <span class="badge badge-category position-absolute top-0 end-0 m-2">Workshop</span>
                    </div>
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Photography Masterclass</h5>
                        <p class="card-text text-muted mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <span class="event-location">Creative Arts Studio</span>
                        </p>
                        <p class="card-text">
                            <i class="fas fa-clock me-2"></i>
                            <span>09:30</span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button class="btn btn-sm btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Third Row of Events (optional) -->
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card event-card h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1540039155733-5bb30b53aa14?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" class="event-img card-img-top" alt="Startup Pitch Competition">
                        <div class="event-date">Dec 2, 2023</div>
                        <span class="badge badge-category position-absolute top-0 end-0 m-2">Seminar</span>
                    </div>
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Startup Pitch Competition</h5>
                        <p class="card-text text-muted mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <span class="event-location">Business Innovation Hub</span>
                        </p>
                        <p class="card-text">
                            <i class="fas fa-clock me-2"></i>
                            <span>14:00</span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button class="btn btn-sm btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card event-card h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1571330735066-03aaa9429d89?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="event-img card-img-top" alt="Classical Symphony Night">
                        <div class="event-date">Dec 9, 2023</div>
                        <span class="badge badge-category position-absolute top-0 end-0 m-2">Concert</span>
                    </div>
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Classical Symphony Night</h5>
                        <p class="card-text text-muted mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <span class="event-location">Grand Concert Hall</span>
                        </p>
                        <p class="card-text">
                            <i class="fas fa-clock me-2"></i>
                            <span>20:00</span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button class="btn btn-sm btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card event-card h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="event-img card-img-top" alt="Creative Writing Workshop">
                        <div class="event-date">Dec 16, 2023</div>
                        <span class="badge badge-category position-absolute top-0 end-0 m-2">Workshop</span>
                    </div>
                    <div class="card-body event-body">
                        <h5 class="card-title event-title">Creative Writing Workshop</h5>
                        <p class="card-text text-muted mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <span class="event-location">Literary Arts Center</span>
                        </p>
                        <p class="card-text">
                            <i class="fas fa-clock me-2"></i>
                            <span>11:00</span>
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button class="btn btn-sm btn-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Categories -->
    <section id="categories" class="py-5 bg-light" data-aos="fade-up">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold text-white">Browse by Category</h2>
                <p class="text-white">Find events that match your interests</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-card text-center p-4 rounded-3 shadow-sm">
                    <a class="nav-link" href="/eventscategory">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-music"></i>
                        </div>
                        <h5>Concerts</h5>
                        <p class="text-muted small">Live music events</p>
                    </a>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card text-center p-4 rounded-3 shadow-sm">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h5>Workshops</h5>
                        <p class="text-muted small">Learning experiences</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-card text-center p-4 rounded-3 shadow-sm">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-microphone"></i>
                        </div>
                        <h5>Seminars</h5>
                        <p class="text-muted small">Expert talks</p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="category-card text-center p-4 rounded-3 shadow-sm">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-theater-masks"></i>
                        </div>
                        <h5>Theater</h5>
                        <p class="text-muted small">Dramatic performances</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold">How It Works</h2>
                <p class="text-muted">Book your tickets in just a few clicks</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-card text-center p-4">
                        <div class="step-number mb-3">1</div>
                        <h5>Find Events</h5>
                        <p>Browse our extensive collection of events or search for specific ones.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-card text-center p-4">
                        <div class="step-number mb-3">2</div>
                        <h5>Book Tickets</h5>
                        <p>Select your seats or ticket type and proceed to checkout.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-card text-center p-4">
                        <div class="step-number mb-3">3</div>
                        <h5>Enjoy the Event</h5>
                        <p>Receive your e-ticket and get ready for an amazing experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Organizer Invitation Section -->
<section id="organizer" class="py-5 organizer-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column - Benefits -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="organizer-benefits">
                    <h2 class="display-5 fw-bold mb-4">Host Your Events With TicketEase</h2>
                    <p class="lead mb-5">Join thousands of organizers who trust us to sell tickets and manage their events effortlessly.</p>
                    
                    <div class="benefit-item d-flex mb-4">
                        <div class="benefit-icon me-4">
                            <i class="fas fa-rocket fa-2x" data-aos="fade-up"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Powerful Event Tools</h5>
                            <p class="mb-0">Manage tickets, attendees, and payments all in one dashboard.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item d-flex mb-4">
                        <div class="benefit-icon me-4">
                            <i class="fas fa-chart-line fa-2x" data-aos="fade-up"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Real-time Analytics</h5>
                            <p class="mb-0">Track sales and attendance with comprehensive reports.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item d-flex mb-4">
                        <div class="benefit-icon me-4">
                            <i class="fas fa-users fa-2x" data-aos="fade-up"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Built-in Audience</h5>
                            <p class="mb-0">Access our community of event-goers looking for experiences.</p>
                        </div>
                    </div>
                    
                    <div class="benefit-item d-flex">
                        <div class="benefit-icon me-4">
                            <i class="fas fa-headset fa-2x" data-aos="fade-up"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold">Dedicated Support</h5>
                            <p class="mb-0">Our team is here to help you succeed with your events.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Registration Form -->
            <div class="col-lg-6">
                <div class="organizer-registration bg-white p-4 p-lg-5 rounded-4 shadow">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold">Become an Organizer</h3>
                        <p class="text-muted">Create your organizer account in minutes</p>
                    </div>
                    
                    <form id="organizerRegistrationForm" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                                    <label for="firstName">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                                    <label for="lastName">Last Name</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-floating mt-3">
                            <input type="email" class="form-control" id="orgEmail" placeholder="Email Address" required>
                            <label for="orgEmail">Email Address</label>
                        </div>
                        
                        <div class="form-floating mt-3">
                            <input type="password" class="form-control" id="orgPassword" placeholder="Password" required>
                            <label for="orgPassword">Password</label>
                            <div class="form-text">Minimum 8 characters</div>
                        </div>
                        
                        <div class="form-floating mt-3">
                            <input type="password" class="form-control" id="orgConfirmPassword" placeholder="Confirm Password" required>
                            <label for="orgConfirmPassword">Confirm Password</label>
                        </div>
                        
                        <div class="form-floating mt-3">
                            <input type="text" class="form-control" id="orgName" placeholder="Organization Name">
                            <label for="orgName">Organization Name (optional)</label>
                        </div>
                        
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" id="termsCheck" required>
                            <label class="form-check-label" for="termsCheck">
                                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                            </label>
                        </div>
                        
                        <button class="w-100 btn btn-lg btn-primary mt-4 py-3 fw-bold" type="submit">
                            Create Organizer Account
                        </button>
                        
                        <div class="text-center mt-3">
                            <p class="mb-0">Already have an account? <a href="login.html">Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="fw-bold text-white">What Our Attendees Say</h2>
            <p class="text-white">Hear from people who've experienced our events</p>
        </div>
        
        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-md-4">
                <div class="testimonial-card p-4 rounded-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="images/profile1.jpeg" class="rounded-circle me-3" width="60" alt="User">
                        <div>
                            <h5 class="mb-0">Sarah Jayawardhana</h5>
                            <div class="star-rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">"The infinix concert was absolutely magical! The booking process was so smooth and the venue was perfect. Can't wait for the next event!"</p>
                    <div class="event-badge mt-3">
                        <span class="badge bg-primary">Attended: Jazz Night Live</span>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="testimonial-card p-4 rounded-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="images/profile2.jpeg" class="rounded-circle me-3" width="60" alt="User">
                        <div>
                            <h5 class="mb-0">Abhimana Perera</h5>
                            <div class="star-rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">"The digital marketing workshop exceeded all my expectations. Learned so much and met great people. The TicketEase platform made everything easy."</p>
                    <div class="event-badge mt-3">
                        <span class="badge bg-primary">Attended: Digital Marketing Workshop</span>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="testimonial-card p-4 rounded-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="images/profile3.jpeg" class="rounded-circle me-3" width="60" alt="User">
                        <div>
                            <h5 class="mb-0">Shehani Pieris</h5>
                            <div class="star-rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mb-0">"Shakespeare in the Park was a breathtaking experience. The tickets were affordable and the seats were great. Will definitely book through TicketEase again!"</p>
                    <div class="event-badge mt-3">
                        <span class="badge bg-primary">Attended: Shakespeare in the Park</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


 