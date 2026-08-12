const header = document.querySelector('.site-header');
const menuButton = document.querySelector('#menuBtn');
const mobileMenu = document.querySelector('#mobileMenu');
const backTop = document.querySelector('#backTop');
const currentPage = (window.location.pathname.split('/').pop() || 'index.html').toLowerCase();
document.querySelectorAll('[data-nav-page]').forEach(link => {
  const page = (link.dataset.navPage || '').toLowerCase();
  if (page === currentPage) {
    link.classList.add('active');
    link.setAttribute('aria-current', 'page');
  } else {
    link.classList.remove('active');
    link.removeAttribute('aria-current');
  }
});

const closeMenu = () => {
  mobileMenu?.classList.remove('open');
  menuButton?.setAttribute('aria-expanded', 'false');
  document.body.classList.remove('menu-open');
};

menuButton?.addEventListener('click', () => {
  const willOpen = !mobileMenu.classList.contains('open');
  mobileMenu.classList.toggle('open', willOpen);
  menuButton.setAttribute('aria-expanded', String(willOpen));
  document.body.classList.toggle('menu-open', willOpen);
});

mobileMenu?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
window.addEventListener('resize', () => { if (window.innerWidth > 1180) closeMenu(); });
const updateScrollState = () => {
  header?.classList.toggle('scrolled', window.scrollY > 24);
  backTop?.classList.toggle('visible', window.scrollY > 500);
};
updateScrollState();
window.addEventListener('scroll', updateScrollState, { passive: true });

const revealObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.12, rootMargin: '0px 0px -30px' });

const sharedRevealSelectors = [
  '.about-hero-copy', '.scorecard > div', '.story-image', '.purpose-layout article', '.values-grid article', '.impact-grid > div', '.promises > div', '.team-card', '.process li',
  '.contact-hero-copy', '.contact-visual', '.contact-info-card', '.contact-form', '.faq-item', '.project-banner', '.support-grid article',
  '.seo-hero-copy', '.seo-hero-visual', '.seo-service-cards article', '.seo-benefit-grid article', '.seo-process-line article', '.seo-stat', '.seo-case-card', '.seo-case-metrics div', '.seo-tool-logos span', '.seo-dashboard', '.seo-magnifier',
  '.sm-hero-copy', '.sm-hero-visual', '.sm-service-grid article', '.sm-impact-card', '.sm-result-card', '.sm-platform-grid div', '.sm-case-panel', '.sm-phone', '.sm-process-line article',
  '.ppc-hero-copy', '.ppc-hero-visual', '.ppc-service-grid article', '.ppc-platform-card', '.ppc-check-cards article', '.ppc-process-step', '.ppc-result', '.ppc-case-card', '.ppc-case-visual',
  '.email-hero-copy', '.email-hero-visual', '.email-service-grid article', '.email-stat-card', '.email-flow article', '.email-deliverability-grid article', '.email-result-card', '.email-campaign-card', '.email-case-metrics div', '.email-case-image', '.email-banner-panel'
];

document.querySelectorAll(sharedRevealSelectors.join(',')).forEach((element, index) => {
  if (!element.classList.contains('reveal')) element.classList.add('reveal');
  if (!element.classList.contains('delay-1') && index % 3 === 1) element.classList.add('delay-1');
});

document.querySelectorAll('.reveal').forEach(element => revealObserver.observe(element));

const testimonials = [
  { quote: 'Markit transformed our online presence and accelerated our marketing results. Our leads rose, and sales have never been better.', initials: 'JD', name: 'John Davis', role: 'CEO, TechSolutions' },
  { quote: 'The team brought clarity to our growth strategy. Within one quarter, acquisition costs fell while qualified pipeline reached a new high.', initials: 'SM', name: 'Sarah Mitchell', role: 'Founder, Northstar Studio' },
  { quote: 'A rare partner that understands both creative storytelling and commercial performance. Markit now feels like part of our internal team.', initials: 'AR', name: 'Alex Rivera', role: 'CMO, Elevate Labs' }
];

