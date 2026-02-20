@extends('layouts.app')

@section('content')

<!-- MINING & INDUSTRIAL HERO -->
<section class="product-detail-hero">
    <div class="product-hero-background" style="background-image: url('{{ asset('images/pic05.jpg') }}')"></div>
    <div class="product-hero-overlay"></div>
    <div class="product-hero-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <a href="/products">Products</a>
            <span class="separator">/</span>
            <span>Mining & Industrial</span>
        </div>
        <h1 class="product-hero-title" data-animate>Mining & Industrial Chemicals</h1>
        <p class="product-hero-subtitle" data-animate>Specialized chemical solutions for mining operations, foundries, and industrial applications</p>
        <div class="hero-cta-buttons" data-animate>
            <a href="/request-quote" class="btn-hero-primary">Request Quote</a>
            <a href="{{ route('products.catalogue.download') }}" class="btn-hero-secondary">Download Catalogue</a>
        </div>
    </div>
</section>

<!-- PRODUCTS LISTING -->
<section class="products-listing-section">
    <div class="full-width-container">
        <!-- Category Filter -->
        <div class="category-filter" data-animate>
            <button class="filter-btn active" data-category="all">All Products</button>
            <button class="filter-btn" data-category="mining">Mining</button>
            <button class="filter-btn" data-category="industrial-chemicals">Industrial Chemicals</button>
            <button class="filter-btn" data-category="foundry">Foundry</button>
            <button class="filter-btn" data-category="fluxing-agents">Fluxing Agents</button>
        </div>

        @foreach($products as $category => $items)
        <div class="product-category-section" data-category="{{ strtolower(str_replace(' ', '-', $category)) }}" data-animate>
            <div class="category-header">
                <h2>{{ $category }}</h2>
                <div class="category-line"></div>
            </div>

            <div class="products-grid">
                @foreach($items as $product)
                <div class="product-card">
                    <div class="product-card-header">
                        <div class="product-icon">
                            @php
                                $productName = strtolower($product);
                                $isLimeOrMineral = str_contains($productName, 'lime') || str_contains($productName, 'limestone') || str_contains($productName, 'stone dust') || str_contains($productName, 'silica') || str_contains($productName, 'quartz') || str_contains($productName, 'magnesite') || str_contains($productName, 'fire clay') || str_contains($productName, 'bentonite');
                                $isCarbonFamily = str_contains($productName, 'carbon') || str_contains($productName, 'graphite') || str_contains($productName, 'coal');
                                $isChemicalLiquid = str_contains($productName, 'caustic') || str_contains($productName, 'degreaser') || str_contains($productName, 'cleaner') || str_contains($productName, 'wash') || str_contains($productName, 'thinner') || str_contains($productName, 'spirit') || str_contains($productName, 'turpentine') || str_contains($productName, 'opener') || str_contains($productName, 'silicate');
                                $isFoundryAlloy = str_contains($productName, 'ferrosilicon') || str_contains($productName, 'waproset') || str_contains($productName, 'blacking');
                            @endphp

                            @if($isLimeOrMineral)
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 20h18M4 20l5-7 4 4 3-5 4 8"/>
                                </svg>
                            @elseif($isCarbonFamily)
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 3h10l4 7-4 11H7L3 10l4-7z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 3l5 7 5-7M3 10h18"/>
                                </svg>
                            @elseif($isChemicalLiquid)
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 2v6l-5 8a4 4 0 003.4 6h7.2A4 4 0 0019 16l-5-8V2"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h8M7 16h10"/>
                                </svg>
                            @elseif($isFoundryAlloy)
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l8 4v6c0 5.2-3.4 8.8-8 10-4.6-1.2-8-4.8-8-10V6l8-4z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M12 9v6"/>
                                </svg>
                            @else
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                            @endif
                        </div>
                        <h3>{{ $product }}</h3>
                    </div>
                    <div class="product-card-body">
                        <p class="product-description">High-quality {{ strtolower($product) }} for industrial and mining applications. Available in various grades and packaging options.</p>
                        <div class="product-features">
                            <span class="feature-badge">Premium Grade</span>
                            <span class="feature-badge">Bulk Available</span>
                        </div>
                    </div>
                    <div class="product-card-footer">
                        <a href="/request-quote?product={{ urlencode($product) }}" class="product-quote-btn">
                            Get Quote
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <button class="product-info-btn" data-product="{{ $product }}">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Info
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <!-- Bulk Inquiry CTA -->
        <div class="bulk-inquiry-cta" data-animate>
            <div class="bulk-inquiry-content">
                <h3>Need Multiple Products?</h3>
                <p>Submit a bulk inquiry for customized quotes on multiple products</p>
                <a href="/request-quote?type=bulk" class="btn-bulk-inquiry">Submit Bulk Inquiry</a>
            </div>
        </div>
    </div>
