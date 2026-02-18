@extends('layouts.app')

@section('content')

<!-- QUOTE REQUEST HERO -->
<section class="quote-hero">
    <div class="quote-hero-background" style="background-image: url('{{ asset('images/pic01.jpg') }}')"></div>
    <div class="quote-hero-overlay"></div>
    <div class="quote-hero-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <span>Request Quote</span>
        </div>
        <h1 class="quote-hero-title" data-animate>Request a Quote</h1>
        <p class="quote-hero-subtitle" data-animate>Get competitive pricing for our products and services</p>
    </div>
</section>

<!-- QUOTE FORM SECTION -->
<section class="quote-form-section">
    <div class="full-width-container">
        <div class="quote-form-wrapper">
            <div class="quote-form-intro" data-animate>
                <div class="section-label-green">Get Started</div>
                <h2>Tell Us About Your Requirements</h2>
                <div class="title-underline-left"></div>
                <p>Fill out the form below and our team will get back to you with a detailed quote within 24 hours.</p>
            </div>

            <div class="quote-form-container" data-animate>
                <form action="{{ route('quote.store') }}" method="POST" class="quote-form">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name <span class="required">*</span></label>
                            <div class="input-with-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                            </div>
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <div class="input-with-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                                <input type="text" id="company" name="company" value="{{ old('company') }}">
                            </div>
                            @error('company')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address <span class="required">*</span></label>
                            <div class="input-with-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number <span class="required">*</span></label>
                            <div class="input-with-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required>
                            </div>
                            @error('phone')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product">Product/Service <span class="required">*</span></label>
                        <div class="input-with-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                            </svg>
                            <input type="text" id="product" name="product" value="{{ old('product', $product) }}" placeholder="e.g., Agricultural Lime, Supreme Clean Bleach, Mining Chemicals" required>
                        </div>
                        @error('product')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="quantity">Quantity Required</label>
                        <div class="input-with-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"/>
                            </svg>
                            <input type="text" id="quantity" name="quantity" value="{{ old('quantity') }}" placeholder="e.g., 100kg, 50 liters, 10 bags">
                        </div>
                        @error('quantity')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Additional Details</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell us more about your requirements, delivery location, timeline, or any special requests...">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn-submit-quote">
                        <span>Submit Quote Request</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Contact Info Sidebar -->
        <div class="quote-contact-sidebar" data-animate>
            <div class="sidebar-card">
                <h3>Need Help?</h3>
                <p>Our team is here to assist you with any questions.</p>
                
                <div class="contact-method">
                    <div class="contact-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div>
                        <h4>Call Us</h4>
                        <p>+263 54 221 509</p>
                    </div>
                </div>

                <div class="contact-method">
                    <div class="contact-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h4>Email Us</h4>
                        <p>info@jmktrading.co.zw</p>
                    </div>
                </div>

                <div class="contact-method">
                    <div class="contact-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h4>Business Hours</h4>
                        <p>Mon-Fri: 8:00 AM - 5:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Quote Request Page Styles */
.quote-hero {
    position: relative;
    height: 40vh;
    min-height: 350px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.quote-hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
}

/* .quote-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.94) 0%, rgba(21, 122, 56, 0.94) 100%);
} */

.quote-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 800px;
    padding: 0 20px;
}

.quote-hero-title {
    font-size: 48px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 15px;
}

.quote-hero-subtitle {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.95);
}

.quote-form-section {
    padding: 100px 0;
    background: #f8f9fa;
}

.quote-form-wrapper {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 60px;
    max-width: 1400px;
    margin: 0 auto;
}

.quote-form-intro {
    grid-column: 1 / -1;
}

.quote-form-intro h2 {
    font-size: 38px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 25px;
}

.title-underline-left {
    width: 80px;
    height: 4px;
    background: #1a9847;
    margin-bottom: 20px;
}

.quote-form-intro p {
    font-size: 17px;
    color: #666;
    line-height: 1.7;
}

.quote-form-container {
    background: #ffffff;
    padding: 50px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.quote-form .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
    margin-bottom: 25px;
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    font-size: 15px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.required {
    color: #e74c3c;
}

.input-with-icon {
    position: relative;
}

.input-with-icon svg {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    color: #1a9847;
}

.input-with-icon input {
    width: 100%;
    padding: 14px 15px 14px 45px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 15px;
    transition: all 0.3s ease;
}

.input-with-icon input:focus {
    outline: none;
    border-color: #1a9847;
}

textarea {
    width: 100%;
    padding: 14px 15px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 15px;
    font-family: inherit;
    resize: vertical;
    transition: all 0.3s ease;
}

textarea:focus {
    outline: none;
    border-color: #1a9847;
}

.error-message {
    display: block;
    color: #e74c3c;
    font-size: 13px;
    margin-top: 5px;
}

.btn-submit-quote {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    width: 100%;
    padding: 18px;
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

.btn-submit-quote:hover {
    background: #157a38;
    gap: 18px;
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(26, 152, 71, 0.3);
}

.btn-submit-quote svg {
    width: 20px;
    height: 20px;
}

.quote-contact-sidebar {
    align-self: start;
    position: sticky;
    top: 100px;
}

.sidebar-card {
    background: #ffffff;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.sidebar-card h3 {
    font-size: 24px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 10px;
}

.sidebar-card > p {
    font-size: 15px;
    color: #666;
    margin-bottom: 30px;
}

.contact-method {
    display: flex;
    gap: 15px;
    padding: 20px 0;
    border-bottom: 1px solid #f0f0f0;
}

.contact-method:last-child {
    border-bottom: none;
}

.contact-icon {
    width: 48px;
    height: 48px;
    min-width: 48px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1a9847;
}

.contact-icon svg {
    width: 24px;
    height: 24px;
}

.contact-method h4 {
    font-size: 16px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 5px;
}

.contact-method p {
    font-size: 14px;
    color: #666;
}

[data-animate] {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

[data-animate].animated {
    opacity: 1;
    transform: translateY(0);
}

@media (max-width: 1024px) {
    .quote-form-wrapper {
        grid-template-columns: 1fr;
    }

    .quote-contact-sidebar {
        position: static;
    }
}

@media (max-width: 768px) {
    .quote-form-container {
        padding: 30px 20px;
    }

    .quote-form .form-row {
        grid-template-columns: 1fr;
    }

    .quote-hero-title {
        font-size: 36px;
    }
}
</style>

<script>
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
</script>

@endsection
