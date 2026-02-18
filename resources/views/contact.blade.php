@extends('layouts.app')

@section('content')

<!-- CONTACT HERO SECTION -->
<section class="contact-hero">
    <div class="contact-hero-background" style="background-image: url('{{ asset('images/pic05.jpg') }}')"></div>
    <div class="contact-hero-overlay"></div>
    <div class="contact-hero-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <span>Contact Us</span>
        </div>
        <h1 class="contact-hero-title" data-animate>Get In Touch With Us</h1>
        <p class="contact-hero-subtitle" data-animate>Our team is ready to provide professional advice on our products and services</p>
    </div>
</section>

<!-- CONTACT MAIN SECTION -->
<section class="contact-main-section">
    <div class="full-width-container">
        <div class="contact-grid">
            <!-- Contact Information -->
            <div class="contact-info-column" data-animate>
                <div class="contact-info-header">
                    <h2>Contact Information</h2>
                    <p>Have questions? We're here to help and answer any questions you might have.</p>
                </div>

                <!-- Contact Cards -->
                <div class="contact-cards">
                    <!-- Head Office -->
                    <div class="contact-card" data-animate>
                        <div class="contact-card-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="contact-card-content">
                            <h3>Head Office</h3>
                            <p>24 Gweru Smallholdings<br>Gweru, Zimbabwe</p>
                            <a href="https://maps.google.com/?q=24+Gweru+Smallholdings+Gweru+Zimbabwe" target="_blank" class="contact-link">
                                View on Map
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Phone Numbers -->
                    <div class="contact-card" data-animate>
                        <div class="contact-card-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div class="contact-card-content">
                            <h3>Phone Numbers</h3>
                            <div class="phone-list">
                                <div class="phone-item">
                                    <strong>Kuda:</strong>
                                    <a href="tel:+263776695368">+263 77 669 5368</a>
                                </div>
                                <div class="phone-item">
                                    <strong>Julian:</strong>
                                    <a href="tel:+263775880537">+263 77 588 0537</a>
                                </div>
                                <div class="phone-item">
                                    <strong>Land:</strong>
                                    <a href="tel:+263542220463">+263 54 222 0463</a>
                                </div>
                                <div class="phone-item">
                                    <strong>Direct:</strong>
                                    <a href="tel:+263542229230">+263 54 222 9230</a>
                                </div>
                            </div>
                            <a href="tel:+263776695368" class="contact-link">
                                Call Now
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-card" data-animate>
                        <div class="contact-card-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="contact-card-content">
                            <h3>Email Addresses</h3>
                            <div class="email-list">
                                <a href="mailto:buying@jmktrading.co.zw">buying@jmktrading.co.zw</a>
                                <a href="mailto:admin@jmktrading.co.zw">admin@jmktrading.co.zw</a>
                                <a href="mailto:accounts@jmktrading.co.zw">accounts@jmktrading.co.zw</a>
                            </div>
                            <a href="mailto:tinomuongaj@yahoo.co.uk" class="contact-link">
                                Send Email
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="contact-card" data-animate>
                        <div class="contact-card-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="contact-card-content">
                            <h3>Business Hours</h3>
                            <div class="hours-list">
                                <div class="hours-item">
                                    <span class="day">Monday - Friday</span>
                                    <span class="time">8:00 AM - 5:00 PM</span>
                                </div>
                                <div class="hours-item">
                                    <span class="day">Saturday</span>
                                    <span class="time">8:00 AM - 1:00 PM</span>
                                </div>
                                <div class="hours-item">
                                    <span class="day">Sunday</span>
                                    <span class="time">Closed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Action Buttons -->
                <div class="quick-actions" data-animate>
                    <a href="https://wa.me/263776695368" target="_blank" class="quick-action-btn whatsapp">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        <span>WhatsApp Us</span>
                    </a>
                    <a href="/request-quote" class="quick-action-btn quote">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span>Request Quote</span>
                    </a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-column" data-animate>
                <div class="contact-form-card">
                    <div class="form-header">
                        <h2>Send Us a Message</h2>
                        <p>Fill out the form below and we'll get back to you as soon as possible</p>
                    </div>

                    <form action="/contact/submit" method="POST" class="contact-form" id="contactForm">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name *</label>
                                <input type="text" id="first_name" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" id="company" name="company">
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="product-inquiry">Product Inquiry</option>
                                <option value="quote-request">Quote Request</option>
                                <option value="technical-support">Technical Support</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="general">General Inquiry</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                        </div>

                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="agree" required>
                                <span>I agree to the privacy policy and terms of service</span>
                            </label>
                        </div>

                        <button type="submit" class="submit-btn">
                            <span>Send Message</span>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAP SECTION -->
