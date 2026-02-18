@extends('layouts.app')

@section('content')

<!-- BLOG HERO -->
<section class="blog-hero">
    <div class="blog-hero-background" style="background-image: url('{{ asset('images/chem04.jpg') }}')"></div>
    <div class="blog-hero-overlay"></div>
    <div class="blog-hero-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <span>Blog & Insights</span>
        </div>
        <h1 class="blog-hero-title" data-animate>Industry Insights & News</h1>
        <p class="blog-hero-subtitle" data-animate>Expert knowledge on mining, industrial chemicals, and best practices</p>
    </div>
</section>

<!-- BLOG CATEGORIES -->
<section class="blog-categories-section">
    <div class="full-width-container">
        <div class="blog-categories" data-animate>
            <button class="blog-category-btn active" data-category="all">All Articles</button>
            <button class="blog-category-btn" data-category="mining">Mining</button>
            <button class="blog-category-btn" data-category="industrial">Industrial</button>
            <button class="blog-category-btn" data-category="safety">Safety & Compliance</button>
            <button class="blog-category-btn" data-category="technical">Technical Guides</button>
        </div>
    </div>
</section>

<!-- FEATURED ARTICLE -->
<section class="featured-article-section">
    <div class="full-width-container">
        <div class="featured-article" data-animate data-category="mining">
            <div class="featured-article-image" style="background-image: url('{{ asset('images/pic02.jpg') }}')">
                <div class="featured-badge">Featured Article</div>
            </div>
            <div class="featured-article-content">
                <div class="article-meta">
                    <span class="article-category mining">Mining</span>
                    <span class="article-date">December 15, 2024</span>
                    <span class="article-read-time">8 min read</span>
                </div>
                <h2>The Role of Lime in Gold Processing: A Comprehensive Guide</h2>
                <p class="article-excerpt">
                    Hydrated lime plays a crucial role in gold processing operations, from pH control to cyanide management. 
                    Understanding its applications can significantly improve processing efficiency and recovery rates in gold mining operations.
                </p>
                <div class="article-highlights">
                    <div class="highlight-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>pH Control & Optimization</span>
                    </div>
                    <div class="highlight-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Cyanide Management</span>
                    </div>
                    <div class="highlight-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>Recovery Rate Improvement</span>
                    </div>
                </div>
                <a href="#" class="btn-read-article">
                    Read Full Article
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- BLOG ARTICLES GRID -->
<section class="blog-articles-section">
    <div class="full-width-container">
        <div class="blog-articles-grid">
            
            <!-- Article 1: Dust Suppression -->
            <article class="blog-card" data-animate data-category="safety">
                <div class="blog-card-image" style="background-image: url('{{ asset('images/pic05.jpg') }}')">
                    <div class="blog-card-category safety">Safety & Compliance</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            December 10, 2024
                        </span>
                        <span class="blog-read-time">6 min read</span>
                    </div>
                    <h3>Dust Suppression Compliance in Zimbabwe Mining Operations</h3>
                    <p>Understanding regulatory requirements and best practices for dust control in Zimbabwean mines. Learn about stone dust applications and compliance standards.</p>
                    <div class="blog-card-footer">
                        <a href="#" class="blog-read-link">Read More →</a>
                        <div class="blog-tags">
                            <span class="blog-tag">Compliance</span>
                            <span class="blog-tag">Safety</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Article 2: Strata Control -->
            <article class="blog-card" data-animate data-category="technical">
                <div class="blog-card-image" style="background-image: url('{{ asset('images/chem01.jpg') }}')">
                    <div class="blog-card-category technical">Technical Guide</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            December 5, 2024
                        </span>
                        <span class="blog-read-time">10 min read</span>
                    </div>
                    <h3>Strata Control Chemicals: Selection and Application Guide</h3>
                    <p>A comprehensive guide to selecting and applying strata control chemicals in underground mining. Explore product types, installation methods, and safety protocols.</p>
                    <div class="blog-card-footer">
                        <a href="#" class="blog-read-link">Read More →</a>
                        <div class="blog-tags">
                            <span class="blog-tag">Underground Mining</span>
                            <span class="blog-tag">Technical</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Article 3: Quality Control -->
            <article class="blog-card" data-animate data-category="industrial">
                <div class="blog-card-image" style="background-image: url('{{ asset('images/chem03.jpg') }}')">
                    <div class="blog-card-category industrial">Industrial</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            November 28, 2024
                        </span>
                        <span class="blog-read-time">7 min read</span>
                    </div>
                    <h3>Industrial Detergent Quality Control: Manufacturing Standards</h3>
                    <p>Quality control measures for industrial detergent production. Learn about testing protocols, formulation standards, and maintaining consistency in manufacturing.</p>
                    <div class="blog-card-footer">
                        <a href="#" class="blog-read-link">Read More →</a>
                        <div class="blog-tags">
                            <span class="blog-tag">Quality Control</span>
                            <span class="blog-tag">Manufacturing</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Article 4: Supply Chain -->
            <article class="blog-card" data-animate data-category="mining">
                <div class="blog-card-image" style="background-image: url('{{ asset('images/pic04.jpg') }}')">
                    <div class="blog-card-category mining">Mining</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            November 20, 2024
                        </span>
                        <span class="blog-read-time">9 min read</span>
                    </div>
                    <h3>Mining Consumables Supply Chain: Challenges and Solutions</h3>
                    <p>Addressing supply chain challenges in the mining consumables industry. Strategies for maintaining reliable supply and managing logistics in Zimbabwe's mining sector.</p>
                    <div class="blog-card-footer">
                        <a href="#" class="blog-read-link">Read More →</a>
                        <div class="blog-tags">
                            <span class="blog-tag">Supply Chain</span>
                            <span class="blog-tag">Logistics</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Article 5: pH Management -->
            <article class="blog-card" data-animate data-category="technical">
                <div class="blog-card-image" style="background-image: url('{{ asset('images/agric03.jpg') }}')">
                    <div class="blog-card-category technical">Technical Guide</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            November 15, 2024
                        </span>
                        <span class="blog-read-time">5 min read</span>
                    </div>
                    <h3>pH Management in Mineral Processing Operations</h3>
                    <p>The critical role of pH control in mineral processing. Understanding the use of hydrated lime and other reagents for optimal process efficiency.</p>
                    <div class="blog-card-footer">
                        <a href="#" class="blog-read-link">Read More →</a>
                        <div class="blog-tags">
                            <span class="blog-tag">Processing</span>
                            <span class="blog-tag">Chemistry</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Article 6: Industrial Cleaning -->
            <article class="blog-card" data-animate data-category="industrial">
                <div class="blog-card-image" style="background-image: url('{{ asset('images/pic01.jpg') }}')">
                    <div class="blog-card-category industrial">Industrial</div>
                </div>
                <div class="blog-card-content">
                    <div class="blog-card-meta">
                        <span class="blog-date">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            November 8, 2024
                        </span>
                        <span class="blog-read-time">6 min read</span>
                    </div>
                    <h3>Selecting the Right Industrial Cleaning Products for Your Facility</h3>
                    <p>A practical guide to choosing industrial cleaning products based on application type, safety requirements, and cost-effectiveness.</p>
                    <div class="blog-card-footer">
                        <a href="#" class="blog-read-link">Read More →</a>
                        <div class="blog-tags">
                            <span class="blog-tag">Cleaning</span>
                            <span class="blog-tag">Facilities</span>
                        </div>
                    </div>
                </div>
            </article>

        </div>

        <!-- Load More Button -->
        <div class="blog-load-more" data-animate>
            <button class="btn-load-more">
                Load More Articles
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- NEWSLETTER SIGNUP -->
<section class="blog-newsletter-section">
    <div class="full-width-container">
        <div class="blog-newsletter-card" data-animate>
            <div class="newsletter-icon">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <h2>Stay Updated with Industry Insights</h2>
            <p>Subscribe to our newsletter for the latest articles, technical guides, and industry news</p>
            <form class="newsletter-form" action="/newsletter/subscribe" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
            <p class="newsletter-privacy">We respect your privacy. Unsubscribe anytime.</p>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="blog-cta-section">
    <div class="full-width-container">
        <div class="blog-cta-content" data-animate>
            <h2>Need Expert Advice?</h2>
            <p>Our technical team is available to discuss your specific challenges and requirements</p>
            <div class="blog-cta-buttons">
                <a href="/contact" class="btn-cta-primary">Contact Technical Team</a>
                <a href="/request-quote" class="btn-cta-secondary">Request Quote</a>
            </div>
        </div>
    </div>
