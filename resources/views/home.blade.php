@extends('layouts.app')

@section('content')

<!-- HERO SECTION - Already Perfect, Keep As Is -->
<section class="hero" id="heroSection">
    <div class="hero-overlay"></div>
    <div class="hero-parallax" style="background-image: url('{{ asset('images/pic01.jpg') }}')"></div>
    
    <div class="hero-content" id="heroContent">
        <div class="hero-badge">Est. 2014</div>
        <h1 class="hero-title">Zimbabwe's Trusted Mining & Industrial Chemical Partner</h1>
        <p class="hero-subtitle">Strategically located in Gweru. Supplying performance-driven chemical solutions.</p>
        <div class="hero-cta-group">
            <a href="/request-quote" class="btn-primary">Request a Quote</a>
            <a href="/contact" class="btn-secondary-outline">Schedule Product Trial</a>
        </div>
        <div class="hero-scroll-indicator">
            <span>Scroll to explore</span>
            <div class="scroll-arrow"></div>
        </div>
    </div>

    <div class="hero-stats">
        <div class="stat-item">
            <span class="hero-stat-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M12 7v6l4 2"></path>
                </svg>
            </span>
            <span class="stat-number" data-count="12">0</span>
            <span class="stat-label">Years Experience</span>
        </div>
        <div class="stat-item">
            <span class="hero-stat-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                    <circle cx="8.5" cy="7" r="3.5"></circle>
                    <path d="M20 8a3 3 0 0 1 0 6"></path>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                </svg>
            </span>
            <span class="stat-number" data-count="500">0</span>
            <span class="stat-label">Happy Clients</span>
        </div>
        <div class="stat-item">
            <span class="hero-stat-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                    <path d="M3 7l9-4 9 4-9 4-9-4z"></path>
                    <path d="M3 7v10l9 4 9-4V7"></path>
                    <path d="M12 11v10"></path>
                </svg>
            </span>
            <span class="stat-number" data-count="1000">0</span>
            <span class="stat-label">Products</span>
        </div>
        <div class="stat-item">
            <span class="hero-stat-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                    <path d="M4 12a8 8 0 0 1 16 0"></path>
                    <rect x="2" y="12" width="4" height="7" rx="2"></rect>
                    <rect x="18" y="12" width="4" height="7" rx="2"></rect>
                    <path d="M12 20v1a2 2 0 0 1-2 2H8"></path>
                </svg>
            </span>
            <span class="stat-number" data-count="24">0</span>
            <span class="stat-label">Hour Support</span>
        </div>
    </div>
</section>

<!-- COMPANY OVERVIEW SECTION -->
<section class="company-overview" data-animate>
    <div class="full-width-container">
        <div class="overview-content">
            <div class="overview-left">
                <div class="section-label">About JMK Trading</div>
                <h2 class="section-title">Zimbabwe's Leading Chemical Solutions Provider</h2>
                <div class="title-underline"></div>
                <p class="overview-text">
                    JMK Trading (Pvt) Ltd was incorporated in 2014 under the Zimbabwe Companies Act.
                    We have established ourselves as Zimbabwe's premier supplier of mining, industrial,
                    and agricultural chemical solutions.
                </p>
                <p class="overview-text">
                    Strategically located in Gweru, we serve businesses across Zimbabwe with a comprehensive
                    portfolio of high-quality products, technical expertise, and unmatched customer support.
                </p>
                <div class="overview-highlights">
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>ISO Certified</h4>
                            <p>Quality management systems</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Fast Delivery</h4>
                            <p>Nationwide distribution network</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <div class="highlight-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Expert Team</h4>
                            <p>Technical training & support</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overview-right">
                <div class="overview-image" style="background-image: url('{{ asset('images/pic02.jpg') }}')">
                    <div class="image-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TWO CORE DIVISIONS SECTION -->
