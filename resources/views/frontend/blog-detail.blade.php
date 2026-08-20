@extends('frontend.layouts.master')

@section('metas')
<meta name="description" content="{{ $blog->short_description ?: Str::limit(strip_tags($blog->description), 155) }}" />
@endsection

@section('title')
{{ $blog->title }} - SSF Marketing Blog
@endsection

@section('css')
@endsection

@section('body')
@php
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
                <h1>{{ $blog->title }}</h1>
                <p>{{ $blog->short_description ?: Str::limit(strip_tags($blog->description), 170) }}</p>
            </div>
            <div class="blog-hero-art reveal delay-1" aria-hidden="true">
                <img src="{{ url($blog->banner_img ?: $blog->card_img ?: 'frontend/assets/images/hero-section/hero-dashboard-card.png') }}" alt="" />
            </div>
        </div>
    </section>

    <section class="blog-detail-section">
        <div class="container blog-detail-layout">
            <article class="blog-detail-article">
                <div class="blog-detail-featured reveal">
                    <img src="{{ url($blog->banner_img ?: $blog->card_img ?: 'frontend/assets/images/seo/banners/hero-section.png') }}" alt="{{ $blog->title }}" />
                </div>

                @if ($blog->short_description)
                    <p class="blog-detail-intro reveal">{{ $blog->short_description }}</p>
                @endif

                <div class="blog-detail-copy blog-detail-body reveal">
                    {!! $blog->description !!}
                </div>
            </article>

            <aside class="blog-detail-sidebar">
                <form class="blog-search blog-detail-search reveal" action="{{ route('blog') }}" method="get">
                    <label for="blog-detail-search" class="sr-only">Search articles</label>
                    <input id="blog-detail-search" type="search" name="search" placeholder="Search articles..." />
                    <button type="submit" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <div class="blog-detail-related">
                    @forelse ($relatedBlogs as $relatedBlog)
                        <article class="blog-detail-side-card reveal">
                            <a class="blog-detail-side-image" href="{{ route('blog.detail', $relatedBlog) }}">
                                <img src="{{ url($relatedBlog->card_img ?: $relatedBlog->banner_img ?: 'frontend/assets/images/our-work/work-local-seo.png') }}" alt="{{ $relatedBlog->title }}" />
                            </a>
                            <span>Blog</span>
                            <h3><a href="{{ route('blog.detail', $relatedBlog) }}">{{ $relatedBlog->title }}</a></h3>
                            <div>
                                <small><i class="fa-regular fa-calendar"></i>{{ $relatedBlog->created_at->format('M d, Y') }}</small>
                                <small><i class="fa-regular fa-clock"></i>{{ max(3, ceil(str_word_count(strip_tags($relatedBlog->description)) / 180)) }} min read</small>
                            </div>
                        </article>
                    @empty
                        <article class="blog-detail-side-card reveal"><span>Blog</span><h3>No related blogs yet</h3><div><small><i class="fa-regular fa-calendar"></i>Coming soon</small></div></article>
                    @endforelse
                </div>

                <div class="blog-share-card reveal">
                    <h3>Share this article</h3>
                    <div>
                        <a href="https://www.linkedin.com" target="_blank" rel="noopener" aria-label="Share on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://x.com" target="_blank" rel="noopener" aria-label="Share on X"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.facebook.com" target="_blank" rel="noopener" aria-label="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="{{ route('blog.detail', $blog) }}" aria-label="Copy article link"><i class="fa-solid fa-link"></i></a>
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
                        <button type="button" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"><i class="fa-solid fa-question"></i><span>{{ $faq['question'] }}</span><b>{{ $index === 0 ? '−' : '+' }}</b></button>
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
            <a class="button button-primary ready-button" href="mailto:{{ $siteSetting?->email ?? 'hello@markit.com' }}"><span>Let's get started</span><lord-icon src="https://cdn.lordicon.com/wjyqkiew.json" trigger="hover" target=".ready-button" colors="primary:#ffffff,secondary:#ffffff" aria-hidden="true"></lord-icon></a>
        </div>
    </section>
</main>
@endsection

@section('js')
@endsection