let currentTestimonial = 0;
const testimonialBox = document.querySelector('#testimonial');

function renderTestimonial() {
  if (!testimonialBox) return;
  const item = testimonials[currentTestimonial];
  testimonialBox.innerHTML = `<div class="quote-mark">“</div><div class="stars">★★★★★</div><blockquote>${item.quote}</blockquote><div class="client"><span>${item.initials}</span><div><b>${item.name}</b><small>${item.role}</small></div></div>`;
  testimonialBox.animate([{ opacity: 0.2, transform: 'translateX(18px)' }, { opacity: 1, transform: 'translateX(0)' }], { duration: 360, easing: 'ease-out' });
}

document.querySelector('#next')?.addEventListener('click', () => {
  currentTestimonial = (currentTestimonial + 1) % testimonials.length;
  renderTestimonial();
});

document.querySelector('#prev')?.addEventListener('click', () => {
  currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
  renderTestimonial();
});

document.querySelectorAll('.service-card').forEach(card => {
  card.addEventListener('pointermove', event => {
    const bounds = card.getBoundingClientRect();
    card.style.backgroundImage = `radial-gradient(circle at ${event.clientX - bounds.left}px ${event.clientY - bounds.top}px, rgba(15,107,143,.16), transparent 42%)`;
  });
  card.addEventListener('pointerleave', () => { card.style.backgroundImage = ''; });
});
const counters = document.querySelectorAll('.counter');
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
function bindSharedHoverEffects(targets) {
  targets.forEach(card => {
    if (card.dataset.sharedHoverBound === 'true') return;
    card.dataset.sharedHoverBound = 'true';
    card.classList.add('interactive-card');
    card.addEventListener('pointermove', event => {
      const box = card.getBoundingClientRect();
      card.style.backgroundImage = `radial-gradient(circle at ${event.clientX - box.left}px ${event.clientY - box.top}px, rgba(15,107,143,.16), transparent 44%)`;
    });
    card.addEventListener('pointerleave', () => {
      card.style.backgroundImage = '';
    });
  });
}

bindSharedHoverEffects(document.querySelectorAll([
  '.service-card', '.project-card', '.insight-card', '.testimonial-card', '.metric-card',
  '.scorecard > div', '.purpose-layout article', '.values-grid article', '.impact-grid > div', '.promises > div', '.team-card', '.process li',
  '.contact-info-card', '.faq-item', '.project-banner', '.support-grid article',
  '.seo-service-cards article', '.seo-benefit-grid article', '.seo-process-line article', '.seo-stat', '.seo-case-card', '.seo-case-metrics div', '.seo-tool-logos span',
  '.sm-service-grid article', '.sm-impact-card', '.sm-result-card', '.sm-platform-grid div', '.sm-case-panel',
  '.ppc-service-grid article', '.ppc-platform-card', '.ppc-check-cards article', '.ppc-process-step', '.ppc-result', '.ppc-case-card',
  '.email-service-grid article', '.email-stat-card', '.email-flow article', '.email-deliverability-grid article', '.email-result-card', '.email-campaign-card', '.email-case-metrics div'
].join(',')));

document.querySelectorAll('.project-image, .insight-image, .story-image, .seo-hero-image-wrap, .contact-visual, .email-banner-panel, .email-case-image, .ppc-hero-visual, .sm-phone').forEach(media => {
  media.classList.add('interactive-media');
});

function formatCounter(element, value) {
  const decimals = Number(element.dataset.decimals || 0);
  const prefix = element.dataset.prefix || '';
  const suffix = element.dataset.suffix || '';
  return `${prefix}${value.toFixed(decimals)}${suffix}`;
}