<section class="core-divisions">
    <div class="full-width-container">
        <div class="section-header-center">
            <div class="section-label">Our Divisions</div>
            <h2 class="section-title">Two Core Business Divisions</h2>
            <div class="title-underline-center"></div>
            <p class="section-description">Comprehensive solutions for mining, industrial, and commercial applications</p>
        </div>

        <div class="divisions-grid">
            <div class="division-card-large" data-animate>
                <div class="division-image" style="background-image: url('{{ asset('images/pic03.jpg') }}')">
                    <div class="division-overlay"></div>
                    <div class="division-badge">Division 01</div>
                </div>
                <div class="division-content">
                    <h3>Mining & Industrial</h3>
                    <p>Specialized chemical solutions for mining operations and industrial applications. From explosives and blasting agents to water treatment and processing chemicals.</p>
                    <ul class="division-features-list">
                        <li><span class="check-icon">✓</span> Mining Chemicals & Explosives</li>
                        <li><span class="check-icon">✓</span> Water Treatment Solutions</li>
                        <li><span class="check-icon">✓</span> Industrial Processing Chemicals</li>
                        <li><span class="check-icon">✓</span> Technical Training & Support</li>
                    </ul>
                    <a href="/mining-industrial" class="btn-division">Explore Division <span>→</span></a>
                </div>
            </div>

            <div class="division-card-large" data-animate>
                <div class="division-image" style="background-image: url('{{ asset('images/chem03.jpg') }}')">
                    <div class="division-overlay"></div>
                    <div class="division-badge">Division 02</div>
                </div>
                <div class="division-content">
                    <h3>Supreme Clean</h3>
                    <p>Professional cleaning and hygiene solutions for industrial, commercial, and institutional applications. Quality products that meet international standards.</p>
                    <ul class="division-features-list">
                        <li><span class="check-icon">✓</span> Industrial Cleaning Solutions</li>
                        <li><span class="check-icon">✓</span> Sanitization Products</li>
                        <li><span class="check-icon">✓</span> Personal Hygiene Range</li>
                        <li><span class="check-icon">✓</span> Custom Formulations</li>
                    </ul>
                    <a href="/supreme-clean" class="btn-division">Explore Division <span>→</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KEY PRODUCT CATEGORIES SNAPSHOT -->
<section class="product-categories">
    <div class="full-width-container">
        <div class="section-header-center">
            <div class="section-label">Product Range</div>
            <h2 class="section-title">Key Product Categories</h2>
            <div class="title-underline-center"></div>
            <p class="section-description">Comprehensive chemical solutions across multiple industries</p>
        </div>

        <div class="categories-grid">
            <div class="category-card" data-animate>
                <div class="category-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                </div>
                <h4>Mining Chemicals</h4>
                <p>Explosives, reagents, and processing chemicals for optimal mining operations</p>
                <a href="/catalogue#mining" class="category-link">View Products →</a>
            </div>

            <div class="category-card" data-animate>
                <div class="category-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h4>Water Treatment</h4>
                <p>Complete water treatment solutions for industrial and municipal applications</p>
                <a href="/catalogue#water-treatment" class="category-link">View Products →</a>
            </div>

            <div class="category-card" data-animate>
                <div class="category-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                </div>
                <h4>Industrial Cleaning</h4>
                <p>Heavy-duty cleaning and degreasing solutions for industrial facilities</p>
                <a href="/catalogue#cleaning" class="category-link">View Products →</a>
            </div>

            <div class="category-card" data-animate>
                <div class="category-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h4>Agricultural Solutions</h4>
                <p>Fertilizers, crop protection, and soil amendment products</p>
                <a href="/catalogue#agriculture" class="category-link">View Products →</a>
            </div>

            <div class="category-card" data-animate>
                <div class="category-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                    </svg>
                </div>
                <h4>Laboratory Chemicals</h4>
                <p>High-purity analytical and laboratory grade chemicals</p>
                <a href="/catalogue#laboratory" class="category-link">View Products →</a>
            </div>

            <div class="category-card" data-animate>
                <div class="category-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                    </svg>
                </div>
                <h4>Custom Solutions</h4>
                <p>Tailored chemical formulations for specific industrial applications</p>
                <a href="/contact" class="category-link">Contact Us →</a>
            </div>
        </div>
    </div>
</section>

<!-- WHY JMK TRADING SECTION -->
<section class="why-jmk">
    <div class="why-jmk-background" style="background-image: url('{{ asset('images/pic02.jpg') }}')"></div>
    <div class="why-jmk-overlay"></div>
    <div class="full-width-container">
        <div class="why-jmk-content">
            <div class="section-label-white">Why Choose Us</div>
            <h2 class="section-title-white">Why JMK Trading?</h2>
            <div class="title-underline-white"></div>
            <p class="why-jmk-description">
                We combine technical expertise, strategic location, and commitment to excellence
            </p>

            <div class="why-features-grid">
                <div class="why-feature" data-animate>
                    <div class="why-number">01</div>
                    <div class="why-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3>Speed & Reliability</h3>
                    <p>Fast delivery across Zimbabwe with efficient logistics and inventory management ensuring products are always in stock when you need them.</p>
                </div>

                <div class="why-feature" data-animate>
                    <div class="why-number">02</div>
                    <div class="why-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3>Product Trials</h3>
                    <p>Free product trials and testing to ensure optimal performance before full-scale implementation. We stand behind our products.</p>
                </div>

                <div class="why-feature" data-animate>
                    <div class="why-number">03</div>
                    <div class="why-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3>Technical Training</h3>
                    <p>Comprehensive technical training and ongoing support for your team. We ensure proper handling, application, and safety protocols.</p>
                </div>

                <div class="why-feature" data-animate>
                    <div class="why-number">04</div>
                    <div class="why-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3>Central Location</h3>
                    <p>Strategically located in Gweru, providing easy access to all major mining and industrial hubs across Zimbabwe with optimized delivery routes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TRUSTED BY / REFERENCES PREVIEW -->