<section class="map-section">
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3795.123456789!2d29.8167!3d-19.45!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDI3JzAwLjAiUyAyOcKwNDknMDAuMCJF!5e0!3m2!1sen!2szw!4v1234567890"
            width="100%" 
            height="500" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<!-- REFERENCES SECTION -->
<section class="references-section">
    <div class="full-width-container">
        <div class="section-header-center" data-animate>
            <div class="section-label-green">Our References</div>
            <h2 class="section-title-dark">Trusted By Industry Leaders</h2>
            <div class="title-underline-center"></div>
            <p class="section-description-contact">Feel free to contact our satisfied clients for references</p>
        </div>

        <div class="references-grid">
            <!-- Reference 1 -->
            <div class="reference-card" data-animate>
                <div class="reference-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3>Unki Mine</h3>
                <div class="reference-contact">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span>Phiri</span>
                </div>
                <a href="tel:+263772143017" class="reference-phone">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+263 77 214 3017</span>
                </a>
            </div>

            <!-- Reference 2 -->
            <div class="reference-card" data-animate>
                <div class="reference-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3>United Refineries</h3>
                <div class="reference-contact">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span>K Simango</span>
                </div>
                <a href="tel:+263776416071" class="reference-phone">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+263 77 641 6071</span>
                </a>
            </div>

            <!-- Reference 3 -->
            <div class="reference-card" data-animate>
                <div class="reference-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                    </svg>
                </div>
                <h3>Ecomark and Coopers</h3>
                <div class="reference-contact">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span>Alexia</span>
                </div>
                <a href="tel:+263773385577" class="reference-phone">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+263 77 338 5577</span>
                </a>
            </div>

            <!-- Reference 4 -->
            <div class="reference-card" data-animate>
                <div class="reference-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <h3>Falcon Gold (Golden Quarry)</h3>
                <div class="reference-contact">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span>Emmanuel Chatikobo</span>
                </div>
                <a href="tel:+263772694984" class="reference-phone">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+263 77 269 4984</span>
                </a>
            </div>

            <!-- Reference 5 -->
            <div class="reference-card" data-animate>
                <div class="reference-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3>Melprin Foundries</h3>
                <div class="reference-contact">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span>Prince Gobvu</span>
                </div>
                <a href="tel:+263772881952" class="reference-phone">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+263 77 288 1952</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FLOATING WHATSAPP BUTTON -->
<a href="https://wa.me/263776695368" target="_blank" class="floating-whatsapp" id="floatingWhatsapp">
    <svg viewBox="0 0 24 24" fill="currentColor">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
    <span class="whatsapp-tooltip">Chat with us!</span>
</a>

<style>
/* ===== CONTACT PAGE STYLES ===== */
.contact-hero {
    position: relative;
    height: 50vh;
    min-height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.contact-hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
}

/* .contact-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.9) 0%, rgba(28, 28, 30, 0.88) 100%);
} */

.contact-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 800px;
    padding: 0 20px;
}

.contact-hero-title {
    font-size: 52px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 20px;
}

.contact-hero-subtitle {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.95);
    line-height: 1.6;
}

/* Contact Main Section */
.contact-main-section {
    padding: 100px 0;
    background: #f8f9fa;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 60px;
}

/* Contact Information Column */
.contact-info-column {
    display: flex;
    flex-direction: column;
    gap: 40px;
}

