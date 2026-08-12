@extends('frontend.layouts.master')

@section('metas')
@endsection

@section('title')
Email Marketing - Engage Your Audience and Boost Conversions
@endsection

@section('css')
@endsection

@section('body')

    <main>
        <section class="email-hero">
            <!-- <div class="email-network" aria-hidden="true"></div> -->
            <div class="container email-hero-grid">
                <div class="email-hero-copy reveal">
                    <div class="kicker"><span></span> Engage. Nurture. Convert.</div>
                    <h1>Email Marketing</h1>
                    <p class="email-hero-line">
                    The right message. To the right person.
                    <em>At the right time.</em>
                    </p>
                    <p class="hero-lead">
                    We craft high-converting email campaigns and automated flows that
                    build relationships, drive engagement, and turn subscribers into
                    loyal customers.
                    </p>
                    <!-- <div class="hero-actions"><a class="button button-primary email-primary" href="contact-us.html"><span>Talk to an Email Expert</span><lord-icon src="https://cdn.lordicon.com/vduvxizq.json" trigger="hover" target=".email-primary" colors="primary:#ffffff" aria-hidden="true"></lord-icon></a><a class="button button-ghost email-secondary" href="#email-services"><span>View Our Services</span><i class="fa-solid fa-magnifying-glass"></i></a></div>
                <div class="email-proof-row"><span><i class="fa-solid fa-chart-pie"></i>Data-Driven Strategy</span><span><i class="fa-regular fa-user"></i>Personalized Experiences</span><span><i class="fa-solid fa-chart-line"></i>Measurable Results</span></div> -->
                </div>
                <!-- <div class="email-hero-visual reveal delay-1" aria-label="Email marketing performance overview">
                <div class="email-banner-panel"><img src="{{ url('frontend/') }}assets/images/email-marketing/banner.png" alt="Email marketing campaign banner"></div>
                <div class="email-performance-card"><div><strong>Email Performance</strong><button type="button">Last 30 Days <i class="fa-solid fa-chevron-down"></i></button></div><article><span>Open Rate</span><b>32.6%</b><em>+18.4%</em><img class="email-performance-graph" src="{{ url('frontend/') }}assets/images/email-marketing/case-study-growth-graph.svg" alt="" aria-hidden="true"></article><article><span>Click Rate</span><b>7.8%</b><em>+23.1%</em><img class="email-performance-graph" src="{{ url('frontend/') }}assets/images/email-marketing/case-study-growth-graph.svg" alt="" aria-hidden="true"></article><article><span>Revenue</span><b>$48,560</b><em>+31.5%</em><img class="email-performance-graph" src="{{ url('frontend/') }}assets/images/email-marketing/case-study-growth-graph.svg" alt="" aria-hidden="true"></article></div>
                </div> -->
            </div>
        </section>

        <section class="email-services-section" id="email-services">
            <div class="container">
                <div class="email-center-heading reveal">
                    <h2>Our <em>Email</em> Marketing Services</h2>
                    <p>
                    End-to-end email marketing solutions that drive engagement and
                    grow your revenue.
                    </p>
                </div>
                <div class="email-service-grid">
                    <article class="reveal">
                    <i class="fa-regular fa-envelope"></i>
                    <h3>Email Strategy</h3>
                    <p>
                        Data-backed strategies aligned with your business goals and
                        audience.
                    </p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-regular fa-paper-plane"></i>
                    <h3>Campaign Management</h3>
                    <p>
                        High-converting campaigns designed, written, and optimized for
                        results.
                    </p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-users"></i>
                    <h3>List Growth</h3>
                    <p>
                        Grow a high-quality, engaged email list with proven
                        acquisition tactics.
                    </p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-sitemap"></i>
                    <h3>Marketing Automation</h3>
                    <p>
                        Automated workflows that nurture leads and drive customer
                        loyalty.
                    </p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-bullhorn"></i>
                    <h3>Personalization</h3>
                    <p>
                        Tailored content and dynamic experiences that resonate with
                        each user.
                    </p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-arrow-up-right-dots"></i>
                    <h3>Email Analytics</h3>
                    <p>
                        Deep reporting and insights to continuously improve
                        performance.
                    </p>
                    <a href="contact-us.html">Learn More <span>-></span></a>
                    </article>
                </div>
            </div>
        </section>

        <section class="email-segment-band counter-section">
            <div class="container email-segment-grid">
                <div class="email-section-copy reveal">
                    <small>Segment. Personalize. Perform.</small>
                    <h2>Smarter Emails. <br />Stronger Connections.</h2>
                    <p>
                    We use data and segmentation to send the right message to the
                    right people, boosting engagement and driving meaningful results.
                    </p>
                    <ul>
                    <li>Advanced audience segmentation</li>
                    <li>Behavior-based communication</li>
                    <li>Dynamic content for higher relevance</li>
                    <li>A/B testing for continuous improvement</li>
                    </ul>
                </div>
                <div class="email-stat-card reveal">
                    <strong
                    class="counter"
                    data-value="26"
                    data-prefix="+"
                    data-suffix="%"
                    >0</strong
                    ><span>Higher Open Rate</span><small>with segmented lists</small
                    ><img
                    class="email-stat-graph"
                    src="{{ url('frontend/assets/images/email-marketing/segment-performance-graph.svg') }}"
                    alt=""
                    aria-hidden="true"
                    />
                </div>
                <div class="email-stat-card reveal">
                    <strong
                    class="counter"
                    data-value="34"
                    data-prefix="+"
                    data-suffix="%"
                    >0</strong
                    ><span>More Clicks</span><small>with personalized content</small
                    ><img
                    class="email-stat-graph"
                    src="{{ url('frontend/assets/images/email-marketing/segment-performance-graph.svg') }}"
                    alt=""
                    aria-hidden="true"
                    />
                </div>
                <div class="email-stat-card reveal">
                    <strong
                    class="counter"
                    data-value="41"
                    data-prefix="+"
                    data-suffix="%"
                    >0</strong
                    ><span>More Conversions</span><small>with targeted emails</small
                    ><img
                    class="email-stat-graph"
                    src="{{ url('frontend/assets/images/email-marketing/segment-performance-graph.svg') }}"
                    alt=""
                    aria-hidden="true"
                    />
                </div>
            </div>
        </section>

        <section class="email-automation-section">
            <div class="container email-automation-grid">
                <div class="email-section-copy reveal">
                    <small>Automate. Nurture. Convert.</small>
                    <h2>Email Automation Journeys That Work While You Sleep</h2>
                    <p>
                    From welcome flows to re-engagement and post-purchase sequences,
                    we build automated journeys that guide subscribers and drive
                    results.
                    </p>
                    <a
                    class="button button-primary email-auto-button"
                    href="contact-us.html"
                    ><span>Explore Automation</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/vduvxizq.json"
                        trigger="hover"
                        target=".email-auto-button"
                        colors="primary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon
                    ></a>
                </div>
                <div class="email-flow reveal">
                    <article>
                    <i class="fa-solid fa-user-plus"></i><b>User Joins List</b
                    ><span>New subscriber signs up</span>
                    </article>
                    <article>
                    <i class="fa-regular fa-envelope"></i><b>Welcome Email</b
                    ><span>Introduce your brand</span>
                    </article>
                    <article>
                    <i class="fa-solid fa-heart"></i><b>Nurture Sequence</b
                    ><span>Deliver value and trust</span>
                    </article>
                    <article>
                    <i class="fa-solid fa-tag"></i><b>Offer Email</b
                    ><span>Send the right offer</span>
                    </article>
                    <article>
                    <i class="fa-solid fa-cart-shopping"></i><b>Purchase / Action</b
                    ><span>Convert and build loyalty</span>
                    </article>
                </div>
            </div>
        </section>

        <section class="email-deliverability-band">
            <div class="container email-deliverability-grid">
                <div class="email-section-copy reveal">
                    <small>Deliverability. Reliability. Results.</small>
                    <h2>Built for the Inbox</h2>
                    <p>
                    We follow industry best practices to maximize deliverability and
                    ensure your emails land where they belong: in the inbox.
                    </p>
                    <ul>
                    <li>Domain and SPF/DKIM/DMARC setup</li>
                    <li>List hygiene and engagement management</li>
                    <li>Spam testing and inbox placement monitoring</li>
                    <li>Compliance with CAN-SPAM and GDPR</li>
                    </ul>
                </div>
                <article class="reveal">
                    <i class="fa-regular fa-envelope"></i>
                    <h3>Inbox Placement Optimization</h3>
                    <p>Improve placement and avoid spam folders.</p>
                </article>
                <article class="reveal">
                    <i class="fa-solid fa-flask"></i>
                    <h3>A/B Testing</h3>
                    <p>Test subject lines, content, CTAs, and send times.</p>
                </article>
                <article class="reveal">
                    <i class="fa-regular fa-square-check"></i>
                    <h3>Performance Monitoring</h3>
                    <p>Track results in real time and optimize continuously.</p>
                </article>
            </div>
        </section>

        <section class="email-results-strip counter-section">
            <div class="container">
                <div class="email-mini-heading reveal">
                    <small>Email marketing results we deliver</small>
                </div>
                <div class="email-results-grid">
                    <div class="email-result-card reveal">
                    <i class="fa-solid fa-stopwatch"></i
                    ><strong
                        class="counter"
                        data-value="32.6"
                        data-decimals="1"
                        data-suffix="%"
                        >0</strong
                    ><span>Average Open Rate</span><em>+18.4% vs industry avg</em>
                    </div>
                    <div class="email-result-card reveal">
                    <i class="fa-regular fa-lightbulb"></i
                    ><strong
                        class="counter"
                        data-value="7.8"
                        data-decimals="1"
                        data-suffix="%"
                        >0</strong
                    ><span>Average Click Rate</span><em>+23.1% vs industry avg</em>
                    </div>
                    <div class="email-result-card reveal">
                    <i class="fa-solid fa-bullseye"></i
                    ><strong
                        class="counter"
                        data-value="4.2"
                        data-decimals="1"
                        data-suffix="%"
                        >0</strong
                    ><span>Average Conversion Rate</span
                    ><em>+29.7% vs industry avg</em>
                    </div>
                    <div class="email-result-card reveal">
                    <i class="fa-solid fa-chart-line"></i
                    ><strong class="counter" data-value="48560" data-prefix="$"
                        >0</strong
                    ><span>Avg. Revenue / Campaign</span
                    ><em>+31.5% vs previous period</em>
                    </div>
                    <div class="email-result-card reveal">
                    <i class="fa-regular fa-envelope"></i
                    ><strong
                        class="counter"
                        data-value="98.2"
                        data-decimals="1"
                        data-suffix="%"
                        >0</strong
                    ><span>Deliverability Rate</span
                    ><em>Industry-leading inbox rate</em>
                    </div>
                    <div class="email-result-card reveal">
                    <i class="fa-solid fa-users"></i
                    ><strong class="counter" data-value="25" data-suffix="%+"
                        >0</strong
                    ><span>List Growth</span><em>Avg. monthly growth</em>
                    </div>
                </div>
            </div>
        </section>

        <section class="email-showcase-section">
            <div class="container email-showcase-grid">
                <div class="email-section-copy reveal">
                    <small>Campaign showcase</small>
                    <h2>Emails That Drive Action</h2>
                    <p>Creative. Strategic. Result-driven.</p>
                </div>
                <div
                    class="logo-slider email-campaign-slider reveal"
                    aria-label="Email campaign showcase slider"
                >
                    <div class="logo-viewport">
                    <div class="logos">
                        <article class="logo-slide email-campaign-card">
                            <img
                                src="{{ url('frontend/assets/images/email-marketing/campaign/welcome-series.png') }}"
                                alt="Welcome email series campaign"
                            /><b>Welcome Series</b
                            ><span>Onboarding new subscribers</span>
                        </article>
                        <article class="logo-slide email-campaign-card">
                            <img
                                src="{{ url('frontend/assets/images/email-marketing/campaign/product-launch.png') }}"
                                alt="Product launch email campaign"
                            /><b>Product Launch</b
                            ><span>Introducing new products</span>
                        </article>
                        <article class="logo-slide email-campaign-card">
                            <img
                                src="{{ url('frontend/assets/images/email-marketing/campaign/abandoned-cart.png') }}"
                                alt="Abandoned cart email campaign"
                            /><b>Abandoned Cart</b
                            ><span>Recover lost sales with smart flows</span>
                        </article>
                        <article class="logo-slide email-campaign-card">
                            <img
                                src="{{ url('frontend/assets/images/email-marketing/campaign/seasonal-promotion.png') }}"
                                alt="Seasonal promotion email campaign"
                            /><b>Seasonal Promotion</b
                            ><span>Timely offers that convert</span>
                        </article>
                        <article
                            class="logo-slide email-campaign-card"
                            aria-hidden="true"
                        >
                            <img
                                src="{{ url('frontend/assets/images/email-marketing/campaign/welcome-series.png') }}"
                                alt=""
                            /><b>Welcome Series</b
                            ><span>Onboarding new subscribers</span>
                        </article>
                        <article
                            class="logo-slide email-campaign-card"
                            aria-hidden="true"
                        >
                            <img
                                src="{{ url('frontend/assets/images/email-marketing/campaign/product-launch.png') }}"
                                alt=""
                            /><b>Product Launch</b
                            ><span>Introducing new products</span>
                        </article>
                        <article
                            class="logo-slide email-campaign-card"
                            aria-hidden="true"
                        >
                            <img
                                src="{{ url('frontend/assets/images/email-marketing/campaign/abandoned-cart.png') }}"
                                alt=""
                            /><b>Abandoned Cart</b
                            ><span>Recover lost sales with smart flows</span>
                        </article>
                        <article
                            class="logo-slide email-campaign-card"
                            aria-hidden="true"
                        >
                            <img
                                src="{{ url('frontend/assets/images/email-marketing/campaign/seasonal-promotion.png') }}"
                                alt=""
                            /><b>Seasonal Promotion</b
                            ><span>Timely offers that convert</span>
                        </article>
                    </div>
                    </div>
                    <div
                    class="logo-pagination"
                    aria-label="Email campaign slides"
                    ></div>
                </div>
            </div>
        </section>

        <section class="email-case-section counter-section">
            <div class="container email-case-grid">
                <div class="email-section-copy reveal">
                    <small>Case study</small>
                    <h2>How We Increased Revenue for an E-Commerce Brand</h2>
                    <p>
                    We built a targeted email strategy and automation system that
                    re-engaged subscribers and drove consistent revenue growth.
                    </p>
                    <a
                    class="button button-primary email-case-button"
                    href="contact-us.html"
                    ><span>View Full Case Study</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/vduvxizq.json"
                        trigger="hover"
                        target=".email-case-button"
                        colors="primary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon
                    ></a>
                </div>
                <div class="email-case-metrics reveal">
                    <div>
                    <strong
                        class="counter"
                        data-value="28.4"
                        data-prefix="+"
                        data-decimals="1"
                        data-suffix="%"
                        >0</strong
                    ><span>Increase in Open Rate</span
                    ><small>From 21.3% to 32.6%</small
                    ><img
                        class="email-case-graph"
                        src="{{ url('frontend/assets/images/email-marketing/case-study-growth-graph.svg') }}"
                        alt=""
                        aria-hidden="true"
                    />
                    </div>
                    <div>
                    <strong
                        class="counter"
                        data-value="36.7"
                        data-prefix="+"
                        data-decimals="1"
                        data-suffix="%"
                        >0</strong
                    ><span>Increase in Click Rate</span
                    ><small>From 5.7% to 7.8%</small
                    ><img
                        class="email-case-graph"
                        src="{{ url('frontend/assets/images/email-marketing/case-study-growth-graph.svg') }}"
                        alt=""
                        aria-hidden="true"
                    />
                    </div>
                    <div>
                    <strong
                        class="counter"
                        data-value="42.1"
                        data-prefix="+"
                        data-decimals="1"
                        data-suffix="%"
                        >0</strong
                    ><span>Increase in Revenue</span
                    ><small>From $33,980 to $48,230</small
                    ><img
                        class="email-case-graph"
                        src="{{ url('frontend/assets/images/email-marketing/case-study-growth-graph.svg') }}"
                        alt=""
                        aria-hidden="true"
                    />
                    </div>
                </div>
                <div class="email-case-image reveal">
                    <img
                    src="{{ url('frontend/assets/images/email-marketing/case-img.png') }}"
                    alt="Email campaign preview on a phone"
                    />
                </div>
            </div>
        </section>

        <section class="section faq-section email-faq-section">
            <div class="container faq-grid">
                <div class="faq-intro reveal">
                    <div class="kicker dark">
                    <span></span>Frequently asked questions
                    </div>
                    <h2>Everything You Need to Know About Email Marketing</h2>
                    <p>Have questions? We are ready to help.</p>
                </div>
                <div class="faq-list">
                    <article class="faq-item open reveal">
                    <button type="button" aria-expanded="true">
                        <i class="fa-solid fa-question"></i
                        ><span>How do you build and grow email lists?</span><b>-</b>
                    </button>
                    <div>
                        <p>
                            We use compliant lead magnets, signup forms, landing pages,
                            segmentation, and audience-specific offers to grow quality
                            lists.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>How do you improve email deliverability?</span><b>+</b>
                    </button>
                    <div>
                        <p>
                            We configure authentication, clean lists, monitor
                            engagement, test spam risk, and optimize sending practices.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>What types of emails do you create?</span><b>+</b>
                    </button>
                    <div>
                        <p>
                            We create campaigns, newsletters, welcome flows, abandoned
                            cart sequences, win-back flows, and post-purchase
                            automation.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>How do you measure email marketing success?</span
                        ><b>+</b>
                    </button>
                    <div>
                        <p>
                            We track open rate, click rate, conversion rate, revenue,
                            deliverability, unsubscribe rate, and flow performance.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>Do you manage email automation?</span><b>+</b>
                    </button>
                    <div>
                        <p>
                            Yes. We build, monitor, test, and optimize automated
                            journeys across the customer lifecycle.
                        </p>
                    </div>
                    </article>
                </div>
            </div>
        </section>
    </main>


@endsection

@section('js')
@endsection