</section>

<!-- APPLICATIONS SECTION -->
<section class="applications-section">
    <div class="full-width-container">
        <div class="section-header-center" data-animate>
            <div class="section-label-green">Applications</div>
            <h2 class="section-title-dark">Industry Applications</h2>
            <div class="title-underline-center"></div>
        </div>

        <div class="applications-grid">
            <div class="application-card" data-animate>
                <div class="application-icon">⛏️</div>
                <h3>Mining Operations</h3>
                <p>Essential chemicals for ore processing, mineral extraction, and mining safety operations.</p>
            </div>
            <div class="application-card" data-animate>
                <div class="application-icon">🏭</div>
                <h3>Industrial Manufacturing</h3>
                <p>High-performance chemicals for manufacturing processes and industrial applications.</p>
            </div>
            <div class="application-card" data-animate>
                <div class="application-icon">🔥</div>
                <h3>Foundry & Casting</h3>
                <p>Specialized materials for metal casting, molding, and foundry operations.</p>
            </div>
            <div class="application-card" data-animate>
                <div class="application-icon">⚙️</div>
                <h3>Processing Plants</h3>
                <p>Chemical solutions for processing, refining, and quality control operations.</p>
            </div>
        </div>
    </div>
</section>

<!-- TECHNICAL SUPPORT CTA -->
<section class="technical-support-cta">
    <div class="full-width-container">
        <div class="support-cta-content" data-animate>
            <div class="support-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
            </div>
            <h2>Need Technical Support?</h2>
            <p>Our technical team is available to help you select the right products for your specific needs</p>
            <div class="support-buttons">
                <a href="/contact" class="btn-support-primary">Contact Technical Team</a>
                <a href="tel:+263776695368" class="btn-support-secondary">Call: +263 77 669 5368</a>
            </div>
        </div>
    </div>
</section>

<style>
/* Mining & Industrial Page Styles */
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
    height: 100%;
    background-size: cover;
    background-position: center;
}

/* .product-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.92) 0%, rgba(28, 28, 30, 0.9) 100%);
} */

.product-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 900px;
    padding: 0 20px;
}

.product-hero-title {
    font-size: 56px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 20px;
}

.product-hero-subtitle {
    font-size: 22px;
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
    padding: 16px 40px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 16px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
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
}

/* Products Listing */
.products-listing-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.category-filter {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom: 60px;
    padding: 30px;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
}

.filter-btn {
    padding: 12px 28px;
    background: #f8f9fa;
    border: 2px solid transparent;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    color: #333;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.filter-btn:hover {
    border-color: #1a9847;
    color: #1a9847;
}

.filter-btn.active {
    background: #1a9847;
    color: #ffffff;
    border-color: #1a9847;
}

.product-category-section {
    margin-bottom: 80px;
}

.category-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 40px;
}

.category-header h2 {
    font-size: 36px;
    font-weight: 800;
    color: #1c1c1e;
    white-space: nowrap;
}

.category-line {
    flex: 1;
    height: 3px;
    background: linear-gradient(90deg, #1a9847 0%, transparent 100%);
}

.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
}

.product-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 35px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    transition: all 0.4s ease;
    display: flex;
    flex-direction: column;
    border-top: 4px solid #1a9847;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.product-card-header {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 20px;
}

.product-icon {
    width: 60px;
    height: 60px;
    min-width: 60px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1a9847;
}

.product-icon svg {
    width: 32px;
    height: 32px;
}

.product-card-header h3 {
    font-size: 22px;
    font-weight: 700;
    color: #1c1c1e;
    line-height: 1.3;
}

