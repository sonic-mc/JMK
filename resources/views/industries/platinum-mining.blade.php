@extends('layouts.app')

@section('content')

<!-- PLATINUM MINING HERO -->
<section class="industry-detail-hero platinum-hero">
    <div class="industry-detail-background" style="background-image: url('{{ asset('images/pic05.jpg') }}')"></div>
    <div class="industry-detail-overlay"></div>
    <div class="industry-detail-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <a href="/industries">Industries</a>
            <span class="separator">/</span>
            <span>Platinum Mining</span>
        </div>
        <div class="industry-icon-large" data-animate>
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
            </svg>
        </div>
        <h1 class="industry-detail-title" data-animate>Platinum Mining Solutions</h1>
        <p class="industry-detail-subtitle" data-animate>Specialized chemicals for platinum group metals extraction and processing</p>
    </div>
    <div class="scroll-indicator-industry">
        <span>Explore Solutions</span>
        <div class="scroll-arrow-industry"></div>
    </div>
</section>

<!-- OVERVIEW -->
<section class="industry-overview">
    <div class="full-width-container">
        <div class="overview-content-grid">
            <div class="overview-text" data-animate>
                <div class="section-label-green">PGM Mining Expertise</div>
                <h2>Supporting PGM Operations in Zimbabwe</h2>
                <div class="title-underline-left"></div>
                <p class="lead">JMK Trading provides comprehensive chemical solutions for platinum group metals (PGM) mining operations, supporting efficient extraction and processing of platinum, palladium, rhodium, and other valuable metals.</p>
                <p>Zimbabwe hosts the world's second-largest platinum reserves, and we understand the complex metallurgical processes required for PGM extraction. Our products support flotation, smelting, refining, and environmental management processes critical to platinum mining operations.</p>
                <div class="overview-stats">
                    <div class="stat-item">
                        <span class="stat-number">5+</span>
                        <span class="stat-label">PGM Mines Served</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Quality Assurance</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">12+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                </div>
            </div>
            <div class="overview-image" data-animate>
                <div class="overview-image-wrapper">
                    <img src="{{ asset('images/pic06.jpg') }}" alt="Platinum Mining Operations">
                    <div class="image-badge-overlay">
                        <span class="badge-text">World Class</span>
                        <span class="badge-number">PGM Partner</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KEY PRODUCTS -->
<section class="key-products-section">
    <div class="full-width-container">
        <div class="section-header-center" data-animate>
            <div class="section-label-green">Our Products</div>
            <h2 class="section-title-dark">Key Products for Platinum Mining</h2>
            <div class="title-underline-center"></div>
            <p class="section-description">Specialized chemicals optimized for PGM extraction and processing</p>
        </div>

        <div class="products-showcase">
            <div class="product-showcase-card" data-animate>
                <div class="product-showcase-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                </div>
                <h3>Flotation Reagents</h3>
                <p class="product-desc">Specialized collectors and frothers for optimal PGM recovery in flotation circuits. Tailored for sulphide ore processing.</p>
                <ul class="product-benefits">
                    <li>Enhanced PGM Recovery</li>
                    <li>Selective Flotation</li>
                    <li>Improved Grade Control</li>
                    <li>Reduced Operating Costs</li>
                </ul>
                <div class="product-specs">
                    <span class="spec-badge">Collectors</span>
                    <span class="spec-badge">Frothers</span>
                </div>
            </div>

            <div class="product-showcase-card" data-animate>
                <div class="product-showcase-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                    </svg>
                </div>
                <h3>pH Modifiers</h3>
                <p class="product-desc">Hydrated lime and caustic soda for precise pH control in flotation and leaching processes.</p>
                <ul class="product-benefits">
                    <li>Precise pH Control</li>
                    <li>Process Optimization</li>
                    <li>Consistent Quality</li>
                    <li>Technical Support Included</li>
                </ul>
                <div class="product-specs">
                    <span class="spec-badge">High Purity</span>
                    <span class="spec-badge">Fast Dissolving</span>
                </div>
            </div>

            <div class="product-showcase-card" data-animate>
                <div class="product-showcase-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h3>Processing Chemicals</h3>
                <p class="product-desc">Complete range of flocculants, depressants, and activators for optimal mineral separation and recovery.</p>
                <ul class="product-benefits">
                    <li>Improved Settling</li>
                    <li>Enhanced Selectivity</li>
                    <li>Water Recovery</li>
                    <li>Environmental Compliance</li>
                </ul>
                <div class="product-specs">
                    <span class="spec-badge">Custom Formulations</span>
                    <span class="spec-badge">Bulk Supply</span>
                </div>
            </div>

            <div class="product-showcase-card" data-animate>
                <div class="product-showcase-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3>Filtration Aids</h3>
                <p class="product-desc">Specialized products for dewatering and filtration of PGM concentrates and tailings management.</p>
                <ul class="product-benefits">
                    <li>Faster Dewatering</li>
                    <li>Improved Filter Performance</li>
                    <li>Reduced Moisture Content</li>
                    <li>Cost Effective</li>
                </ul>
                <div class="product-specs">
                    <span class="spec-badge">High Efficiency</span>
                    <span class="spec-badge">Multiple Grades</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- APPLICATIONS -->
