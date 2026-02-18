@extends('layouts.app')

@section('content')

<!-- CATALOGUE HERO -->
<section class="catalogue-hero">
    <div class="catalogue-hero-background" style="background-image: url('{{ asset('images/chem02.jpg') }}')"></div>
    <div class="catalogue-hero-overlay"></div>
    <div class="catalogue-hero-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <a href="/products">Products</a>
            <span class="separator">/</span>
            <span>Full Catalogue</span>
        </div>
        <h1 class="catalogue-hero-title" data-animate>Complete Product Catalogue</h1>
        <p class="catalogue-hero-subtitle" data-animate>Browse our comprehensive range of chemical products across all categories</p>
        <div class="catalogue-download-cta" data-animate>
            <a href="{{ route('products.catalogue.download') }}" class="btn-download-pdf">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Download Full PDF Catalogue
            </a>
        </div>
    </div>
</section>

<!-- CATALOGUE FILTERS -->
<section class="catalogue-filters-section">
    <div class="full-width-container">
        <div class="catalogue-filters" data-animate>
            <div class="filter-search">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input type="text" id="productSearch" placeholder="Search products...">
            </div>
            <div class="filter-categories">
                <button class="filter-category-btn active" data-filter="all">All Products</button>
                @foreach($categories as $category => $products)
                    <button class="filter-category-btn" data-filter="{{ strtolower(str_replace(' ', '-', $category)) }}">{{ $category }}</button>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- CATALOGUE CONTENT -->
<section class="catalogue-content-section">
    <div class="full-width-container">
        @foreach($categories as $category => $products)
        <div class="catalogue-category" id="{{ strtolower(str_replace(' ', '-', $category)) }}" data-category="{{ strtolower(str_replace(' ', '-', $category)) }}" data-animate>
            <div class="catalogue-category-header">
                <div class="category-header-left">
                    <h2>{{ $category }}</h2>
                    <span class="product-count">{{ count($products) }} Products</span>
                </div>
                <div class="category-header-right">
                    <a href="/request-quote?category={{ urlencode($category) }}" class="btn-category-quote">
                        Quote Category
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="catalogue-products-list">
                @foreach($products as $index => $product)
                <div class="catalogue-product-item" data-product="{{ strtolower($product) }}">
                    <div class="product-item-number">{{ sprintf('%02d', $index + 1) }}</div>
                    <div class="product-item-content">
                        <div class="product-item-left">
                            <h3>{{ $product }}</h3>
                            <div class="product-item-tags">
                                <span class="tag-category">{{ $category }}</span>
                                @if(str_contains(strtolower($product), 'lime') || str_contains(strtolower($product), 'lime'))
                                    <span class="tag-grade">Premium Grade</span>
                                @endif
                                <span class="tag-availability">In Stock</span>
                            </div>
                        </div>
                        <div class="product-item-actions">
                            <button class="btn-product-info" data-product="{{ $product }}">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Info
                            </button>
                            <a href="/request-quote?product={{ urlencode($product) }}" class="btn-product-quote">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                                Quote
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- BULK INQUIRY SECTION -->
<section class="bulk-inquiry-section">
    <div class="full-width-container">
        <div class="bulk-inquiry-card" data-animate>
            <div class="bulk-inquiry-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                </svg>
            </div>
            <h2>Need Multiple Products?</h2>
            <p>Submit a bulk inquiry with your product list and quantities. We'll provide a comprehensive quote with volume discounts.</p>
            <a href="/request-quote?type=bulk" class="btn-bulk-inquiry-large">Submit Bulk Inquiry</a>
        </div>
    </div>
</section>

<!-- QUICK REFERENCE SECTION -->
<section class="quick-reference-section">
    <div class="full-width-container">
        <div class="quick-reference-header" data-animate>
            <h2>Quick Reference Guide</h2>
            <p>Find products by application</p>
        </div>

        <div class="quick-reference-grid">
            <div class="reference-card" data-animate>
                <div class="reference-icon">⛏️</div>
                <h3>Mining Operations</h3>
                <ul>
                    <li>White Hydrated Lime</li>
                    <li>Grey Hydrated Lime</li>
                    <li>Stone Dust</li>
                    <li>Caustic Soda</li>
                    <li>Activated Carbon</li>
                </ul>
                <a href="#mining" class="reference-link">View All Mining Products →</a>
            </div>

            <div class="reference-card" data-animate>
                <div class="reference-icon">🏭</div>
                <h3>Industrial Applications</h3>
                <ul>
                    <li>Degreasers</li>
                    <li>Engine Cleaners</li>
                    <li>Industrial Solvents</li>
                    <li>Caustic Soda</li>
                    <li>Turpentine</li>
                </ul>
                <a href="#industrial-chemicals" class="reference-link">View All Industrial Products →</a>
            </div>

            <div class="reference-card" data-animate>
                <div class="reference-icon">🔥</div>
                <h3>Foundry & Casting</h3>
                <ul>
                    <li>Fire Clay</li>
                    <li>Bentonite</li>
                    <li>Graphite</li>
                    <li>Limestone</li>
                    <li>Sodium Silicate</li>
                </ul>
                <a href="#foundry" class="reference-link">View All Foundry Products →</a>
            </div>

            <div class="reference-card" data-animate>
                <div class="reference-icon">🧼</div>
                <h3>Cleaning Solutions</h3>
                <ul>
                    <li>All Purpose Cleaners</li>
                    <li>Bleach & Disinfectants</li>
                    <li>Floor Polish</li>
                    <li>Tile Cleaners</li>
                    <li>Sanitizers</li>
                </ul>
                <a href="#household-chemicals" class="reference-link">View All Cleaning Products →</a>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT CTA -->
