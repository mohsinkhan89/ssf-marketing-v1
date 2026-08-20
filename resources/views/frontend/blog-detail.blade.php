@extends('frontend.layouts.master')

@section('metas')
<meta name="description" content="A practical SEO playbook with strategies for ranking higher, growing faster, and building sustainable organic traffic." />
@endsection

@section('title')
The 2025 SEO Playbook - Blog Detail
@endsection

@section('css')
@endsection

@section('body')
@php
    $relatedPosts = [
        [
            'category' => 'SEO',
            'title' => 'The 2025 SEO Playbook: Rank Higher, Grow Faster',
            'date' => 'May 15, 2025',
            'read' => '10 min read',
            'image' => 'frontend/assets/images/seo/banners/hero-section.png',
        ],
        [
            'category' => 'Content Marketing',
            'title' => 'Content That Converts: From Strategy to Results',
            'date' => 'May 6, 2025',
            'read' => '8 min read',
            'image' => 'frontend/assets/images/about/about-bg.png',
        ],
        [
            'category' => 'PPC',
            'title' => 'Maximize ROAS with Smarter PPC Campaigns',
            'date' => 'Apr 28, 2025',
            'read' => '7 min read',
            'image' => 'frontend/assets/images/proven-results/proven-dashboard.png',
        ],
    ];

    $sections = [
        [
            'title' => 'The 2025 SEO Landscape',
            'body' => 'AI-driven search, user intent, and experience signals are shaping rankings more than ever. Google\'s focus is simple: deliver the best answer in the best format.',
            'points' => [
                'AI Overviews are changing how users interact with search results.',
                'E-E-A-T, experience, and authority matter more than backlinks alone.',
                'Core Web Vitals and page experience are critical ranking factors.',
            ],
        ],
        [
            'title' => 'Core SEO Strategy',
            'body' => 'A strong SEO strategy starts with aligning business goals to search intent and building a roadmap that compounds over time.',
            'points' => [
                'Keyword research based on intent, not just volume.',
                'Topic clusters and internal linking to build topical authority.',
                'Content that satisfies intent better than any other result.',
            ],
        ],
        [
            'title' => 'On-Page SEO Essentials',
            'body' => 'Optimize every page to help search engines understand your content and users find it valuable.',
            'points' => [
                'Craft compelling titles and meta descriptions.',
                'Use header tags to structure content logically.',
                'Optimize images with alt text and proper compression.',
            ],
        ],
        [
            'title' => 'Content Strategy That Ranks',
            'body' => 'Great content earns links, engagement, and visibility by solving real problems clearly.',
            'points' => [
                'Create in-depth, original content that solves real problems.',
                'Update and refresh content to keep it relevant.',
                'Leverage data, visuals, and examples to boost credibility.',
            ],
        ],
        [
            'title' => 'Technical SEO Must-Haves',
            'body' => 'Technical excellence ensures your site can be crawled, indexed, and ranked.',
            'points' => [
                'Ensure mobile-first design and fast loading speeds.',
                'Implement structured data to enhance search visibility.',
                'Maintain a clean site architecture and fix crawl errors.',
            ],
        ],
        [
            'title' => 'Measuring SEO Success',
            'body' => 'Track the right metrics to understand impact and identify opportunities.',
            'points' => [
                'Monitor organic traffic, rankings, and impressions.',
                'Analyze engagement metrics and conversion impact.',
                'Use data to refine strategy and scale what works.',
            ],
        ],
    ];

    $faqs = [
        ['question' => 'How long does it take to see results from SEO?', 'answer' => 'Most campaigns show early movement in 6 to 12 weeks, with stronger growth compounding over 3 to 6 months.'],
        ['question' => 'What is the most important SEO factor in 2025?', 'answer' => 'Search intent, helpful content, authority, and page experience work together. No single factor wins alone.'],
        ['question' => 'Do I need to create new content or update existing content?', 'answer' => 'Both matter. Refresh high-potential pages first, then build new content around missing opportunities.'],
        ['question' => 'How often should I update my content?', 'answer' => 'Review important pages quarterly and update whenever search intent, data, offers, or competitors change.'],
        ['question' => 'Can SEO work without backlinks?', 'answer' => 'Yes for low-competition topics, but competitive growth usually needs trust signals and quality authority over time.'],
    ];
