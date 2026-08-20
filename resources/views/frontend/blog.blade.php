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
                                    <a href="{{ $brand->website_url }}" target="_blank" rel="noopener" aria-label="Open {{ $brand->name }} website"><img src="{{ url($brand->logo_path) }}" alt="{{ $brand->name }}"></a>
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
                    <input id="blog-search-input" type="search" name="search" value="{{ request('search') }}" placeholder="Search articles..." />
                    <button type="submit" aria-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>

                <div class="blog-filter-title"><i class="fa-solid fa-angle-left"></i> Blog Library</div>
                <div class="blog-category-list">
                    <a class="active" href="{{ route('blog') }}"><span><i class="fa-solid fa-border-all"></i>All Blogs</span><b>{{ $totalBlogs }}</b></a>
                    <a href="{{ route('blog') }}"><span><i class="fa-solid fa-newspaper"></i>Published</span><b>{{ $totalBlogs }}</b></a>
                    <a href="{{ route('blog') }}"><span><i class="fa-solid fa-clock"></i>Latest Posts</span><b>{{ $latestBlogs->count() }}</b></a>
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
                    <p>Showing {{ $blogs->firstItem() ?? 0 }}-{{ $blogs->lastItem() ?? 0 }} of {{ $blogs->total() }} blogs</p>
                    <button type="button">Latest First <i class="fa-solid fa-chevron-down"></i></button>
                </div>

                <div class="blog-card-grid">
                    @forelse ($blogs as $blogRecord)
                        <article class="blog-card reveal">
                            <a class="blog-card-image" href="{{ route('blog.detail', $blogRecord) }}">
                                <img src="{{ url($blogRecord->card_img ?: $blogRecord->banner_img ?: 'frontend/assets/images/our-work/work-local-seo.png') }}" alt="{{ $blogRecord->title }}" />
                            </a>
                            <div class="blog-card-body">
                                <div class="blog-card-meta">
                                    <span>Blog</span>
                                    <time>{{ $blogRecord->created_at->format('M d, Y') }}</time>
                                </div>
                                <h2>{{ $blogRecord->title }}</h2>
                                <p>{{ $blogRecord->short_description ?: Str::limit(strip_tags($blogRecord->description), 130) }}</p>
                                <a class="blog-read-link" href="{{ route('blog.detail', $blogRecord) }}">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </article>
                    @empty
                        <div class="blog-empty-state"><strong>No blogs found.</strong><span>Add published blogs from the dashboard to show them here.</span></div>
                    @endforelse
                </div>

                @if ($blogs->hasPages())
                    <nav class="blog-pagination" aria-label="Blog pagination">
                        @for ($pageNumber = 1; $pageNumber <= $blogs->lastPage(); $pageNumber++)
                            <a class="{{ $blogs->currentPage() === $pageNumber ? 'active' : '' }}" href="{{ $blogs->url($pageNumber) }}">{{ $pageNumber }}</a>
                        @endfor
                        @if ($blogs->hasMorePages())<a href="{{ $blogs->nextPageUrl() }}" aria-label="Next page"><i class="fa-solid fa-arrow-right"></i></a>@endif
                    </nav>
                @endif
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