<section class="trusted-by">
    <div class="full-width-container">
        <div class="section-header-center">
            <div class="section-label">Our Clients</div>
            <h2 class="section-title">Trusted By Industry Leaders</h2>
            <div class="title-underline-center"></div>
            <p class="section-description">Serving Zimbabwe's leading mining, industrial, and commercial organizations</p>
        </div>

        <div class="trusted-stats">
            <div class="trusted-stat" data-animate>
                <div class="stat-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3>500+</h3>
                <p>Active Clients</p>
            </div>

            <div class="trusted-stat" data-animate>
                <div class="stat-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <h3>1000+</h3>
                <p>Products Delivered</p>
            </div>

            <div class="trusted-stat" data-animate>
                <div class="stat-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3>12+</h3>
                <p>Years Experience</p>
            </div>

            <div class="trusted-stat" data-animate>
                <div class="stat-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3>98%</h3>
                <p>Client Satisfaction</p>
            </div>
        </div>

        <div class="client-sectors">
            <h3 class="sectors-title">Serving Key Sectors</h3>
            <div class="sectors-grid">
                <div class="sector-badge">Mining Operations</div>
                <div class="sector-badge">Manufacturing</div>
                <div class="sector-badge">Agriculture</div>
                <div class="sector-badge">Water Treatment</div>
                <div class="sector-badge">Food Processing</div>
                <div class="sector-badge">Hospitality</div>
                <div class="sector-badge">Healthcare</div>
                <div class="sector-badge">Education</div>
            </div>
        </div>
    </div>
</section>

<!-- FINAL CALL TO ACTION -->
<section class="final-cta">
    <div class="cta-background" style="background-image: url('{{ asset('images/pic04.jpg') }}')"></div>
    <div class="cta-overlay-gradient"></div>
    <div class="full-width-container">
        <div class="final-cta-content">
            <h2>Ready to Get Started?</h2>
            <p>Request a quote today or schedule a product trial. Our team is ready to provide you with the best chemical solutions for your business needs.</p>
            <div class="cta-buttons">
                <a href="/request-quote" class="btn-cta-primary">
                    <span>Request Your Quote</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="/contact" class="btn-cta-secondary">
                    <span>Schedule a Trial</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </a>
            </div>
            <div class="cta-contact-info">
                <div class="cta-contact-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>+263 54 221 234</span>
                </div>
                <div class="cta-contact-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span>buying@jmktrading.co.zw</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // ===== PARALLAX SCROLLING EFFECT =====
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelector('.hero-parallax');
        const heroContent = document.getElementById('heroContent');
        const heroStats = document.querySelector('.hero-stats');
        
        if (parallax) {
            parallax.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
        
        if (heroContent) {
            const opacity = 1 - (scrolled / 600);
            const translateY = scrolled * 0.3;
            heroContent.style.opacity = opacity;
            heroContent.style.transform = `translateY(${translateY}px)`;
        }
        
        if (heroStats) {
            const statsOpacity = 1 - (scrolled / 400);
            heroStats.style.opacity = statsOpacity;
        }
    });

    // ===== COUNTER ANIMATION =====
    function animateCounter(element, target, duration = 2000) {
        const start = 0;
        const increment = target / (duration / 16);
        let current = start;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target + (target < 100 ? '+' : '+');
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current);
            }
        }, 16);
    }

    // ===== INTERSECTION OBSERVER FOR ANIMATIONS =====
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -100px 0px'
    };

    const animateObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                animateObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all elements with data-animate
    document.querySelectorAll('[data-animate]').forEach(el => {
        animateObserver.observe(el);
    });

    // Counter animation for hero stats
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = document.querySelectorAll('.stat-number');
                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-count'));
                    animateCounter(counter, target);
                });
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const heroSection = document.getElementById('heroSection');
    if (heroSection) {
        counterObserver.observe(heroSection);
    }

    // ===== SCROLL INDICATOR FADE OUT =====
    window.addEventListener('scroll', function() {
        const scrollIndicator = document.querySelector('.hero-scroll-indicator');
        if (scrollIndicator) {
            const opacity = 1 - (window.pageYOffset / 300);
            scrollIndicator.style.opacity = Math.max(0, opacity);
        }
    });
</script>

@endsection
