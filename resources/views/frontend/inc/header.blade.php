<header class="site-header" id="top">
    <nav class="container nav-shell" aria-label="Main navigation">
        <a class="brand" href="index.html" aria-label="Markit home"><img class="brand-logo"
                src="{{ url('frontend/assets/images/logo/logo.png') }}" alt="Markit" /></a>
        <div class="desktop-nav">
            <a href="{{ route('home') }}" data-nav-page="index.html">Home</a>
            <a href="{{ route('about-us') }}" data-nav-page="about-us.html">About Us</a>
            <a href="{{ route('seo') }}" data-nav-page="seo.html">SEO</a>
            <a href="{{ route('ppc') }}" data-nav-page="ppc.html">PPC</a>
            <a href="{{ route('social-media') }}" data-nav-page="social-media.html">Social Media</a>
            <a href="{{ route('email-marketing') }}" data-nav-page="email-marketing.html">Email Marketing</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('contact-us') }}" data-nav-page="contact-us.html">Contact</a>
        </div>
        <a class="button button-primary nav-cta" href="contact-us.html"><span>Get In Touch</span><lord-icon
                src="https://cdn.lordicon.com/vduvxizq.json" trigger="hover" target=".nav-cta" colors="primary:#0f6b8f"
                aria-hidden="true"></lord-icon></a>
        <button class="menu-toggle" id="menuBtn" type="button" aria-label="Open navigation" aria-expanded="false">
            <span></span><span></span>
        </button>
    </nav>
    <div class="mobile-menu" id="mobileMenu">
        <a href="{{ route('home') }}" data-nav-page="index.html">Home</a>
        <a href="{{ route('about-us') }}" data-nav-page="about-us.html">About Us</a>
        <a href="{{ route('seo') }}" data-nav-page="seo.html">SEO</a>
        <a href="{{ route('ppc') }}" data-nav-page="ppc.html">PPC</a>
        <a href="{{ route('social-media') }}" data-nav-page="social-media.html">Social Media</a>
        <a href="{{ route('email-marketing') }}" data-nav-page="email-marketing.html">Email Marketing</a>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('contact-us') }}" data-nav-page="contact-us.html">Contact</a>
    </div>
</header>
