@extends('layouts.app')

@section('content')

<!-- ABOUT HERO SECTION -->
<section class="about-hero" id="overview">
    <div class="about-hero-background" style="background-image: url('{{ asset('images/pic05.jpg') }}')"></div>
    <div class="about-hero-overlay"></div>
    <div class="about-hero-content">
        <div class="hero-breadcrumb" data-animate>
            <a href="/">Home</a>
            <span class="separator">/</span>
            <span>About Us</span>
        </div>
        <h1 class="about-hero-title" data-animate>Building Zimbabwe's Mining Future</h1>
        <p class="about-hero-subtitle" data-animate>Since 2014, we've been Zimbabwe's trusted partner in mining and industrial chemical solutions</p>
        <div class="about-hero-stats" data-animate>
            <div class="hero-stat-item">
                <span class="stat-number">12+</span>
                <span class="stat-label">Years Experience</span>
            </div>
            <div class="hero-stat-item">
                <span class="stat-number">30+</span>
                <span class="stat-label">Years Combined Expertise</span>
            </div>
            <div class="hero-stat-item">
                <span class="stat-number">500+</span>
                <span class="stat-label">Active Clients</span>
            </div>
        </div>
    </div>
    <div class="scroll-indicator-about">
        <span>Discover Our Story</span>
        <div class="scroll-arrow-about"></div>
    </div>
</section>

<!-- COMPANY OVERVIEW -->
<section class="company-introduction" id="company">
    <div class="full-width-container">
        <div class="intro-grid">
            <div class="intro-content" data-animate>
                <div class="section-label-green">Company Overview</div>
                <h2 class="section-title-dark">Strategically Positioned for Excellence</h2>
                <div class="title-underline-left"></div>
                
                <div class="intro-text">
                    <p class="lead-paragraph">
                        JMK Trading (Pvt) Ltd was duly incorporated in terms of the Zimbabwe Companies Act in 2014, 
                        formed primarily to supply consumables, chemicals, equipment and services to the Mining Industry in Zimbabwe.
                    </p>
                    <p>
                        Operating from Gweru, we are strategically central to all major mines in Zimbabwe, with access roads 
                        to most cities and towns passing through our location. This strategic positioning ensures speedy, 
                        efficient, and quick turnaround time to meet urgent mining requirements.
                    </p>
                    <p>
                        Beyond mining, JMK Trading also supplies quality products to the Agriculture and Manufacturing industries. 
                        As part of our diversification strategy, our chemical division branded <strong>Supreme Clean</strong> produces 
                        a wide variety of industrial and home-use detergents.
                    </p>
                </div>

                <div class="intro-highlights">
                    <div class="highlight-box">
                        <div class="highlight-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Strategic Location</h4>
                            <p>Gweru - Central to all mining operations</p>
                        </div>
                    </div>
                    <div class="highlight-box">
                        <div class="highlight-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Established 2014</h4>
                            <p>Incorporated under Zimbabwe Companies Act</p>
                        </div>
                    </div>
                    <div class="highlight-box">
                        <div class="highlight-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <div>
                            <h4>Multi-Industry Focus</h4>
                            <p>Mining, Agriculture & Manufacturing</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro-image-section" data-animate>
                <div class="intro-main-image" style="background-image: url('{{ asset('images/chem01.jpg') }}')">
                    <div class="image-badge">
                        <span class="badge-number">Est.</span>
                        <span class="badge-year">2014</span>
                    </div>
                </div>
                <div class="intro-stats-card">
                    <div class="stats-card-item">
                        <div class="stats-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <div class="stats-text">
                            <h5>Primary Focus</h5>
                            <p>Mining Industry Supply</p>
                        </div>
                    </div>
                    <div class="stats-card-item">
                        <div class="stats-icon-box">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <div class="stats-text">
                            <h5>Supreme Clean</h5>
                            <p>Industrial Detergents Division</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VISION, MISSION & VALUES -->