<section class="catalogue-contact-cta">
    <div class="full-width-container">
        <div class="catalogue-cta-content" data-animate>
            <h2>Can't Find What You're Looking For?</h2>
            <p>Our product specialists can help you find the right solution for your needs</p>
            <div class="catalogue-cta-buttons">
                <a href="/contact" class="btn-cta-contact">Contact Product Specialist</a>
                <a href="tel:+263776695368" class="btn-cta-phone">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Call: +263 77 669 5368
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Catalogue Page Styles */
.catalogue-hero {
    position: relative;
    height: 50vh;
    min-height: 450px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.catalogue-hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
}

/* .catalogue-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.92) 0%, rgba(28, 28, 30, 0.9) 100%);
} */

.catalogue-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 900px;
    padding: 0 20px;
}

.catalogue-hero-title {
    font-size: 52px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 20px;
}

.catalogue-hero-subtitle {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.95);
    line-height: 1.6;
    margin-bottom: 40px;
}

.catalogue-download-cta {
    margin-top: 30px;
}

.btn-download-pdf {
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

.btn-download-pdf:hover {
    background: #f8f9fa;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

.btn-download-pdf svg {
    width: 24px;
    height: 24px;
}

/* Filters */
.catalogue-filters-section {
    padding: 40px 0;
    background: #ffffff;
    border-bottom: 1px solid #e0e0e0;
    position: sticky;
    top: 0;
    z-index: 100;
}

.catalogue-filters {
    display: flex;
    gap: 30px;
    align-items: center;
    flex-wrap: wrap;
}

.filter-search {
    position: relative;
    flex: 1;
    min-width: 300px;
}

.filter-search svg {
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    color: #999;
}

.filter-search input {
    width: 100%;
    padding: 14px 20px 14px 50px;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-size: 15px;
    transition: all 0.3s ease;
}

.filter-search input:focus {
    outline: none;
    border-color: #1a9847;
}

.filter-categories {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.filter-category-btn {
    padding: 10px 20px;
    background: #f8f9fa;
    border: 2px solid transparent;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #333;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.filter-category-btn:hover {
    border-color: #1a9847;
    color: #1a9847;
}

.filter-category-btn.active {
    background: #1a9847;
    color: #ffffff;
    border-color: #1a9847;
}

/* Catalogue Content */
.catalogue-content-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.catalogue-category {
    background: #ffffff;
    border-radius: 16px;
    padding: 50px;
    margin-bottom: 40px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
}

.catalogue-category-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    padding-bottom: 25px;
    border-bottom: 3px solid #f0f0f0;
}

.category-header-left {
    display: flex;
    align-items: center;
    gap: 20px;
}

.catalogue-category-header h2 {
    font-size: 36px;
    font-weight: 800;
    color: #1c1c1e;
}

.product-count {
    padding: 8px 18px;
    background: rgba(26, 152, 71, 0.1);
    color: #1a9847;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
}

.btn-category-quote {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 28px;
    background: #1a9847;
    color: #ffffff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s ease;
    text-transform: uppercase;
}

.btn-category-quote:hover {
    background: #157a38;
    gap: 15px;
}

.btn-category-quote svg {
    width: 18px;
    height: 18px;
}

/* Product List */
.catalogue-products-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.catalogue-product-item {
    display: flex;
    gap: 25px;
    padding: 25px;
    background: #f8f9fa;
    border-radius: 12px;
    transition: all 0.3s ease;
    border-left: 4px solid transparent;
}

.catalogue-product-item:hover {
    background: #ffffff;
    border-left-color: #1a9847;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
}

.product-item-number {
    width: 50px;
    height: 50px;
    min-width: 50px;
    background: #1a9847;
    color: #ffffff;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: 700;
}

.product-item-content {
    flex: 1;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
}

.product-item-left h3 {
    font-size: 20px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 10px;
}

.product-item-tags {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.product-item-tags span {
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
}

.tag-category {
    background: rgba(26, 152, 71, 0.1);
    color: #1a9847;
}

.tag-grade {
    background: rgba(33, 150, 243, 0.1);
    color: #2196F3;
}

.tag-availability {
    background: rgba(76, 175, 80, 0.1);
    color: #4CAF50;
}

.product-item-actions {
    display: flex;
    gap: 12px;
}

.btn-product-info,
.btn-product-quote {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
    cursor: pointer;
}

.btn-product-info {
    background: transparent;
    color: #666;
    border: 2px solid #e0e0e0;
}

.btn-product-info:hover {
    border-color: #1a9847;
    color: #1a9847;
}

.btn-product-quote {
    background: #1a9847;
    color: #ffffff;
    border: 2px solid #1a9847;
}

.btn-product-quote:hover {
    background: #157a38;
}

.btn-product-info svg,
.btn-product-quote svg {
    width: 16px;
    height: 16px;
}

/* Bulk Inquiry */
.bulk-inquiry-section {
    padding: 80px 0;
    background: #ffffff;
}

.bulk-inquiry-card {
    background: linear-gradient(135deg, #1a9847 0%, #157a38 100%);
    padding: 60px 50px;
    border-radius: 16px;
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
}

.bulk-inquiry-icon {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
}

.bulk-inquiry-icon svg {
    width: 40px;
    height: 40px;
    color: #ffffff;
}

.bulk-inquiry-card h2 {
    font-size: 38px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 15px;
}

.bulk-inquiry-card p {
    font-size: 18px;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 35px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.btn-bulk-inquiry-large {
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

.btn-bulk-inquiry-large:hover {
    background: #f8f9fa;
    transform: translateY(-3px);
}

/* Quick Reference */
.quick-reference-section {
    padding: 100px 0;
    background: #f8f9fa;
}

.quick-reference-header {
    text-align: center;
    margin-bottom: 60px;
}

.quick-reference-header h2 {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 12px;
}

.quick-reference-header p {
    font-size: 18px;
    color: #666;
}

.quick-reference-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.reference-card {
    background: #ffffff;
    padding: 40px 35px;
    border-radius: 16px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    transition: all 0.4s ease;
    border-top: 4px solid #1a9847;
}

.reference-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.reference-icon {
    font-size: 56px;
    margin-bottom: 20px;
}

.reference-card h3 {
    font-size: 22px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 20px;
}

.reference-card ul {
    list-style: none;
    padding: 0;
    margin: 0 0 25px 0;
}

.reference-card li {
    padding: 8px 0;
    padding-left: 20px;
    color: #666;
    font-size: 14px;
    position: relative;
}

.reference-card li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: #1a9847;
    font-weight: 700;
}

.reference-link {
    color: #1a9847;
    font-weight: 600;
    font-size: 14px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.reference-link:hover {
    color: #157a38;
}

/* Contact CTA */
.catalogue-contact-cta {
    padding: 100px 0;
    background: #ffffff;
}

.catalogue-cta-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.catalogue-cta-content h2 {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 20px;
}

.catalogue-cta-content p {
    font-size: 20px;
    color: #666;
    margin-bottom: 40px;
}

.catalogue-cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-cta-contact,
.btn-cta-phone {
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

.btn-cta-contact {
    background: #1a9847;
    color: #ffffff;
}

.btn-cta-contact:hover {
    background: #157a38;
    transform: translateY(-3px);
}

.btn-cta-phone {
    background: transparent;
    color: #1a9847;
    border: 2px solid #1a9847;
}

.btn-cta-phone:hover {
    background: rgba(26, 152, 71, 0.1);
}

.btn-cta-phone svg {
    width: 20px;
    height: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .catalogue-hero-title {
        font-size: 36px;
    }

    .catalogue-filters {
        flex-direction: column;
    }

    .filter-search {
        width: 100%;
    }

    .filter-categories {
        width: 100%;
        flex-direction: column;
    }

    .filter-category-btn {
        width: 100%;
    }

    .catalogue-category {
        padding: 30px 20px;
    }

    .catalogue-category-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }

    .category-header-left {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
    }

    .product-item-content {
        flex-direction: column;
        align-items: flex-start;
    }

    .product-item-actions {
        width: 100%;
    }

    .btn-product-info,
    .btn-product-quote {
        flex: 1;
        justify-content: center;
    }

    .catalogue-cta-buttons {
        flex-direction: column;
    }
}
</style>

<script>
// Search functionality
const searchInput = document.getElementById('productSearch');
const productItems = document.querySelectorAll('.catalogue-product-item');

searchInput.addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    
    productItems.forEach(item => {
        const productName = item.getAttribute('data-product');
        if (productName.includes(searchTerm)) {
            item.style.display = 'flex';
        } else {
            item.style.display = 'none';
        }
    });
});

// Category filtering
const filterBtns = document.querySelectorAll('.filter-category-btn');
const categories = document.querySelectorAll('.catalogue-category');

filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter');
        
        // Update active button
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        
        // Filter categories
        categories.forEach(cat => {
            if (filter === 'all' || cat.getAttribute('data-category') === filter) {
                cat.style.display = 'block';
            } else {
                cat.style.display = 'none';
            }
        });
        
        // Scroll to first visible category
        if (filter !== 'all') {
            const targetCategory = document.querySelector(`[data-category="${filter}"]`);
            if (targetCategory) {
                targetCategory.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    });
});

// Product info modal
document.querySelectorAll('.btn-product-info').forEach(btn => {
    btn.addEventListener('click', function() {
        const product = this.getAttribute('data-product');
        alert(`Product Information for: ${product}\n\nFor detailed specifications, technical data sheets, and safety information, please contact our technical team or download the full PDF catalogue.`);
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