.contact-info-header h2 {
    font-size: 36px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 15px;
}

.contact-info-header p {
    font-size: 17px;
    color: #666;
    line-height: 1.7;
}

.contact-cards {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.contact-card {
    background: #ffffff;
    padding: 35px;
    border-radius: 16px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    display: flex;
    gap: 25px;
    transition: all 0.3s ease;
    border-left: 4px solid #1a9847;
}

.contact-card:hover {
    transform: translateX(8px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.contact-card-icon {
    width: 64px;
    height: 64px;
    min-width: 64px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1a9847;
}

.contact-card-icon svg {
    width: 32px;
    height: 32px;
}

.contact-card-content {
    flex: 1;
}

.contact-card-content h3 {
    font-size: 20px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 12px;
}

.contact-card-content p {
    font-size: 15px;
    color: #666;
    line-height: 1.7;
    margin-bottom: 15px;
}

.phone-list,
.email-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 15px;
}

.phone-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid #f0f0f0;
}

.phone-item strong {
    color: #333;
    font-weight: 600;
}

.phone-item a,
.email-list a {
    color: #1a9847;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
}

.phone-item a:hover,
.email-list a:hover {
    color: #157a38;
    text-decoration: underline;
}

.hours-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.hours-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #f0f0f0;
}

.hours-item .day {
    font-weight: 600;
    color: #333;
}

.hours-item .time {
    color: #666;
}

.contact-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #1a9847;
    font-weight: 600;
    font-size: 15px;
    text-decoration: none;
    transition: all 0.3s ease;
    margin-top: 10px;
}

.contact-link:hover {
    gap: 12px;
    color: #157a38;
}

.contact-link svg {
    width: 18px;
    height: 18px;
}

/* Quick Actions */
.quick-actions {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.quick-action-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    padding: 18px 25px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 700;
    font-size: 15px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.quick-action-btn svg {
    width: 24px;
    height: 24px;
}

.quick-action-btn.whatsapp {
    background: #25D366;
    color: #ffffff;
}

.quick-action-btn.whatsapp:hover {
    background: #128C7E;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(37, 211, 102, 0.3);
}

.quick-action-btn.quote {
    background: #1a9847;
    color: #ffffff;
}

.quick-action-btn.quote:hover {
    background: #157a38;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(26, 152, 71, 0.3);
}

/* Contact Form */
.contact-form-column {
    position: sticky;
    top: 100px;
    align-self: flex-start;
}

.contact-form-card {
    background: #ffffff;
    padding: 50px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.form-header {
    margin-bottom: 40px;
}

.form-header h2 {
    font-size: 32px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 12px;
}

.form-header p {
    font-size: 16px;
    color: #666;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.form-group label {
    display: block;
    font-size: 15px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 14px 18px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 15px;
    font-family: inherit;
    transition: all 0.3s ease;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #1a9847;
    box-shadow: 0 0 0 3px rgba(26, 152, 71, 0.1);
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
}

.checkbox-group {
    margin-top: 10px;
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    cursor: pointer;
    font-size: 14px;
    color: #666;
}

.checkbox-label input[type="checkbox"] {
    width: 20px;
    height: 20px;
    min-width: 20px;
    cursor: pointer;
    accent-color: #1a9847;
}

.submit-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    padding: 18px 40px;
    background: #1a9847;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.submit-btn:hover {
    background: #157a38;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(26, 152, 71, 0.3);
}

.submit-btn svg {
    width: 20px;
    height: 20px;
}

/* Map Section */
.map-section {
    width: 100%;
    height: 500px;
    position: relative;
}

.map-container {
    width: 100%;
    height: 100%;
}

.map-container iframe {
    filter: grayscale(20%);
    transition: all 0.3s ease;
}

.map-container:hover iframe {
    filter: grayscale(0%);
}

/* References Section */
.references-section {
    padding: 100px 0;
    background: #ffffff;
}

.section-description-contact {
    font-size: 18px;
    color: #666;
    max-width: 700px;
    margin: 0 auto;
}

.references-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 60px;
}

