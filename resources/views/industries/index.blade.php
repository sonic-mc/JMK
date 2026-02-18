@extends('layouts.app')

@section('content')

<!-- INDUSTRIES HERO -->
<section class="industries-hero">
    <div class="industries-hero-background" style="background-image: url('{{ asset('images/chem02.jpg') }}')"></div>
    <div class="industries-hero-overlay"></div>
    <div class="industries-hero-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <span>Industries We Serve</span>
        </div>
        <h1 class="industries-hero-title" data-animate>Industries We Serve</h1>
        <p class="industries-hero-subtitle" data-animate>Providing specialized chemical solutions across Zimbabwe's key industrial sectors</p>
        <div class="industries-hero-stats" data-animate>
            <div class="hero-stat-item">
                <span class="stat-number">6</span>
                <span class="stat-label">Key Sectors</span>
            </div>
            <div class="hero-stat-item">
                <span class="stat-number">500+</span>
                <span class="stat-label">Active Clients</span>
            </div>
            <div class="hero-stat-item">
                <span class="stat-number">12+</span>
                <span class="stat-label">Years Experience</span>
            </div>
        </div>
    </div>
    <div class="scroll-indicator-industries">
        <span>Explore Industries</span>
        <div class="scroll-arrow-industries"></div>
    </div>
</section>

<!-- INDUSTRIES OVERVIEW -->
<section class="industries-overview-section">
    <div class="full-width-container">
        <div class="overview-intro" data-animate>
            <div class="section-label-green">Our Industries</div>
            <h2 class="section-title-dark">Sector-Specific Expertise</h2>
            <div class="title-underline-center"></div>
            <p class="section-description-industries">With over 12 years of experience, JMK Trading has developed deep expertise in serving Zimbabwe's diverse industrial landscape. We understand the unique challenges and requirements of each sector, providing tailored chemical solutions that drive efficiency and productivity.</p>
        </div>

        <div class="industries-grid">
            <!-- Gold Mining -->
            <div class="industry-card" data-animate>
                <div class="industry-card-image" style="background-image: url('{{ asset('images/pic03.jpg') }}')">
                    <div class="industry-overlay"></div>
                    <div class="industry-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                </div>
                <div class="industry-card-content">
                    <h3>Gold Mining</h3>
                    <p>Comprehensive chemical solutions for gold processing operations including pH control, cyanide management, and mineral recovery optimization.</p>
                    <ul class="industry-solutions">
                        <li>White & Grey Hydrated Lime</li>
                        <li>Activated Carbon</li>
                        <li>Caustic Soda</li>
                        <li>Process Chemicals</li>
                    </ul>
                    <a href="{{ route('industries.gold-mining') }}" class="industry-btn">
                        <span>Explore Solutions</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Platinum Mining -->
            <div class="industry-card" data-animate>
                <div class="industry-card-image" style="background-image: url('{{ asset('images/pic04.jpg') }}')">
                    <div class="industry-overlay"></div>
                    <div class="industry-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>
                </div>
                <div class="industry-card-content">
                    <h3>Platinum Mining</h3>
                    <p>Specialized chemicals for platinum group metals extraction, flotation, and refining processes with technical support.</p>
                    <ul class="industry-solutions">
                        <li>Flotation Reagents</li>
                        <li>pH Modifiers</li>
                        <li>Processing Chemicals</li>
                        <li>Filtration Aids</li>
                    </ul>
                    <a href="{{ route('industries.platinum-mining') }}" class="industry-btn">
                        <span>Explore Solutions</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Coal Mining -->
            <div class="industry-card" data-animate>
                <div class="industry-card-image" style="background-image: url('{{ asset('images/pic05.jpg') }}')">
                    <div class="industry-overlay"></div>
                    <div class="industry-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                </div>
                <div class="industry-card-content">
                    <h3>Coal Mining</h3>
                    <p>Dust suppression, explosion control, and safety products for coal mining operations meeting compliance standards.</p>
                    <ul class="industry-solutions">
                        <li>Stone Dust</li>
                        <li>Dust Suppressants</li>
                        <li>Explosion Control Products</li>
                        <li>Safety Chemicals</li>
                    </ul>
                    <a href="{{ route('industries.coal-mining') }}" class="industry-btn">
                        <span>Explore Solutions</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Foundries -->
            <div class="industry-card" data-animate>
                <div class="industry-card-image" style="background-image: url('{{ asset('images/chem03.jpg') }}')">
                    <div class="industry-overlay"></div>
                    <div class="industry-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>
                        </svg>
                    </div>
                </div>
                <div class="industry-card-content">
                    <h3>Foundries</h3>
                    <p>Complete range of foundry chemicals and materials for metal casting, molding, and finishing operations.</p>
                    <ul class="industry-solutions">
                        <li>Bentonite & Fire Clay</li>
                        <li>Graphite & Coal Dust</li>
                        <li>Sodium Silicate</li>
                        <li>Blacking & Coatings</li>
                    </ul>
                    <a href="{{ route('industries.foundries') }}" class="industry-btn">
                        <span>Explore Solutions</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Agriculture -->
            <div class="industry-card" data-animate>
                <div class="industry-card-image" style="background-image: url('{{ asset('images/agric01.jpg') }}')">
                    <div class="industry-overlay"></div>
                    <div class="industry-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="industry-card-content">
                    <h3>Agriculture</h3>
                    <p>Quality agricultural products for soil improvement, crop nutrition, and livestock management across farming operations.</p>
                    <ul class="industry-solutions">
                        <li>Agricultural Lime</li>
                        <li>Chicken Grit</li>
                        <li>Soil Amendments</li>
                        <li>Fertilizer Components</li>
                    </ul>
                    <a href="{{ route('industries.agriculture') }}" class="industry-btn">
                        <span>Explore Solutions</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Manufacturing -->
            <div class="industry-card" data-animate>
                <div class="industry-card-image" style="background-image: url('{{ asset('images/chem01.jpg') }}')">
                    <div class="industry-overlay"></div>
                    <div class="industry-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                </div>
                <div class="industry-card-content">
                    <h3>Manufacturing</h3>
                    <p>Industrial chemicals, cleaning products, and raw materials for diverse manufacturing and processing operations.</p>
                    <ul class="industry-solutions">
                        <li>Industrial Cleaners</li>
                        <li>Solvents & Degreasers</li>
                        <li>Raw Materials</li>
                        <li>Processing Aids</li>
                    </ul>
                    <a href="{{ route('industries.manufacturing') }}" class="industry-btn">
                        <span>Explore Solutions</span>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US BY INDUSTRY -->