.product-card-body {
    flex: 1;
    margin-bottom: 25px;
}

.product-description {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
    margin-bottom: 20px;
}

.product-features {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.feature-badge {
    padding: 6px 14px;
    background: rgba(26, 152, 71, 0.1);
    color: #1a9847;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.product-card-footer {
    display: flex;
    gap: 12px;
    padding-top: 20px;
    border-top: 1px solid #f0f0f0;
}

.product-quote-btn {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 14px 24px;
    background: #1a9847;
    color: #ffffff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s ease;
    text-transform: uppercase;
}

.product-quote-btn:hover {
    background: #157a38;
    gap: 12px;
}

.product-quote-btn svg {
    width: 16px;
    height: 16px;
}

.product-info-btn {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 14px 20px;
    background: #f8f9fa;
    color: #333;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
}

.product-info-btn:hover {
    border-color: #1a9847;
    color: #1a9847;
}

.product-info-btn svg {
    width: 18px;
    height: 18px;
}

/* Bulk Inquiry CTA */
.bulk-inquiry-cta {
    background: linear-gradient(135deg, #1a9847 0%, #157a38 100%);
    padding: 60px 50px;
    border-radius: 16px;
    text-align: center;
    margin-top: 60px;
}

.bulk-inquiry-content h3 {
    font-size: 32px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 15px;
}

.bulk-inquiry-content p {
    font-size: 18px;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 30px;
}

.btn-bulk-inquiry {
    display: inline-flex;
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

.btn-bulk-inquiry:hover {
    background: #f8f9fa;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

/* Applications Section */
.applications-section {
    padding: 100px 0;
    background: #ffffff;
}

.applications-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 60px;
}

.application-card {
    background: #f8f9fa;
    padding: 40px 30px;
    border-radius: 16px;
    text-align: center;
    transition: all 0.4s ease;
    border-top: 4px solid transparent;
}

.application-card:hover {
    background: #ffffff;
    border-top-color: #1a9847;
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.application-icon {
    font-size: 56px;
    margin-bottom: 20px;
}

.application-card h3 {
    font-size: 22px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 12px;
}

.application-card p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
}

/* Technical Support CTA */
.technical-support-cta {
    padding: 100px 0;
    background: #f8f9fa;
}

.support-cta-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.support-icon {
    width: 80px;
    height: 80px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
}

.support-icon svg {
    width: 40px;
    height: 40px;
    color: #1a9847;
}

.support-cta-content h2 {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 20px;
}

.support-cta-content p {
    font-size: 20px;
    color: #666;
    margin-bottom: 40px;
}

.support-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-support-primary,
.btn-support-secondary {
    padding: 18px 40px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 16px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.btn-support-primary {
    background: #1a9847;
    color: #ffffff;
}

.btn-support-primary:hover {
    background: #157a38;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(26, 152, 71, 0.3);
}

.btn-support-secondary {
    background: transparent;
    color: #1a9847;
    border: 2px solid #1a9847;
}

.btn-support-secondary:hover {
    background: rgba(26, 152, 71, 0.1);
}

/* Responsive */
@media (max-width: 768px) {
    .product-hero-title {
        font-size: 36px;
    }

    .products-grid {
        grid-template-columns: 1fr;
    }

    .category-filter {
        flex-direction: column;
    }

    .filter-btn {
        width: 100%;
    }

    .category-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .hero-cta-buttons,
    .support-buttons {
        flex-direction: column;
    }
}
</style>

<script>
// Category filtering
const filterBtns = document.querySelectorAll('.filter-btn');
const categorySections = document.querySelectorAll('.product-category-section');

filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // Remove active class from all buttons
        filterBtns.forEach(b => b.classList.remove('active'));
        // Add active to clicked button
        btn.classList.add('active');
        
        const category = btn.getAttribute('data-category');
        
        categorySections.forEach(section => {
            if (category === 'all' || section.getAttribute('data-category') === category) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        });
    });
});

// Product info modal (placeholder)
document.querySelectorAll('.product-info-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const product = this.getAttribute('data-product');
        alert(`Product Information for: ${product}\n\nFor detailed specifications and technical data, please contact our technical team or download the product datasheet.`);
    });
});

// Animations
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