function animateCounter(element) {
  if (element.dataset.counted === 'true') return;
  element.dataset.counted = 'true';
  const target = Number(element.dataset.value || 0);

  if (reduceMotion) {
    element.textContent = formatCounter(element, target);
    return;
  }

  const duration = 1500;
  const startTime = performance.now();

  function updateCounter(now) {
    const progress = Math.min((now - startTime) / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 4);
    element.textContent = formatCounter(element, target * eased);
    if (progress < 1) requestAnimationFrame(updateCounter);
  }

  requestAnimationFrame(updateCounter);
}

const counterObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.querySelectorAll('.counter').forEach(animateCounter);
      counterObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.35 });

document.querySelectorAll('.hero-metrics, .counter-section').forEach(section => counterObserver.observe(section));
function initLogoSlider(logoSlider) {
  const track = logoSlider.querySelector('.logos');
  const slides = [...logoSlider.querySelectorAll('.logo-slide')];
  const pagination = logoSlider.querySelector('.logo-pagination');
  if (!track || !slides.length || !pagination) return;

  let currentPage = 0;
  let totalPages = 1;
  let autoPlayTimer;

  const getPerView = () => {
    const value = Number.parseInt(getComputedStyle(logoSlider).getPropertyValue('--logos-per-view'), 10);
    return Number.isFinite(value) && value > 0 ? value : (window.innerWidth <= 800 ? 2 : 3);
  };

  function goToLogoPage(page) {
    currentPage = (page + totalPages) % totalPages;
    track.style.transform = `translateX(-${currentPage * 100}%)`;
    pagination.querySelectorAll('button').forEach((dot, index) => {
      dot.classList.toggle('active', index === currentPage);
      dot.setAttribute('aria-current', index === currentPage ? 'true' : 'false');
    });
  }

  function stopLogoAutoplay() {
    window.clearInterval(autoPlayTimer);
  }

  function startLogoAutoplay() {
    stopLogoAutoplay();
    if (totalPages > 1 && !reduceMotion) {
      autoPlayTimer = window.setInterval(() => goToLogoPage(currentPage + 1), 3200);
    }
  }

  function restartLogoAutoplay() {
    stopLogoAutoplay();
    startLogoAutoplay();
  }

  function buildLogoPagination() {
    totalPages = Math.max(1, Math.ceil(slides.length / getPerView()));
    currentPage = Math.min(currentPage, totalPages - 1);
    pagination.innerHTML = '';
    for (let index = 0; index < totalPages; index += 1) {
      const dot = document.createElement('button');
      dot.type = 'button';
      dot.setAttribute('aria-label', `Show logo slide ${index + 1}`);
      dot.addEventListener('click', () => {
        goToLogoPage(index);
        restartLogoAutoplay();
      });
      pagination.appendChild(dot);
    }
    goToLogoPage(currentPage);
  }

  let logoResizeTimer;
  window.addEventListener('resize', () => {
    window.clearTimeout(logoResizeTimer);
    logoResizeTimer = window.setTimeout(() => {
      buildLogoPagination();
      restartLogoAutoplay();
    }, 150);
  });

  logoSlider.addEventListener('mouseenter', stopLogoAutoplay);
  logoSlider.addEventListener('mouseleave', startLogoAutoplay);
  logoSlider.addEventListener('focusin', stopLogoAutoplay);
  logoSlider.addEventListener('focusout', startLogoAutoplay);
  document.addEventListener('visibilitychange', () => document.hidden ? stopLogoAutoplay() : startLogoAutoplay());

  buildLogoPagination();
  startLogoAutoplay();
}

function setupMarqueeLogoSliders() {
  document.querySelectorAll('.logo-slider:not(.email-campaign-slider)').forEach(slider => {
    const track = slider.querySelector('.logos');
    const slides = [...slider.querySelectorAll('.logo-slide')];
    if (!track || !slides.length) return;

    if (slider.dataset.loop === 'marquee') {
      slider.classList.add('logo-marquee-slider');
      return;
    }

    slider.dataset.loop = 'marquee';
    slider.classList.add('ppc-partner-slider', 'logo-marquee-slider');
    slider.style.setProperty('--partner-slide-count', String(slides.length));

    slider.querySelector('.logo-pagination')?.remove();

    if (slider.dataset.marqueeCloned === 'true') return;
    slides.forEach(slide => {
      const clone = slide.cloneNode(true);
      clone.setAttribute('aria-hidden', 'true');
      clone.querySelectorAll('img').forEach(image => image.setAttribute('alt', ''));
      track.appendChild(clone);
    });
    slider.dataset.marqueeCloned = 'true';
  });
}

