@extends('frontend.layouts.master')

@section('metas')
@endsection

@section('title')
PPC Advertising - Drive Targeted Traffic to Your Business
@endsection

@section('css')
@endsection

@section('body')

    <main>
        <section class="ppc-hero">
            <!-- <div class="ppc-network" aria-hidden="true"></div> -->
            <div class="container ppc-hero-grid">
                <div class="ppc-hero-copy reveal">
                    <div class="kicker">
                    <span></span> Pay for results. Not just clicks.
                    </div>
                    <h1>PPC Advertising Traffic That <em>Converts.</em></h1>
                    <p class="hero-lead">
                    Data-driven PPC strategies that put your brand in front of the
                    right audience at the right time, driving high-intent traffic,
                    qualified leads, and measurable growth.
                    </p>
                    <!-- <div class="hero-actions">
                    <a class="button button-primary ppc-primary"
                        href="contact-us.html"><span>Launch Your PPC
                        Campaign</span><lord-icon
                        src="https://cdn.lordicon.com/vduvxizq.json" trigger="hover"
                        target=".ppc-primary" colors="primary:#ffffff"
                        aria-hidden="true"></lord-icon></a>
                    <a class="button button-ghost ppc-secondary"
                        href="contact-us.html"><span>Get a Free PPC
                        Audit</span><lord-icon
                        src="https://cdn.lordicon.com/wjyqkiew.json" trigger="hover"
                        target=".ppc-secondary"
                        colors="primary:#ffffff,secondary:#ffffff"
                        aria-hidden="true"></lord-icon></a>
                    </div> -->
                    <div class="ppc-proof-row">
                    <span
                        ><i class="fa-solid fa-circle-check"></i> High ROI
                        Campaigns</span
                    ><span
                        ><i class="fa-solid fa-circle-check"></i> Transparent
                        Reporting</span
                    ><span
                        ><i class="fa-solid fa-circle-check"></i> Certified
                        Experts</span
                    >
                    </div>
                </div>
                <!-- <div class="ppc-hero-visual reveal delay-1"
                    aria-label="PPC performance dashboard">
                    <div class="ppc-dashboard">
                    <div class="ppc-dash-top"><strong>PPC Performance
                        Overview</strong><button type="button">Last 30 Days <i
                            class="fa-solid fa-chevron-down"></i></button></div>
                    <div class="ppc-metric-grid">
                        <div><small>Clicks</small><b>28.6K</b><span>+32.8%</span></div>
                        <div><small>Conversions</small><b>3.24K</b><span>+45.7%</span></div>
                        <div><small>Cost /
                            Conv.</small><b>$12.45</b><span>-18.3%</span></div>
                        <div><small>Conv.
                            Rate</small><b>11.34%</b><span>+22.7%</span></div>
                    </div>
                    <div class="ppc-chart-wrap">
                        <small>Clicks</small>
                        <svg viewBox="0 0 560 220" role="img"
                        aria-label="Rising PPC clicks chart">
                        <defs><lineargradient id="ppcFill" x1="0" x2="0" y1="0"
                            y2="1"><stop offset="0" stop-color="#0f6b8f"
                                stop-opacity=".55" /><stop offset="1"
                                stop-color="#0f6b8f"
                                stop-opacity="0" /></lineargradient></defs>
                        <path
                            d="M24 188 L80 160 L132 174 L184 126 L236 104 L288 78 L340 112 L390 80 L438 55 L490 71 L536 42 L536 200 L24 200 Z"
                            fill="url(#ppcFill)" />
                        <polyline
                            points="24,188 80,160 132,174 184,126 236,104 288,78 340,112 390,80 438,55 490,71 536,42"
                            fill="none" stroke="#0f6b8f" stroke-width="6"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <g fill="#0f6b8f"><circle cx="80" cy="160" r="6" /><circle
                            cx="184" cy="126" r="6" /><circle cx="288" cy="78"
                            r="6" /><circle cx="390" cy="80" r="6" /><circle cx="490"
                            cy="71" r="6" /><circle cx="536" cy="42" r="6" /></g>
                        </svg>
                    </div>
                    </div>
                    <div
                    class="ppc-roas-card"><small>ROAS</small><strong>487%</strong><span>+82%
                        vs last month</span><i
                        class="fa-solid fa-arrow-trend-up"></i></div>
                </div> -->
            </div>
        </section>

        <section class="ppc-services-section">
            <div class="container">
                <div class="ppc-center-heading reveal">
                    <small>Our PPC services</small>
                    <h2>PPC Campaigns That Drive Real Business Results</h2>
                </div>
                <div class="ppc-service-grid">
                    <article class="reveal">
                    <i class="fa-solid fa-bullseye"></i>
                    <h3>Search Ads</h3>
                    <p>
                        Capture high-intent searches and get in front of customers
                        ready to buy.
                    </p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-users-viewfinder"></i>
                    <h3>Display Ads</h3>
                    <p>
                        Build brand awareness and remarket to prospects across the
                        web.
                    </p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <h3>Shopping Ads</h3>
                    <p>Showcase products to high-intent shoppers across Google.</p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-brands fa-youtube"></i>
                    <h3>Video Ads</h3>
                    <p>
                        Engage your audience with YouTube ads that drive views and
                        conversions.
                    </p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <h3>Social Ads</h3>
                    <p>
                        Reach and convert your ideal audience on Facebook, Instagram,
                        and more.
                    </p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-chart-line"></i>
                    <h3>Remarketing Ads</h3>
                    <p>
                        Re-engage visitors and turn interested users into loyal
                        customers.
                    </p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                </div>
            </div>
        </section>

        <section class="ppc-platform-band">
            <div class="container">
                <div class="ppc-center-heading reveal">
                    <small>Platform expertise</small>
                    <h2>Powered by Leading Ad Platforms</h2>
                </div>
                <div class="ppc-platform-cards">
                    <article class="reveal">
                    <div>
                        <h3 class="ppc-platform-logo-title">
                            <div class="ppc-image">
                                <img
                                class="ppc-platform-logo"
                                src="{{ url('frontend/assets/images/trusted-partners/google-white.png') }}"
                                alt="Google Ads"
                                />
                            </div>
                        </h3>
                        <ul>
                            <li>Search, Display, Shopping &amp; YouTube Ads</li>
                            <li>Intent-driven keyword targeting</li>
                            <li>Smart bidding &amp; Performance Max</li>
                            <li>Detailed conversion tracking</li>
                        </ul>
                    </div>
                    <div class="ppc-mini-report">
                        <span>Avg. ROAS</span><strong>532%</strong
                        ><small>+65% vs last month</small>
                    </div>
                    </article>
                    <article class="reveal">
                    <div>
                        <h3 class="ppc-platform-logo-title">
                            <div class="ppc-image">
                                <img
                                class="ppc-platform-logo"
                                src="{{ url('frontend/assets/images/trusted-partners/meta-white.png') }}"
                                alt="Meta Ads"
                                />
                            </div>
                        </h3>
                        <ul>
                            <li>Facebook &amp; Instagram Ads</li>
                            <li>Advanced audience targeting</li>
                            <li>Lead generation &amp; conversions</li>
                            <li>A/B testing and creative optimization</li>
                        </ul>
                    </div>
                    <div class="ppc-mini-report">
                        <span>Cost per Lead</span><strong>$6.23</strong
                        ><small>-24% vs last month</small>
                    </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="ppc-strategy-section">
            <div class="container ppc-split-grid">
                <div class="ppc-strategy-copy reveal">
                    <small>Strategy that performs</small>
                    <h2>Target the Right People. Win the Right Clicks.</h2>
                    <div class="ppc-check-cards">
                    <article>
                        <i class="fa-solid fa-crosshairs"></i>
                        <h3>Smart Targeting</h3>
                        <ul>
                            <li>Keyword &amp; intent targeting</li>
                            <li>Interest-driven demographic targeting</li>
                            <li>Remarketing &amp; custom audiences</li>
                            <li>Geo &amp; device targeting</li>
                        </ul>
                    </article>
                    <article>
                        <i class="fa-solid fa-sack-dollar"></i>
                        <h3>Intelligent Bidding</h3>
                        <ul>
                            <li>Maximize conversions</li>
                            <li>Target CPA / ROAS bidding</li>
                            <li>Manual CPC optimization</li>
                            <li>Real-time bid adjustments</li>
                        </ul>
                    </article>
                    </div>
                </div>
                <div class="ppc-why-grid reveal">
                    <small>Why PPC works</small>
                    <h2>Immediate Traffic. Measurable Results.</h2>
                    <div class="ppc-benefits">
                    <article>
                        <i class="fa-solid fa-eye"></i><b>Instant Visibility</b
                        ><span>Appear on top of search results instantly.</span>
                    </article>
                    <article>
                        <i class="fa-solid fa-chart-simple"></i
                        ><b>Highly Measurable</b
                        ><span>Track every click, call, and conversion.</span>
                    </article>
                    <article>
                        <i class="fa-solid fa-arrow-up-right-dots"></i
                        ><b>Scalable Growth</b
                        ><span>Increase budget and scale what works.</span>
                    </article>
                    <article>
                        <i class="fa-solid fa-coins"></i><b>Cost Control</b
                        ><span>Set budgets that fit your business goals.</span>
                    </article>
                    <article>
                        <i class="fa-solid fa-user-check"></i><b>Quality Leads</b
                        ><span>Reach high-intent users ready to convert.</span>
                    </article>
                    <article>
                        <i class="fa-solid fa-trophy"></i><b>Proven ROI</b
                        ><span>Drive revenue with optimized spend.</span>
                    </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="ppc-process-band">
            <div class="container">
                <div class="ppc-center-heading reveal">
                    <small>Our PPC process</small>
                    <h2>A Proven Process Built for Performance</h2>
                </div>
                <div class="ppc-process-line">
                    <article class="reveal">
                    <b>1</b>
                    <h3>Discover &amp; Research</h3>
                    <p>We analyze your business, audience, and competition.</p>
                    </article>
                    <article class="reveal">
                    <b>2</b>
                    <h3>Strategy &amp; Planning</h3>
                    <p>We build a custom PPC plan around goals and budget.</p>
                    </article>
                    <article class="reveal">
                    <b>3</b>
                    <h3>Campaign Setup</h3>
                    <p>
                        We create high-converting ads, landing pages, and tracking.
                    </p>
                    </article>
                    <article class="reveal">
                    <b>4</b>
                    <h3>Launch &amp; Optimize</h3>
                    <p>We launch campaigns and optimize continuously.</p>
                    </article>
                    <article class="reveal">
                    <b>5</b>
                    <h3>Analyze &amp; Refine</h3>
                    <p>We review data and refine for maximum ROI.</p>
                    </article>
                    <article class="reveal">
                    <b>6</b>
                    <h3>Scale &amp; Grow</h3>
                    <p>We scale successful campaigns and drive growth.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="ppc-results-strip counter-section">
            <div class="container ppc-results-grid">
                <div class="ppc-results-title reveal">
                    <small>Results that matter</small>
                    <h2>Driving Real Numbers That Grow Your Business</h2>
                </div>
                <div class="ppc-result reveal">
                    <strong
                    class="counter"
                    data-value="28.6"
                    data-decimals="1"
                    data-suffix="K+"
                    >0</strong
                    ><span>Qualified Clicks Generated</span>
                </div>
                <div class="ppc-result reveal">
                    <strong
                    class="counter"
                    data-value="3.24"
                    data-decimals="2"
                    data-suffix="K+"
                    >0</strong
                    ><span>Conversions Achieved</span>
                </div>
                <div class="ppc-result reveal">
                    <strong class="counter" data-value="487" data-suffix="%">0</strong
                    ><span>Average ROAS Delivered</span>
                </div>
                <div class="ppc-result reveal">
                    <strong
                    class="counter"
                    data-value="6.23"
                    data-prefix="$"
                    data-decimals="2"
                    >0</strong
                    ><span>Average Cost Per Lead</span>
                </div>
            </div>
        </section>

        <section class="ppc-trusted-platforms">
            <div class="container">
                <div class="ppc-center-heading reveal">
                    <small>Tools &amp; platforms we use</small>
                    <h2>Trusted Platforms. <em>Proven</em> Performance.</h2>
                </div>
                <div
                    class="logo-slider ppc-partner-slider reveal"
                    data-loop="marquee"
                    aria-label="Trusted partner platforms slider"
                >
                    <div class="logo-viewport">
                    <div class="logos">
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/google-ads.png') }}"
                                alt="Google Ads"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/meta-ads.png') }}"
                                alt="Meta Ads"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/google-analytics.png') }}"
                                alt="Google Analytics"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/google-tag-manager.png') }}"
                                alt="Google Tag Manager"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/looker-studio.png') }}"
                                alt="Looker Studio"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/semrush.png') }}"
                                alt="SEMrush"
                            />
                        </div>
                        <div class="logo-slide">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/ahrefs.png') }}"
                                alt="Ahrefs"
                            />
                        </div>
                        <div class="logo-slide" aria-hidden="true">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/google-ads.png') }}"
                                alt="Google Ads"
                            />
                        </div>
                        <div class="logo-slide" aria-hidden="true">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/meta-ads.png') }}"
                                alt="Meta Ads"
                            />
                        </div>
                        <div class="logo-slide" aria-hidden="true">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/google-analytics.png') }}"
                                alt="Google Analytics"
                            />
                        </div>
                        <div class="logo-slide" aria-hidden="true">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/google-tag-manager.png') }}"
                                alt="Google Tag Manager"
                            />
                        </div>
                        <div class="logo-slide" aria-hidden="true">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/looker-studio.png') }}"
                                alt="Looker Studio"
                            />
                        </div>
                        <div class="logo-slide" aria-hidden="true">
                            <img
                                src="{{ url('frontend/assets/images/trusted-partners/semrush.png') }}"
                                alt="SEMrush"
                            />
                        </div>
                        <div class="logo-slide" aria-hidden="true">
                            <img src="{{ url('frontend/assets/images/trusted-partners/ahrefs.png') }}" alt="Ahrefs" />
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ppc-case-section">
            <div class="container ppc-case-grid">
                <div class="ppc-case-copy reveal">
                    <small>Case study</small>
                    <h2>How We Drove 312% More Sales for an eCommerce Brand</h2>
                    <p>
                    We helped a fashion eCommerce brand scale their PPC campaigns
                    across Google and Meta, optimizing for high-intent traffic and
                    improving ROAS.
                    </p>
                    <a
                    class="button button-primary ppc-case-button"
                    href="contact-us.html"
                    ><span>View Full Case Study</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/vduvxizq.json"
                        trigger="hover"
                        target=".ppc-case-button"
                        colors="primary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon
                    ></a>
                </div>
                <div class="ppc-case-dashboard reveal">
                    <div class="ppc-case-numbers">
                    <span><small>Spend</small><b>$18,450</b><em>-28%</em></span
                    ><span><small>Revenue</small><b>$75,820</b><em>+312%</em></span
                    ><span><small>ROAS</small><b>412%</b><em>+224%</em></span
                    ><span
                        ><small>Conversions</small><b>2,731</b><em>+184%</em></span
                    >
                    </div>
                    <svg viewBox="0 0 520 190" aria-hidden="true">
                    <path
                        d="M20 152 L72 128 L122 139 L174 112 L226 132 L278 88 L330 74 L382 61 L434 68 L500 42"
                        fill="none"
                        stroke="#0f6b8f"
                        stroke-width="6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                    </svg>
                </div>
                <div class="ppc-case-panel reveal">
                    <h3>What We Did</h3>
                    <ul>
                    <li>Restructured campaign and ad groups</li>
                    <li>Optimized landing pages</li>
                    <li>Implemented smart bidding</li>
                    <li>Continuous testing &amp; optimization</li>
                    </ul>
                    <h3>The Result</h3>
                    <p>
                    312% increase in revenue with a 224% improvement in ROAS in just
                    6 months.
                    </p>
                </div>
            </div>
        </section>

        <section class="section faq-section ppc-faq-section">
            <div class="container faq-grid">
                <div class="faq-intro reveal">
                    <div class="kicker dark"><span></span>FAQ</div>
                    <h2>Frequently Asked<br /><em>Questions</em></h2>
                    <p>Have more questions? Our experts are here to help.</p>
                    <a
                    class="button result-button ppc-faq-button"
                    href="contact-us.html"
                    ><span>Talk to a PPC Expert</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/vduvxizq.json"
                        trigger="hover"
                        target=".ppc-faq-button"
                        colors="primary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon
                    ></a>
                </div>
                <div class="faq-list">
                    <article class="faq-item open reveal">
                    <button type="button" aria-expanded="true">
                        <i class="fa-solid fa-question"></i
                        ><span>How soon can I see results from PPC advertising?</span
                        ><b>-</b>
                    </button>
                    <div>
                        <p>
                            Most campaigns begin generating traffic immediately after
                            launch, with stronger conversion data usually appearing
                            within the first few weeks.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>What platforms do you run PPC campaigns on?</span
                        ><b>+</b>
                    </button>
                    <div>
                        <p>
                            We manage Google Ads, Meta Ads, YouTube, Display, Shopping,
                            remarketing, and platform mixes based on your audience.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>How do you determine the PPC budget?</span><b>+</b>
                    </button>
                    <div>
                        <p>
                            We recommend budgets from your goals, market demand,
                            cost-per-click ranges, and the conversion volume needed to
                            learn quickly.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>How do you measure PPC success?</span><b>+</b>
                    </button>
                    <div>
                        <p>
                            We track conversions, revenue, ROAS, cost per lead,
                            conversion rate, and the full funnel performance behind
                            every campaign.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>Do you offer ongoing optimization and reporting?</span
                        ><b>+</b>
                    </button>
                    <div>
                        <p>
                            Yes. Campaigns are monitored, tested, optimized, and
                            reported with clear performance insights every month.
                        </p>
                    </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="ppc-bottom-cta">
            <div class="ppc-network" aria-hidden="true"></div>
            <div class="container ppc-bottom-grid">
                <div>
                    <h2>Ready to Get More Clicks and More Customers?</h2>
                    <p>
                    Let's build a high-performance PPC campaign that drives results
                    and maximizes your ROI.
                    </p>
                </div>
                <div>
                    <a
                    class="button button-primary ppc-bottom-primary"
                    href="contact-us.html"
                    ><span>Start Your PPC Campaign</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/vduvxizq.json"
                        trigger="hover"
                        target=".ppc-bottom-primary"
                        colors="primary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon></a
                    ><a
                    class="button button-ghost ppc-bottom-secondary"
                    href="contact-us.html"
                    ><span>Get a Free PPC Audit</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/wjyqkiew.json"
                        trigger="hover"
                        target=".ppc-bottom-secondary"
                        colors="primary:#ffffff,secondary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon
                    ></a>
                </div>
                <img
                    src="{{ url('frontend/assets/images/ready-section/rocket-icon.png') }}"
                    alt="Rocket Icon"
                    aria-hidden="true"
                />
            </div>
        </section>
    </main>


@endsection

@section('js')
@endsection