</section>

<style>
/* Blog Page Styles */
.blog-hero {
    position: relative;
    height: 50vh;
    min-height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.blog-hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
}

/* .blog-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.9) 0%, rgba(28, 28, 30, 0.88) 100%);
} */

.blog-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 800px;
    padding: 0 20px;
}

.blog-hero-title {
    font-size: 52px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 20px;
}

.blog-hero-subtitle {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.95);
    line-height: 1.6;
}

/* Categories */
.blog-categories-section {
    padding: 40px 0;
    background: #ffffff;
    border-bottom: 1px solid #e0e0e0;
    position: sticky;
    top: 0;
    z-index: 100;
}

.blog-categories {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.blog-category-btn {
    padding: 12px 24px;
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

.blog-category-btn:hover {
    border-color: #1a9847;
    color: #1a9847;
}

.blog-category-btn.active {
    background: #1a9847;
    color: #ffffff;
    border-color: #1a9847;
}

/* Featured Article */
.featured-article-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.featured-article {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
}

.featured-article-image {
    height: 100%;
    min-height: 500px;
    background-size: cover;
    background-position: center;
    position: relative;
}

.featured-badge {
    position: absolute;
    top: 30px;
    left: 30px;
    background: #1a9847;
    color: #ffffff;
    padding: 10px 20px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.featured-article-content {
    padding: 60px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.article-meta {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    margin-bottom: 25px;
}

.article-category {
    padding: 6px 14px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
}

.article-category.mining {
    background: rgba(26, 152, 71, 0.1);
    color: #1a9847;
}

.article-date,
.article-read-time {
    font-size: 14px;
    color: #666;
}

.featured-article-content h2 {
    font-size: 36px;
    font-weight: 800;
    color: #1c1c1e;
    line-height: 1.3;
    margin-bottom: 20px;
}

.article-excerpt {
    font-size: 17px;
    line-height: 1.8;
    color: #666;
    margin-bottom: 30px;
}

.article-highlights {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-bottom: 35px;
}

.highlight-item {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 15px;
    color: #333;
    font-weight: 500;
}

.highlight-item svg {
    width: 20px;
    height: 20px;
    color: #1a9847;
}

.btn-read-article {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 16px 35px;
    background: #1a9847;
    color: #ffffff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 15px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    align-self: flex-start;
}

.btn-read-article:hover {
    background: #157a38;
    gap: 15px;
}

.btn-read-article svg {
    width: 18px;
    height: 18px;
}

/* Blog Articles Grid */
.blog-articles-section {
    padding: 80px 0;
    background: #ffffff;
}

.blog-articles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 40px;
}

.blog-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
    transition: all 0.4s ease;
    display: flex;
    flex-direction: column;
}

.blog-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
}

.blog-card-image {
    height: 220px;
    background-size: cover;
    background-position: center;
    position: relative;
}

.blog-card-category {
    position: absolute;
    top: 20px;
    left: 20px;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.blog-card-category.safety {
    background: rgba(255, 152, 0, 0.95);
    color: #ffffff;
}

.blog-card-category.technical {
    background: rgba(33, 150, 243, 0.95);
    color: #ffffff;
}

.blog-card-category.industrial {
    background: rgba(156, 39, 176, 0.95);
    color: #ffffff;
}

.blog-card-category.mining {
    background: rgba(26, 152, 71, 0.95);
    color: #ffffff;
}

.blog-card-content {
    padding: 30px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.blog-card-meta {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    font-size: 13px;
    color: #999;
}

.blog-date {
    display: flex;
    align-items: center;
    gap: 6px;
}

.blog-date svg {
    width: 14px;
    height: 14px;
}

.blog-card-content h3 {
    font-size: 22px;
    font-weight: 700;
    color: #1c1c1e;
    line-height: 1.4;
    margin-bottom: 15px;
}

.blog-card-content > p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
    margin-bottom: 25px;
    flex: 1;
}

.blog-card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 20px;
    border-top: 1px solid #f0f0f0;
}

.blog-read-link {
    color: #1a9847;
    font-weight: 600;
    font-size: 14px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.blog-read-link:hover {
    color: #157a38;
}

.blog-tags {
    display: flex;
    gap: 8px;
}

.blog-tag {
    padding: 5px 12px;
    background: #f8f9fa;
    color: #666;
    border-radius: 15px;
    font-size: 11px;
    font-weight: 600;
}

/* Load More */
.blog-load-more {
    text-align: center;
    margin-top: 60px;
}

.btn-load-more {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 16px 40px;
    background: #f8f9fa;
    color: #333;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    font-weight: 600;
    font-size: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
}

.btn-load-more:hover {
    border-color: #1a9847;
    color: #1a9847;
    background: #ffffff;
}

.btn-load-more svg {
    width: 18px;
    height: 18px;
}

/* Newsletter */
.blog-newsletter-section {
    padding: 100px 0;
    background: #f8f9fa;
}

.blog-newsletter-card {
    background: linear-gradient(135deg, #1a9847 0%, #157a38 100%);
    padding: 60px 50px;
    border-radius: 16px;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.newsletter-icon {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
}

.newsletter-icon svg {
    width: 40px;
    height: 40px;
    color: #ffffff;
}

.blog-newsletter-card h2 {
    font-size: 38px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 15px;
}

.blog-newsletter-card > p {
    font-size: 18px;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 35px;
}

.newsletter-form {
    display: flex;
    gap: 15px;
    max-width: 600px;
    margin: 0 auto 20px;
}

.newsletter-form input {
    flex: 1;
    padding: 16px 24px;
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 8px;
    font-size: 15px;
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    transition: all 0.3s ease;
}

.newsletter-form input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

.newsletter-form input:focus {
    outline: none;
    background: rgba(255, 255, 255, 0.15);
    border-color: rgba(255, 255, 255, 0.4);
}

.newsletter-form button {
    padding: 16px 35px;
    background: #ffffff;
    color: #1a9847;
    border: none;
    border-radius: 8px;
    font-weight: 700;
    font-size: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.newsletter-form button:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
}

.newsletter-privacy {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.8);
}

/* Blog CTA */
.blog-cta-section {
    padding: 100px 0;
    background: #ffffff;
}

.blog-cta-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.blog-cta-content h2 {
    font-size: 42px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 20px;
}

.blog-cta-content p {
    font-size: 20px;
    color: #666;
    margin-bottom: 40px;
}

.blog-cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-cta-primary,
.btn-cta-secondary {
    padding: 18px 40px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 16px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.btn-cta-primary {
    background: #1a9847;
    color: #ffffff;
}

.btn-cta-primary:hover {
    background: #157a38;
    transform: translateY(-3px);
}

.btn-cta-secondary {
    background: transparent;
    color: #1a9847;
    border: 2px solid #1a9847;
}

.btn-cta-secondary:hover {
    background: rgba(26, 152, 71, 0.1);
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
@media (max-width: 1200px) {
    .featured-article {
        grid-template-columns: 1fr;
    }

    .featured-article-image {
        min-height: 400px;
    }
}

@media (max-width: 768px) {
    .blog-hero-title {
        font-size: 36px;
    }

    .blog-articles-grid {
        grid-template-columns: 1fr;
    }

    .featured-article-content {
        padding: 40px 30px;
    }

    .newsletter-form {
        flex-direction: column;
    }

    .newsletter-form button {
        width: 100%;
    }

    .blog-cta-buttons {
        flex-direction: column;
    }

    .blog-categories {
        flex-direction: column;
    }

    .blog-category-btn {
        width: 100%;
    }
}
</style>

<script>
// Category filtering
const categoryBtns = document.querySelectorAll('.blog-category-btn');
const blogCards = document.querySelectorAll('.blog-card');
const featuredArticle = document.querySelector('.featured-article');

categoryBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const category = btn.getAttribute('data-category');
        
        // Update active button
        categoryBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        
        // Filter articles
        if (category === 'all') {
            blogCards.forEach(card => card.style.display = 'flex');
            if (featuredArticle) featuredArticle.style.display = 'grid';
        } else {
            blogCards.forEach(card => {
                if (card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
            
            if (featuredArticle) {
                if (featuredArticle.getAttribute('data-category') === category) {
                    featuredArticle.style.display = 'grid';
                } else {
                    featuredArticle.style.display = 'none';
                }
            }
        }
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

// Load more functionality (placeholder)
document.querySelector('.btn-load-more')?.addEventListener('click', function() {
    alert('Load more articles functionality would be implemented here with AJAX to fetch more blog posts.');
});
</script>

@endsection