<section class="vision-mission-section" id="mission">
    <div class="full-width-container">
        <div class="section-header-center" data-animate>
            <div class="section-label-green">Our Foundation</div>
            <h2 class="section-title-dark">Vision, Mission & Core Values</h2>
            <div class="title-underline-center"></div>
            <p class="section-description-about">Guiding principles that drive our commitment to excellence</p>
        </div>

        <div class="vmv-grid">
            <!-- Vision -->
            <div class="vmv-card vision-card" data-animate>
                <div class="vmv-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3>Our Vision</h3>
                <div class="vmv-divider"></div>
                <p>To be the <strong>preferred supplier</strong> in providing high-quality Mining and Manufacturing consumables and services in Zimbabwe.</p>
            </div>

            <!-- Mission -->
            <div class="vmv-card mission-card" data-animate>
                <div class="vmv-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3>Our Mission</h3>
                <div class="vmv-divider"></div>
                <p>To <strong>engage and work</strong> with our customers and partners in the provision of quality mining supplies and technical services in Zimbabwe.</p>
            </div>

            <!-- Strategy -->
            <div class="vmv-card strategy-card" data-animate>
                <div class="vmv-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3>Our Strategy</h3>
                <div class="vmv-divider"></div>
                <p>To <strong>engage and create personalized relationships</strong> with all customers ensuring sustained and mutually beneficial business relationships while supplying high-quality products tailored to their requirements.</p>
            </div>
        </div>

        <!-- Core Values -->
        <div class="core-values-section" data-animate>
            <h3 class="values-heading">Core Values & Guiding Principles</h3>
            <div class="values-grid">
                <div class="value-item">
                    <div class="value-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h4>Innovation</h4>
                    <p>Continuous product development and improvement</p>
                </div>
                <div class="value-item">
                    <div class="value-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h4>Professionalism</h4>
                    <p>Excellence in service delivery and conduct</p>
                </div>
                <div class="value-item">
                    <div class="value-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h4>Integrity</h4>
                    <p>Ethical business practices and transparency</p>
                </div>
                <div class="value-item">
                    <div class="value-icon-box">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h4>Responsibility</h4>
                    <p>Commitment to quality and customer satisfaction</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LEADERSHIP TEAM -->
