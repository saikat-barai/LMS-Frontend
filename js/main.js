/**
 * EduSphere LMS - Interactive Scripts
 * Handles: Header scroll effect, Mobile menu, Hero carousel, and Navigation.
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Initialize Lucide Icons
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }

  // 2. Header Scroll Effect (glass opacity)
  const header = document.getElementById('main-header');

  let ticking = false;
  const updateHeaderOnScroll = () => {
    if (!header) return;
    const isScrolled = window.scrollY > 12;
    header.classList.toggle('header-scrolled', isScrolled);
    ticking = false;
  };

  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(updateHeaderOnScroll);
      ticking = true;
    }
  }, { passive: true });

  updateHeaderOnScroll();

  // 3. Mobile Navigation Menu
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIconOpen = document.getElementById('menu-icon-open');
  const menuIconClose = document.getElementById('menu-icon-close');

  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
      const isOpen = !mobileMenu.classList.contains('is-hidden');
      if (isOpen) {
        mobileMenu.classList.add('is-hidden');
        menuIconOpen.classList.remove('is-hidden');
        menuIconClose.classList.add('is-hidden');
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
      } else {
        mobileMenu.classList.remove('is-hidden');
        menuIconOpen.classList.add('is-hidden');
        menuIconClose.classList.remove('is-hidden');
        mobileMenuBtn.setAttribute('aria-expanded', 'true');
      }
    });

    const mobileLinks = mobileMenu.querySelectorAll('a, button');
    mobileLinks.forEach((link) => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('is-hidden');
        menuIconOpen.classList.remove('is-hidden');
        menuIconClose.classList.add('is-hidden');
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // 4. Hero Coverflow-style Carousel (centered peeks + scaled side cards)
  if (typeof Swiper !== 'undefined' && document.querySelector('.hero-swiper')) {
    const HERO_UNIQUE = 3;

    const heroSwiper = new Swiper('.hero-swiper', {
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      spaceBetween: -36,
      initialSlide: 1,
      loop: true,
      speed: 650,
      watchSlidesProgress: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      navigation: {
        nextEl: '#hero-swiper-next',
        prevEl: '#hero-swiper-prev',
      },
      on: {
        init(swiper) {
          syncHeroPagination(swiper);
        },
        slideChange(swiper) {
          syncHeroPagination(swiper);
        },
      },
    });

    function syncHeroPagination(swiper) {
      const dots = document.querySelectorAll('.hero-swiper-pagination [data-hero-dot]');
      const active = swiper.realIndex % HERO_UNIQUE;
      dots.forEach((dot, i) => {
        const isActive = i === active;
        dot.classList.toggle('swiper-pagination-bullet-active', isActive);
        if (isActive) {
          dot.setAttribute('aria-current', 'true');
        } else {
          dot.removeAttribute('aria-current');
        }
      });
    }

    document.querySelectorAll('.hero-swiper-pagination [data-hero-dot]').forEach((dot) => {
      dot.addEventListener('click', () => {
        const target = Number(dot.getAttribute('data-hero-dot'));
        heroSwiper.slideToLoop(target);
      });
    });
  }

  // 5. Active Link Highlight on Scroll
  const navLinks = document.querySelectorAll('.desktop-nav-link');
  const sections = [
    { id: '', hash: '#' },
    { id: 'courses', hash: '#courses' },
    { id: 'featured', hash: '#featured' },
    { id: 'instructors', hash: '#instructors' },
    { id: 'exams', hash: '#exams' },
    { id: 'ebooks', hash: '#ebooks' }
  ];

  function updateActiveNavLink() {
    const scrollPos = window.scrollY + 200;
    let currentSection = '#';

    // Check each section position from bottom to top
    const sectionElements = [
      { id: 'ebooks', el: document.getElementById('ebooks') },
      { id: 'exams', el: document.getElementById('exams') },
      { id: 'instructors', el: document.getElementById('instructors') },
      { id: 'featured', el: document.getElementById('featured') },
      { id: 'courses', el: document.getElementById('courses') },
    ];

    for (const sec of sectionElements) {
      if (sec.el && sec.el.offsetTop <= scrollPos) {
        currentSection = '#' + sec.id;
        break;
      }
    }

    navLinks.forEach((link) => {
      const href = link.getAttribute('href');
      const indicator = link.querySelector('.active-indicator');
      const isCurrent = href === currentSection || (currentSection === '#' && href === '#');

      link.classList.toggle('is-active', isCurrent);
      if (indicator) {
        indicator.classList.toggle('is-hidden', !isCurrent);
      }
    });
  }

  window.addEventListener('scroll', () => {
    window.requestAnimationFrame(updateActiveNavLink);
  }, { passive: true });

  updateActiveNavLink();

  // 6. Testimonials Swiper Carousel Initialization
  if (typeof Swiper !== 'undefined' && document.querySelector('.testimonial-swiper')) {
    new Swiper('.testimonial-swiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      grabCursor: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: '.testimonial-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '#testimonial-next',
        prevEl: '#testimonial-prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 24,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 24,
        }
      }
    });
  }
});