<section class="applications-detailed">
    <div class="full-width-container">
        <div class="applications-header" data-animate>
            <div class="section-label-green">Process Applications</div>
            <h2 class="applications-title">Applications in PGM Processing</h2>
            <div class="title-underline-center"></div>
        </div>
        
        <div class="applications-timeline">
            <div class="timeline-item" data-animate>
                <div class="timeline-number">01</div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3>Crushing & Milling</h3>
                    <p>Grinding aids and water treatment chemicals for ore preparation and size reduction stages.</p>
                </div>
            </div>

            <div class="timeline-item" data-animate>
                <div class="timeline-number">02</div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>
                    <h3>Flotation Process</h3>
                    <p>Collectors, frothers, and pH modifiers for selective flotation of sulphide minerals containing PGMs.</p>
                </div>
            </div>

            <div class="timeline-item" data-animate>
                <div class="timeline-number">03</div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                    </div>
                    <h3>Concentrate Dewatering</h3>
                    <p>Flocculants and filtration aids for efficient moisture removal from PGM concentrates.</p>
                </div>
            </div>

            <div class="timeline-item" data-animate>
                <div class="timeline-number">04</div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3>Smelting Support</h3>
                    <p>Fluxing agents and additives for pyrometallurgical processing of PGM concentrates.</p>
                </div>
            </div>

            <div class="timeline-item" data-animate>
                <div class="timeline-number">05</div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3>Tailings Management</h3>
                    <p>Flocculants and water treatment chemicals for environmental compliance and water recovery.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CASE STUDY -->
<section class="case-study-section">
    <div class="full-width-container">
        <div class="case-study-card" data-animate>
            <div class="case-study-header">
                <div class="case-study-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <div>
                    <div class="section-label-green">Success Story</div>
                    <h2>Flotation Optimization</h2>
                </div>
            </div>
            <div class="case-study-content">
                <p class="case-study-intro">A leading platinum mine in Zimbabwe partnered with JMK Trading to optimize their flotation circuit and improve PGM recovery rates.</p>
                <div class="case-study-results">
                    <div class="result-item">
                        <span class="result-value">8%</span>
                        <span class="result-label">Recovery Increase</span>
                    </div>
                    <div class="result-item">
                        <span class="result-value">18%</span>
                        <span class="result-label">Cost Reduction</span>
                    </div>
                    <div class="result-item">
                        <span class="result-value">95%</span>
                        <span class="result-label">Process Efficiency</span>
                    </div>
                </div>
                <p class="case-study-quote">"JMK Trading's flotation reagents and technical expertise helped us optimize our PGM recovery circuit. Their on-site support and product quality have been exceptional."</p>
                <div class="case-study-source">— Metallurgist, Major Platinum Mine</div>
            </div>
        </div>
    </div>
</section>

<!-- TECHNICAL SUPPORT -->
<section class="technical-support-section">
    <div class="full-width-container">
        <div class="support-grid">
            <div class="support-content" data-animate>
                <div class="section-label-green">Expert Support</div>
                <h2>Technical Support for PGM Operations</h2>
                <div class="title-underline-left"></div>
                <p class="support-intro">Our metallurgical experts provide comprehensive support to ensure optimal performance in your platinum mining operations.</p>
                <div class="support-services">
                    <div class="support-service-item">
                        <div class="service-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Flotation Optimization</h4>
                            <p>Circuit analysis and reagent optimization for improved PGM recovery</p>
                        </div>
                    </div>
                    <div class="support-service-item">
                        <div class="service-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Operator Training</h4>
                            <p>Comprehensive training on reagent dosing and process control</p>
                        </div>
                    </div>
                    <div class="support-service-item">
                        <div class="service-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Product Testing</h4>
                            <p>Free trial programs with performance guarantees</p>
                        </div>
                    </div>
                    <div class="support-service-item">
                        <div class="service-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>24/7 Support Line</h4>
                            <p>Round-the-clock technical assistance for urgent issues</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="support-image" data-animate>
                <div class="support-cta-card">
                    <h3>Optimize Your PGM Recovery</h3>
                    <p>Speak with our platinum mining specialists</p>
                    <a href="/contact" class="btn-support-cta">
                        <span>Contact Technical Team</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <div class="support-contact-info">
                        <div class="contact-item">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>+263 77 669 5368</span>
                        </div>
                        <div class="contact-item">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>tinomuongaj@yahoo.co.uk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Resources -->