<section class="leadership-section" id="team">
    <div class="full-width-container">
        <div class="section-header-center" data-animate>
            <div class="section-label-green">Meet the Team</div>
            <h2 class="section-title-dark">Leadership & Expertise</h2>
            <div class="title-underline-center"></div>
            <p class="section-description-about">Visionary leaders with over 30 years combined mining industry experience</p>
        </div>

        <div class="leadership-intro" data-animate>
            <p class="leadership-intro-text">
                JMK Trading is the brainchild of visionary individuals who are passionate about the development 
                of the mining industry in Zimbabwe. Our management team boasts a combined more than 30 years of 
                mining experience gained both in Zimbabwe and South Africa. Our core competency is in tailor-making 
                solutions to different mining conditions backed by product demonstration and training to end users, 
                post-product consultancy, and continuous product development.
            </p>
        </div>

        <div class="leadership-grid">
            <!-- Managing Director -->
            <div class="leader-card" data-animate>
                <div class="leader-image" style="background: linear-gradient(135deg, #1a9847 0%, #157a38 100%); display: flex; align-items: center; justify-content: center;">
                    <div class="leader-placeholder">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <div class="leader-name-overlay">Julian T. Mashavakure</div>
                    </div>
                </div>
                <div class="leader-content">
                    <div class="leader-role">Managing Director</div>
                    <h3 class="leader-name">Julian T. Mashavakure</h3>
                    <div class="leader-credentials">BSc, BBA, LLB</div>
                    <div class="leader-experience">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>18 years experience</span>
                    </div>
                    <p class="leader-description">
                        Holds a BSc in Applied Chemistry (NUST), BBA in Marketing with IMM, and LLB (UNISA). 
                        Julian is a Rotarian (Past President of the Rotary Club of Gweru), past Chairman of 
                        Mudavanhu Children's Home, and past Vice President of the Zimbabwe National Chamber 
                        of Commerce (ZNCC) board.
                    </p>
                    <div class="leader-expertise">
                        <span class="expertise-tag">Chemistry</span>
                        <span class="expertise-tag">Marketing</span>
                        <span class="expertise-tag">Legal</span>
                        <span class="expertise-tag">Leadership</span>
                    </div>
                </div>
            </div>

            <!-- Product Development -->
            <div class="leader-card" data-animate>
                <div class="leader-image" style="background: linear-gradient(135deg, #1a9847 0%, #157a38 100%); display: flex; align-items: center; justify-content: center;">
                    <div class="leader-placeholder">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <div class="leader-name-overlay">Abe Moseki</div>
                    </div>
                </div>
                <div class="leader-content">
                    <div class="leader-role">Product Development</div>
                    <h3 class="leader-name">Abe Moseki</h3>
                    <div class="leader-credentials">Mining Specialist</div>
                    <div class="leader-experience">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>23 years experience</span>
                    </div>
                    <p class="leader-description">
                        23 years in the mining industry with 5 years spent in Zimbabwe mines. Extensive knowledge 
                        of strata control, ventilation and explosives. Has received specialized training in collision 
                        warning systems in underground mining environments.
                    </p>
                    <div class="leader-expertise">
                        <span class="expertise-tag">Strata Control</span>
                        <span class="expertise-tag">Ventilation</span>
                        <span class="expertise-tag">Explosives</span>
                        <span class="expertise-tag">Safety Systems</span>
                    </div>
                </div>
            </div>

            <!-- Business Development -->
            <div class="leader-card" data-animate>
                <div class="leader-image" style="background: linear-gradient(135deg, #1a9847 0%, #157a38 100%); display: flex; align-items: center; justify-content: center;">
                    <div class="leader-placeholder">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <div class="leader-name-overlay">Mike Mureyani</div>
                    </div>
                </div>
                <div class="leader-content">
                    <div class="leader-role">Business Development</div>
                    <h3 class="leader-name">Mike Mureyani</h3>
                    <div class="leader-credentials">BSc, MBA</div>
                    <div class="leader-experience">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>25 years experience</span>
                    </div>
                    <p class="leader-description">
                        25 years of experience in Zimbabwe's mining industry. Has received training in product 
                        demonstration on strata control installation products and equipment. Possesses vast knowledge 
                        of mining chemicals and processes.
                    </p>
                    <div class="leader-expertise">
                        <span class="expertise-tag">Mining Chemicals</span>
                        <span class="expertise-tag">Product Training</span>
                        <span class="expertise-tag">Business Strategy</span>
                        <span class="expertise-tag">Client Relations</span>
                    </div>
                </div>
            </div>

            <!-- Finance Director -->
            <div class="leader-card" data-animate>
                <div class="leader-image" style="background: linear-gradient(135deg, #1a9847 0%, #157a38 100%); display: flex; align-items: center; justify-content: center;">
                    <div class="leader-placeholder">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <div class="leader-name-overlay">Kudakwashe Mashavakure</div>
                    </div>
                </div>
                <div class="leader-content">
                    <div class="leader-role">Finance Director</div>
                    <h3 class="leader-name">Kudakwashe Mashavakure</h3>
                    <div class="leader-credentials">BCom, MCom, CPA(Z)</div>
                    <div class="leader-experience">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>15+ years experience</span>
                    </div>
                    <p class="leader-description">
                        Holds a BComm Accounting degree from Solusi University and MComm Accounting from Midlands 
                        State University. Certified Public Accountant (CPA)Z with more than 15 years of experience 
                        in Retail, Legal and Manufacturing sectors.
                    </p>
                    <div class="leader-expertise">
                        <span class="expertise-tag">Financial Management</span>
                        <span class="expertise-tag">Accounting</span>
                        <span class="expertise-tag">Strategic Planning</span>
                        <span class="expertise-tag">Compliance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CERTIFICATIONS -->
