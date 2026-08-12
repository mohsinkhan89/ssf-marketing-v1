@extends('frontend.layouts.master')

@section('metas')
@endsection

@section('title')
SEO Services - Improve Your Search Rankings
@endsection

@section('css')
@endsection

@section('body')

    <main>
        <section class="seo-hero">
            <div class="seo-network" aria-hidden="true"></div>
            <div class="container seo-hero-grid">
                <div class="seo-hero-copy reveal">
                    <div class="kicker"><span></span> Our service</div>
                    <h1>Search Engine Optimization <em>(SEO)</em></h1>
                    <p>
                    Boost your visibility, attract the right traffic, and rank higher
                    on search engines with our data-driven SEO strategies.
                    </p>
                    <!-- <div class="seo-actions">
                    <a class="button button-primary seo-audit-button" href="contact-us.html"><span>Get a Free SEO Audit</span><lord-icon src="https://cdn.lordicon.com/vduvxizq.json" trigger="hover" target=".seo-audit-button" colors="primary:#ffffff" aria-hidden="true"></lord-icon></a>
                    <a class="button button-ghost seo-expert-button" href="contact-us.html"><span>Talk to an SEO Expert</span><lord-icon src="https://cdn.lordicon.com/wjyqkiew.json" trigger="hover" target=".seo-expert-button" colors="primary:#ffffff,secondary:#ffffff" aria-hidden="true"></lord-icon></a>
                </div> -->
                </div>

                <!-- <div class="seo-hero-art reveal delay-1" aria-label="SEO performance overview">
                <div class="seo-magnifier" aria-hidden="true"><span></span></div>
                <div class="seo-dashboard">
                    <div class="seo-dashboard-top"><strong>SEO Performance Overview</strong><button type="button">Last 6 Months <i class="fa-solid fa-chevron-down"></i></button></div>
                    <div class="seo-dashboard-body">
                    <div class="seo-mini-stats">
                        <div><small>Organic Traffic</small><b>25.4K</b><span>+46.8%</span></div>
                        <div><small>Keyword Rankings</small><b>1.2K</b><span>+67.3%</span></div>
                        <div><small>Backlinks</small><b>3.8K</b><span>+35.2%</span></div>
                        <div><small>Domain Authority</small><b>56</b><span>+12</span></div>
                    </div>
                    <div class="seo-chart"><span></span><span></span><span></span><svg viewBox="0 0 310 140" role="img" aria-label="Rising SEO chart"><polyline points="10,118 58,94 105,88 154,58 206,84 260,38 302,20" fill="none" stroke="#0f6b8f" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/><g fill="#0f6b8f"><circle cx="10" cy="118" r="6"/><circle cx="58" cy="94" r="6"/><circle cx="105" cy="88" r="6"/><circle cx="154" cy="58" r="6"/><circle cx="206" cy="84" r="6"/><circle cx="260" cy="38" r="6"/><circle cx="302" cy="20" r="6"/></g></svg><div class="seo-months"><small>Jan</small><small>Feb</small><small>Mar</small><small>Apr</small><small>May</small><small>Jun</small></div></div>
                    </div>
                    <div class="seo-keyword"><i class="fa-regular fa-file-lines"></i><span><small>Top Keyword</small><b>digital marketing agency</b></span><span><small>Position</small><b>#3 <em>+7</em></b></span></div>
                </div>
                </div> -->
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
        <section class="seo-services-panel">
            <div class="container">
                <div class="seo-center-heading reveal">
                    <small>What we offer</small>
                    <h2>Comprehensive SEO Services</h2>
                    <p>
                    End-to-end SEO solutions to improve rankings, drive qualified
                    traffic, and grow your business.
                    </p>
                </div>
                <div class="seo-service-cards">
                    <article class="reveal">
                    <i class="fa-solid fa-gear"></i>
                    <h3>Technical SEO</h3>
                    <p>
                        We optimize crawlability, indexability, speed, and site
                        performance.
                    </p>
                    <a href="contact-us.html"
                        >Learn More
                        <lord-icon
                            src="https://cdn.lordicon.com/vduvxizq.json"
                            trigger="hover"
                            colors="primary:#0f6b8f"
                            aria-hidden="true"
                        ></lord-icon
                    ></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-regular fa-file-lines"></i>
                    <h3>On-Page SEO</h3>
                    <p>
                        We improve content, keywords, meta tags, and internal linking.
                    </p>
                    <a href="contact-us.html"
                        >Learn More
                        <lord-icon
                            src="https://cdn.lordicon.com/vduvxizq.json"
                            trigger="hover"
                            colors="primary:#0f6b8f"
                            aria-hidden="true"
                        ></lord-icon
                    ></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-link"></i>
                    <h3>Off-Page SEO</h3>
                    <p>
                        We build strong backlinks and authority signals for your
                        domain.
                    </p>
                    <a href="contact-us.html"
                        >Learn More
                        <lord-icon
                            src="https://cdn.lordicon.com/vduvxizq.json"
                            trigger="hover"
                            colors="primary:#0f6b8f"
                            aria-hidden="true"
                        ></lord-icon
                    ></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-location-dot"></i>
                    <h3>Local SEO</h3>
                    <p>We help local customers find you through search and Maps.</p>
                    <a href="contact-us.html"
                        >Learn More
                        <lord-icon
                            src="https://cdn.lordicon.com/vduvxizq.json"
                            trigger="hover"
                            colors="primary:#0f6b8f"
                            aria-hidden="true"
                        ></lord-icon
                    ></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-pen-fancy"></i>
                    <h3>Content SEO</h3>
                    <p>
                        We create and optimize content that ranks, engages, and
                        converts.
                    </p>
                    <a href="contact-us.html"
                        >Learn More
                        <lord-icon
                            src="https://cdn.lordicon.com/vduvxizq.json"
                            trigger="hover"
                            colors="primary:#0f6b8f"
                            aria-hidden="true"
                        ></lord-icon
                    ></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <h3>Ecommerce SEO</h3>
                    <p>
                        We optimize product pages, categories, and technical elements.
                    </p>
                    <a href="contact-us.html"
                        >Learn More
                        <lord-icon
                            src="https://cdn.lordicon.com/vduvxizq.json"
                            trigger="hover"
                            colors="primary:#0f6b8f"
                            aria-hidden="true"
                        ></lord-icon
                    ></a>
                    </article>
                </div>
            </div>
        </section>

        <section class="seo-dark-band">
            <div class="seo-network" aria-hidden="true"></div>
            <div class="container seo-benefit-grid">
                <div class="seo-benefit-title reveal">
                    <small>Why invest in SEO</small>
                    <h2>SEO That Drives Sustainable <em>Growth</em></h2>
                    <p>
                    Ranking higher on search engines helps you attract the right
                    audience, build trust, and generate consistent results.
                    </p>
                </div>
                <article class="reveal">
                    <i class="fa-regular fa-eye"></i>
                    <h3>Increased Visibility</h3>
                    <p>Rank higher and get noticed by potential customers.</p>
                </article>
                <article class="reveal">
                    <i class="fa-regular fa-user"></i>
                    <h3>Qualified Traffic</h3>
                    <p>Attract users who are actively searching for your services.</p>
                </article>
                <article class="reveal">
                    <i class="fa-solid fa-shield-halved"></i>
                    <h3>Builds Trust</h3>
                    <p>Top rankings help create trust and credibility.</p>
                </article>
                <article class="reveal">
                    <i class="fa-solid fa-chart-line"></i>
                    <h3>Better ROI</h3>
                    <p>SEO delivers long-term results with a higher return.</p>
                </article>
                <article class="reveal">
                    <i class="fa-solid fa-rocket"></i>
                    <h3>Sustainable Growth</h3>
                    <p>Compounding organic growth builds over time.</p>
                </article>
            </div>
        </section>

        <section class="seo-process-section">
            <div class="container">
                <div class="seo-center-heading reveal">
                    <small>Our SEO process</small>
                    <h2>A Proven Process That Delivers <em>Results</em></h2>
                </div>
                <div class="seo-process-line">
                    <article class="reveal">
                    <i class="fa-solid fa-magnifying-glass"></i><b>01</b>
                    <h3>Discovery &amp; Audit</h3>
                    <p>We analyze your website, competitors, and market.</p>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-pen-ruler"></i><b>02</b>
                    <h3>Strategy &amp; Planning</h3>
                    <p>We create a custom SEO strategy aligned with goals.</p>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-code"></i><b>03</b>
                    <h3>Implementation</h3>
                    <p>We optimize content and technical elements.</p>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-link"></i><b>04</b>
                    <h3>Link Building</h3>
                    <p>We build high-quality backlinks to boost authority.</p>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-chart-column"></i><b>05</b>
                    <h3>Monitoring</h3>
                    <p>We track performance, rankings, and traffic.</p>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-rocket"></i><b>06</b>
                    <h3>Optimization</h3>
                    <p>We refine and improve continuously.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="seo-results-band counter-section">
            <div class="container seo-results-grid">
                <div class="seo-results-copy reveal">
                    <small>Proven results</small>
                    <h2>Data-Driven SEO That Delivers</h2>
                    <p>
                    We focus on metrics that matter and drive real business impact.
                    </p>
                </div>
                <div class="seo-stat reveal">
                    <i class="fa-solid fa-stopwatch"></i
                    ><strong
                    class="counter"
                    data-value="25.4"
                    data-decimals="1"
                    data-suffix="K"
                    >0</strong
                    ><span>Organic Traffic</span><em>+46.8%</em>
                </div>
                <div class="seo-stat reveal">
                    <i class="fa-regular fa-file-lines"></i
                    ><strong
                    class="counter"
                    data-value="1.2"
                    data-decimals="1"
                    data-suffix="K"
                    >0</strong
                    ><span>Keywords Ranked</span><em>+67.3%</em>
                </div>
                <div class="seo-stat reveal">
                    <i class="fa-solid fa-link"></i
                    ><strong
                    class="counter"
                    data-value="3.8"
                    data-decimals="1"
                    data-suffix="K"
                    >0</strong
                    ><span>Backlinks Built</span><em>+35.2%</em>
                </div>
                <div class="seo-stat reveal">
                    <i class="fa-regular fa-star"></i
                    ><strong class="counter" data-value="56">0</strong
                    ><span>Domain Authority</span><em>+12</em>
                </div>
                <div class="seo-stat reveal">
                    <i class="fa-solid fa-gauge-high"></i
                    ><strong
                    class="counter"
                    data-value="4.2"
                    data-decimals="1"
                    data-suffix="%"
                    >0</strong
                    ><span>Conversion Rate</span><em>+28.7%</em>
                </div>
                <div class="seo-stat reveal">
                    <i class="fa-solid fa-cart-shopping"></i
                    ><strong class="counter" data-value="320" data-suffix="%">0</strong
                    ><span>ROI from Organic</span><em>+93.5%</em>
                </div>
            </div>
        </section>

        <section class="seo-tools-strip">
            <div class="container seo-tools-grid">
                <div>
                    <small>Tools &amp; platforms we use</small>
                    <h2>Powered By Industry-Leading SEO Tools</h2>
                </div>
                <div
                    class="logo-slider seo-tools-slider"
                    aria-label="SEO tools slider"
                >
                    <div class="logo-viewport">
                    <div class="logos">
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/seo/powerd/google-search-console.png') }}"
                                alt="Google Search Console"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/seo/powerd/google-analytics.png') }}"
                                alt="Google Analytics"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/seo/powerd/semrush.png') }}"
                                alt="SEMrush"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/seo/powerd/ahrefs.png') }}"
                                alt="Ahrefs"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/seo/powerd/screaming-frog.png') }}"
                                alt="Screaming Frog"
                            />
                        </div>
                        <div class="logo-slide">
                            <img src="{{ url('frontend/assets/images/seo/powerd/moz.png') }}" alt="Moz" />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/seo/powerd/yoast-seo.png') }}"
                                alt="Yoast SEO"
                            />
                        </div>
                    </div>
                    </div>
                    <div class="logo-pagination" aria-label="SEO tool slides"></div>
                </div>
            </div>
        </section>

        <section class="seo-case-section">
            <div class="seo-network" aria-hidden="true"></div>
            <div class="container seo-case-grid">
                <div class="seo-case-left reveal">
                    <small>Success story</small>
                    <h2>How We Helped a SaaS Brand Increase Organic Growth</h2>
                    <div class="seo-case-metrics">
                    <div>
                        <strong>+156%</strong><span>Increase in Organic Traffic</span>
                    </div>
                    <div><strong>+230%</strong><span>Keywords in Top 10</span></div>
                    <div>
                        <strong>+89%</strong><span>Leads from Organic Search</span>
                    </div>
                    </div>
                </div>
                <div class="seo-case-copy reveal">
                    <h3>The Challenge</h3>
                    <p>
                    A SaaS company was struggling with low organic visibility,
                    minimal traffic, and limited lead generation.
                    </p>
                    <h3>Our Solution</h3>
                    <p>
                    We implemented a comprehensive SEO strategy including technical
                    optimization, content development, and high-quality link
                    building.
                    </p>
                    <h3>The Result</h3>
                    <p>
                    In six months, organic traffic increased by 156%, top 10 keywords
                    grew by 230%, and organic leads improved by 89%.
                    </p>
                </div>
                <div class="seo-case-card reveal">
                    <div class="seo-case-dashboard">
                    <div class="seo-case-head">
                        <b>Organic Performance</b><small>Last 6 Months</small>
                    </div>
                    <div class="seo-case-numbers">
                        <span><b>25.4K</b><small>Users</small></span
                        ><span><b>18.7K</b><small>New Users</small></span
                        ><span><b>32.1K</b><small>Sessions</small></span>
                    </div>
                    <svg viewBox="0 0 310 120" aria-hidden="true">
                        <polyline
                            points="10,98 62,82 112,84 165,65 215,72 260,58 302,46"
                            fill="none"
                            stroke="#0f6b8f"
                            stroke-width="5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                    </div>
                    <blockquote>
                    MARKIT's SEO strategy transformed our online presence and became
                    our #1 source of qualified leads.
                    </blockquote>
                    <div class="seo-client">
                    <span>MF</span>
                    <div>
                        <b>Michael Thompson</b
                        ><small>Head of Growth, SaaS Company</small>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section faq-section seo-faq-section">
            <div class="container faq-grid">
                <div class="faq-intro reveal">
                    <div class="kicker dark"><span></span>FAQ</div>
                    <h2>Frequently Asked<br /><em>Questions</em></h2>
                    <p>Still have questions? We are here to help.</p>
                    <a
                    class="button result-button seo-faq-button"
                    href="contact-us.html"
                    ><span>Contact Our SEO Experts</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/vduvxizq.json"
                        trigger="hover"
                        target=".seo-faq-button"
                        colors="primary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon
                    ></a>
                    <small>Contact us directly - we are happy to help!</small>
                </div>
                <div class="faq-list">
                    <article class="faq-item open reveal">
                    <button type="button" aria-expanded="true">
                        <i class="fa-solid fa-question"></i
                        ><span>How long does it take to see SEO results?</span
                        ><b>-</b>
                    </button>
                    <div>
                        <p>
                            Most campaigns show early movement within 6 to 12 weeks,
                            while meaningful growth usually compounds over 3 to 6
                            months.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>What does your SEO service include?</span><b>+</b>
                    </button>
                    <div>
                        <p>
                            Technical SEO, keyword strategy, on-page optimization,
                            content planning, authority building, tracking, and
                            reporting.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>Do you guarantee #1 rankings?</span><b>+</b>
                    </button>
                    <div>
                        <p>
                            No ethical SEO team can guarantee exact rankings, but we
                            build a measurable system that improves visibility and
                            qualified traffic.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>How do you measure SEO success?</span><b>+</b>
                    </button>
                    <div>
                        <p>
                            We track rankings, organic sessions, conversions, technical
                            health, backlinks, and the commercial outcomes tied to
                            organic search.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>Do you work with all types of businesses?</span
                        ><b>+</b>
                    </button>
                    <div>
                        <p>
                            Yes. We tailor the strategy around your industry,
                            competition, location, current site health, and growth
                            goals.
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