<section class="related-resources">
    <div class="full-width-container">
        <div class="resources-header" data-animate>
            <div class="section-label-green">Resources</div>
            <h2 class="resources-title">Related Resources</h2>
            <div class="title-underline-center"></div>
        </div>
        <div class="resources-grid">
            <a href="/blog" class="resource-card" data-animate>
                <div class="resource-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h4>PGM Processing Guide</h4>
                <p>Technical insights and best practices</p>
            </a>
            <a href="/products/catalogue" class="resource-card" data-animate>
                <div class="resource-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h4>Product Catalogue</h4>
                <p>Download full specifications</p>
            </a>
            <a href="/request-quote" class="resource-card" data-animate>
                <div class="resource-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <h4>Request Quote</h4>
                <p>Get customized pricing</p>
            </a>
        </div>
    </div>
</section>

<style>
/* ===== COMPLETE PLATINUM MINING PAGE STYLES ===== */
/* All styles included from gold-mining.blade.php with platinum-specific overlay */

/* .platinum-hero .industry-detail-overlay {
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.94) 0%, rgba(21, 122, 56, 0.94) 100%);
} */

/* Import all other styles from the gold mining page */
.industry-detail-hero {
    position: relative;
    height: 70vh;
    min-height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.industry-detail-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 120%;
    background-size: cover;
    background-position: center;
    will-change: transform;
}

.industry-detail-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.industry-detail-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 900px;
    padding: 0 20px;
}

.hero-breadcrumb {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 30px;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
    text-transform: uppercase;
    letter-spacing: 2px;
}

.hero-breadcrumb a {
    color: #ffffff;
    text-decoration: none;
    transition: all 0.3s ease;
}

.hero-breadcrumb a:hover {
    color: rgba(255, 255, 255, 0.7);
}

.hero-breadcrumb .separator {
    color: rgba(255, 255, 255, 0.5);
}

.industry-icon-large {
    width: 120px;
    height: 120px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    border: 3px solid rgba(255, 255, 255, 0.3);
}

.industry-icon-large svg {
    width: 60px;
    height: 60px;
    color: #ffffff;
}

.industry-detail-title {
    font-size: 62px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 25px;
    text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
}

.industry-detail-subtitle {
    font-size: 22px;
    color: rgba(255, 255, 255, 0.95);
    line-height: 1.6;
}

