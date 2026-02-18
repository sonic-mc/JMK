@extends('layouts.app')

@section('content')

<!-- SUPREME CLEAN HERO -->
<section class="product-detail-hero supreme-hero">
    <div class="product-hero-background" style="background-image: url('{{ asset('images/chem05.jpg') }}')"></div>
    <div class="product-hero-overlay supreme-overlay"></div>
    <div class="product-hero-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <a href="/products">Products</a>
            <span class="separator">/</span>
            <span>Supreme Clean</span>
        </div>
        <div class="supreme-logo" data-animate>
            <div class="supreme-logo-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                </svg>
            </div>
            <h1 class="product-hero-title">Supreme Clean</h1>
            <div class="supreme-tagline">Professional Cleaning Solutions</div>
        </div>
        <p class="product-hero-subtitle" data-animate>Our proprietary line of industrial and household cleaning products</p>
        <div class="hero-cta-buttons" data-animate>
            <a href="/request-quote" class="btn-hero-primary">
                <span>Request Quote</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
            </a>
            <a href="{{ route('products.catalogue.download') }}" class="btn-hero-secondary">
                <span>Product Catalogue</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="scroll-indicator-product">
        <span>Explore Products</span>
        <div class="scroll-arrow-product"></div>
    </div>
</section>

<!-- PRODUCT CATEGORIES -->
<section class="supreme-categories-section">
    <div class="full-width-container">
        <div class="supreme-intro" data-animate>
            <div class="section-label-green">Supreme Clean Range</div>
            <h2>The Supreme Clean Difference</h2>
            <div class="title-underline-center"></div>
            <p>Supreme Clean is JMK Trading's flagship cleaning product line, offering professional-grade solutions for both household and industrial applications. Our products combine effectiveness with safety, delivering superior cleaning performance.</p>
        </div>

        <!-- Category Tabs -->
        <div class="supreme-tabs" data-animate>
            <button class="supreme-tab active" data-category="household">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span>Household Chemicals</span>
            </button>
            <button class="supreme-tab" data-category="industrial">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                <span>Industrial Chemicals</span>
            </button>
            <button class="supreme-tab" data-category="raw">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                </svg>
                <span>Raw Materials</span>
            </button>
        </div>

        <!-- Household Products -->
        <div class="supreme-category-content active" data-category="household">
            <div class="products-showcase-grid">
                @foreach($products['Household Chemicals'] as $product)
                <div class="supreme-product-card" data-animate>
                    <div class="supreme-product-image">
                        <div class="product-icon-box-large">
                            @if(str_contains($product, 'Bleach'))
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            @elseif(str_contains($product, 'Toilet'))
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            @elseif(str_contains($product, 'Dishwashing'))
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                                </svg>
                            @elseif(str_contains($product, 'Floor'))
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                </svg>
                            @elseif(str_contains($product, 'Tissue'))
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            @elseif(str_contains($product, 'Pine'))
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                </svg>
                            @else
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                                </svg>
                            @endif
                        </div>
                        <div class="supreme-badge">Supreme Clean</div>
                    </div>
                    <div class="supreme-product-info">
                        <h3>{{ $product }}</h3>
                        <p class="product-tagline">
                            @if(str_contains($product, 'Thick Bleach'))
                                Powerful disinfection and whitening formula
                            @elseif(str_contains($product, 'Toilet Cleaner'))
                                Deep cleaning and germ protection
                            @elseif(str_contains($product, 'Dishwashing'))
                                Tough on grease, gentle on hands
                            @elseif(str_contains($product, 'Floor Polish'))
                                Long-lasting shine and protection
                            @elseif(str_contains($product, 'Tile Cleaner'))
                                Streak-free brilliance
                            @elseif(str_contains($product, 'Pine Gel'))
                                Fresh pine scent and deep clean
                            @elseif(str_contains($product, 'Tissues'))
                                Soft, strong, and absorbent
                            @else
                                Professional cleaning solution
                            @endif
                        </p>
                        <ul class="product-features-list">
                            <li>Effective Formula</li>
                            <li>Easy to Use</li>
                            <li>Value for Money</li>
                            <li>Multiple Sizes</li>
                        </ul>
                        <div class="product-sizes">
                            <span class="size-badge">500ml</span>
                            <span class="size-badge">1L</span>
                            <span class="size-badge">5L</span>
                        </div>
                        <a href="/request-quote?product=Supreme Clean {{ $product }}" class="supreme-quote-btn">
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

        <!-- Industrial Products -->
        <div class="supreme-category-content" data-category="industrial">
            <div class="products-showcase-grid">
                @foreach($products['Industrial Cleaning'] as $product)
                <div class="supreme-product-card" data-animate>
                    <div class="supreme-product-image industrial">
                        <div class="product-icon-box-large">
                            @if(str_contains($product, 'Degreaser'))
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            @elseif(str_contains($product, 'Sanitizer'))
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            @else
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            @endif
                        </div>
                        <div class="supreme-badge industrial">Industrial Grade</div>
                    </div>
                    <div class="supreme-product-info">
                        <h3>{{ $product }}</h3>
                        <p class="product-tagline">
                            @if(str_contains($product, 'All Purpose'))
                                Versatile cleaning for all surfaces
                            @elseif(str_contains($product, 'Degreaser'))
                                Heavy-duty grease and oil removal
                            @else
                                Professional-grade sanitization
                            @endif
                        </p>
                        <ul class="product-features-list">
                            <li>Industrial Strength</li>
                            <li>Fast Acting</li>
                            <li>Cost Effective</li>
                            <li>Bulk Available</li>
                        </ul>
                        <div class="product-applications">
                            <span class="app-badge">Factories</span>
                            <span class="app-badge">Workshops</span>
                            <span class="app-badge">Commercial</span>
                        </div>
                        <a href="/request-quote?product=Supreme Clean {{ $product }}" class="supreme-quote-btn">
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

        <!-- Raw Materials -->
        <div class="supreme-category-content" data-category="raw">
            <div class="raw-materials-intro">
                <div class="section-label-green">Manufacturing Support</div>
                <h3>Raw Materials for Manufacturing</h3>
                <p>High-quality chemical raw materials for detergent and cleaning product manufacturing</p>
            </div>
            <div class="raw-materials-grid">
                <div class="raw-material-card" data-animate>
                    <div class="raw-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h4>SLES (Sodium Laureth Sulfate)</h4>
                    <p>Primary surfactant for detergent formulations</p>
                </div>
                <div class="raw-material-card" data-animate>
                    <div class="raw-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                    </div>
                    <h4>Wax</h4>
                    <p>For floor polish and protective coatings</p>
                </div>
                <div class="raw-material-card" data-animate>
                    <div class="raw-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>
                    <h4>Hardener</h4>
                    <p>Stabilizing agents for product consistency</p>
                </div>
                <div class="raw-material-card" data-animate>
                    <div class="raw-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                    </div>
                    <h4>Dyes</h4>
                    <p>Color additives for product differentiation</p>
                </div>
                <div class="raw-material-card" data-animate>
                    <div class="raw-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <h4>Perfumes</h4>
                    <p>Fragrances for pleasant scent profiles</p>
                </div>
                <div class="raw-material-card" data-animate>
                    <div class="raw-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                        </svg>
                    </div>
                    <h4>CDEA (Cocamide DEA)</h4>
                    <p>Foam booster and viscosity builder</p>
                </div>
                <div class="raw-material-card" data-animate>
                    <div class="raw-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <h4>Sulphonic Acid</h4>
                    <p>Active ingredient for cleaning products</p>
                </div>
                <div class="raw-material-card" data-animate>
                    <div class="raw-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <h4>Dolomite & Oxides</h4>
                    <p>Fillers and pigments for various applications</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY SUPREME CLEAN -->
