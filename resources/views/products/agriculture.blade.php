@extends('layouts.app')

@section('content')

<!-- AGRICULTURE HERO -->
<section class="product-detail-hero">
    <div class="product-hero-background" style="background-image: url('{{ asset('images/agric03.jpg') }}')"></div>
    <div class="product-hero-overlay agri-overlay"></div>
    <div class="product-hero-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <a href="/products">Products</a>
            <span class="separator">/</span>
            <span>Agriculture</span>
        </div>
        <h1 class="product-hero-title" data-animate>Agricultural Products</h1>
        <p class="product-hero-subtitle" data-animate>Quality agricultural chemicals and solutions for optimal crop yields and livestock management</p>
        <div class="hero-cta-buttons" data-animate>
            <a href="/request-quote" class="btn-hero-primary">
                <span>Request Quote</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
            </a>
            <a href="/contact" class="btn-hero-secondary">
                <span>Speak to Specialist</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="scroll-indicator-product">
        <span>View Products</span>
        <div class="scroll-arrow-product"></div>
    </div>
</section>

<!-- PRODUCTS SHOWCASE -->
<section class="agri-products-section">
    <div class="full-width-container">
        <div class="agri-intro" data-animate>
            <div class="section-label-green">Agricultural Solutions</div>
            <h2>Supporting Zimbabwe's Agricultural Sector</h2>
            <div class="title-underline-center"></div>
            <p>JMK Trading provides high-quality agricultural products designed to enhance soil quality, improve crop yields, and support livestock health across Zimbabwe's diverse farming landscape.</p>
        </div>

        <div class="agri-products-grid">
            @foreach($products as $product)
            <div class="agri-product-card" data-animate>
                <div class="agri-product-visual">
                    <div class="agri-icon-box">
                        @if(str_contains($product, 'Lime'))
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        @elseif(str_contains($product, 'Chicken'))
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                            </svg>
                        @elseif(str_contains($product, 'Fertilizer'))
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                            </svg>
                        @else
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        @endif
                    </div>
                    <div class="agri-badge">Agricultural Grade</div>
                </div>
                <div class="agri-product-content">
                    <h3>{{ $product }}</h3>
                    <p class="agri-product-desc">
                        @if(str_contains($product, 'Agricultural Lime'))
                            Essential soil amendment for pH correction and calcium supplementation. Improves soil structure and nutrient availability.
                        @elseif(str_contains($product, 'Chicken Grit'))
                            Premium calcium supplement for poultry. Aids digestion and provides essential minerals for egg production.
                        @elseif(str_contains($product, 'Fertilizer'))
                            High-quality fillers for fertilizer manufacturing. Ensures optimal nutrient distribution and product consistency.
                        @elseif(str_contains($product, 'Dolomite'))
                            Dual-action limestone providing both calcium and magnesium for comprehensive soil improvement.
                        @else
                            Quality soil amendment product for improved agricultural productivity.
                        @endif
                    </p>
                    <div class="agri-benefits">
                        <h4>Key Benefits:</h4>
                        <ul>
                            <li>Improves soil quality</li>
                            <li>Enhances nutrient uptake</li>
                            <li>Increases crop yields</li>
                            <li>Suitable for various applications</li>
                        </ul>
                    </div>
                    <div class="agri-applications">
                        <span class="app-tag">Field Crops</span>
                        <span class="app-tag">Livestock</span>
                        <span class="app-tag">Soil Treatment</span>
                    </div>
                    <a href="/request-quote?product={{ urlencode($product) }}" class="agri-quote-btn">
                        <span>Get Quote</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- APPLICATIONS -->
<section class="agri-applications-section">
    <div class="full-width-container">
        <div class="section-header-center" data-animate>
            <div class="section-label-green">Applications</div>
            <h2 class="section-title-dark">Agricultural Applications</h2>
            <div class="title-underline-center"></div>
        </div>

        <div class="agri-apps-grid">
            <div class="agri-app-card" data-animate>
                <div class="app-visual">
                    <div class="app-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
                <h3>Soil Amendment</h3>
                <p>pH correction, calcium supplementation, and soil structure improvement for various crop types.</p>
                <ul class="app-list">
                    <li>Maize & Wheat Fields</li>
                    <li>Tobacco Farms</li>
                    <li>Vegetable Gardens</li>
                    <li>Pasture Lands</li>
                </ul>
            </div>

            <div class="agri-app-card" data-animate>
                <div class="app-visual">
                    <div class="app-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>
                </div>
                <h3>Livestock Nutrition</h3>
                <p>Essential mineral supplements for poultry and livestock health and productivity.</p>
                <ul class="app-list">
                    <li>Poultry Farms</li>
                    <li>Layer Operations</li>
                    <li>Broiler Production</li>
                    <li>Free-range Systems</li>
                </ul>
            </div>

            <div class="agri-app-card" data-animate>
                <div class="app-visual">
                    <div class="app-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                        </svg>
                    </div>
                </div>
                <h3>Fertilizer Manufacturing</h3>
                <p>Quality fillers and components for fertilizer production and blending operations.</p>
                <ul class="app-list">
                    <li>NPK Blending</li>
                    <li>Organic Fertilizers</li>
                    <li>Custom Formulations</li>
                    <li>Slow-release Products</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE SECTION -->
