@extends('frontend.layouts.master')
@section('content')

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

@endsection