.scroll-indicator-industry {
    position: absolute;
    bottom: 40px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    color: rgba(255, 255, 255, 0.8);
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.scroll-arrow-industry {
    width: 24px;
    height: 40px;
    border: 2px solid rgba(255, 255, 255, 0.6);
    border-radius: 12px;
    position: relative;
}

.scroll-arrow-industry::before {
    content: '';
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 8px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 2px;
    animation: scrollDown 1.5s infinite;
}

@keyframes scrollDown {
    0%, 100% { opacity: 0; transform: translateX(-50%) translateY(0); }
    50% { opacity: 1; transform: translateX(-50%) translateY(10px); }
}

/* Common Elements */
.section-label-green {
    display: inline-block;
    background: rgba(26, 152, 71, 0.1);
    color: #1a9847;
    padding: 8px 20px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 20px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.section-title-dark {
    font-size: 46px;
    font-weight: 800;
    color: #1c1c1e;
    line-height: 1.2;
    margin-bottom: 20px;
}

.title-underline-left {
    width: 80px;
    height: 4px;
    background: #1a9847;
    margin-bottom: 35px;
}

.title-underline-center {
    width: 80px;
    height: 4px;
    background: #1a9847;
    margin: 20px auto 30px;
}

/* Overview Section */
.industry-overview {
    padding: 120px 0;
    background: #ffffff;
}

.overview-content-grid {
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 80px;
    align-items: center;
}

.overview-text h2 {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 25px;
}

.lead {
    font-size: 20px;
    font-weight: 500;
    line-height: 1.7;
    color: #333;
    margin-bottom: 20px;
}

.overview-text p {
    font-size: 16px;
    line-height: 1.8;
    color: #666;
    margin-bottom: 18px;
}

.overview-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 40px;
}

.stat-item {
    text-align: center;
    padding: 25px;
    background: #f8f9fa;
    border-radius: 12px;
    border-top: 3px solid #1a9847;
}

.stat-number {
    display: block;
    font-size: 42px;
    font-weight: 800;
    color: #1a9847;
    line-height: 1;
    margin-bottom: 8px;
}

.stat-label {
    display: block;
    font-size: 14px;
    color: #666;
    font-weight: 500;
}

.overview-image-wrapper {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.overview-image-wrapper img {
    width: 100%;
    display: block;
    border-radius: 16px;
}

.image-badge-overlay {
    position: absolute;
    top: 30px;
    right: 30px;
    background: rgba(26, 152, 71, 0.95);
    backdrop-filter: blur(10px);
    padding: 20px 30px;
    border-radius: 12px;
    text-align: center;
}

.badge-text {
    display: block;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
    font-weight: 600;
    margin-bottom: 5px;
}

.badge-number {
    display: block;
    font-size: 24px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1;
}

/* Products Section */
.key-products-section {
    padding: 120px 0;
    background: #f8f9fa;
}

.section-header-center {
    text-align: center;
    margin-bottom: 60px;
}

.section-description {
    font-size: 18px;
    color: #666;
    max-width: 700px;
    margin: 0 auto;
}

.products-showcase {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 35px;
}

.product-showcase-card {
    background: #ffffff;
    padding: 40px 35px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
    border-top: 4px solid #1a9847;
}

.product-showcase-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.product-showcase-icon-box {
    width: 80px;
    height: 80px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    color: #1a9847;
    transition: all 0.3s ease;
}

.product-showcase-card:hover .product-showcase-icon-box {
    background: #1a9847;
    color: #ffffff;
    transform: scale(1.1);
}

.product-showcase-icon-box svg {
    width: 40px;
    height: 40px;
}

.product-showcase-card h3 {
    font-size: 24px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 15px;
    text-align: center;
}

.product-desc {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
    margin-bottom: 20px;
    text-align: center;
}

.product-benefits {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
}

.product-benefits li {
    padding: 8px 0;
    padding-left: 25px;
    font-size: 14px;
    color: #555;
    position: relative;
}

.product-benefits li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #1a9847;
    font-weight: 700;
}

.product-specs {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    justify-content: center;
}

.spec-badge {
    padding: 6px 14px;
    background: rgba(26, 152, 71, 0.1);
    color: #1a9847;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
}

/* Applications Section */
.applications-detailed {
    padding: 120px 0;
    background: #ffffff;
}

.applications-header {
    text-align: center;
    margin-bottom: 60px;
}

.applications-title {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
}

.applications-timeline {
    max-width: 900px;
    margin: 0 auto;
}

.timeline-item {
    display: grid;
    grid-template-columns: 80px 1fr;
    gap: 30px;
    margin-bottom: 40px;
    position: relative;
}

.timeline-item::after {
    content: '';
    position: absolute;
    left: 40px;
    top: 80px;
    width: 2px;
    height: calc(100% + 40px);
    background: #e0e0e0;
}

.timeline-item:last-child::after {
    display: none;
}

.timeline-number {
    width: 80px;
    height: 80px;
    background: #1a9847;
    color: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: 800;
    position: relative;
    z-index: 2;
}

.timeline-content {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 12px;
}

.timeline-icon {
    width: 48px;
    height: 48px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1a9847;
    margin-bottom: 15px;
}

.timeline-icon svg {
    width: 24px;
    height: 24px;
}

.timeline-content h3 {
    font-size: 22px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 10px;
}

.timeline-content p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
}

/* Case Study Section */
.case-study-section {
    padding: 120px 0;
    background: #f8f9fa;
}

.case-study-card {
    background: #ffffff;
    padding: 60px 50px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    max-width: 1000px;
    margin: 0 auto;
}

.case-study-header {
    display: flex;
    align-items: center;
    gap: 25px;
    margin-bottom: 30px;
}

.case-study-icon-box {
    width: 80px;
    height: 80px;
    min-width: 80px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1a9847;
}

.case-study-icon-box svg {
    width: 40px;
    height: 40px;
}

.case-study-header h2 {
    font-size: 32px;
    font-weight: 800;
    color: #1c1c1e;
}

.case-study-intro {
    font-size: 18px;
    line-height: 1.8;
    color: #666;
    margin-bottom: 40px;
}

