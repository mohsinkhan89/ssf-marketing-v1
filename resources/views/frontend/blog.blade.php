@extends('frontend.layouts.master')

@section('metas')
<meta name="description" content="Actionable digital marketing strategies, SEO guidance, PPC ideas, social media trends, and analytics insights from SSF Marketing." />
@endsection

@section('title')
Blog & Insights - SSF Marketing
@endsection

@section('css')
@endsection

@section('body')
@php
    $categories = [
        ['name' => 'All Categories', 'count' => 24, 'icon' => 'fa-border-all'],
        ['name' => 'SEO', 'count' => 6, 'icon' => 'fa-magnifying-glass-chart'],
        ['name' => 'PPC Advertising', 'count' => 5, 'icon' => 'fa-bullhorn'],
        ['name' => 'Social Media', 'count' => 4, 'icon' => 'fa-share-nodes'],
        ['name' => 'Content Marketing', 'count' => 3, 'icon' => 'fa-file-lines'],
        ['name' => 'Email Marketing', 'count' => 3, 'icon' => 'fa-envelope'],
        ['name' => 'Analytics', 'count' => 3, 'icon' => 'fa-chart-line'],
    ];

    $articles = [
        [
            'category' => 'SEO',
            'date' => 'May 20, 2025',
            'title' => '10 On-Page SEO Best Practices That Actually Work',
            'excerpt' => 'Learn the on-page SEO techniques that can boost your rankings and drive organic traffic.',
            'image' => 'frontend/assets/images/our-work/work-local-seo.png',
        ],
        [
            'category' => 'PPC',
            'date' => 'May 18, 2025',
            'title' => 'How to Optimize Your PPC Campaigns for Maximum ROI',
            'excerpt' => 'Discover proven strategies to lower ad spend and increase conversions.',
            'image' => 'frontend/assets/images/proven-results/proven-dashboard.png',
        ],
        [
            'category' => 'Social Media',
            'date' => 'May 15, 2025',
            'title' => 'Social Media Trends to Watch in 2025',
            'excerpt' => 'Stay ahead of the curve with the latest social media trends shaping the digital world.',
            'image' => 'frontend/assets/images/our-work/work-social-media.png',
        ],
        [
            'category' => 'Email Marketing',
            'date' => 'May 12, 2025',
            'title' => 'Email Marketing Strategies That Boost Engagement',
            'excerpt' => 'Build stronger connections and drive more conversions with these email marketing tips.',
            'image' => 'frontend/assets/images/email-marketing/campaign/product-launch.png',
        ],
        [
            'category' => 'Analytics',
            'date' => 'May 10, 2025',
            'title' => 'Understanding Data Analytics for Better Decisions',
            'excerpt' => 'Use data to uncover opportunities and make smarter marketing decisions.',
            'image' => 'frontend/assets/images/hero-section/hero-dashboard-card.png',
        ],
        [
            'category' => 'Content Marketing',
            'date' => 'May 8, 2025',
            'title' => 'Content Marketing: A Complete Guide for 2025',
            'excerpt' => 'A step-by-step guide to create content that attracts, engages, and converts.',
            'image' => 'frontend/assets/images/about/about-bg.png',
        ],
        [
            'category' => 'SEO',
            'date' => 'May 5, 2025',
            'title' => 'Technical SEO: The Hidden Key to Higher Rankings',
            'excerpt' => 'Fix technical issues and improve your site performance for better search visibility.',
            'image' => 'frontend/assets/images/seo/banners/hero-section.png',
        ],
        [
            'category' => 'PPC',
            'date' => 'May 3, 2025',
            'title' => 'Remarketing Strategies That Bring Results',
            'excerpt' => 'Re-engage your audience and turn visitors into loyal customers.',
            'image' => 'frontend/assets/images/our-work/work-lead-generation.png',
        ],
        [
            'category' => 'Social Media',
            'date' => 'May 1, 2025',
            'title' => 'How to Build a Strong Social Media Strategy',
            'excerpt' => 'A practical guide to building your brand presence and growing your audience.',
            'image' => 'frontend/assets/images/banner/socialmedia-hero-banner.png',
        ],
    ];
@endphp