<section class="certifications-section" id="certifications">
    <div class="full-width-container">
        <div class="section-header-center" data-animate>
            <div class="section-label-green">Quality Assurance</div>
            <h2 class="section-title-dark">Certifications & Compliance</h2>
            <div class="title-underline-center"></div>
            <p class="section-description-about">Committed to international standards and regulatory compliance</p>
        </div>

        <div class="certifications-grid">
            <div class="cert-card" data-animate>
                <div class="cert-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3>Zimbabwe Companies Act</h3>
                <p>Duly incorporated and compliant with Zimbabwe Companies Act regulations</p>
            </div>

            <div class="cert-card" data-animate>
                <div class="cert-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3>Quality Standards</h3>
                <p>All products meet international quality standards and specifications</p>
            </div>

            <div class="cert-card" data-animate>
                <div class="cert-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3>Mining Compliance</h3>
                <p>Adherence to Zimbabwe mining industry regulations and safety standards</p>
            </div>

            <div class="cert-card" data-animate>
                <div class="cert-icon-box">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3>Environmental Standards</h3>
                <p>Commitment to environmental responsibility and sustainable practices</p>
            </div>
        </div>
    </div>
</section>

<!-- OUR APPROACH -->
<section class="approach-section">
    <div class="approach-background" style="background-image: url('{{ asset('images/chem05.jpg') }}')"></div>
    <div class="approach-overlay"></div>
    <div class="full-width-container">
        <div class="approach-content">
            <div class="section-header-center" data-animate>
                <div class="section-label-white">Our Methodology</div>
                <h2 class="section-title-white">Our Customer-Centric Approach</h2>
                <div class="title-underline-white"></div>
                <p class="section-description-white">
                    A proven methodology refined since 2014, built on listening, testing, and delivering excellence
                </p>
            </div>

            <div class="approach-steps">
                <div class="approach-step" data-animate>
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
                            </svg>
                        </div>
                        <h3>Listen & Understand</h3>
                        <p>We listen attentively to our customers' challenges and operational requirements, ensuring we fully understand their unique mining conditions.</p>
                    </div>
                </div>

                <div class="approach-step" data-animate>
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                        </div>
                        <h3>Tailored Solutions</h3>
                        <p>We offer customized solutions from our comprehensive product range, specifically matched to your operational needs and best practice expectations.</p>
                    </div>
                </div>

                <div class="approach-step" data-animate>
                    <div class="step-number">03</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3>Free Product Trials</h3>
                        <p>We request a free trial period on your operations, allowing you to compare results against your best practice expectations before commitment.</p>
                    </div>
                </div>

                <div class="approach-step" data-animate>
                    <div class="step-number">04</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h3>Training & Support</h3>
                        <p>During trials, we train end users on proper product application. Their input guides rapid product development and optimization.</p>
                    </div>
                </div>

                <div class="approach-step" data-animate>
                    <div class="step-number">05</div>
                    <div class="step-content">
                        <div class="step-icon">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3>Ongoing Partnership</h3>
                        <p>We handle your consumables supply concerns, allowing you to concentrate on your core mining business with confidence.</p>
                    </div>
                </div>
            </div>

            <div class="approach-value-proposition" data-animate>
                <div class="value-prop-card">
                    <h3>Why Our Approach Works</h3>
                    <p>
                        Our methodology has been developed, tested and refined since our inception in 2014. We have 
                        steadily built a reputation as quality and responsive professionals in the industry, adding 
                        value to our customers throughout the entire project process.
                    </p>
                    <div class="approach-benefits">
                        <div class="benefit-item">
                            <span class="benefit-check">✓</span>
                            <span>Risk-free product testing</span>
                        </div>
                        <div class="benefit-item">
                            <span class="benefit-check">✓</span>
                            <span>Hands-on training included</span>
                        </div>
                        <div class="benefit-item">
                            <span class="benefit-check">✓</span>
                            <span>Rapid product customization</span>
                        </div>
                        <div class="benefit-item">
                            <span class="benefit-check">✓</span>
                            <span>Focus on your core business</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="about-cta-section">
    <div class="full-width-container">
        <div class="about-cta-content" data-animate>
            <h2>Ready to Experience the JMK Difference?</h2>
            <p>Contact our technical team today for personalized solutions and expert guidance</p>
            <div class="cta-buttons-about">
                <a href="/contact" class="btn-cta-primary">
                    <span>Contact Our Technical Team</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="/request-quote" class="btn-cta-secondary">
                    <span>Request a Product Trial</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* ===== COMPLETE ABOUT PAGE STYLES ===== */