setupMarqueeLogoSliders();

document.querySelectorAll('.logo-slider:not([data-loop="marquee"])').forEach(initLogoSlider);
// Modern About interactions
document.querySelectorAll(".scorecard > div, .purpose-layout article, .values-grid article, .team-card").forEach(card => { card.addEventListener("pointermove", event => { const box = card.getBoundingClientRect(); card.style.setProperty("--mx", ((event.clientX-box.left)/box.width*100)+"%"); card.style.setProperty("--my", ((event.clientY-box.top)/box.height*100)+"%"); }); }); const storyVisual=document.querySelector(".story-image"); if(storyVisual && !reduceMotion){ window.addEventListener("scroll",()=>{ const box=storyVisual.getBoundingClientRect(); if(box.bottom>0 && box.top<innerHeight){ const shift=(box.top-innerHeight/2)*-.018; storyVisual.style.transform="translate3d(0,"+shift+"px,0)"; } },{passive:true}); } document.querySelectorAll(".team-card").forEach(card=>{card.addEventListener("pointermove",event=>{const box=card.getBoundingClientRect();const x=(event.clientX-box.left)/box.width-.5;const y=(event.clientY-box.top)/box.height-.5;card.style.transform="perspective(900px) rotateY("+(x*3)+"deg) rotateX("+(-y*3)+"deg) translateY(-7px)";});card.addEventListener("pointerleave",()=>{card.style.transform="";});});

// Contact page interactions
document.querySelectorAll(".faq-item button").forEach(button=>button.addEventListener("click",()=>{const item=button.closest(".faq-item");const wasOpen=item.classList.contains("open");document.querySelectorAll(".faq-item").forEach(entry=>{entry.classList.remove("open");entry.querySelector("button").setAttribute("aria-expanded","false");entry.querySelector("button b").textContent="+";});if(!wasOpen){item.classList.add("open");button.setAttribute("aria-expanded","true");button.querySelector("b").textContent="−";}}));document.querySelector(".contact-form")?.addEventListener("submit",event=>{event.preventDefault();event.currentTarget.classList.add("sent");});document.querySelectorAll(".contact-info-card,.faq-item,.project-banner").forEach(card=>{card.addEventListener("pointermove",event=>{const box=card.getBoundingClientRect();card.style.setProperty("--mx",((event.clientX-box.left)/box.width*100)+"%");card.style.setProperty("--my",((event.clientY-box.top)/box.height*100)+"%");});});

// SEO page interactions
const seoHoverTargets = document.querySelectorAll('.seo-service-cards article, .seo-benefit-grid article, .seo-process-line article, .seo-stat, .seo-case-card, .seo-case-metrics div, .seo-tool-logos span');
seoHoverTargets.forEach(card => {
  card.addEventListener('pointermove', event => {
    const box = card.getBoundingClientRect();
    card.style.setProperty('--mx', ((event.clientX - box.left) / box.width * 100) + '%');
    card.style.setProperty('--my', ((event.clientY - box.top) / box.height * 100) + '%');
  });
});
// Social media page interactions
const socialHoverTargets = document.querySelectorAll('.sm-service-grid article, .sm-impact-card, .sm-result-card, .sm-platform-grid div, .sm-case-panel, .sm-phone');
socialHoverTargets.forEach(card => {
  card.addEventListener('pointermove', event => {
    const box = card.getBoundingClientRect();
    card.style.setProperty('--mx', ((event.clientX - box.left) / box.width * 100) + '%');
    card.style.setProperty('--my', ((event.clientY - box.top) / box.height * 100) + '%');
  });
});