<footer class="footer">
         <div class="container footer-top">
            <div class="footer-brand">
               <a class="brand" href="{{ route('home') }}"
                  ><img
                     class="brand-logo"
                     src="{{ url($siteSetting?->transparent_logo_path ?? $siteSetting?->logo_path ?? 'frontend/assets/images/logo/logo.png') }}"
                     alt="Markit"
               /></a>
               <p>
                  We turn ambitious business goals into focused digital
                  strategies, memorable creative and measurable growth.
               </p>
               @if ($footerSocialLinks->isNotEmpty())
                  <div class="social-links">
                     @foreach ($footerSocialLinks as $socialLink)
                        <a href="{{ $socialLink->url }}" target="_blank" rel="noopener" aria-label="{{ $socialLink->label }}"><i class="fa-brands {{ $socialLink->icon_class }}" aria-hidden="true"></i></a>
                     @endforeach
                  </div>
               @endif
            </div>
            <div class="footer-links">
               <div>
                  <h3>Company</h3>
                  <a href="{{ route('home') }}">Home</a
                  ><a href="about-us.html">About us</a
                  ><a href="index.html#work">Our work</a
                  ><a href="index.html#insights">Insights</a
                  ><a href="{{ route('contact-us') }}">Contact</a>
               </div>
               <div>
                  <h3>Services</h3>
                  <a href="seo.html">Search &amp; SEO</a
                  ><a href="ppc.html">PPC Advertising</a
                  ><a href="social-media.html">Social Media</a
                  ><a href="email-marketing.html">Email Marketing</a
                  ><a href="index.html#services">Services Overview</a>
               </div>
            </div>
            <div class="footer-contact-card">
               <span class="contact-label">Have a project in mind?</span>
               <h3>Let's create something that performs.</h3>
               <a class="footer-email" href="mailto:{{ $siteSetting?->email ?? 'hello@markit.com' }}"
                  >{{ $siteSetting?->email ?? 'hello@markit.com' }} <span>-&gt;</span></a
               >
               <div class="footer-contact-meta">
                  <a href="tel:{{ preg_replace('/[^0-9+]/', '', $siteSetting?->phone ?? '+15551234567') }}">{{ $siteSetting?->phone ?? '+1 555 123 4567' }}</a
                  ><span>{{ $siteSetting?->address ?? 'New York - London - Remote' }}</span>
               </div>
            </div>
         </div>
         <div class="container footer-bottom">
            <span>&copy; 2026 Markit Agency. All rights reserved.</span>
            <div>
               <a href="about-us.html">About Markit</a
               ><a href="{{ route('contact-us') }}">Contact us</a>
            </div>
         </div>
      </footer>