/* Hero Section */
.about-hero {
    position: relative;
    height: 70vh;
    min-height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.about-hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 120%;
    background-size: cover;
    background-position: center;
    will-change: transform;
}

/* .about-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.94) 0%, rgba(21, 122, 56, 0.94) 100%);
} */

.about-hero-content {
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

.about-hero-title {
    font-size: 62px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.1;
    margin-bottom: 25px;
    text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.3);
}

.about-hero-subtitle {
    font-size: 22px;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 50px;
    line-height: 1.6;
}

.about-hero-stats {
    display: flex;
    gap: 60px;
    justify-content: center;
    flex-wrap: wrap;
}

.hero-stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.hero-stat-item .stat-number {
    font-size: 48px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1;
    margin-bottom: 8px;
}

.hero-stat-item .stat-label {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.85);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.scroll-indicator-about {
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

.scroll-arrow-about {
    width: 24px;
    height: 40px;
    border: 2px solid rgba(255, 255, 255, 0.6);
    border-radius: 12px;
    position: relative;
}

.scroll-arrow-about::before {
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

/* Company Introduction */
.company-introduction {
    padding: 120px 0;
    background: #ffffff;
}

.intro-grid {
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 80px;
    align-items: center;
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

.intro-text {
    margin-bottom: 40px;
}

.lead-paragraph {
    font-size: 19px;
    font-weight: 500;
    line-height: 1.8;
    color: #333;
    margin-bottom: 20px;
}

.intro-text p {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 18px;
}

.intro-text strong {
    color: #1a9847;
    font-weight: 600;
}

.intro-highlights {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.highlight-box {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    padding: 25px;
    background: #f8f9fa;
    border-radius: 12px;
    border-left: 4px solid #1a9847;
    transition: all 0.3s ease;
}

.highlight-box:hover {
    background: #ffffff;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transform: translateX(5px);
}

.highlight-icon-box {
    width: 56px;
    height: 56px;
    min-width: 56px;
    background: #1a9847;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
}

.highlight-icon-box svg {
    width: 28px;
    height: 28px;
}

.highlight-box h4 {
    font-size: 18px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 6px;
}

.highlight-box p {
    font-size: 15px;
    color: #666;
}

.intro-image-section {
    position: relative;
}

.intro-main-image {
    width: 100%;
    height: 500px;
    background-size: cover;
    background-position: center;
    border-radius: 16px;
    position: relative;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    overflow: hidden;
}

.image-badge {
    position: absolute;
    top: 30px;
    right: 30px;
    background: rgba(26, 152, 71, 0.95);
    backdrop-filter: blur(10px);
    padding: 20px 30px;
    border-radius: 12px;
    text-align: center;
}

.badge-number {
    display: block;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
    font-weight: 600;
    margin-bottom: 5px;
}

.badge-year {
    display: block;
    font-size: 36px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1;
}

.intro-stats-card {
    position: absolute;
    bottom: -40px;
    left: 30px;
    right: 30px;
    background: #ffffff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.15);
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.stats-card-item {
    display: flex;
    align-items: center;
    gap: 20px;
}

.stats-icon-box {
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

.stats-icon-box svg {
    width: 24px;
    height: 24px;
}

.stats-text h5 {
    font-size: 16px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 4px;
}

.stats-text p {
    font-size: 14px;
    color: #666;
    margin: 0;
}

/* Vision Mission Values */
.vision-mission-section {
    padding: 120px 0;
    background: #f8f9fa;
}

.section-description-about {
    font-size: 18px;
    color: #666;
    max-width: 700px;
    margin: 0 auto;
}

.vmv-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-bottom: 80px;
}

.vmv-card {
    background: #ffffff;
    padding: 50px 40px;
    border-radius: 16px;
    text-align: center;
    transition: all 0.4s ease;
    border-top: 5px solid #1a9847;
}

.vmv-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
}

.vmv-icon {
    width: 80px;
    height: 80px;
    background: rgba(26, 152, 71, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
    color: #1a9847;
    transition: all 0.3s ease;
}

.vmv-card:hover .vmv-icon {
    background: #1a9847;
    color: #ffffff;
    transform: scale(1.1);
}

.vmv-icon svg {
    width: 40px;
    height: 40px;
}

.vmv-card h3 {
    font-size: 28px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 20px;
}

.vmv-divider {
    width: 60px;
    height: 3px;
    background: #1a9847;
    margin: 0 auto 25px;
}

.vmv-card p {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
}

.core-values-section {
    background: #ffffff;
    padding: 60px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
}

.values-heading {
    font-size: 32px;
    font-weight: 700;
    text-align: center;
    color: #1c1c1e;
    margin-bottom: 50px;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
}

.value-item {
    text-align: center;
}

.value-icon-box {
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

.value-item:hover .value-icon-box {
    background: #1a9847;
    color: #ffffff;
    transform: scale(1.1);
}

.value-icon-box svg {
    width: 32px;
    height: 32px;
}

.value-item h4 {
    font-size: 20px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 10px;
}

.value-item p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
}

/* Leadership Section */
.leadership-section {
    padding: 120px 0;
    background: #ffffff;
}

.leadership-intro {
    max-width: 1000px;
    margin: 0 auto 80px;
    text-align: center;
}

.leadership-intro-text {
    font-size: 18px;
    line-height: 1.9;
    color: #555;
}

.leadership-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 50px;
}

.leader-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
}

.leader-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.leader-image {
    height: 350px;
    overflow: hidden;
    background: #f0f0f0;
}

.leader-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 20px;
    color: #ffffff;
}

.leader-placeholder svg {
    width: 100px;
    height: 100px;
    opacity: 0.4;
}

.leader-name-overlay {
    font-size: 20px;
    font-weight: 700;
    text-align: center;
    padding: 0 20px;
}

.leader-content {
    padding: 40px;
}

.leader-role {
    font-size: 14px;
    font-weight: 600;
    color: #1a9847;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-bottom: 10px;
}

.leader-name {
    font-size: 28px;
    font-weight: 800;
    color: #1c1c1e;
    margin-bottom: 8px;
}

.leader-credentials {
    font-size: 15px;
    color: #666;
    font-weight: 500;
    margin-bottom: 15px;
}

.leader-experience {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 20px;
    background: #f8f9fa;
    border-radius: 8px;
    margin-bottom: 20px;
}

.leader-experience svg {
    width: 20px;
    height: 20px;
    color: #1a9847;
}

.leader-experience span {
    font-size: 14px;
    font-weight: 600;
    color: #333;
}

.leader-description {
    font-size: 15px;
    line-height: 1.8;
    color: #555;
    margin-bottom: 25px;
}

.leader-expertise {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.expertise-tag {
    padding: 8px 16px;
    background: rgba(26, 152, 71, 0.1);
    color: #1a9847;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    border: 1px solid rgba(26, 152, 71, 0.2);
}

/* Certifications */
.certifications-section {
    padding: 120px 0;
    background: #f8f9fa;
}

.certifications-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 35px;
    margin-top: 60px;
}

.cert-card {
    background: #ffffff;
    padding: 40px 30px;
    border-radius: 16px;
    text-align: center;
    transition: all 0.4s ease;
    border-top: 4px solid #1a9847;
}

.cert-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
}

.cert-icon-box {
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

.cert-card:hover .cert-icon-box {
    background: #1a9847;
    color: #ffffff;
    transform: scale(1.1);
}

.cert-icon-box svg {
    width: 40px;
    height: 40px;
}

.cert-card h3 {
    font-size: 22px;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 15px;
}

.cert-card p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
}

/* Approach Section */
.approach-section {
    position: relative;
    padding: 120px 0;
    overflow: hidden;
}

.approach-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
}