<section class="why-supreme-section">
    <div class="full-width-container">
        <div class="why-supreme-header" data-animate>
            <div class="section-label-green">Our Advantage</div>
            <h2>Why Choose Supreme Clean?</h2>
            <div class="title-underline-center"></div>
            <p>Quality, effectiveness, and value in every bottle</p>
        </div>
        <div class="why-supreme-grid">
            <div class="why-supreme-card" data-animate>
                <div class="why-supreme-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3>Proven Quality</h3>
                <p>Formulated and manufactured to international standards with rigorous quality control</p>
            </div>
            <div class="why-supreme-card" data-animate>
                <div class="why-supreme-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3>Value Pricing</h3>
                <p>Competitive pricing without compromising on quality or effectiveness</p>
            </div>
            <div class="why-supreme-card" data-animate>
                <div class="why-supreme-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3>Local Manufacturing</h3>
                <p>Proudly made in Zimbabwe, supporting local economy and ensuring availability</p>
            </div>
            <div class="why-supreme-card" data-animate>
                <div class="why-supreme-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                    </svg>
                </div>
                <h3>Flexible Packaging</h3>
                <p>Available in various sizes from household to bulk industrial quantities</p>
            </div>
            <div class="why-supreme-card" data-animate>
                <div class="why-supreme-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                    </svg>
                </div>
                <h3>Tested Performance</h3>
                <p>Extensively tested for effectiveness and safety in real-world conditions</p>
            </div>
            <div class="why-supreme-card" data-animate>
                <div class="why-supreme-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3>Reliable Supply</h3>
                <p>Consistent stock availability and prompt delivery nationwide</p>
            </div>
        </div>
    </div>
