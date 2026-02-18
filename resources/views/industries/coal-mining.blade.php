@extends('layouts.app')

@section('content')

<!-- COAL MINING HERO -->
<section class="industry-detail-hero coal-hero">
    <div class="industry-detail-background" style="background-image: url('{{ asset('images/pic03.jpg') }}')"></div>
    <div class="industry-detail-overlay"></div>
    <div class="industry-detail-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <a href="/industries">Industries</a>
            <span class="separator">/</span>
            <span>Coal Mining</span>
        </div>
        <div class="industry-icon-large" data-animate>
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
        </div>
        <h1 class="industry-detail-title" data-animate>Coal Mining Solutions</h1>
        <p class="industry-detail-subtitle" data-animate>Safety and compliance products for underground and surface coal mining operations</p>
    </div>
    <div class="scroll-indicator-industry">
        <span>Explore Safety Solutions</span>
        <div class="scroll-arrow-industry"></div>
    </div>
</section>

<!-- OVERVIEW -->
<section class="industry-overview">
    <div class="full-width-container">
        <div class="overview-content-grid">
            <div class="overview-text" data-animate>
                <div class="section-label-green">Coal Mining Safety</div>
                <h2>Safety-First Coal Mining Solutions</h2>
                <div class="title-underline-left"></div>
                <p class="lead">JMK Trading specializes in providing dust suppression, explosion control, and safety products for coal mining operations throughout Zimbabwe, ensuring compliance with mining regulations and protecting worker safety.</p>
                <p>Coal mining presents unique safety challenges, particularly regarding dust control and explosion prevention. Our products meet stringent safety standards and are specifically designed for the demanding conditions of underground and surface coal mining operations.</p>
                <div class="overview-stats">
                    <div class="stat-item">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Coal Mines Served</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Compliance Rate</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">Zero</span>
                        <span class="stat-label">Safety Incidents</span>
                    </div>
                </div>
            </div>
            <div class="overview-image" data-animate>
                <div class="overview-image-wrapper">
                    <img src="{{ asset('images/pic02.jpg') }}" alt="Coal Mining Operations">
                    <div class="image-badge-overlay">
                        <span class="badge-text">Safety First</span>
                        <span class="badge-number">100% Safe</span>
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
            <h2 class="section-title-dark">Key Products for Coal Mining Safety</h2>
            <div class="title-underline-center"></div>
            <p class="section-description">Essential products for dust control and explosion prevention</p>
        </div>

        <div class="products-showcase">
            <div class="product-showcase-card" data-animate>
                <div class="product-showcase-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <h3>Stone Dust (Fiery Mines)</h3>
                <p class="product-desc">Premium quality limestone dust for explosion control in underground coal mines. Meets all regulatory requirements for inert dust applications.</p>
                <ul class="product-benefits">
                    <li>Explosion Prevention</li>
                    <li>Regulatory Compliant</li>
                    <li>High Calcium Content</li>
                    <li>Consistent Particle Size</li>
                </ul>
                <div class="product-specs">
                    <span class="spec-badge">CaCO₃: 95%+</span>
                    <span class="spec-badge">Approved Grade</span>
                </div>
            </div>

            <div class="product-showcase-card" data-animate>
                <div class="product-showcase-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                    </svg>
                </div>
                <h3>Dust Suppressants</h3>
                <p class="product-desc">Advanced dust suppression chemicals for surface mining operations, haul roads, and coal stockpiles.</p>
                <ul class="product-benefits">
                    <li>Airborne Dust Control</li>
                    <li>Long-lasting Protection</li>
                    <li>Environmentally Safe</li>
                    <li>Cost Effective</li>
                </ul>
                <div class="product-specs">
                    <span class="spec-badge">Biodegradable</span>
                    <span class="spec-badge">Water-based</span>
                </div>
            </div>

            <div class="product-showcase-card" data-animate>
                <div class="product-showcase-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3>Explosion Control Products</h3>
                <p class="product-desc">Complete range of products for preventing and controlling coal dust explosions in underground workings.</p>
                <ul class="product-benefits">
                    <li>Methane Monitoring Support</li>
                    <li>Ventilation Enhancement</li>
                    <li>Barrier Systems</li>
                    <li>Emergency Response</li>
                </ul>
                <div class="product-specs">
                    <span class="spec-badge">Safety Certified</span>
                    <span class="spec-badge">Tested Performance</span>
                </div>
            </div>

            <div class="product-showcase-card" data-animate>
                <div class="product-showcase-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h3>Safety Chemicals</h3>
                <p class="product-desc">Industrial chemicals for coal processing, water treatment, and environmental protection in mining operations.</p>
                <ul class="product-benefits">
                    <li>Water Treatment</li>
                    <li>Coal Processing Aids</li>
                    <li>Environmental Protection</li>
                    <li>Quality Assurance</li>
                </ul>
                <div class="product-specs">
                    <span class="spec-badge">Industrial Grade</span>
                    <span class="spec-badge">Multiple Applications</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- APPLICATIONS -->
