<nav class="navbar" id="mainNav">
    <div class="nav-container">
        @php
            $isHome = request()->path() === '/';
            $isAbout = request()->is('about') || request()->is('about/*');
            $isDivisions = request()->is('products') || request()->is('products/*') || request()->is('mining-industrial') || request()->is('agriculture') || request()->is('supreme-clean') || request()->is('catalogue');
            $isIndustries = request()->is('industries') || request()->is('industries/*');
            $isBlog = request()->is('blog') || request()->is('blog/*');
            $isContact = request()->is('contact') || request()->is('contact/*');
            $isQuote = request()->is('request-quote') || request()->is('request-quote/*');
        @endphp

        <div class="nav-logo">
            <a href="/">
                <img src="{{ asset('logo/logo03.svg') }}" alt="JMK Trading" class="logo-img">
            </a>
        </div>
        
        <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Mobile Menu Overlay -->
        <div class="nav-overlay" id="navOverlay"></div>

        <ul class="nav-menu" id="navMenu">
            <li><a href="/" class="nav-link {{ $isHome ? 'active' : '' }}">Home</a></li>
            
            <li class="nav-dropdown">
                <a href="/about" class="nav-link {{ $isAbout ? 'active' : '' }}">About Us <span class="dropdown-arrow">▾</span></a>
                <ul class="dropdown-menu">
                    <li><a href="/about#overview" class="{{ $isAbout ? 'active' : '' }}">Company Overview</a></li>
                    <li><a href="/about#team" class="{{ $isAbout ? 'active' : '' }}">Our Team</a></li>
                    <li><a href="/about#mission" class="{{ $isAbout ? 'active' : '' }}">Mission & Vision</a></li>
                    <li><a href="/about#certifications" class="{{ $isAbout ? 'active' : '' }}">Certifications</a></li>
                </ul>
            </li>

            <li class="nav-dropdown">
                <a href="/products" class="nav-link {{ $isDivisions ? 'active' : '' }}">Divisions <span class="dropdown-arrow">▾</span></a>
                <ul class="dropdown-menu">
                    <li><a href="/mining-industrial" class="{{ request()->is('mining-industrial') ? 'active' : '' }}">Mining & Industrial</a></li>
                    <li><a href="/agriculture" class="{{ request()->is('agriculture') ? 'active' : '' }}">Agriculture</a></li>
                    <li><a href="/supreme-clean" class="{{ request()->is('supreme-clean') ? 'active' : '' }}">Supreme Clean</a></li>
                    <li><a href="/catalogue" class="{{ request()->is('catalogue') ? 'active' : '' }}">Product Catalogue</a></li>
                </ul>
            </li>

            <li class="nav-dropdown">
                <a href="/industries" class="nav-link {{ $isIndustries ? 'active' : '' }}">Industries <span class="dropdown-arrow">▾</span></a>
                <ul class="dropdown-menu">
                    <li><a href="/industries/gold-mining" class="{{ request()->is('industries/gold-mining') ? 'active' : '' }}">Gold Mining</a></li>
                    <li><a href="/industries/platinum-mining" class="{{ request()->is('industries/platinum-mining') ? 'active' : '' }}">Platinum Mining</a></li>
                    <li><a href="/industries/coal-mining" class="{{ request()->is('industries/coal-mining') ? 'active' : '' }}">Coal Mining</a></li>
                    <li><a href="/industries/foundries" class="{{ request()->is('industries/foundries') ? 'active' : '' }}">Foundries</a></li>
                    <li><a href="/industries/agriculture" class="{{ request()->is('industries/agriculture') ? 'active' : '' }}">Agriculture</a></li>
                    <li><a href="/industries/manufacturing" class="{{ request()->is('industries/manufacturing') ? 'active' : '' }}">Manufacturing</a></li>
                </ul>
            </li>

            <li><a href="/blog" class="nav-link {{ $isBlog ? 'active' : '' }}">Blog</a></li>
            <li><a href="/contact" class="nav-link {{ $isContact ? 'active' : '' }}">Contact</a></li>
            <li class="nav-cta"><a href="/request-quote" class="btn-quote {{ $isQuote ? 'active' : '' }}">Get a Quote</a></li>
        </ul>
    </div>
</nav>

<script>
    // Sticky navbar on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('mainNav');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile menu toggle
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    const navOverlay = document.getElementById('navOverlay');
    const body = document.body;
    
    function toggleMenu() {
        navMenu.classList.toggle('active');
        navToggle.classList.toggle('active');
        navOverlay.classList.toggle('active');
        body.classList.toggle('menu-open');
    }

    function closeMenu() {
        navMenu.classList.remove('active');
        navToggle.classList.remove('active');
        navOverlay.classList.remove('active');
        body.classList.remove('menu-open');
    }

    navToggle.addEventListener('click', toggleMenu);
    navOverlay.addEventListener('click', closeMenu);

    // Close menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 992) {
                closeMenu();
            }
        });
    });

    // Mobile dropdown toggle
    const dropdowns = document.querySelectorAll('.nav-dropdown > a');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function(e) {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                this.parentElement.classList.toggle('active');
            }
        });
    });

    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && navMenu.classList.contains('active')) {
            closeMenu();
        }
    });
</script>