.approach-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(26, 152, 71, 0.94) 0%, rgba(28, 28, 30, 0.94) 100%);
}

.approach-content {
    position: relative;
    z-index: 2;
}

.section-label-white {
    display: inline-block;
    background: rgba(255, 255, 255, 0.15);
    color: #ffffff;
    padding: 8px 20px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 20px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

.section-title-white {
    font-size: 46px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.2;
    margin-bottom: 20px;
}

.title-underline-white {
    width: 80px;
    height: 4px;
    background: #ffffff;
    margin: 20px auto 30px;
}

.section-description-white {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 80px;
}

.approach-steps {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 30px;
    margin-bottom: 80px;
}

.approach-step {
    position: relative;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(10px);
    padding: 40px 30px;
    border-radius: 16px;
    border: 1px solid rgba(255, 255, 255, 0.15);
    transition: all 0.4s ease;
}

.approach-step:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-10px);
}

.step-number {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 48px;
    font-weight: 800;
    color: rgba(255, 255, 255, 0.15);
}

.step-icon {
    width: 64px;
    height: 64px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    margin-bottom: 25px;
}

.step-icon svg {
    width: 32px;
    height: 32px;
}

.approach-step h3 {
    font-size: 20px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 15px;
}

.approach-step p {
    font-size: 14px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.85);
}