<section class="applications-detailed">
    <div class="full-width-container">
        <div class="applications-header" data-animate>
            <div class="section-label-green">Safety Applications</div>
            <h2 class="applications-title">Safety Applications in Coal Mining</h2>
            <div class="title-underline-center"></div>
        </div>
        
        <div class="applications-timeline">
            <div class="timeline-item" data-animate>
                <div class="timeline-number">01</div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>
                        </svg>
                    </div>
                    <h3>Underground Dust Control</h3>
                    <p>Stone dust application in mine roadways and working faces to prevent coal dust explosions and improve air quality.</p>
                </div>
            </div>

            <div class="timeline-item" data-animate>
                <div class="timeline-number">02</div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                        </svg>
                    </div>
                    <h3>Surface Dust Suppression</h3>
                    <p>Chemical suppressants for haul roads, stockpiles, and loading areas to minimize airborne dust and comply with environmental regulations.</p>
                </div>
            </div>

            <div class="timeline-item" data-animate>
                <div class="timeline-number">03</div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3>Ventilation Support</h3>
                    <p>Products and techniques to enhance ventilation effectiveness and maintain safe working environments.</p>
                </div>
            </div>

            <div class="timeline-item" data-animate>
                <div class="timeline-number">04</div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <h3>Water Treatment</h3>
                    <p>Chemical treatment for mine water discharge, ensuring environmental compliance and water quality standards.</p>
                </div>
            </div>

            <div class="timeline-item" data-animate>
                <div class="timeline-number">05</div>
                <div class="timeline-content">
                    <div class="timeline-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3>Coal Processing</h3>
                    <p>Processing chemicals for coal washing, flotation, and beneficiation operations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COMPLIANCE SECTION -->
