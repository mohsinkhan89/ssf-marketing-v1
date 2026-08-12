@extends('frontend.layouts.master')

@section('metas')
@endsection

@section('title')
Contact US - SSF Marketing
@endsection

@section('css')
@endsection

@section('body')

    <main>
        <section class="contact-hero">
            <div class="container contact-hero-grid">
                <div class="reveal">
                    <div class="kicker"><span></span>Let's grow together</div>
                    <h1>Contact Us</h1>
                    <p>
                    Have a question or ready to start your next project?<br />We'd
                    love to hear from you.
                    </p>
                    <div class="contact-proof">
                    <div>
                        <i class="fa-regular fa-comments"></i
                        ><span
                            ><b>Fast Response</b
                            ><small>We reply within 1 business day</small></span
                        >
                    </div>
                    <div>
                        <i class="fa-solid fa-shield-halved"></i
                        ><span
                            ><b>Trusted Partner</b
                            ><small>Strategic solutions you can trust</small></span
                        >
                    </div>
                    <div>
                        <i class="fa-solid fa-chart-line"></i
                        ><span
                            ><b>Results Driven</b
                            ><small>Focused on growth that matters</small></span
                        >
                    </div>
                    </div>
                </div>
                <!-- <div class="contact-visual reveal delay-1">
                <div class="visual-copy">
                    <h2>Your growth is our
                    <em>mission.</em>
                    </h2>
                    <p>Whether you need a strategy, have a
                    question, or want to explore how we can help, our team is here
                    and ready to help you grow.</p>
                </div>
                <div class="mail-graphic"><img src="assets/images/contactus-img.png"
                    alt="Red digital envelope communication illustration"></div>
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
        <section class="contact-info">
            <div class="container contact-info-grid">
                <a href="tel:+15551234567" class="contact-info-card reveal"
                    ><i class="fa-solid fa-phone"></i
                    ><span
                    ><b>Call Us</b><strong>+1 (555) 123-4567</strong
                    ><small>Mon–Fri, 9:00 AM – 6:00 PM EST</small></span
                    ></a
                ><a href="mailto:hello@markit.com" class="contact-info-card reveal"
                    ><i class="fa-solid fa-envelope"></i
                    ><span
                    ><b>Email Us</b><strong>hello@markit.com</strong
                    ><small>We'll respond within 1 business day</small></span
                    ></a
                ><a href="#location" class="contact-info-card reveal"
                    ><i class="fa-solid fa-location-dot"></i
                    ><span
                    ><b>Visit Us</b
                    ><strong
                        >123 Market Street, Suite 100<br />New York, NY 10001,
                        USA</strong
                    ><small>By appointment only</small></span
                    ></a
                >
            </div>
        </section>
        <section class="section contact-form-section">
            <div class="container contact-form-grid">
                <div class="contact-form-copy reveal">
                    <div class="kicker dark"><span></span>Send us a message</div>
                    <h2>We're Here to Help You<br />Grow <em>Your Business</em></h2>
                    <p>
                    Fill out the form and our team will get back to you to discuss
                    how Markit can help you achieve your goals.
                    </p>
                    <ul>
                    <li>
                        <i class="fa-solid fa-circle-check"></i> Share your goals and
                        challenges
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i> Get a tailored
                        strategy from our experts
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i> No obligation, just
                        helpful insights
                    </li>
                    </ul>
                    <div class="response-card">
                    <i class="fa-regular fa-clock"></i
                    ><span
                        ><small>Average Response Time</small><b>Within 24 Hours</b
                        ><em>We value your time and respond quickly.</em></span
                    >
                    </div>
                </div>
                <form class="contact-form reveal" action="#" method="post">
                    <div class="form-grid">
                    <label
                        >Full Name <b>*</b
                        ><input
                            type="text"
                            name="name"
                            placeholder="Enter your full name"
                            required /></label
                    ><label
                        >Email Address <b>*</b
                        ><input
                            type="email"
                            name="email"
                            placeholder="Enter your email"
                            required /></label
                    ><label
                        >Company Name<input
                            type="text"
                            name="company"
                            placeholder="Enter your company name" /></label
                    ><label
                        >Phone Number<input
                            type="tel"
                            name="phone"
                            placeholder="Enter your phone number" /></label
                    ><label class="full"
                        >What Can We Help You With? <b>*</b
                        ><select name="service" required>
                            <option value>Select a service</option>
                            <option>Search &amp; SEO</option>
                            <option>Paid Media</option>
                            <option>Creative Studio</option>
                            <option>CRO &amp; Analytics</option>
                            <option>Full Growth Strategy</option>
                        </select></label
                    ><label class="full"
                        >Message <b>*</b
                        ><textarea
                            name="message"
                            placeholder="Tell us about your project, goals, or any questions you have..."
                            required
                        ></textarea>
                    </label>
                    </div>
                    <div class="form-bottom">
                    <label class="consent"
                        ><input type="checkbox" required /><span
                            >I agree to the
                            <a href="about-us.html">Privacy Policy</a> and
                            <a href="contact-us.html">Terms of Service</a>.</span
                        ></label
                    ><button
                        class="button button-primary contact-submit-button"
                        type="submit"
                    >
                        <span>Send Message</span
                        ><lord-icon
                            src="https://cdn.lordicon.com/aycieyht.json"
                            trigger="hover"
                            target=".contact-submit-button"
                            colors="primary:#ffffff,secondary:#ffffff"
                            aria-hidden="true"
                        ></lord-icon>
                    </button>
                    </div>
                    <div class="form-success" role="status">
                    Thanks! Your message is ready to send.
                    </div>
                </form>
            </div>
        </section>
        <section class="location-section" id="location">
            <div class="container location-grid">
                <div class="map-card reveal">
                    <div class="map-lines"></div>
                    <i class="fa-solid fa-location-dot map-pin"></i>
                    <div class="map-address">
                    <small>Our office</small>
                    <h3>Markit Headquarters</h3>
                    <p>123 Market Street, Suite 100<br />New York, NY 10001, USA</p>
                    <a
                        class="button button-ghost directions-button"
                        href="https://maps.google.com/?q=123+Market+Street+New+York"
                        target="_blank"
                        rel="noopener"
                        ><span>Get Directions</span
                        ><lord-icon
                            src="https://cdn.lordicon.com/surcxhka.json"
                            trigger="hover"
                            target=".directions-button"
                            colors="primary:#ffffff,secondary:#ffffff"
                            aria-hidden="true"
                        ></lord-icon
                    ></a>
                    </div>
                </div>
                <div class="location-copy reveal">
                    <div class="location-badge">
                    <i class="fa-solid fa-location-dot"></i
                    ><span>New York Headquarters</span>
                    </div>
                    <h2>
                    Strategically Located.<br />Always
                    <em>Accessible.</em>
                    </h2>
                    <p>
                    Our office is located in the heart of New York City. Let's meet
                    and discuss how we can drive real results for your business.
                    </p>
                    <div class="travel-list">
                    <div>
                        <i class="fa-solid fa-train-subway"></i
                        ><span
                            ><b>Subway</b
                            ><small>2, 3, A, C to Chambers St</small></span
                        >
                    </div>
                    <div>
                        <i class="fa-solid fa-car"></i
                        ><span
                            ><b>Parking</b
                            ><small>Several parking lots nearby</small></span
                        >
                    </div>
                    <div>
                        <i class="fa-regular fa-calendar-check"></i
                        ><span
                            ><b>By Appointment</b
                            ><small>Schedule a visit in advance</small></span
                        >
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="support-strip">
            <div class="container support-grid">
                <div>
                    <i class="fa-regular fa-clock"></i
                    ><span
                    ><b>Office Hours</b
                    ><strong>Mon–Fri, 9:00 AM – 6:00 PM EST</strong
                    ><small
                        >We're closed on weekends and major holidays.</small
                    ></span
                    >
                </div>
                <div>
                    <i class="fa-regular fa-envelope"></i
                    ><span
                    ><b>Response Time</b><strong>Within 24 Hours</strong
                    ><small
                        >We typically respond within one business day.</small
                    ></span
                    >
                </div>
                <div>
                    <i class="fa-solid fa-headset"></i
                    ><span
                    ><b>Client Support</b><strong>Ongoing Support</strong
                    ><small>We're here every step of the way.</small></span
                    >
                </div>
            </div>
        </section>
        <section class="section faq-section">
            <div class="container faq-grid">
                <div class="faq-intro reveal">
                    <div class="kicker dark"><span></span>Helpful information</div>
                    <h2>Frequently Asked<br /><em>Questions</em></h2>
                    <p>Quick answers to common questions about working with Markit.</p>
                    <a
                    class="button result-button contact-question-button"
                    href="mailto:hello@markit.com"
                    ><span>Still Have Questions?</span
                    ><lord-icon
                        src="https://cdn.lordicon.com/vduvxizq.json"
                        trigger="hover"
                        target=".contact-question-button"
                        colors="primary:#ffffff"
                        aria-hidden="true"
                    ></lord-icon></a
                    ><small>Contact us directly — we're happy to help!</small>
                </div>
                <div class="faq-list">
                    <article class="faq-item open reveal">
                    <button type="button" aria-expanded="true">
                        <i class="fa-solid fa-question"></i
                        ><span>What services does Markit offer?</span><b>−</b>
                    </button>
                    <div>
                        <p>
                            We offer a full suite of digital marketing services
                            including SEO, PPC, social media marketing, content
                            marketing, email marketing, and conversion optimization.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>How long does it take to see results?</span><b>+</b>
                    </button>
                    <div>
                        <p>
                            Early signals often appear within weeks, while sustainable
                            growth typically compounds over three to six months.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>Do you work with businesses of all sizes?</span
                        ><b>+</b>
                    </button>
                    <div>
                        <p>
                            Yes. We tailor the team, channels, and growth plan to your
                            stage, market, and commercial goals.
                        </p>
                    </div>
                    </article>
                    <article class="faq-item reveal">
                    <button type="button" aria-expanded="false">
                        <i class="fa-solid fa-question"></i
                        ><span>How do I get started?</span><b>+</b>
                    </button>
                    <div>
                        <p>
                            Send us a message with your goals. We'll schedule a
                            discovery call and recommend the smartest next step.
                        </p>
                    </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="ready-cta">
            <div class="container ready-inner">
                <div>
                    <div class="kicker"><span></span>Your next chapter</div>
                    <h2>Ready to grow <em>your business?</em></h2>
                    <p>
                    Let's create a powerful strategy that drives real results and
                    scales your brand.
                    </p>
                </div>
                <img
                    class="ready-rocket"
                    src="{{ url('frontend/assets/images/ready-section/rocket-icon.png') }}"
                    alt
                /><a class="button button-primary ready-button" href="#top"
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