<section class="why-choose-agri">
    <div class="full-width-container">
        <div class="why-choose-content">
            <div class="why-choose-left" data-animate>
                <div class="section-label-green">Our Advantage</div>
                <h2>Why Choose JMK Agricultural Products?</h2>
                <div class="title-underline-left"></div>
                <div class="why-features">
                    <div class="why-feature-item">
                        <div class="why-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Consistent Quality</h4>
                            <p>Rigorous quality control ensures every batch meets agricultural standards</p>
                        </div>
                    </div>
                    <div class="why-feature-item">
                        <div class="why-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Expert Guidance</h4>
                            <p>Technical support for optimal product application and usage</p>
                        </div>
                    </div>
                    <div class="why-feature-item">
                        <div class="why-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Flexible Packaging</h4>
                            <p>Available in various pack sizes from small-scale to commercial farming</p>
                        </div>
                    </div>
                    <div class="why-feature-item">
                        <div class="why-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Nationwide Delivery</h4>
                            <p>Reliable distribution network covering all farming regions</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-choose-right" data-animate>
                <div class="why-stats-card">
                    <div class="why-stat">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Years Serving Farmers</span>
                    </div>
                    <div class="why-stat">
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">Farms Supplied</span>
                    </div>
                    <div class="why-stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Quality Guaranteed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="agri-cta-section">
    <div class="full-width-container">
        <div class="agri-cta-content" data-animate>
            <h2>Ready to Improve Your Farm Productivity?</h2>
            <p>Contact our agricultural specialists for product recommendations and custom solutions</p>
            <div class="agri-cta-buttons">
                <a href="/request-quote" class="btn-agri-primary">
                    <span>Request Agricultural Quote</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </a>
                <a href="/contact" class="btn-agri-secondary">
                    <span>Schedule Farm Visit</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== COMPLETE AGRICULTURE PRODUCTS PAGE STYLES ===== */

/* Hero Section */
.product-detail-hero {
    position: relative;
    height: 60vh;
    min-height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.product-hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 120%;
    background-size: cover;
    background-position: center;
    will-change: transform;
}

.product-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

/* .agri-overlay {
    background: linear-gradient(135deg, rgba(76, 175, 80, 0.94) 0%, rgba(56, 142, 60, 0.94) 100%);
} */

.product-hero-content {
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

.product-hero-title {
    font-size: 56px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 20px;
    text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
}

.product-hero-subtitle {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.95);
    line-height: 1.6;
    margin-bottom: 40px;
}

.hero-cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-hero-primary,
.btn-hero-secondary {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 16px 35px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 15px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-hero-primary {
    background: #ffffff;
    color: #4CAF50;
}

.btn-hero-primary:hover {
    background: #f8f9fa;
    transform: translateY(-3px);
}

.btn-hero-secondary {
    background: transparent;
    color: #ffffff;
    border: 2px solid #ffffff;
}

.btn-hero-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-3px);
}

.btn-hero-primary svg,
.btn-hero-secondary svg {
    width: 20px;
    height: 20px;
}

.scroll-indicator-product {
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

.scroll-arrow-product {
    width: 24px;
    height: 40px;
    border: 2px solid rgba(255, 255, 255, 0.6);
    border-radius: 12px;
    position: relative;
}

.scroll-arrow-product::before {
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

/* Products Section */
.agri-products-section {
    padding: 100px 0;
    background: #f8f9fa;
}

.agri-intro {
    text-align: center;
    max-width: 900px;
    margin: 0 auto 80px;
}

.section-label-green {
    display: inline-block;
    background: rgba(76, 175, 80, 0.1);
    color: #4CAF50;
    padding: 8px 20px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 20px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.agri-intro h2 {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 25px;
}

.title-underline-center {
    width: 80px;
    height: 4px;
    background: #4CAF50;
    margin: 20px auto 30px;
}

.title-underline-left {
    width: 80px;
    height: 4px;
    background: #4CAF50;
    margin-bottom: 35px;
}

.agri-intro p {
    font-size: 18px;
    line-height: 1.8;
    color: #666;
}

.agri-products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 40px;
}

.agri-product-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    transition: all 0.4s ease;
}

.agri-product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.agri-product-visual {
    background: linear-gradient(135deg, #4CAF50 0%, #388E3C 100%);
    padding: 40px;
    text-align: center;
    position: relative;
}

.agri-icon-box {
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    border: 3px solid rgba(255, 255, 255, 0.3);
}

.agri-icon-box svg {
    width: 50px;
    height: 50px;
    color: #ffffff;
}

.agri-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    color: #ffffff;
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.agri-product-content {
    padding: 40px;
}

.agri-product-content h3 {
    font-size: 28px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 15px;
}

.agri-product-desc {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
    margin-bottom: 25px;
}

.agri-benefits {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 20px;
}

.agri-benefits h4 {
    font-size: 16px;
    font-weight: 700;
    color: #333;
    margin-bottom: 12px;
}

.agri-benefits ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.agri-benefits li {
    font-size: 14px;
    color: #555;
    padding: 6px 0;
    padding-left: 25px;
    position: relative;
}

.agri-benefits li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #4CAF50;
    font-weight: 700;
}

.agri-applications {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 25px;
}

.app-tag {
    padding: 8px 16px;
    background: rgba(76, 175, 80, 0.1);
    color: #4CAF50;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    border: 1px solid rgba(76, 175, 80, 0.2);
}

.agri-quote-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    padding: 16px;
    background: #4CAF50;
    color: #ffffff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 15px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.agri-quote-btn:hover {
    background: #388E3C;
    gap: 15px;
    transform: translateX(5px);
}