<section class="compliance-section">
    <div class="full-width-container">
        <div class="compliance-content" data-animate>
            <div class="compliance-header">
                <div class="compliance-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <div>
                    <div class="section-label-green">Compliance</div>
                    <h2>Regulatory Compliance & Safety Standards</h2>
                </div>
            </div>
            <p class="compliance-intro">JMK Trading's coal mining products meet all Zimbabwean mining safety regulations and international standards. We ensure full compliance with:</p>
            <div class="compliance-grid">
                <div class="compliance-item">
                    <div class="compliance-item-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4>Mines and Minerals Act</h4>
                    <p>Full compliance with Zimbabwe's mining regulations</p>
                </div>
                <div class="compliance-item">
                    <div class="compliance-item-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4>Dust Control Standards</h4>
                    <p>Meeting prescribed limits for airborne dust exposure</p>
                </div>
                <div class="compliance-item">
                    <div class="compliance-item-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4>Explosion Prevention</h4>
                    <p>Adherence to stone dust application requirements</p>
                </div>
                <div class="compliance-item">
                    <div class="compliance-item-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4>Environmental Protection</h4>
                    <p>EMA compliance for dust and water management</p>
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
                    <h2>Dust Control Implementation</h2>
                </div>
            </div>
            <div class="case-study-content">
                <p class="case-study-intro">A large underground coal mine in Zimbabwe implemented JMK Trading's comprehensive dust control program to improve safety and achieve regulatory compliance.</p>
                <div class="case-study-results">
                    <div class="result-item">
                        <span class="result-value">75%</span>
                        <span class="result-label">Dust Reduction</span>
                    </div>
                    <div class="result-item">
                        <span class="result-value">100%</span>
                        <span class="result-label">Compliance Achieved</span>
                    </div>
                    <div class="result-item">
                        <span class="result-value">Zero</span>
                        <span class="result-label">Safety Violations</span>
                    </div>
                </div>
                <p class="case-study-quote">"JMK Trading's stone dust and technical support have been critical in maintaining our safety standards. Their products consistently meet quality specifications, and their team provides excellent technical guidance."</p>
                <div class="case-study-source">— Safety Manager, Major Coal Mine</div>
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
                <h2>Safety & Compliance Support</h2>
                <div class="title-underline-left"></div>
                <p class="support-intro">Our safety specialists provide comprehensive support to help you maintain the highest safety standards in your coal mining operations.</p>
                <div class="support-services">
                    <div class="support-service-item">
                        <div class="service-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Safety Audits</h4>
                            <p>Comprehensive dust control and safety system assessments</p>
                        </div>
                    </div>
                    <div class="support-service-item">
                        <div class="service-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Safety Training</h4>
                            <p>Training programs on dust control and explosion prevention</p>
                        </div>
                    </div>
                    <div class="support-service-item">
                        <div class="service-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Compliance Documentation</h4>
                            <p>Support with regulatory reporting and compliance records</p>
                        </div>
                    </div>
                    <div class="support-service-item">
                        <div class="service-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Emergency Response</h4>
                            <p>24/7 support for urgent safety matters</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="support-image" data-animate>
                <div class="support-cta-card">
                    <h3>Ensure Mine Safety & Compliance</h3>
                    <p>Consult with our coal mining safety experts</p>
                    <a href="/contact" class="btn-support-cta">
                        <span>Contact Safety Team</span>
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
                <h4>Dust Suppression Compliance</h4>
                <p>Regulatory guide for Zimbabwe</p>
            </a>
            <a href="/products/catalogue" class="resource-card" data-animate>
                <div class="resource-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h4>Safety Products Catalogue</h4>
                <p>Download specifications</p>
            </a>
            <a href="/request-quote" class="resource-card" data-animate>
                <div class="resource-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <h4>Request Quote</h4>
                <p>Get safety product pricing</p>
            </a>
        </div>
    </div>
</section>

<style>
/* ===== COMPLETE COAL MINING PAGE STYLES ===== */

/* .coal-hero .industry-detail-overlay {
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.94) 0%, rgba(21, 122, 56, 0.94) 100%);
} */

/* Hero Section */
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

/* Overview Section - ALL STYLES */
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

/* Products Section - ALL STYLES */
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

/* Applications Section - ALL STYLES */
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

/* Compliance Section - ALL STYLES */
.compliance-section {
    padding: 120px 0;
    background: #f8f9fa;
}

.compliance-content {
    max-width: 1100px;
    margin: 0 auto;
}

.compliance-header {
    display: flex;
    align-items: center;
    gap: 25px;
    margin-bottom: 30px;
}

.compliance-icon-box {
    width: 80px;
    height: 80px;
    min-width: 80px;
    background: #1a9847;
    color: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.compliance-icon-box svg {
    width: 40px;
    height: 40px;
}

.compliance-header h2 {
    font-size: 38px;
    font-weight: 800;
    color: #1c1c1e;
}

.compliance-intro {
    font-size: 18px;
    line-height: 1.8;
    color: #666;
    margin-bottom: 50px;
}

.compliance-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.compliance-item {
    background: #ffffff;
    padding: 35px 30px;
    border-radius: 12px;
    border-left: 4px solid #1a9847;
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.compliance-item-icon {
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

.compliance-item-icon svg {
    width: 24px;
    height: 24px;
}

.compliance-item h4 {
    font-size: 20px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 10px;
}

.compliance-item p {
    font-size: 15px;
    color: #666;
    line-height: 1.6;
}

/* Case Study Section - ALL STYLES */
.case-study-section {
    padding: 120px 0;
    background: #ffffff;
}

.case-study-card {
    background: #f8f9fa;
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
    background: #ffffff;
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
    background: #ffffff;
    border-left: 4px solid #1a9847;
    margin-bottom: 15px;
}

.case-study-source {
    font-size: 14px;
    color: #999;
    font-weight: 600;
    text-align: right;
}

/* Technical Support Section - ALL STYLES */
.technical-support-section {
    padding: 120px 0;
    background: #f8f9fa;
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

/* Resources Section - ALL STYLES */
.related-resources {
    padding: 120px 0;
    background: #ffffff;
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
    background: #f8f9fa;
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
    background: #ffffff;
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

    .compliance-grid {
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