.reference-card {
    background: #f8f9fa;
    padding: 35px 30px;
    border-radius: 16px;
    text-align: center;
    transition: all 0.4s ease;
    border-top: 4px solid #1a9847;
}

.reference-card:hover {
    background: #ffffff;
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.reference-icon {
    width: 72px;
    height: 72px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    color: #1a9847;
    transition: all 0.3s ease;
}

.reference-card:hover .reference-icon {
    background: #1a9847;
    color: #ffffff;
    transform: scale(1.1);
}

.reference-icon svg {
    width: 36px;
    height: 36px;
}

.reference-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 20px;
}

.reference-contact {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 15px;
    color: #666;
    font-size: 15px;
}

.reference-contact svg {
    width: 18px;
    height: 18px;
}

.reference-phone {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 12px 25px;
    background: rgba(26, 152, 71, 0.1);
    color: #1a9847;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s ease;
    margin-top: 10px;
}

.reference-phone:hover {
    background: #1a9847;
    color: #ffffff;
    transform: scale(1.05);
}

.reference-phone svg {
    width: 18px;
    height: 18px;
}

/* Floating WhatsApp Button */
.floating-whatsapp {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 60px;
    height: 60px;
    background: #25D366;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
    z-index: 999;
    transition: all 0.3s ease;
    text-decoration: none;
    animation: pulse 2s infinite;
}

.floating-whatsapp:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 30px rgba(37, 211, 102, 0.5);
}

.floating-whatsapp svg {
    width: 32px;
    height: 32px;
}

.whatsapp-tooltip {
    position: absolute;
    right: 70px;
    background: #1c1c1e;
    color: #ffffff;
    padding: 10px 18px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}

.floating-whatsapp:hover .whatsapp-tooltip {
    opacity: 1;
    right: 75px;
}

@keyframes pulse {
    0%, 100% {
        box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
    }
    50% {
        box-shadow: 0 5px 30px rgba(37, 211, 102, 0.6);
    }
}

/* Animations */
[data-animate] {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

[data-animate].animated {
    opacity: 1;
    transform: translateY(0);
}

/* Responsive Design */
@media (max-width: 1200px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }

    .contact-form-column {
        position: static;
    }

    .quick-actions {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .contact-hero-title {
        font-size: 36px;
    }

    .contact-main-section {
        padding: 60px 0;
    }

    .contact-form-card {
        padding: 30px 25px;
    }

    .form-row {
        grid-template-columns: 1fr;
    }

    .references-grid {
        grid-template-columns: 1fr;
    }

    .floating-whatsapp {
        bottom: 20px;
        right: 20px;
        width: 55px;
        height: 55px;
    }

    .whatsapp-tooltip {
        display: none;
    }

    .contact-card {
        flex-direction: column;
        text-align: center;
    }

    .phone-item {
        flex-direction: column;
        gap: 5px;
        text-align: center;
    }
}
</style>

<script>
// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const animateObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animated');
            animateObserver.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('[data-animate]').forEach(el => {
    animateObserver.observe(el);
});

// Form submission handler (customize as needed)
document.getElementById('contactForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(this);
    
    // Show loading state
    const submitBtn = this.querySelector('.submit-btn');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span>Sending...</span>';
    submitBtn.disabled = true;
    
    // Simulate form submission (replace with actual AJAX call)
    setTimeout(() => {
        alert('Thank you for your message! We will get back to you soon.');
        this.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 1500);
});

// Floating WhatsApp button show/hide on scroll
let lastScroll = 0;
const floatingWhatsapp = document.getElementById('floatingWhatsapp');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 300) {
        floatingWhatsapp.style.opacity = '1';
        floatingWhatsapp.style.pointerEvents = 'auto';
    } else {
        floatingWhatsapp.style.opacity = '0';
        floatingWhatsapp.style.pointerEvents = 'none';
    }
    
    lastScroll = currentScroll;
});
</script>

@endsection