.agri-quote-btn svg {
    width: 18px;
    height: 18px;
}

/* Applications Section */
.agri-applications-section {
    padding: 100px 0;
    background: #ffffff;
}

.section-title-dark {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
}

.agri-apps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-top: 60px;
}

.agri-app-card {
    background: #f8f9fa;
    padding: 40px;
    border-radius: 16px;
    transition: all 0.4s ease;
    border-top: 4px solid #4CAF50;
}

.agri-app-card:hover {
    background: #ffffff;
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.app-visual {
    margin-bottom: 25px;
}

.app-icon-box {
    width: 80px;
    height: 80px;
    background: rgba(76, 175, 80, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #4CAF50;
    transition: all 0.3s ease;
}

.agri-app-card:hover .app-icon-box {
    background: #4CAF50;
    color: #ffffff;
    transform: scale(1.1);
}

.app-icon-box svg {
    width: 40px;
    height: 40px;
}

.agri-app-card h3 {
    font-size: 24px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 15px;
}

.agri-app-card > p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
    margin-bottom: 20px;
}

.app-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.app-list li {
    padding: 8px 0;
    padding-left: 25px;
    font-size: 14px;
    color: #555;
    position: relative;
}

.app-list li::before {
    content: '→';
    position: absolute;
    left: 0;
    color: #4CAF50;
    font-weight: 700;
}

/* Why Choose Section */
.why-choose-agri {
    padding: 100px 0;
    background: #f8f9fa;
}

.why-choose-content {
    display: grid;
    grid-template-columns: 1.3fr 1fr;
    gap: 80px;
    align-items: center;
}

.why-choose-left h2 {
    font-size: 38px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 30px;
}

.why-features {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.why-feature-item {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.why-icon-box {
    width: 56px;
    height: 56px;
    min-width: 56px;
    background: #4CAF50;
    color: #ffffff;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.why-icon-box svg {
    width: 28px;
    height: 28px;
}

.why-feature-item h4 {
    font-size: 20px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 8px;
}

.why-feature-item p {
    font-size: 15px;
    line-height: 1.6;
    color: #666;
}

.why-stats-card {
    background: #ffffff;
    padding: 50px 40px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.why-stat {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 25px 0;
    border-bottom: 1px solid #f0f0f0;
}

.why-stat:last-child {
    border-bottom: none;
}

.stat-number {
    font-size: 48px;
    font-weight: 800;
    color: #4CAF50;
    line-height: 1;
    margin-bottom: 10px;
}

.stat-label {
    font-size: 16px;
    color: #666;
    font-weight: 500;
}

/* CTA Section */
.agri-cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #4CAF50 0%, #388E3C 100%);
}

.agri-cta-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.agri-cta-content h2 {
    font-size: 42px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 20px;
}

.agri-cta-content p {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 40px;
}

.agri-cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-agri-primary,
.btn-agri-secondary {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 18px 40px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 16px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.btn-agri-primary {
    background: #ffffff;
    color: #4CAF50;
}

.btn-agri-primary:hover {
    background: #f8f9fa;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

.btn-agri-secondary {
    background: transparent;
    color: #ffffff;
    border: 2px solid #ffffff;
}

.btn-agri-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-3px);
}

.btn-agri-primary svg,
.btn-agri-secondary svg {
    width: 20px;
    height: 20px;
}

/* Common Styles */
.section-header-center {
    text-align: center;
    margin-bottom: 60px;
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

/* Responsive */
@media (max-width: 1024px) {
    .why-choose-content {
        grid-template-columns: 1fr;
        gap: 50px;
    }
}

@media (max-width: 768px) {
    .product-hero-title {
        font-size: 40px;
    }

    .agri-products-grid {
        grid-template-columns: 1fr;
    }

    .agri-cta-buttons,
    .hero-cta-buttons {
        flex-direction: column;
    }

    .why-choose-left h2,
    .agri-intro h2 {
        font-size: 32px;
    }

    .agri-apps-grid {
        grid-template-columns: 1fr;
    }

    .product-detail-hero {
        min-height: 450px;
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
    const heroBackground = document.querySelector('.product-hero-background');
    if (heroBackground) {
        heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});
</script>

@endsection