<section class="why-choose-industries">
    <div class="full-width-container">
        <div class="why-choose-content">
            <div class="why-header" data-animate>
                <div class="section-label-green">Our Commitment</div>
                <h2 class="section-title-dark">Why Industries Choose JMK Trading</h2>
                <div class="title-underline-center"></div>
                <p class="section-description-industries">Our commitment to excellence across all sectors</p>
            </div>
            <div class="why-grid">
                <div class="why-item" data-animate>
                    <div class="why-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3>Sector Expertise</h3>
                    <p>Deep understanding of industry-specific requirements and challenges</p>
                </div>
                <div class="why-item" data-animate>
                    <div class="why-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </div>
                    <h3>Technical Support</h3>
                    <p>On-site technical assistance and product application training</p>
                </div>
                <div class="why-item" data-animate>
                    <div class="why-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3>Quality Assurance</h3>
                    <p>Consistent quality meeting international standards</p>
                </div>
                <div class="why-item" data-animate>
                    <div class="why-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                    </div>
                    <h3>Reliable Supply</h3>
                    <p>Strategic location ensuring prompt delivery nationwide</p>
                </div>
                <div class="why-item" data-animate>
                    <div class="why-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3>Product Trials</h3>
                    <p>Free trials to ensure optimal performance before commitment</p>
                </div>
                <div class="why-item" data-animate>
                    <div class="why-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3>Partnership Approach</h3>
                    <p>Long-term relationships built on trust and reliability</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="industries-cta-section">
    <div class="full-width-container">
        <div class="industries-cta-content" data-animate>
            <h2>Discuss Your Operation's Needs</h2>
            <p>Let our technical team help you find the right chemical solutions for your specific industry requirements</p>
            <div class="industries-cta-buttons">
                <a href="/contact" class="btn-industries-primary">
                    <span>Schedule Consultation</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </a>
                <a href="/request-quote" class="btn-industries-secondary">
                    <span>Request Industry Quote</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== INDUSTRIES PAGE STYLES ===== */
.industries-hero {
    position: relative;
    height: 70vh;
    min-height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.industries-hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 120%;
    background-size: cover;
    background-position: center;
    will-change: transform;
}

/* .industries-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.94) 0%, rgba(28, 28, 30, 0.94) 100%);
} */

