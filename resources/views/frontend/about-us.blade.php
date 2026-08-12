@extends('frontend.layouts.master')

@section('metas')
@endsection

@section('title')
About Us - Learn More About Our Digital Marketing Agency
@endsection

@section('css')
@endsection

@section('body')

    <main>
        <section class="about-hero">
            <div class="container hero-layout">
                <div class="reveal">
                    <div class="kicker"><span></span>About Markit</div>
                    <h1>About Us</h1>
                    <p>
                    We're a result-driven digital marketing agency passionate about
                    growth, innovation, and impact.
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
        <section class="section story" id="story">
            <div class="container story-layout">
                <div class="reveal">
                    <div class="kicker dark"><span></span>Our story</div>
                    <h2>
                    Built on strategy.<br />Driven by results.<br />Focused on
                    <em>growth.</em>
                    </h2>
                    <p>
                    Markit was founded with a simple mission: to help businesses grow
                    smarter in the digital world.
                    </p>
                    <p>
                    What started as a small team of marketers and strategists has
                    grown into a full-service digital marketing agency trusted by
                    businesses across industries and around the globe.<br /><br />We
                    combine data, creativity, and cutting-edge tools to craft
                    strategies that attract, engage, and convert—delivering
                    measurable results that drive long-term success.
                    </p>
                </div>
                <div class="story-image reveal">
                    <img
                    src="{{ url('frontend/assets/images/about/about-bg.png') }}"
                    alt="Marketing team collaborating"
                    />
                    <div><strong>10+</strong><span>years creating momentum</span></div>
                </div>
            </div>
        </section>
        <section class="purpose">
            <div class="container purpose-layout">
                <div>
                    <div class="kicker"><span></span>Our purpose</div>
                    <h2>
                    Our
                    <em>Mission &amp;<br />Vision</em>
                    </h2>
                </div>
                <article class="reveal">
                    <i class="fa-solid fa-bullseye"></i>
                    <div>
                    <h3>Our Mission</h3>
                    <p>
                        To empower businesses with data-driven marketing strategies
                        that generate quality leads, increase visibility, and maximize
                        ROI.
                    </p>
                    </div>
                </article>
                <article class="reveal">
                    <i class="fa-regular fa-eye icon-fa purpose-fa"></i>
                    <div>
                    <h3>Our Vision</h3>
                    <p>
                        To be a global leader in digital marketing, known for
                        innovation, integrity, and delivering exceptional results.
                    </p>
                    </div>
                </article>
            </div>
        </section>
        <section class="section values">
            <div class="container">
                <div class="center">
                    <div class="kicker dark"><span></span>Our principles</div>
                    <h2>The Principles That <em>Drive Us</em></h2>
                </div>
                <div class="values-grid">
                    <article class="reveal">
                    <i class="fa-regular fa-gem icon-fa value-fa"></i>
                    <h3>Results First</h3>
                    <p>
                        We focus on what matters most—measurable results that grow
                        your business.
                    </p>
                    </article>
                    <article class="reveal">
                    <i class="fa-regular fa-lightbulb icon-fa value-fa"></i>
                    <h3>Innovation</h3>
                    <p>
                        We embrace creativity and stay ahead with the latest tools and
                        trends.
                    </p>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-shield-halved icon-fa value-fa"></i>
                    <h3>Integrity</h3>
                    <p>
                        We believe in honesty, transparency, and building long-term
                        partnerships.
                    </p>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-people-group icon-fa value-fa"></i>
                    <h3>Collaboration</h3>
                    <p>
                        We work closely with our clients as an extension of their
                        team.
                    </p>
                    </article>
                    <article class="reveal">
                    <i class="fa-solid fa-arrow-trend-up icon-fa value-fa"></i>
                    <h3>Excellence</h3>
                    <p>
                        We are committed to delivering exceptional quality in
                        everything we do.
                    </p>
                    </article>
                </div>
            </div>
        </section>
        <section class="impact counter-section">
            <div class="container">
                <div class="center">
                    <div class="kicker"><span></span>Our Impact in Numbers</div>
                    <h2>
                    Milestones That Define
                    <em>Our Journey</em>
                    </h2>
                </div>
                <div class="impact-grid">
                    <div>
                    <i class="fa-solid fa-users impact-fa"></i><small>Clients</small
                    ><strong class="counter" data-value="250" data-suffix="+"
                        >0</strong
                    ><span>teams supported</span>
                    </div>
                    <div class="reveal">
                    <i class="fa-solid fa-bullhorn impact-fa"></i
                    ><small>Campaigns</small
                    ><strong class="counter" data-value="1200" data-suffix="+"
                        >0</strong
                    ><span>programs delivered</span>
                    </div>
                    <div class="reveal">
                    <i class="fa-solid fa-globe impact-fa"></i><small>Markets</small
                    ><strong class="counter" data-value="30" data-suffix="+"
                        >0</strong
                    ><span>countries reached</span>
                    </div>
                    <div class="reveal">
                    <i class="fa-solid fa-award impact-fa"></i
                    ><small>Experience</small
                    ><strong class="counter" data-value="10" data-suffix="+"
                        >0</strong
                    ><span>years building growth</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="section choose">
            <div class="container choose-layout">
                <div>
                    <div class="kicker dark"><span></span>Why Clients Choose Us</div>
                    <h2>Your growth is<br /><em>our commitment.</em></h2>
                    <p>
                    We go beyond marketing—we become your growth partner. Here's what
                    sets us apart.
                    </p>
                    <a
                    class="button result-button about-work-button"
                    href="contact-us.html"
                    ><span>Work with us</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/vduvxizq.json"
                        trigger="hover"
                        target=".about-work-button"
                        colors="primary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon
                    ></a>
                </div>
                <div class="promises">
                    <div class="reveal">
                    <span
                        ><b>Data-driven strategy</b
                        ><small>Evidence, not opinion.</small></span
                    >
                    </div>
                    <div class="reveal">
                    <span
                        ><b>Proven track record</b
                        ><small>Experience across industries.</small></span
                    >
                    </div>
                    <div class="reveal">
                    <span
                        ><b>Transparent reporting</b
                        ><small>Clear numbers and context.</small></span
                    >
                    </div>
                    <div class="reveal">
                    <span
                        ><b>Built around you</b
                        ><small>No recycled playbooks.</small></span
                    >
                    </div>
                    <div class="reveal">
                    <span
                        ><b>Senior support</b
                        ><small>Experts stay on the work.</small></span
                    >
                    </div>
                    <div class="reveal">
                    <span
                        ><b>Commercial focus</b
                        ><small>Metrics tied to business goals.</small></span
                    >
                    </div>
                </div>
            </div>
        </section>
        <section class="section team" id="team">
            <div class="container">
                <div class="team-heading">
                    <div>
                    <div class="kicker"><span></span>Meet the Team</div>
                    <h2>The Experts Behind <em>Your Success</em></h2>
                    </div>
                    <a class="button button-ghost join-team" href="contact-us.html"
                    ><span>Join Our Team</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/wjyqkiew.json"
                        trigger="hover"
                        target=".join-team"
                        colors="primary:#ffffff,secondary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon
                    ></a>
                </div>
                <div class="team-grid">
                    <article class="team-card reveal">
                    <img
                        src="{{ url('frontend/assets/images/teams/john-carter.png') }}"
                        alt="John Carter, CEO and Founder"
                    />
                    <div class="team-card-copy">
                        <h3>John Carter</h3>
                        <small>CEO &amp; Founder</small>
                        <p>
                            Visionary leader with 10+ years of experience in digital
                            marketing and business strategy.
                        </p>
                        <div class="team-socials">
                            <a
                                href="social-media.html"
                                aria-label="John Carter on LinkedIn"
                                ><i class="fa-brands fa-linkedin-in"></i></a
                            ><a href="social-media.html" aria-label="John Carter on X"
                                ><i class="fa-brands fa-x-twitter"></i></a
                            ><a
                                href="mailto:john@markit.com"
                                aria-label="Email John Carter"
                                ><i class="fa-regular fa-envelope"></i
                            ></a>
                        </div>
                    </div>
                    </article>
                    <article class="team-card reveal">
                    <img
                        src="{{ url('frontend/assets/images/teams/sarah-mitchell.png') }}"
                        alt="Sarah Mitchell, Head of Strategy"
                    />
                    <div class="team-card-copy">
                        <h3>Sarah Mitchell</h3>
                        <small>Head of Strategy</small>
                        <p>
                            Strategic mastermind specializing in growth marketing and
                            brand development.
                        </p>
                        <div class="team-socials">
                            <a
                                href="social-media.html"
                                aria-label="Sarah Mitchell on LinkedIn"
                                ><i class="fa-brands fa-linkedin-in"></i></a
                            ><a
                                href="social-media.html"
                                aria-label="Sarah Mitchell on X"
                                ><i class="fa-brands fa-x-twitter"></i></a
                            ><a
                                href="mailto:sarah@markit.com"
                                aria-label="Email Sarah Mitchell"
                                ><i class="fa-regular fa-envelope"></i
                            ></a>
                        </div>
                    </div>
                    </article>
                    <article class="team-card reveal">
                    <img
                        src="{{ url('frontend/assets/images/teams/michael-reed.png') }}"
                        alt="Michael Reed, Head of Performance"
                    />
                    <div class="team-card-copy">
                        <h3>Michael Reed</h3>
                        <small>Head of Performance</small>
                        <p>
                            Performance marketing expert focused on driving ROI through
                            data and automation.
                        </p>
                        <div class="team-socials">
                            <a
                                href="social-media.html"
                                aria-label="Michael Reed on LinkedIn"
                                ><i class="fa-brands fa-linkedin-in"></i></a
                            ><a href="social-media.html" aria-label="Michael Reed on X"
                                ><i class="fa-brands fa-x-twitter"></i></a
                            ><a
                                href="mailto:michael@markit.com"
                                aria-label="Email Michael Reed"
                                ><i class="fa-regular fa-envelope"></i
                            ></a>
                        </div>
                    </div>
                    </article>
                    <article class="team-card reveal">
                    <img
                        src="{{ url('frontend/assets/images/teams/lisa-thompson.png') }}"
                        alt="Lisa Thompson, Creative Director"
                    />
                    <div class="team-card-copy">
                        <h3>Lisa Thompson</h3>
                        <small>Creative Director</small>
                        <p>
                            Creative leader passionate about crafting compelling
                            stories that connect and convert.
                        </p>
                        <div class="team-socials">
                            <a
                                href="social-media.html"
                                aria-label="Lisa Thompson on LinkedIn"
                                ><i class="fa-brands fa-linkedin-in"></i></a
                            ><a
                                href="social-media.html"
                                aria-label="Lisa Thompson on X"
                                ><i class="fa-brands fa-x-twitter"></i></a
                            ><a
                                href="mailto:lisa@markit.com"
                                aria-label="Email Lisa Thompson"
                                ><i class="fa-regular fa-envelope"></i
                            ></a>
                        </div>
                    </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="section process">
            <div class="container">
                <div class="center">
                    <div class="kicker dark"><span></span>Our Approach</div>
                    <h2>Our Proven Process For <em>Your Growth</em></h2>
                </div>
                <ol>
                    <li class="reveal">
                    <span>01</span
                    ><i class="fa-solid fa-magnifying-glass process-fa"></i
                    ><b>Discover</b
                    ><small
                        >We analyze your business, audience, and competitors to
                        uncover opportunities.</small
                    >
                    </li>
                    <li class="reveal">
                    <span>02</span><i class="fa-solid fa-bullseye process-fa"></i
                    ><b>Strategize</b
                    ><small
                        >We craft a data-driven strategy tailored to your goals and
                        objectives.</small
                    >
                    </li>
                    <li class="reveal">
                    <span>03</span><i class="fa-solid fa-rocket process-fa"></i
                    ><b>Execute</b
                    ><small
                        >We implement campaigns with precision and creativity.</small
                    >
                    </li>
                    <li class="reveal">
                    <span>04</span><i class="fa-solid fa-chart-column process-fa"></i
                    ><b>Optimize</b
                    ><small
                        >We monitor performance, optimize continuously, and maximize
                        results.</small
                    >
                    </li>
                    <li class="reveal">
                    <span>05</span><i class="fa-solid fa-trophy process-fa"></i
                    ><b>Grow</b
                    ><small
                        >We scale what works to drive long-term, sustained business
                        growth.</small
                    >
                    </li>
                </ol>
            </div>
        </section>
        <section class="ready-cta" id="contact">
            <div class="container ready-inner">
                <div>
                    <div class="kicker"><span></span>Your next chapter</div>
                    <h2>Ready to grow <em>your business?</em></h2>
                    <p>
                    Tell us where you want to go. We’ll build the smartest route
                    there.
                    </p>
                </div>
                <img
                    class="ready-rocket"
                    src="{{ url('frontend/assets/images/ready-section/rocket-icon.png') }}"
                    alt
                /><a
                    class="button button-primary ready-button"
                    href="mailto:hello@markit.com"
                    ><span>Let&rsquo;s get started</span
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