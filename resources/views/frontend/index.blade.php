@extends('frontend.layouts.master')

@section('metas')
@endsection

@section('title')
Home - Markit Digital Marketing
@endsection

@section('css')
@endsection

@section('body')

    <main>
        <section class="hero">
            <div class="hero-glow"></div>
            <div class="container hero-grid">
                <div class="hero-copy reveal">
                    <div class="kicker">
                        <span></span> Performance marketing for ambitious brands
                    </div>
                    <h1>Turn attention into <em>measurable growth.</em></h1>
                    <p class="hero-lead">
                        We combine sharp creative, media buying and conversion
                        strategy to build digital growth engines that perform.
                    </p>
                    <div class="hero-actions">
                        <a
                        class="button button-primary hero-primary"
                        href="#contact"
                        ><span>Build my growth plan</span
                        ><lord-icon
                            src="https://cdn.lordicon.com/wjyqkiew.json"
                            trigger="hover"
                            target=".hero-primary"
                            colors="primary:#ffffff,secondary:#ffffff"
                            aria-hidden="true"
                        ></lord-icon
                        ></a>
                        <a class="button button-ghost hero-secondary" href="#work"
                        ><span>Explore our work</span
                        ><lord-icon
                            src="https://cdn.lordicon.com/vduvxizq.json"
                            trigger="hover"
                            target=".hero-secondary"
                            colors="primary:#ffffff"
                            aria-hidden="true"
                        ></lord-icon
                        ></a>
                    </div>
                    <div class="hero-proof">
                        <div class="avatars">
                        <span>JD</span><span>SM</span><span>AR</span>
                        </div>
                        <div>
                        <b>4.9/5 client rating</b
                        ><small>Trusted by 250+ growth teams</small>
                        </div>
                    </div>
                </div>
                <div class="hero-visual reveal delay-1">
                    <div class="visual-orbit orbit-one"></div>
                    <div class="visual-orbit orbit-two"></div>
                    <img
                        class="hero-dashboard"
                        src="{{ url('frontend/assets/images/hero-section/hero-dashboard-card.png') }}"
                        alt="Campaign performance dashboard"
                    />
                    <div class="growth-chip">
                        <span class="pulse"></span>
                        <div>
                        <small>Campaign growth</small><strong>+45.8%</strong>
                        </div>
                        <span class="trend">↗</span>
                    </div>
                    <div class="roi-chip">
                        <small>ROAS</small><strong>6.4x</strong
                        ><span>this quarter</span>
                    </div>
                </div>
            </div>
            <div class="container hero-metrics" aria-label="Agency results">
                <div class="metric-card">
                    <span class="metric-index">01</span
                    ><strong
                        class="counter"
                        data-value="18"
                        data-prefix="$"
                        data-suffix="M+"
                        >0</strong
                    ><span class="metric-label">Revenue generated</span>
                </div>
                <div class="metric-card">
                    <span class="metric-index">02</span
                    ><strong class="counter" data-value="96" data-suffix="%"
                        >0</strong
                    ><span class="metric-label">Client retention</span>
                </div>
                <div class="metric-card">
                    <span class="metric-index">03</span
                    ><strong
                        class="counter"
                        data-value="3.8"
                        data-decimals="1"
                        data-suffix="x"
                        >0</strong
                    ><span class="metric-label">Average ROAS</span>
                </div>
                <div class="metric-card">
                    <span class="metric-index">04</span
                    ><strong class="counter" data-value="12" data-suffix="+"
                        >0</strong
                    ><span class="metric-label">Markets scaled</span>
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
                    aria-label="Trusted company slides"
                ></div>
            </div>
        </div>
        </section>

        <section class="section about" id="about">
        <div class="container about-grid">
            <div class="about-media reveal">
                <img
                    src="{{ url('frontend/assets/images/about/about-bg.png') }}"
                    alt="Marketing team planning a growth campaign"
                />
                <div class="media-badge">
                    <lord-icon
                    src="https://cdn.lordicon.com/jdgfsfzr.json"
                    trigger="loop"
                    delay="2500"
                    colors="primary:#0f6b8f,secondary:#0f6b8f"
                    aria-hidden="true"
                    ></lord-icon>
                    <div><b>10+ years</b><span>building momentum</span></div>
                </div>
            </div>
            <div class="section-copy reveal">
                <div class="kicker dark">
                    <span></span> More than an agency
                </div>
                <h2>
                    A senior growth team, <em>built around your goals.</em>
                </h2>
                <p>
                    Good marketing looks great. Great marketing creates
                    business outcomes. We blend strategy, creative and
                    analytics into one focused team—so every campaign has a
                    clear reason to exist and a number to move.
                </p>
                <div class="feature-list">
                    <div>
                    <span>01</span>
                    <div>
                        <b>Strategy before tactics</b>
                        <p>
                            Every channel supports one clear growth objective.
                        </p>
                    </div>
                    </div>
                    <div>
                    <span>02</span>
                    <div>
                        <b>Radical clarity</b>
                        <p>
                            Simple reporting, honest insight and no vanity
                            metrics.
                        </p>
                    </div>
                    </div>
                </div>
                <a class="text-link about-link" href="#services"
                    >How we create growth
                    <lord-icon
                    src="https://cdn.lordicon.com/vduvxizq.json"
                    trigger="hover"
                    target=".about-link"
                    colors="primary:#0f6b8f"
                    aria-hidden="true"
                    ></lord-icon
                ></a>
            </div>
        </div>
        </section>

        <section class="section services" id="services">
        <div class="container">
            <div class="section-heading light">
                <div>
                    <div class="kicker"><span></span> What we do best</div>
                    <h2>
                    One team. Every lever<br />you need to <em>scale.</em>
                    </h2>
                </div>
                <p>
                    Focused services designed to work together and compound
                    your growth.
                </p>
            </div>
            <div class="service-grid">
                <article class="service-card reveal">
                    <span class="service-number">01</span
                    ><lord-icon
                    src="https://cdn.lordicon.com/kkvxgpti.json"
                    trigger="hover"
                    target=".service-card"
                    colors="primary:#0f6b8f,secondary:#ffffff"
                    aria-hidden="true"
                    ></lord-icon>
                    <h3>Search &amp; SEO</h3>
                    <p>
                    Own high-intent demand with technical SEO, content and
                    search strategies that compound.
                    </p>
                    <a href="seo.html">Explore service <span>↗</span></a>
                </article>
                <article class="service-card reveal">
                    <span class="service-number">02</span
                    ><lord-icon
                    src="https://cdn.lordicon.com/akqsdstj.json"
                    trigger="hover"
                    target=".service-card"
                    colors="primary:#0f6b8f,secondary:#ffffff"
                    aria-hidden="true"
                    ></lord-icon>
                    <h3>Paid Media</h3>
                    <p>
                    Efficient acquisition across Google, Meta and emerging
                    channels—built around profit.
                    </p>
                    <a href="ppc.html">Explore service <span>↗</span></a>
                </article>
                <article class="service-card reveal">
                    <span class="service-number">03</span
                    ><lord-icon
                    src="https://cdn.lordicon.com/wzwygmng.json"
                    trigger="hover"
                    target=".service-card"
                    colors="primary:#0f6b8f,secondary:#ffffff"
                    aria-hidden="true"
                    ></lord-icon>
                    <h3>Creative Studio</h3>
                    <p>
                    Campaign concepts, content and ad creative that stop the
                    scroll and inspire action.
                    </p>
                    <a href="social-media.html"
                    >Explore service <span>↗</span></a
                    >
                </article>
                <article class="service-card reveal">
                    <span class="service-number">04</span
                    ><lord-icon
                    src="https://cdn.lordicon.com/abwrkdvl.json"
                    trigger="hover"
                    target=".service-card"
                    colors="primary:#0f6b8f,secondary:#ffffff"
                    aria-hidden="true"
                    ></lord-icon>
                    <h3>CRO &amp; Analytics</h3>
                    <p>
                    Turn more visits into revenue through testing, clean
                    data and sharper user journeys.
                    </p>
                    <a href="#contact">Explore service <span>↗</span></a>
                </article>
            </div>
        </div>
        </section>

        <section class="section results counter-section">
        <div class="container results-grid">
            <div class="results-copy reveal">
                <div class="kicker dark">
                    <span></span> Proof, not promises
                </div>
                <h2>We measure success in <em>business outcomes.</em></h2>
                <p>
                    Every campaign is connected to a commercial goal. Live
                    reporting shows what is working, why it is working and
                    where the next opportunity lives.
                </p>
                <div class="result-stats">
                    <div>
                    <strong
                        class="counter"
                        data-value="150"
                        data-prefix="+"
                        data-suffix="%"
                        >0</strong
                    ><span>Average revenue lift</span>
                    </div>
                    <div>
                    <strong
                        class="counter"
                        data-value="32"
                        data-prefix="−"
                        data-suffix="%"
                        >0</strong
                    ><span>Lower acquisition cost</span>
                    </div>
                    <div>
                    <strong
                        class="counter"
                        data-value="8"
                        data-suffix=" wks"
                        >0</strong
                    ><span>To measurable impact</span>
                    </div>
                </div>
                <div class="result-points">
                    <span><i>✓</i> Live performance dashboards</span
                    ><span><i>✓</i> Weekly strategy insights</span
                    ><span><i>✓</i> Clear commercial KPIs</span>
                </div>
                <a class="button result-button" href="#work"
                    ><span>Explore our results</span
                    ><lord-icon
                    src="https://cdn.lordicon.com/vduvxizq.json"
                    trigger="hover"
                    target=".result-button"
                    colors="primary:#ffffff"
                    aria-hidden="true"
                    ></lord-icon
                ></a>
            </div>
            <div class="results-visual reveal">
                <div class="results-glow"></div>
                <div class="dashboard-shell">
                    <div class="dashboard-top">
                    <span></span><span></span><span></span
                    ><small>Live performance overview</small>
                    </div>
                    <img
                    src="{{ url('frontend/assets/images/proven-results/proven-dashboard.png') }}"
                    alt="Live growth analytics dashboard"
                    />
                </div>
                <img
                    class="roi-card"
                    src="{{ url('frontend/assets/images/proven-results/proven-roi-card.png') }}"
                    alt="Return on investment increase"
                />
                <div class="performance-chip">
                    <span class="pulse"></span>
                    <div>
                    <b>Campaigns on track</b
                    ><small>12 of 14 growth goals</small>
                    </div>
                    <strong>86%</strong>
                </div>
            </div>
        </div>
        </section>

        <section class="section work" id="work">
        <div class="container">
            <div class="section-heading light">
                <div>
                    <div class="kicker"><span></span> Selected work</div>
                    <h2>Growth stories with<br /><em>real receipts.</em></h2>
                </div>
                <a class="button button-ghost work-button" href="#contact"
                    ><span>Discuss your project</span
                    ><lord-icon
                    src="https://cdn.lordicon.com/vduvxizq.json"
                    trigger="hover"
                    target=".work-button"
                    colors="primary:#ffffff"
                    aria-hidden="true"
                    ></lord-icon
                ></a>
            </div>
            <div class="work-grid">
                <a class="project-card project-large reveal" href="#contact"
                    ><div class="project-image">
                    <img
                        src="{{ url('frontend/assets/images/our-work/work-ecommerce-growth.png') }}"
                        alt="E-commerce growth project"
                    /><span>View case study ↗</span>
                    </div>
                    <div class="project-info">
                    <div>
                        <small>E-commerce / Paid media</small>
                        <h3>Turning ad spend into 150% more revenue.</h3>
                    </div>
                    <strong>5.7x ROAS</strong>
                    </div></a
                >
                <a class="project-card reveal" href="#contact"
                    ><div class="project-image">
                    <img
                        src="{{ url('frontend/assets/images/our-work/work-lead-generation.png') }}"
                        alt="Lead generation project"
                    /><span>View case study ↗</span>
                    </div>
                    <div class="project-info">
                    <div>
                        <small>B2B / Demand generation</small>
                        <h3>A pipeline built to convert.</h3>
                    </div>
                    <strong>+200% leads</strong>
                    </div></a
                >
                <a class="project-card reveal" href="#contact"
                    ><div class="project-image">
                    <img
                        src="{{ url('frontend/assets/images/our-work/work-social-media.png') }}"
                        alt="Social media project"
                    /><span>View case study ↗</span>
                    </div>
                    <div class="project-info">
                    <div>
                        <small>Social / Creative</small>
                        <h3>From quiet feed to active community.</h3>
                    </div>
                    <strong>+180% engagement</strong>
                    </div></a
                >
            </div>
        </div>
        </section>

        <section class="section testimonials">
        <div class="container testimonial-grid">
            <div class="testimonial-intro">
                <div class="kicker dark"><span></span> Client stories</div>
                <h2>
                    The results matter.<br />So does the <em>experience.</em>
                </h2>
                <div class="slider-controls">
                    <button
                    id="prev"
                    type="button"
                    aria-label="Previous testimonial"
                    >
                    ←</button
                    ><button
                    id="next"
                    type="button"
                    aria-label="Next testimonial"
                    >
                    →
                    </button>
                </div>
            </div>
            <div class="testimonial-card reveal" id="testimonial">
                <div class="quote-mark">“</div>
                <div class="stars">★★★★★</div>
                <blockquote>
                    Markit transformed our online presence and accelerated our
                    marketing results. Our leads rose, and sales have never
                    been better.
                </blockquote>
                <div class="client">
                    <span>JD</span>
                    <div>
                    <b>John Davis</b><small>CEO, TechSolutions</small>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <section class="section insights" id="insights">
        <div class="container">
            <div class="section-heading">
                <div>
                    <div class="kicker dark">
                    <span></span> Ideas for growth
                    </div>
                    <h2>Sharp thinking for<br /><em>modern marketers.</em></h2>
                </div>
                <a class="text-link insights-link" href="#insights"
                    >Browse all insights
                    <lord-icon
                    src="https://cdn.lordicon.com/vduvxizq.json"
                    trigger="hover"
                    target=".insights-link"
                    colors="primary:#0f6b8f"
                    aria-hidden="true"
                    ></lord-icon
                ></a>
            </div>
            <div class="insight-grid">
                <article class="insight-card reveal">
                    <div class="insight-image">
                    <img
                        src="{{ url('frontend/assets/images/our-work/work-local-seo.png') }}"
                        alt="SEO performance dashboard"
                    /><span>SEO</span>
                    </div>
                    <div>
                    <small>6 min read</small>
                    <h3>
                        Five SEO shifts shaping profitable growth in 2026
                    </h3>
                    <a href="#contact">Read article ↗</a>
                    </div>
                </article>
                <article class="insight-card reveal">
                    <div class="insight-image">
                    <img
                        src="{{ url('frontend/assets/images/our-work/work-lead-generation.png') }}"
                        alt="Paid advertising dashboard"
                    /><span>Paid Media</span>
                    </div>
                    <div>
                    <small>8 min read</small>
                    <h3>
                        How to scale ad spend without sacrificing efficiency
                    </h3>
                    <a href="#contact">Read article ↗</a>
                    </div>
                </article>
                <article class="insight-card reveal">
                    <div class="insight-image">
                    <img
                        src="{{ url('frontend/assets/images/our-work/work-social-media.png') }}"
                        alt="Social campaign dashboard"
                    /><span>Creative</span>
                    </div>
                    <div>
                    <small>5 min read</small>
                    <h3>
                        The creative testing system behind winning campaigns
                    </h3>
                    <a href="#contact">Read article ↗</a>
                    </div>
                </article>
            </div>
        </div>
        </section>

        <section class="ready-cta" id="contact">
        <div class="container ready-inner">
            <div>
                <div class="kicker"><span></span> Your next chapter</div>
                <h2>Ready to grow <em>your business?</em></h2>
                <p>
                    Tell us where you want to go. We’ll build the smartest
                    route there.
                </p>
            </div>
            <img
                class="ready-rocket"
                src="{{ url('frontend/assets/images/ready-section/rocket-icon.png') }}"
                alt
                aria-hidden="true"
            /><a
                class="button button-primary ready-button"
                href="mailto:hello@markit.com"
                ><span>Let’s get started</span
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