@endphp

<main>
    <section class="blog-hero blog-detail-hero">
        <div class="hero-glow"></div>
        <div class="container blog-hero-inner">
            <div class="blog-hero-copy blog-detail-hero-copy reveal">
                <div class="kicker"><span></span> Blog Detail</div>
                <h1>Insights. Strategies. <em>Growth.</em></h1>
                <p>Actionable insights, proven strategies, and expert perspectives to grow your brand online.</p>
            </div>
            <div class="blog-hero-art reveal delay-1" aria-hidden="true">
                <img src="{{ url('frontend/assets/images/hero-section/hero-dashboard-card.png') }}" alt="" />
            </div>
        </div>
    </section>

    <section class="blog-detail-section">
        <div class="container blog-detail-layout">
            <article class="blog-detail-article">
                <div class="blog-detail-featured reveal">
                    <img src="{{ url('frontend/assets/images/seo/banners/hero-section.png') }}" alt="SEO analytics dashboard on a laptop" />
                </div>

                <p class="blog-detail-intro reveal">Search is evolving faster than ever. From AI Overviews to zero-click results, the roles of SEO have changed. This playbook breaks down the strategies that still work in 2025 and how to use them to drive sustainable, high-quality traffic and real business growth.</p>

                <div class="blog-detail-copy">
                    @foreach ($sections as $index => $section)
                        <section class="blog-detail-block reveal">
                            <h2>{{ $index + 1 }}. {{ $section['title'] }}</h2>
                            <p>{{ $section['body'] }}</p>
                            <ul>
                                @foreach ($section['points'] as $point)
                                    <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                        </section>
                    @endforeach
                </div>
            </article>

            <aside class="blog-detail-sidebar">
                <form class="blog-search blog-detail-search reveal" action="{{ route('blog') }}" method="get">
                    <label for="blog-detail-search" class="sr-only">Search articles</label>
                    <input id="blog-detail-search" type="search" name="search" placeholder="Search articles..." />
                    <button type="submit" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <div class="blog-detail-related">
                    @foreach ($relatedPosts as $post)
                        <article class="blog-detail-side-card reveal">
                            <a class="blog-detail-side-image" href="{{ route('blog.detail') }}">
                                <img src="{{ url($post['image']) }}" alt="{{ $post['title'] }}" />
                            </a>
                            <span>{{ $post['category'] }}</span>
                            <h3><a href="{{ route('blog.detail') }}">{{ $post['title'] }}</a></h3>
                            <div>
                                <small><i class="fa-regular fa-calendar"></i>{{ $post['date'] }}</small>
                                <small><i class="fa-regular fa-clock"></i>{{ $post['read'] }}</small>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="blog-share-card reveal">
                    <h3>Share this article</h3>
                    <div>
                        <a href="https://www.linkedin.com" target="_blank" rel="noopener" aria-label="Share on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://x.com" target="_blank" rel="noopener" aria-label="Share on X"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.facebook.com" target="_blank" rel="noopener" aria-label="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="{{ route('blog.detail') }}" aria-label="Copy article link"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <section class="blog-detail-faq-section">
        <div class="container">
            <div class="blog-detail-faq-heading reveal">
                <div class="kicker dark"><span></span> FAQs</div>
                <h2>Frequently Asked <em>Questions</em></h2>
            </div>
            <div class="blog-detail-faq-list faq-list">
                @foreach ($faqs as $index => $faq)
                    <article class="faq-item {{ $index === 0 ? 'open' : '' }} reveal">
                        <button type="button" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                            <i class="fa-solid fa-question"></i><span>{{ $faq['question'] }}</span><b>{{ $index === 0 ? '−' : '+' }}</b>
                        </button>
                        <div><p>{{ $faq['answer'] }}</p></div>
                    </article>
                @endforeach
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