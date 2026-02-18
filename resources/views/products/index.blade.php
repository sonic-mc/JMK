@extends('layouts.app')

@section('content')

<!-- PRODUCTS HERO -->
<section class="products-hero">
    <div class="products-hero-background" style="background-image: url('{{ asset('images/chem04.jpg') }}')"></div>
    <div class="products-hero-overlay"></div>
    <div class="products-hero-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <span>Products</span>
        </div>
        <h1 class="products-hero-title" data-animate>Our Product Range</h1>
        <p class="products-hero-subtitle" data-animate>Comprehensive chemical solutions for mining, industrial, and household applications</p>
    </div>
    <div class="scroll-indicator-products">
        <span>Browse Products</span>
        <div class="scroll-arrow-products"></div>
    </div>
</section>

<!-- PRODUCT CATEGORIES -->
<section class="product-categories-section">
    <div class="full-width-container">
        <div class="section-header-center" data-animate>
            <div class="section-label-green">Explore Our Products</div>
            <h2 class="section-title-dark">Product Categories</h2>
            <div class="title-underline-center"></div>
            <p class="section-description-products">Browse our comprehensive range of high-quality chemical products</p>
        </div>

        <div class="category-cards-grid">
            <!-- Mining & Industrial -->
            <div class="category-large-card" data-animate>
                <div class="category-card-image" style="background-image: url('{{ asset('images/chem02.jpg') }}')">
                    <div class="category-overlay"></div>
                    <div class="category-badge">Primary Division</div>
                </div>
                <div class="category-card-content">
                    <div class="category-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3>Mining & Industrial</h3>
                    <p>Specialized chemicals for mining operations, foundries, and industrial applications including hydrated lime, caustic soda, and processing chemicals.</p>
                    <ul class="category-highlights">
                        <li>Mining Chemicals</li>
                        <li>Industrial Solvents</li>
                        <li>Foundry Materials</li>
                        <li>Processing Agents</li>
                    </ul>
                    <a href="{{ route('products.mining-industrial') }}" class="category-btn">
                        <span>Explore Products</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Agriculture -->
            <div class="category-large-card" data-animate>
                <div class="category-card-image" style="background-image: url('{{ asset('images/agric04.jpg') }}')">
                    <div class="category-overlay"></div>
                </div>
                <div class="category-card-content">
                    <div class="category-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3>Agriculture</h3>
                    <p>Quality agricultural products including agricultural lime, chicken grit, and fertilizer components for optimal crop and livestock management.</p>
                    <ul class="category-highlights">
                        <li>Agricultural Lime</li>
                        <li>Chicken Grit</li>
                        <li>Soil Amendments</li>
                        <li>Fertilizer Components</li>
                    </ul>
                    <a href="{{ route('products.agriculture') }}" class="category-btn">
                        <span>Explore Products</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Supreme Clean -->
            <div class="category-large-card" data-animate>
                <div class="category-card-image" style="background-image: url('{{ asset('images/chem05.jpg') }}')">
                    <div class="category-overlay"></div>
                    <div class="category-badge">Supreme Clean</div>
                </div>
                <div class="category-card-content">
                    <div class="category-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <h3>Supreme Clean</h3>
                    <p>Our proprietary line of household and industrial cleaning products including detergents, sanitizers, and specialized cleaning solutions.</p>
                    <ul class="category-highlights">
                        <li>Household Cleaners</li>
                        <li>Industrial Detergents</li>
                        <li>Sanitization Products</li>
                        <li>Specialized Solutions</li>
                    </ul>
                    <a href="{{ route('products.supreme-clean') }}" class="category-btn">
                        <span>Explore Products</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- QUICK PRODUCT CATEGORIES -->
<section class="quick-categories-section">
    <div class="full-width-container">
        <h2 class="quick-categories-title" data-animate>Browse by Category</h2>
        <div class="quick-categories-grid">
            <a href="{{ route('products.catalogue') }}#fillers" class="quick-category-card" data-animate>
                <div class="quick-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                    </svg>
                </div>
                <h4>Fillers</h4>
                <p>Talc, Dolomite, Kaolin</p>
            </a>
            <a href="{{ route('products.catalogue') }}#oxides" class="quick-category-card" data-animate>
                <div class="quick-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h4>Oxides</h4>
                <p>Red, Black, Yellow</p>
            </a>
            <a href="{{ route('products.catalogue') }}#foundry" class="quick-category-card" data-animate>
                <div class="quick-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>
                    </svg>
                </div>
                <h4>Foundry</h4>
                <p>Bentonite, Fire Clay</p>
            </a>
            <a href="{{ route('products.catalogue') }}#raw-materials" class="quick-category-card" data-animate>
                <div class="quick-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                </div>
                <h4>Raw Materials</h4>
                <p>SLES, CDEA, Wax</p>
            </a>
        </div>
    </div>
</section>

<!-- CATALOGUE CTA -->
<section class="catalogue-cta-section">
    <div class="full-width-container">
        <div class="catalogue-cta-content" data-animate>
            <div class="cta-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
            <h2>Download Our Complete Product Catalogue</h2>
            <p>Access our full product range with detailed specifications and technical data</p>
            <div class="cta-buttons-catalogue">
                <a href="{{ route('products.catalogue') }}" class="btn-view-catalogue">
                    <span>View Online Catalogue</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </a>
                <a href="{{ route('products.catalogue.download') }}" class="btn-download-catalogue">
                    <span>Download PDF</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== COMPLETE PRODUCTS PAGE STYLES ===== */