.approach-value-proposition {
    max-width: 1000px;
    margin: 0 auto;
}

.value-prop-card {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    padding: 50px;
    border-radius: 16px;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.value-prop-card h3 {
    font-size: 32px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 20px;
}

.value-prop-card > p {
    font-size: 17px;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 35px;
}

.approach-benefits {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.benefit-item {
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 16px;
    color: #ffffff;
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
    color: #ffffff;
    font-weight: 700;
    flex-shrink: 0;
}

/* CTA Section */
.about-cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #1a9847 0%, #157a38 100%);
}

.about-cta-content {
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
}

.about-cta-content h2 {
    font-size: 48px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 20px;
    line-height: 1.2;
}

.about-cta-content > p {
    font-size: 20px;
    color: rgba(255, 255, 255, 0.95);
    margin-bottom: 50px;
}

.cta-buttons-about {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-cta-primary,
.btn-cta-secondary {
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

.btn-cta-primary {
    background: #ffffff;
    color: #1a9847;
}

.btn-cta-primary:hover {
    background: #f8f9fa;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

.btn-cta-secondary {
    background: transparent;
    color: #ffffff;
    border: 2px solid #ffffff;
}

.btn-cta-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-3px);
}

.btn-cta-primary svg,
.btn-cta-secondary svg {
    width: 20px;
    height: 20px;
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}

section[id] {
    scroll-margin-top: 100px;
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
    .intro-grid {
        grid-template-columns: 1fr;
        gap: 60px;
    }

    .leadership-grid {
        grid-template-columns: 1fr;
    }

    .approach-steps {
        grid-template-columns: 1fr;
    }

    .values-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .about-hero-title {
        font-size: 42px;
    }

    .section-title-dark,
    .section-title-white {
        font-size: 36px;
    }

    .vmv-grid,
    .values-grid {
        grid-template-columns: 1fr;
    }

    .full-width-container {
        padding: 0 20px;
    }

    .approach-benefits {
        grid-template-columns: 1fr;
    }

    .cta-buttons-about {
        flex-direction: column;
    }

    .about-hero-stats {
        gap: 30px;
    }

    .intro-stats-card {
        position: static;
        margin-top: 20px;
    }

    .intro-main-image {
        height: 400px;
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
    const heroBackground = document.querySelector('.about-hero-background');
    if (heroBackground) {
        heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});
</script>

@endsection