</section>

<!-- DISTRIBUTORSHIP CTA -->
<section class="distributorship-section">
    <div class="full-width-container">
        <div class="distributorship-content" data-animate>
            <div class="distributorship-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
            </div>
            <h2>Become a Supreme Clean Distributor</h2>
            <p>Join our growing network of distributors and retailers. Excellent margins, marketing support, and reliable supply.</p>
            <div class="distributorship-benefits">
                <div class="benefit-item">
                    <span class="benefit-check">✓</span>
                    <span>Attractive distributor pricing</span>
                </div>
                <div class="benefit-item">
                    <span class="benefit-check">✓</span>
                    <span>Marketing materials provided</span>
                </div>
                <div class="benefit-item">
                    <span class="benefit-check">✓</span>
                    <span>Territory protection available</span>
                </div>
                <div class="benefit-item">
                    <span class="benefit-check">✓</span>
                    <span>Product training included</span>
                </div>
            </div>
            <a href="/contact?subject=distributorship" class="btn-distributorship">
                <span>Apply for Distributorship</span>
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- BULK ORDER CTA -->
<section class="bulk-order-cta">
    <div class="full-width-container">
        <div class="bulk-order-content" data-animate>
            <h2>Bulk Orders & Custom Formulations</h2>
            <p>Need large quantities or custom formulations? We can help with tailored solutions for your business</p>
            <div class="bulk-cta-buttons">
                <a href="/request-quote?type=bulk-supreme-clean" class="btn-bulk-primary">
                    <span>Request Bulk Quote</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </a>
                <a href="/contact" class="btn-bulk-secondary">
                    <span>Discuss Custom Formulation</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== COMPLETE SUPREME CLEAN PAGE STYLES ===== */

/* Hero Section - COMPLETE STYLES */
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

/* .supreme-overlay {
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.94) 0%, rgba(21, 122, 56, 0.94) 100%);
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

.supreme-logo {
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

.supreme-logo-icon {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 3px solid rgba(255, 255, 255, 0.3);
}

.supreme-logo-icon svg {
    width: 40px;
    height: 40px;
    color: #ffffff;
}

.product-hero-title {
    font-size: 56px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.1;
    margin: 0;
    text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
}

.supreme-tagline {
    font-size: 18px;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
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
    color: #1a9847;
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

/* Categories Section - COMPLETE STYLES */
.supreme-categories-section {
    padding: 100px 0;
    background: #f8f9fa;
}

.supreme-intro {
    text-align: center;
    max-width: 900px;
    margin: 0 auto 60px;
}

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

.supreme-intro h2 {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 25px;
}

.title-underline-center {
    width: 80px;
    height: 4px;
    background: #1a9847;
    margin: 20px auto 30px;
}