<main>
    <section class="blog-hero">
        <div class="hero-glow"></div>
        <div class="container blog-hero-inner">
            <div class="blog-hero-copy reveal">
                <div class="kicker"><span></span> Our Blog</div>
                <h1>Blog &amp; <em>Insights</em></h1>
                <p>Actionable strategies, industry updates, and expert tips to help your business grow.</p>
            </div>
            <div class="blog-hero-art reveal delay-1" aria-hidden="true">
                <img src="{{ url('frontend/assets/images/hero-section/hero-dashboard-card.png') }}" alt="" />
            </div>
        </div>
    </section>

    <section class="logo-strip blog-logo-strip" aria-label="Trusted companies">
        <div class="container logo-row">
            <div class="logo-slider">
                <div class="logo-viewport">
                    <div class="logos">
                        @forelse ($trustedBrands as $brand)
                            <div class="logo-slide">
                                @if ($brand->website_url)
                                    <a href="{{ $brand->website_url }}" target="_blank" rel="noopener" aria-label="Open {{ $brand->name }} website">
                                        <img src="{{ url($brand->logo_path) }}" alt="{{ $brand->name }}">
                                    </a>
                                @else
                                    <img src="{{ url($brand->logo_path) }}" alt="{{ $brand->name }}">
                                @endif
                            </div>
                        @empty
                            <div class="logo-slide"><img src="{{ url('frontend/assets/images/trusted-business/trusted-logo-ziply.png') }}" alt="Ziply" /></div>
                            <div class="logo-slide"><img src="{{ url('frontend/assets/images/trusted-business/trusted-logo-wave.png') }}" alt="Wave" /></div>
                            <div class="logo-slide"><img src="{{ url('frontend/assets/images/trusted-business/trusted-logo-kanba.png') }}" alt="Kanba" /></div>
                            <div class="logo-slide"><img src="{{ url('frontend/assets/images/trusted-business/trusted-logo-holler.png') }}" alt="Holler" /></div>
                        @endforelse
                    </div>
                </div>
                <div class="logo-pagination" aria-label="Trusted company slides"></div>
            </div>
        </div>
    </section>

    <section class="blog-listing-section" id="articles">
        <div class="container blog-layout">
            <aside class="blog-sidebar">
                <form class="blog-search" action="{{ route('blog') }}" method="get">
                    <label for="blog-search-input" class="sr-only">Search articles</label>
                    <input id="blog-search-input" type="search" name="search" placeholder="Search articles..." />
                    <button type="submit" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <div class="blog-filter-title"><i class="fa-solid fa-angle-left"></i> Categories</div>
                <div class="blog-category-list">
                    @foreach ($categories as $index => $category)
                        <a class="{{ $index === 0 ? 'active' : '' }}" href="{{ route('blog') }}">
                            <span><i class="fa-solid {{ $category['icon'] }}"></i>{{ $category['name'] }}</span>
                            <b>{{ $category['count'] }}</b>
                        </a>
                    @endforeach
                </div>

                <div class="blog-newsletter">
                    <h3>Stay ahead with <em>insights.</em></h3>
                    <p>Subscribe to our newsletter and get the latest marketing strategies delivered to your inbox.</p>
                    <form action="{{ route('contact-us.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="name" value="Newsletter Subscriber" />
                        <input type="hidden" name="company" value="" />
                        <input type="hidden" name="phone" value="" />
                        <input type="hidden" name="service" value="Newsletter" />
                        <input type="hidden" name="message" value="Please subscribe me to the SSF Marketing newsletter." />
                        <input type="email" name="email" placeholder="Enter your email" required />
                        <button type="submit">Subscribe <i class="fa-solid fa-arrow-right"></i></button>
                    </form>
                </div>
            </aside>

            <div class="blog-content">
                <div class="blog-toolbar">
                    <p>Showing 1-9 of 24 articles</p>
                    <button type="button">Latest First <i class="fa-solid fa-chevron-down"></i></button>
                </div>

                <div class="blog-card-grid">
                    @foreach ($articles as $article)
                        <article class="blog-card reveal">
                            <a class="blog-card-image" href="#articles">
                                <img src="{{ url($article['image']) }}" alt="{{ $article['title'] }}" />
                            </a>
                            <div class="blog-card-body">
                                <div class="blog-card-meta">
                                    <span>{{ $article['category'] }}</span>
                                    <time>{{ $article['date'] }}</time>
                                </div>
                                <h2>{{ $article['title'] }}</h2>
                                <p>{{ $article['excerpt'] }}</p>
                                <a class="blog-read-link" href="#articles">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <nav class="blog-pagination" aria-label="Blog pagination">
                    <a class="active" href="{{ route('blog') }}">1</a>
                    <a href="{{ route('blog') }}">2</a>
                    <a href="{{ route('blog') }}">3</a>
                    <a href="{{ route('blog') }}" aria-label="Next page"><i class="fa-solid fa-arrow-right"></i></a>
                </nav>
            </div>
        </div>
    </section>

    <section class="ready-cta" id="contact">
        <div class="container ready-inner">
            <div>
                <div class="kicker"><span></span> Your next chapter</div>
                <h2>Ready to grow <em>your business?</em></h2>
                <p>Tell us where you want to go. We'll build the smartest route there.</p>
            </div>
            <img class="ready-rocket" src="{{ url('frontend/assets/images/ready-section/rocket-icon.png') }}" alt="" aria-hidden="true" />
            <a class="button button-primary ready-button" href="mailto:{{ $siteSetting?->email ?? 'hello@markit.com' }}">
                <span>Let's get started</span>
                <lord-icon src="https://cdn.lordicon.com/wjyqkiew.json" trigger="hover" target=".ready-button" colors="primary:#ffffff,secondary:#ffffff" aria-hidden="true"></lord-icon>
            </a>
        </div>
    </section>
</main>
@endsection

@section('js')
@endsection