.case-study-results {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-bottom: 40px;
}

.result-item {
    text-align: center;
    padding: 30px;
    background: #f8f9fa;
    border-radius: 12px;
}

.result-value {
    display: block;
    font-size: 48px;
    font-weight: 800;
    color: #1a9847;
    line-height: 1;
    margin-bottom: 10px;
}

.result-label {
    display: block;
    font-size: 14px;
    color: #666;
    font-weight: 500;
}

.case-study-quote {
    font-size: 17px;
    line-height: 1.8;
    color: #555;
    font-style: italic;
    padding: 30px;
    background: #f8f9fa;
    border-left: 4px solid #1a9847;
    margin-bottom: 15px;
}

.case-study-source {
    font-size: 14px;
    color: #999;
    font-weight: 600;
    text-align: right;
}

/* Technical Support Section */
.technical-support-section {
    padding: 120px 0;
    background: #ffffff;
}

.support-grid {
    display: grid;
    grid-template-columns: 1.3fr 1fr;
    gap: 60px;
    align-items: center;
}

.support-content h2 {
    font-size: 38px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 20px;
}

.support-intro {
    font-size: 17px;
    line-height: 1.8;
    color: #666;
    margin-bottom: 40px;
}

.support-services {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.support-service-item {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.service-icon-box {
    width: 56px;
    height: 56px;
    min-width: 56px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1a9847;
}

.service-icon-box svg {
    width: 28px;
    height: 28px;
}

.support-service-item h4 {
    font-size: 18px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 6px;
}

.support-service-item p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
}

.support-cta-card {
    background: linear-gradient(135deg, #1a9847 0%, #157a38 100%);
    padding: 50px 40px;
    border-radius: 16px;
    text-align: center;
}

.support-cta-card h3 {
    font-size: 28px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 15px;
}

.support-cta-card > p {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 30px;
}

.btn-support-cta {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 16px 35px;
    background: #ffffff;
    color: #1a9847;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 15px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 25px;
}

.btn-support-cta:hover {
    background: #f8f9fa;
    transform: translateY(-3px);
}

.btn-support-cta svg {
    width: 20px;
    height: 20px;
}

.support-contact-info {
    display: flex;
    flex-direction: column;
    gap: 12px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.contact-item {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    color: #ffffff;
    font-size: 14px;
}

.contact-item svg {
    width: 18px;
    height: 18px;
}

/* Resources Section */
.related-resources {
    padding: 120px 0;
    background: #f8f9fa;
}

.resources-header {
    text-align: center;
    margin-bottom: 60px;
}

.resources-title {
    font-size: 36px;
    font-weight: 800;
    color: #1c1c1e;
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.resource-card {
    background: #ffffff;
    padding: 35px 30px;
    border-radius: 12px;
    text-align: center;
    text-decoration: none;
    transition: all 0.3s ease;
    border-top: 4px solid #1a9847;
}

.resource-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.resource-icon-box {
    width: 80px;
    height: 80px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    color: #1a9847;
    transition: all 0.3s ease;
}

.resource-card:hover .resource-icon-box {
    background: #1a9847;
    color: #ffffff;
    transform: scale(1.1);
}

.resource-icon-box svg {
    width: 40px;
    height: 40px;
}

.resource-card h4 {
    font-size: 20px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 10px;
}

.resource-card p {
    font-size: 14px;
    color: #666;
}

/* Animations */
[data-animate] {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

[data-animate].animated {
    opacity: 1;
    transform: translateY(0);
}

/* Responsive Design */
@media (max-width: 1200px) {
    .overview-content-grid,
    .support-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .industry-detail-title {
        font-size: 42px;
    }

    .industry-icon-large {
        width: 90px;
        height: 90px;
    }

    .industry-icon-large svg {
        width: 45px;
        height: 45px;
    }

    .overview-stats {
        grid-template-columns: 1fr;
    }

    .products-showcase {
        grid-template-columns: 1fr;
    }

    .case-study-results {
        grid-template-columns: 1fr;
    }

    .timeline-item {
        grid-template-columns: 60px 1fr;
        gap: 20px;
    }

    .timeline-number {
        width: 60px;
        height: 60px;
        font-size: 20px;
    }

    .timeline-item::after {
        left: 30px;
    }

    .case-study-card {
        padding: 40px 25px;
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

// Parallax effect for hero
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const heroBackground = document.querySelector('.industry-detail-background');
    if (heroBackground) {
        heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});
</script>

@endsection