.supreme-intro p {
    font-size: 18px;
    line-height: 1.8;
    color: #666;
}

/* Tabs - COMPLETE STYLES */
.supreme-tabs {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-bottom: 60px;
    flex-wrap: wrap;
}

.supreme-tab {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 16px 32px;
    background: #ffffff;
    border: 2px solid #e0e0e0;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 600;
    color: #333;
    cursor: pointer;
    transition: all 0.3s ease;
}

.supreme-tab svg {
    width: 24px;
    height: 24px;
}

.supreme-tab:hover {
    border-color: #1a9847;
    color: #1a9847;
    transform: translateY(-2px);
}

.supreme-tab.active {
    background: #1a9847;
    color: #ffffff;
    border-color: #1a9847;
}

.supreme-category-content {
    display: none;
    animation: fadeIn 0.5s ease;
}

.supreme-category-content.active {
    display: block;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Products Showcase - COMPLETE STYLES */
.products-showcase-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 35px;
}

.supreme-product-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    transition: all 0.4s ease;
}

.supreme-product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.supreme-product-image {
    background: linear-gradient(135deg, #1a9847 0%, #157a38 100%);
    padding: 50px 30px;
    text-align: center;
    position: relative;
    min-height: 220px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

/* .supreme-product-image.industrial {
    background: linear-gradient(135deg, #FF9800 0%, #F57C00 100%);
} */

.product-icon-box-large {
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    border: 3px solid rgba(255, 255, 255, 0.3);
}

.product-icon-box-large svg {
    width: 50px;
    height: 50px;
    color: #ffffff;
}

.supreme-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(255, 255, 255, 0.2);
    color: #ffffff;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.supreme-product-info {
    padding: 35px;
}

.supreme-product-info h3 {
    font-size: 24px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 10px;
}

.product-tagline {
    font-size: 14px;
    color: #666;
    font-style: italic;
    margin-bottom: 20px;
}

.product-features-list {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
}

.product-features-list li {
    font-size: 13px;
    color: #555;
    padding-left: 20px;
    position: relative;
}

.product-features-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #1a9847;
    font-weight: 700;
}

.product-sizes,
.product-applications {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    margin-bottom: 25px;
}

.size-badge {
    padding: 6px 12px;
    background: rgba(26, 152, 71, 0.1);
    color: #1a9847;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
    border: 1px solid rgba(26, 152, 71, 0.2);
}

.app-badge {
    padding: 6px 12px;
    background: rgba(255, 152, 0, 0.1);
    color: #49a54a;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
    border: 1px solid rgba(255, 152, 0, 0.2);
}

.supreme-quote-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    padding: 14px;
    background: #1a9847;
    color: #ffffff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 14px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.supreme-quote-btn:hover {
    background: #157a38;
    gap: 15px;
    transform: translateX(5px);
}

.supreme-quote-btn svg {
    width: 18px;
    height: 18px;
}

/* Raw Materials - COMPLETE STYLES */
.raw-materials-intro {
    text-align: center;
    margin-bottom: 50px;
}

.raw-materials-intro h3 {
    font-size: 32px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 12px;
}

.raw-materials-intro p {
    font-size: 17px;
    color: #666;
}

.raw-materials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 25px;
}

.raw-material-card {
    background: #ffffff;
    padding: 30px 25px;
    border-radius: 12px;
    border-left: 4px solid #1a9847;
    transition: all 0.3s ease;
}

.raw-material-card:hover {
    transform: translateX(8px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.raw-icon-box {
    width: 56px;
    height: 56px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1a9847;
    margin-bottom: 20px;
}

.raw-icon-box svg {
    width: 28px;
    height: 28px;
}

.raw-material-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 10px;
}

.raw-material-card p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
}

/* Why Supreme - COMPLETE STYLES */
.why-supreme-section {
    padding: 100px 0;
    background: #ffffff;
}

.why-supreme-header {
    text-align: center;
    margin-bottom: 60px;
}

.why-supreme-header h2 {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 25px;
}

.why-supreme-header p {
    font-size: 20px;
    color: #666;
}