/* Products Hero */
.products-hero {
    position: relative;
    height: 50vh;
    min-height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.products-hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 120%;
    background-size: cover;
    background-position: center;
    will-change: transform;
}

/* .products-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.94) 0%, rgba(28, 28, 30, 0.90) 100%);
} */

.products-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 800px;
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

.products-hero-title {
    font-size: 52px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 20px;
    text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
}

.products-hero-subtitle {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.95);
    line-height: 1.6;
}

.scroll-indicator-products {
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

.scroll-arrow-products {
    width: 24px;
    height: 40px;
    border: 2px solid rgba(255, 255, 255, 0.6);
    border-radius: 12px;
    position: relative;
}

.scroll-arrow-products::before {
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

/* Product Categories Section */
.product-categories-section {
    padding: 100px 0;
    background: #f8f9fa;
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

.section-title-dark {
    font-size: 46px;
    font-weight: 800;
    color: #1c1c1e;
    line-height: 1.2;
    margin-bottom: 20px;
}

.title-underline-center {
    width: 80px;
    height: 4px;
    background: #1a9847;
    margin: 20px auto 30px;
}

.section-description-products {
    font-size: 18px;
    color: #666;
    max-width: 700px;
    margin: 0 auto;
}

.category-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin-top: 60px;
}

.category-large-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
}

.category-large-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.category-card-image {
    height: 250px;
    background-size: cover;
    background-position: center;
    position: relative;
}

.category-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(180deg, transparent 0%, rgba(26, 152, 71, 0.7) 100%);
}

.category-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: #1a9847;
    color: #ffffff;
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
}

.category-card-content {
    padding: 40px;
}

.category-icon-box {
    width: 70px;
    height: 70px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1a9847;
    margin-bottom: 25px;
    transition: all 0.3s ease;
}

.category-large-card:hover .category-icon-box {
    background: #1a9847;
    color: #ffffff;
    transform: scale(1.1);
}

.category-icon-box svg {
    width: 36px;
    height: 36px;
}

.category-card-content h3 {
    font-size: 28px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 15px;
}

.category-card-content p {
    font-size: 16px;
    line-height: 1.7;
    color: #666;
    margin-bottom: 25px;
}

.category-highlights {
    list-style: none;
    padding: 0;
    margin: 0 0 30px 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

.category-highlights li {
    font-size: 14px;
    color: #555;
    padding-left: 20px;
    position: relative;
}

.category-highlights li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #1a9847;
    font-weight: 700;
}

.category-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #1a9847;
    color: #ffffff;
    padding: 14px 30px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 14px;
}

.category-btn:hover {
    background: #157a38;
    gap: 15px;
    transform: translateX(5px);
}

.category-btn svg {
    width: 18px;
    height: 18px;
}

/* Quick Categories */
.quick-categories-section {
    padding: 80px 0;
    background: #ffffff;
}

.quick-categories-title {
    font-size: 36px;
    font-weight: 800;
    text-align: center;
    color: #1c1c1e;
    margin-bottom: 50px;
}

.quick-categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
}

.quick-category-card {
    background: #f8f9fa;
    padding: 35px 25px;
    border-radius: 12px;
    text-align: center;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.quick-category-card:hover {
    background: #ffffff;
    border-color: #1a9847;
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.quick-icon-box {
    width: 64px;
    height: 64px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    color: #1a9847;
    transition: all 0.3s ease;
}

.quick-category-card:hover .quick-icon-box {
    background: #1a9847;
    color: #ffffff;
    transform: scale(1.1);
}

.quick-icon-box svg {
    width: 32px;
    height: 32px;
}

.quick-category-card h4 {
    font-size: 20px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 8px;
}

.quick-category-card p {
    font-size: 14px;
    color: #666;
}

/* Catalogue CTA */
.catalogue-cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #1a9847 0%, #157a38 100%);
}

.catalogue-cta-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.cta-icon {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
}

.cta-icon svg {
    width: 40px;
    height: 40px;
    color: #ffffff;
}

.catalogue-cta-content h2 {
    font-size: 42px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 20px;
}

.catalogue-cta-content p {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 40px;
}

.cta-buttons-catalogue {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-view-catalogue,
.btn-download-catalogue {
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

.btn-view-catalogue {
    background: #ffffff;
    color: #1a9847;
}

.btn-view-catalogue:hover {
    background: #f8f9fa;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

.btn-download-catalogue {
    background: transparent;
    color: #ffffff;
    border: 2px solid #ffffff;
}

.btn-download-catalogue:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-3px);
}

.btn-view-catalogue svg,
.btn-download-catalogue svg {
    width: 20px;
    height: 20px;
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

/* Common Styles */
.section-header-center {
    text-align: center;
    margin-bottom: 60px;
}

/* Responsive */
@media (max-width: 768px) {
    .products-hero-title {
        font-size: 36px;
    }

    .category-cards-grid {
        grid-template-columns: 1fr;
    }

    .category-highlights {
        grid-template-columns: 1fr;
    }

    .cta-buttons-catalogue {
        flex-direction: column;
    }

    .quick-categories-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .products-hero {
        min-height: 350px;
    }

    .catalogue-cta-content h2 {
        font-size: 32px;
    }

    .section-title-dark {
        font-size: 36px;
    }
}

@media (max-width: 480px) {
    .quick-categories-grid {
        grid-template-columns: 1fr;
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
    const heroBackground = document.querySelector('.products-hero-background');
    if (heroBackground) {
        heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});
</script>

@endsection