.industries-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 900px;
    padding: 0 20px;
}

.industries-hero-title {
    font-size: 62px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 25px;
    text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
}

.industries-hero-subtitle {
    font-size: 22px;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 50px;
    line-height: 1.6;
}

.industries-hero-stats {
    display: flex;
    gap: 60px;
    justify-content: center;
    flex-wrap: wrap;
}

.scroll-indicator-industries {
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

.scroll-arrow-industries {
    width: 24px;
    height: 40px;
    border: 2px solid rgba(255, 255, 255, 0.6);
    border-radius: 12px;
    position: relative;
}

.scroll-arrow-industries::before {
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

/* Overview Section */
.industries-overview-section {
    padding: 120px 0;
    background: #ffffff;
}

.overview-intro {
    text-align: center;
    max-width: 900px;
    margin: 0 auto 80px;
}

.section-description-industries {
    font-size: 18px;
    line-height: 1.8;
    color: #666;
    max-width: 900px;
    margin: 0 auto;
}

.industries-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
    gap: 40px;
}

.industry-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
}

.industry-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.industry-card-image {
    height: 250px;
    background-size: cover;
    background-position: center;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* .industry-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.85) 0%, rgba(28, 28, 30, 0.75) 100%);
} */

.industry-icon-box {
    position: relative;
    z-index: 2;
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 3px solid rgba(255, 255, 255, 0.3);
}

.industry-icon-box svg {
    width: 50px;
    height: 50px;
    color: #ffffff;
}

.industry-card-content {
    padding: 40px 35px;
}

.industry-card-content h3 {
    font-size: 28px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 15px;
}

.industry-card-content > p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
    margin-bottom: 25px;
}

.industry-solutions {
    list-style: none;
    padding: 0;
    margin: 0 0 30px 0;
}

.industry-solutions li {
    padding: 10px 0;
    padding-left: 25px;
    font-size: 14px;
    color: #555;
    position: relative;
    border-bottom: 1px solid #f0f0f0;
}

.industry-solutions li:last-child {
    border-bottom: none;
}

.industry-solutions li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #1a9847;
    font-weight: 700;
    font-size: 16px;
}

.industry-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 30px;
    background: #1a9847;
    color: #ffffff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.industry-btn:hover {
    background: #157a38;
    gap: 15px;
}

.industry-btn svg {
    width: 16px;
    height: 16px;
}

/* Why Choose Section */
.why-choose-industries {
    padding: 120px 0;
    background: #f8f9fa;
}

.why-header {
    text-align: center;
    margin-bottom: 60px;
}

.why-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
}

.why-item {
    background: #ffffff;
    padding: 40px 35px;
    border-radius: 16px;
    text-align: center;
    transition: all 0.4s ease;
    border-top: 4px solid #1a9847;
}

.why-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.why-icon-box {
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

.why-item:hover .why-icon-box {
    background: #1a9847;
    color: #ffffff;
    transform: scale(1.1);
}

.why-icon-box svg {
    width: 40px;
    height: 40px;
}

.why-item h3 {
    font-size: 22px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 12px;
}

.why-item p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
}

/* CTA Section */
.industries-cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #1a9847 0%, #157a38 100%);
}

.industries-cta-content {
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
}

.industries-cta-content h2 {
    font-size: 48px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 20px;
    line-height: 1.2;
}

.industries-cta-content p {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 50px;
}

.industries-cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-industries-primary,
.btn-industries-secondary {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 20px 45px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 700;
    font-size: 16px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.btn-industries-primary {
    background: #ffffff;
    color: #1a9847;
}

.btn-industries-primary:hover {
    background: #f8f9fa;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

.btn-industries-secondary {
    background: transparent;
    color: #ffffff;
    border: 2px solid #ffffff;
}

.btn-industries-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-3px);
}

.btn-industries-primary svg,
.btn-industries-secondary svg {
    width: 20px;
    height: 20px;
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

/* Responsive */
@media (max-width: 1200px) {
    .industries-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .industries-hero-title {
        font-size: 42px;
    }

    .industries-grid {
        grid-template-columns: 1fr;
    }

    .industries-cta-buttons {
        flex-direction: column;
    }

    .why-grid {
        grid-template-columns: 1fr;
    }

    .industries-hero-stats {
        gap: 30px;
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
    const heroBackground = document.querySelector('.industries-hero-background');
    if (heroBackground) {
        heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});
</script>

@endsection
