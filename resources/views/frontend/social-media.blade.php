@extends('frontend.layouts.master')

@section('metas')
@endsection

@section('title')
Social Media Marketing - Engage Your Audience and Boost Conversions
@endsection

@section('css')
@endsection

@section('body')

    <main>
        <section class="sm-hero">
            <!-- <div class="sm-network" aria-hidden="true"></div> -->
            <div class="container sm-hero-grid">
                <div class="sm-hero-copy reveal">
                    <div class="kicker"><span></span> Social that connects</div>
                    <h1>Social Media <em>Marketing</em></h1>
                    <p class="hero-lead">
                    We create scroll-stopping content, build engaged communities, and
                    run data-driven campaigns that turn followers into loyal
                    customers.
                    </p>
                </div>
                
            </div>
        </section>

        <section class="logo-strip" aria-label="Trusted companies">
            <div class="container logo-row">
                <span>Trusted by growing brands</span>
                <div class="logo-slider">
                    <div class="logo-viewport">
                    <div class="logos">
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-business/trusted-logo-ziply.png') }}"
                                alt="Ziply"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-business/trusted-logo-wave.png') }}"
                                alt="Wave"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-business/trusted-logo-kanba.png') }}"
                                alt="Kanba"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-business/trusted-logo-holler.png') }}"
                                alt="Holler"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-business/trusted-logo-zanda.png') }}"
                                alt="Zanda"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-business/trusted-logo-solvixa.png') }}"
                                alt="Solvixa"
                            />
                        </div>
                    </div>
                    </div>
                    <div
                    class="logo-pagination"
                    aria-label="Trusted brand slides"
                    ></div>
                </div>
            </div>
        </section>

        <section class="sm-dark-band">
            <div class="container sm-service-grid">
                <div class="sm-section-title reveal">
                    <small>Platform. Purpose. Performance.</small>
                    <h2>Strategic Social Media Services That Deliver</h2>
                </div>
                <article class="reveal">
                    <i class="fa-solid fa-chess-knight"></i>
                    <h3>Platform Strategy</h3>
                    <p>
                    We identify the right platforms, audiences, and content mix for
                    your business goals.
                    </p>
                </article>
                <article class="reveal">
                    <i class="fa-regular fa-pen-to-square"></i>
                    <h3>Content Creation</h3>
                    <p>
                    Engaging visuals, videos, carousels, and reels that stop the
                    scroll.
                    </p>
                </article>
                <article class="reveal">
                    <i class="fa-regular fa-comments"></i>
                    <h3>Community Management</h3>
                    <p>
                    Daily conversations with timely responses, engagement, and brand
                    advocacy.
                    </p>
                </article>
                <article class="reveal">
                    <i class="fa-solid fa-bullhorn"></i>
                    <h3>Paid Social Advertising</h3>
                    <p>
                    Targeted ad campaigns that drive traffic, leads, and measurable
                    ROI.
                    </p>
                </article>
                <article class="reveal">
                    <i class="fa-solid fa-chart-line"></i>
                    <h3>Analytics &amp; Reporting</h3>
                    <p>
                    Transparent reporting and insights that help us optimize every
                    month.
                    </p>
                </article>
            </div>
        </section>

        <section class="sm-content-section">
            <div class="container sm-content-grid">
                <div class="sm-content-visual reveal">
                    <div class="sm-calendar">
                    <div class="sm-calendar-top"><b>May 2024</b><span></span></div>
                    <div class="sm-calendar-grid">
                        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i
                        ><i></i><i></i><i></i>
                    </div>
                    </div>
                    <img
                    class="sm-content-img"
                    src="{{ url('frontend/assets/images/our-work/work-social-media.png') }}"
                    alt="Social media content planning"
                    />
                    <button
                    class="sm-play"
                    type="button"
                    aria-label="Play campaign preview"
                    >
                    <i class="fa-solid fa-play"></i>
                    </button>
                    <div class="sm-idea-card">
                    <b>Content Ideas</b><span>Product spotlight reel</span
                    ><span>Behind the scenes</span><span>Customer testimonial</span>
                    </div>
                    <div class="sm-rate">
                    <small>Engagement Rate</small><strong>7.2%</strong>
                    </div>
                </div>
                <div class="sm-content-copy reveal">
                    <small>Content that connects</small>
                    <h2>Planned, Created &amp; Optimized Content That Performs</h2>
                    <p>
                    We handle everything from content strategy and planning to
                    production and publishing so your brand stays active, consistent,
                    and relevant across every platform.
                    </p>
                    <ul>
                    <li>Monthly content strategy and calendar</li>
                    <li>
                        Creative production: graphics, reels, videos and carousels
                    </li>
                    <li>Hashtag research and trend integration</li>
                    <li>Copywriting that drives engagement</li>
                    <li>Performance optimization every month</li>
                    </ul>
                    <a
                    class="button button-primary sm-content-button"
                    href="contact-us.html"
                    ><span>See Our Work</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/vduvxizq.json"
                        trigger="hover"
                        target=".sm-content-button"
                        colors="primary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon
                    ></a>
                </div>
            </div>
        </section>

        <section class="sm-balance-section">
            <div class="container">
                <div class="sm-center-heading reveal">
                    <small>Balanced approach. Maximum impact.</small>
                    <h2>Paid + Organic Social That Works Together</h2>
                </div>
                <div class="sm-balance-grid">
                    <article class="reveal">
                    <i class="fa-solid fa-chart-simple"></i>
                    <h3>Organic Social</h3>
                    <p>
                        Build trust, grow reach, and nurture your audience with
                        valuable, engaging content.
                    </p>
                    <ul>
                        <li>Brand storytelling</li>
                        <li>Community engagement</li>
                        <li>Influencer collaborations</li>
                    </ul>
                    </article>
                    <div class="sm-venn reveal">
                    <span>Organic<br />Reach</span
                    ><strong>Stronger<br />Together</strong
                    ><span>Paid<br />Reach</span>
                    </div>
                    <article class="reveal">
                    <i class="fa-regular fa-chart-bar"></i>
                    <h3>Paid Social</h3>
                    <p>
                        Run high-performing ads that amplify your message and drive
                        measurable results.
                    </p>
                    <ul>
                        <li>Audience targeting</li>
                        <li>Conversion campaigns</li>
                        <li>Retargeting and lookalikes</li>
                    </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="sm-impact-section counter-section">
            <div class="container sm-impact-grid">
                <div class="sm-impact-title reveal">
                    <small>Why it matters</small>
                    <h2>Engage Audiences. Build Loyalty. <em>Drive Growth.</em></h2>
                    <p>
                    Social media is more than likes. It is where relationships are
                    built and business grows.
                    </p>
                </div>
                <div class="sm-impact-card reveal">
                    <i class="fa-solid fa-bullseye"></i><strong>3.5x</strong
                    ><span>Paid Visibility</span
                    ><small>Increase in brand exposure</small>
                </div>
                <div class="sm-impact-card reveal">
                    <i class="fa-regular fa-users"></i><strong>2.8x</strong
                    ><span>Engagement Rate</span
                    ><small>Higher interaction with optimized content</small>
                </div>
                <div class="sm-impact-card reveal">
                    <i class="fa-solid fa-link"></i><strong>+65%</strong
                    ><span>Leads Generated</span
                    ><small>More leads from social campaigns</small>
                </div>
                <div class="sm-impact-card reveal">
                    <i class="fa-regular fa-comments"></i><strong>+47%</strong
                    ><span>Customer Loyalty</span
                    ><small>Increase in repeat customers</small>
                </div>
            </div>
        </section>

        <section class="sm-process-section">
            <div class="container">
                <div class="sm-section-title reveal">
                    <small>Our process</small>
                    <h2>From Strategy to Scalable Social Success</h2>
                </div>
                <div class="sm-process-line">
                    <article class="reveal">
                    <i class="fa-solid fa-magnifying-glass"></i><b>01</b>
                    <h3>Discover</h3>
                    <p>We learn about your brand, audience, and goals.</p>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-diagram-project"></i><b>02</b>
                    <h3>Strategy</h3>
                    <p>We craft a custom social media strategy.</p>
                    </article>
                    <article class="reveal">
                    <i class="fa-regular fa-file-lines"></i><b>03</b>
                    <h3>Create</h3>
                    <p>We produce compelling content that connects.</p>
                    </article>
                    <article class="reveal">
                    <i class="fa-regular fa-paper-plane"></i><b>04</b>
                    <h3>Publish &amp; Engage</h3>
                    <p>We post, engage, and build community.</p>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-chart-pie"></i><b>05</b>
                    <h3>Analyze &amp; Optimize</h3>
                    <p>We measure performance and refine for results.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="sm-results-strip counter-section">
            <div class="container sm-result-cards">
                <div class="sm-result-card reveal">
                    <i class="fa-solid fa-globe"></i
                    ><strong
                    class="counter"
                    data-value="1.42"
                    data-decimals="2"
                    data-suffix="M"
                    >0</strong
                    ><span>Total Reach</span><em>+28.5%</em>
                </div>
                <div class="sm-result-card reveal">
                    <i class="fa-solid fa-people-group"></i
                    ><strong
                    class="counter"
                    data-value="96.3"
                    data-decimals="1"
                    data-suffix="K"
                    >0</strong
                    ><span>Engagements</span><em>+35.2%</em>
                </div>
                <div class="sm-result-card reveal">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i
                    ><strong
                    class="counter"
                    data-value="24.8"
                    data-decimals="1"
                    data-suffix="K"
                    >0</strong
                    ><span>Link Clicks</span><em>+41.7%</em>
                </div>
                <div class="sm-result-card reveal">
                    <i class="fa-regular fa-user"></i
                    ><strong
                    class="counter"
                    data-value="12.6"
                    data-decimals="1"
                    data-suffix="K"
                    >0</strong
                    ><span>Followers Gained</span><em>+22.1%</em>
                </div>
                <div class="sm-result-card reveal">
                    <i class="fa-solid fa-bullseye"></i
                    ><strong
                    class="counter"
                    data-value="5.6"
                    data-decimals="1"
                    data-suffix="%"
                    >0</strong
                    ><span>Engagement Rate</span><em>+18.4%</em>
                </div>
                <div class="sm-result-card reveal">
                    <i class="fa-solid fa-share-nodes"></i
                    ><strong
                    class="counter"
                    data-value="3.1"
                    data-decimals="1"
                    data-suffix="x"
                    >0</strong
                    ><span>ROAS</span><em>+42.3%</em>
                </div>
            </div>
        </section>

        <section class="sm-platform-section">
            <div class="container">
                <div class="sm-center-heading reveal">
                    <small>We work where your audience is</small>
                </div>
                <div class="sm-platform-grid">
                    <div>
                    <i class="fa-brands fa-instagram"></i><span>Instagram</span>
                    </div>
                    <div>
                    <i class="fa-brands fa-facebook-f"></i><span>Facebook</span>
                    </div>
                    <div><i class="fa-brands fa-tiktok"></i><span>TikTok</span></div>
                    <div>
                    <i class="fa-brands fa-linkedin-in"></i><span>LinkedIn</span>
                    </div>
                    <div><i class="fa-brands fa-youtube"></i><span>YouTube</span></div>
                    <div><i class="fa-brands fa-x-twitter"></i><span>X</span></div>
                    <div>
                    <i class="fa-brands fa-pinterest-p"></i><span>Pinterest</span>
                    </div>
                    <div>
                    <i class="fa-brands fa-snapchat"></i><span>Snapchat</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="sm-case-section">
            <div class="container sm-case-grid">
                <div class="sm-case-copy reveal">
                    <small>Case study</small>
                    <h2>From Scrolls to Sales: Fashion Brand Success</h2>
                    <p>
                    We helped a D2C fashion brand grow their social presence and
                    drive real business impact through a data-driven social strategy.
                    </p>
                    <ul>
                    <li>Reels-first content strategy</li>
                    <li>Influencer collaborations and UGC</li>
                    <li>Targeted paid campaigns</li>
                    <li>Weekly optimization and reporting</li>
                    </ul>
                    <a
                    class="button button-primary sm-case-button"
                    href="contact-us.html"
                    ><span>View More Case Studies</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/vduvxizq.json"
                        trigger="hover"
                        target=".sm-case-button"
                        colors="primary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon
                    ></a>
                </div>
                <div class="sm-case-phone reveal">
                    <img
                    src="{{ url('frontend/assets/images/our-work/work-social-media.png') }}"
                    alt="Fashion campaign social preview"
                    /><span class="sm-bubble like"
                    ><i class="fa-solid fa-heart"></i>12.6K</span
                    ><span class="sm-bubble comment"
                    ><i class="fa-solid fa-comment"></i>328</span
                    ><span class="sm-bubble share"
                    ><i class="fa-solid fa-paper-plane"></i>1.2K</span
                    >
                </div>
                <div class="sm-case-panel reveal">
                    <h3>Results in 90 Days</h3>
                    <div>
                    <span>Reach</span><strong>812K</strong><em>+173%</em><i></i>
                    </div>
                    <div>
                    <span>Engagements</span><strong>64.7K</strong><em>+212%</em
                    ><i></i>
                    </div>
                    <div>
                    <span>Website Clicks</span><strong>18.9K</strong><em>+189%</em
                    ><i></i>
                    </div>
                    <div>
                    <span>Revenue Generated</span><strong>$214K</strong><em>+238%</em
                    ><i></i>
                    </div>
                </div>
            </div>
        </section>

        <section class="sm-faq-dark">
            <div class="sm-network" aria-hidden="true"></div>
            <div class="container sm-faq-grid">
                <div class="sm-faq-intro reveal">
                    <small>Frequently asked questions</small>
                    <h2>Everything You Need to Know</h2>
                    <div class="sm-chat-icon">
                    <i class="fa-regular fa-comment-dots"></i>
                    </div>
                </div>
                <div class="faq-list">
                    <article class="faq-item open reveal">
                    <button type="button" aria-expanded="true">
                        <i class="fa-solid fa-question"></i
                        ><span
                            >Which social media platforms are best for my
                            business?</span
                        ><b>-</b>
                    </button>
                    <div>
                        <p>
                            We choose platforms based on your audience, offer, content
                            type, and growth goals.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span
                            >How often will you post on my social media accounts?</span
                        ><b>+</b>
                    </button>
                    <div>
                        <p>
                            Most brands need 3 to 5 quality posts per week, adjusted
                            around content volume and goals.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span
                            >Do you create the content or do I need to provide
                            it?</span
                        ><b>+</b>
                    </button>
                    <div>
                        <p>
                            We can produce content, repurpose your assets, or combine
                            both for a steady publishing engine.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>How do you measure success?</span><b>+</b>
                    </button>
                    <div>
                        <p>
                            We track reach, engagement, audience growth, clicks, leads,
                            sales, and paid social ROAS.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>Can you manage paid ad campaigns as well?</span
                        ><b>+</b>
                    </button>
                    <div>
                        <p>
                            Yes. We manage both organic social and paid campaigns so
                            the channels reinforce each other.
                        </p>
                    </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="ready-cta" id="contact">
            <img
                class="ready-streaks"
                src="{{ url('frontend/assets/images/ready-section/ChatGPT Image Aug 3, 2026, 04_44_29 PM (3).png') }}"
                alt=""
                aria-hidden="true"
            />
            <div class="container ready-inner">
                <div>
                    <div class="kicker"><span></span> Your next chapter</div>
                    <h2>Ready to grow <em>your business?</em></h2>
                    <p>
                    Tell us where you want to go. We'll build the smartest route
                    there.
                    </p>
                </div>
                <img
                    class="ready-rocket"
                    src="{{ url('frontend/assets/images/ready-section/ChatGPT Image Aug 3, 2026, 04_44_29 PM (1).png') }}"
                    alt=""
                    aria-hidden="true"
                /><a
                    class="button button-primary ready-button"
                    href="mailto:hello@markit.com"
                    ><span>Let's get started</span
                    ><lord-icon
                    src="https://cdn.lordicon.com/wjyqkiew.json"
                    trigger="hover"
                    target=".ready-button"
                    colors="primary:#ffffff,secondary:#ffffff"
                    aria-hidden="true"
                    ></lord-icon
                ></a>
            </div>
        </section>
    </main>


@endsection

@section('js')
@endsection