.why-supreme-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 35px;
}

.why-supreme-card {
    background: #f8f9fa;
    padding: 40px 35px;
    border-radius: 16px;
    text-align: center;
    transition: all 0.4s ease;
    border-top: 4px solid #1a9847;
}

.why-supreme-card:hover {
    background: #ffffff;
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.why-supreme-icon-box {
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

.why-supreme-card:hover .why-supreme-icon-box {
    background: #1a9847;
    color: #ffffff;
    transform: scale(1.1);
}

.why-supreme-icon-box svg {
    width: 40px;
    height: 40px;
}

.why-supreme-card h3 {
    font-size: 22px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 12px;
}

.why-supreme-card p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
}

/* Distributorship - COMPLETE STYLES */
.distributorship-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #1a9847 0%, #157a38 100%);
}

.distributorship-content {
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
}

.distributorship-icon {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
}

.distributorship-icon svg {
    width: 40px;
    height: 40px;
    color: #ffffff;
}

.distributorship-content h2 {
    font-size: 42px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 20px;
}

.distributorship-content > p {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 40px;
}

.distributorship-benefits {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    max-width: 600px;
    margin: 0 auto 40px;
    text-align: left;
}

.benefit-item {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #ffffff;
    font-size: 16px;
    font-weight: 500;
}

.benefit-check {
    width: 28px;
    height: 28px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-weight: 700;
}

.btn-distributorship {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 18px 45px;
    background: #ffffff;
    color: #1a9847;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 16px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.btn-distributorship:hover {
    background: #f8f9fa;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

.btn-distributorship svg {
    width: 20px;
    height: 20px;
}

/* Bulk Order CTA - COMPLETE STYLES */
.bulk-order-cta {
    padding: 100px 0;
    background: #f8f9fa;
}

.bulk-order-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.bulk-order-content h2 {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 20px;
}

.bulk-order-content p {
    font-size: 20px;
    color: #666;
    margin-bottom: 40px;
}

.bulk-cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-bulk-primary,
.btn-bulk-secondary {
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

.btn-bulk-primary {
    background: #1a9847;
    color: #ffffff;
}

.btn-bulk-primary:hover {
    background: #157a38;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(26, 152, 71, 0.3);
}

.btn-bulk-secondary {
    background: transparent;
    color: #1a9847;
    border: 2px solid #1a9847;
}

.btn-bulk-secondary:hover {
    background: rgba(26, 152, 71, 0.1);
    transform: translateY(-3px);
}

.btn-bulk-primary svg,
.btn-bulk-secondary svg {
    width: 20px;
    height: 20px;
}

/* Common Utilities */
.full-width-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 150px;
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
    .distributorship-benefits {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .full-width-container {
        padding: 0 20px;
    }

    .products-showcase-grid {
        grid-template-columns: 1fr;
    }

    .supreme-tabs {
        flex-direction: column;
    }

    .supreme-tab {
        width: 100%;
        justify-content: center;
    }

    .bulk-cta-buttons,
    .hero-cta-buttons {
        flex-direction: column;
    }

    .product-hero-title {
        font-size: 40px;
    }

    .supreme-intro h2,
    .why-supreme-header h2,
    .distributorship-content h2,
    .bulk-order-content h2 {
        font-size: 32px;
    }

    .raw-materials-grid {
        grid-template-columns: 1fr;
    }

    .product-detail-hero {
        min-height: 450px;
    }

    .product-features-list {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Tab switching with smooth transition
const supremeTabs = document.querySelectorAll('.supreme-tab');
const supremeContents = document.querySelectorAll('.supreme-category-content');

supremeTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const category = tab.getAttribute('data-category');
        
        // Remove active from all tabs and contents
        supremeTabs.forEach(t => t.classList.remove('active'));
        supremeContents.forEach(c => c.classList.remove('active'));
        
        // Add active to clicked tab and corresponding content
        tab.classList.add('active');
        const activeContent = document.querySelector(`.supreme-category-content[data-category="${category}"]`);
        activeContent.classList.add('active');
        
        // Scroll to content smoothly
        activeContent.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    });
});

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
