/**
 * EduSphere LMS - Interactive Scripts
 * Handles: Header scroll effect, Mobile menu, Hero carousel, and Navigation.
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Initialize Lucide Icons
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }

  // 2. Header Scroll Effect
  const header = document.getElementById('main-header');
  const headerContainer = document.getElementById('header-container');
  const headerPill = document.getElementById('header-pill');
  const headerContent = document.getElementById('header-content');

  let ticking = false;
  const updateHeaderOnScroll = () => {
    const isScrolled = window.scrollY > 16;
    if (isScrolled) {
      header.classList.add('header-scrolled');
      header.classList.remove('px-3', 'pt-2', 'sm:px-5', 'sm:pt-3', 'lg:px-8');
      header.classList.add('px-0', 'pt-0');

      if (headerContainer) {
        headerContainer.style.maxWidth = '100vw';
      }
      if (headerPill) {
        headerPill.classList.remove('px-3', 'py-2.5', 'sm:gap-3', 'sm:px-5', 'sm:py-3');
        headerPill.classList.add('px-4', 'py-3', 'sm:px-6', 'lg:px-10');
      }
      if (headerContent) {
        headerContent.classList.add('mx-auto', 'max-w-[1240px]');
      }
    } else {
      header.classList.remove('header-scrolled');
      header.classList.remove('px-0', 'pt-0');
      header.classList.add('px-3', 'pt-2', 'sm:px-5', 'sm:pt-3', 'lg:px-8');

      if (headerContainer) {
        headerContainer.style.maxWidth = '1240px';
      }
      if (headerPill) {
        headerPill.classList.remove('px-4', 'py-3', 'sm:px-6', 'lg:px-10');
        headerPill.classList.add('px-3', 'py-2.5', 'sm:gap-3', 'sm:px-5', 'sm:py-3');
      }
      if (headerContent) {
        headerContent.classList.remove('mx-auto', 'max-w-[1240px]');
      }
    }
    ticking = false;
  };

  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(updateHeaderOnScroll);
      ticking = true;
    }
  }, { passive: true });

  // Run on initial load
  updateHeaderOnScroll();

  // 3. Mobile Navigation Menu
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIconOpen = document.getElementById('menu-icon-open');
  const menuIconClose = document.getElementById('menu-icon-close');

  if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
      const isOpen = !mobileMenu.classList.contains('hidden');
      if (isOpen) {
        mobileMenu.classList.add('hidden');
        menuIconOpen.classList.remove('hidden');
        menuIconClose.classList.add('hidden');
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
      } else {
        mobileMenu.classList.remove('hidden');
        menuIconOpen.classList.add('hidden');
        menuIconClose.classList.remove('hidden');
        mobileMenuBtn.setAttribute('aria-expanded', 'true');
      }
    });

    // Close menu when clicking nav links
    const mobileLinks = mobileMenu.querySelectorAll('a, button');
    mobileLinks.forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        menuIconOpen.classList.remove('hidden');
        menuIconClose.classList.add('hidden');
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // 4. Hero Carousel
  const slides = document.querySelectorAll('.carousel-slide');
  const dots = document.querySelectorAll('.carousel-dot');
  const prevBtn = document.getElementById('carousel-prev');
  const nextBtn = document.getElementById('carousel-next');
  const carouselContainer = document.getElementById('hero-carousel');

  let currentSlide = 0;
  const totalSlides = slides.length;
  let autoSlideTimer = null;
  const SLIDE_INTERVAL = 7500;

  function goToSlide(index) {
    if (index < 0) {
      currentSlide = totalSlides - 1;
    } else if (index >= totalSlides) {
      currentSlide = 0;
    } else {
      currentSlide = index;
    }

    slides.forEach((slide, idx) => {
      if (idx === currentSlide) {
        slide.classList.add('active');
      } else {
        slide.classList.remove('active');
      }
    });

    dots.forEach((dot, idx) => {
      if (idx === currentSlide) {
        dot.className = 'carousel-dot h-2 w-7 rounded-full bg-[linear-gradient(90deg,#a855f7,#f472b6)] shadow-[0_0_12px_rgba(244,114,182,0.55)] transition-all duration-500 ease-out';
      } else {
        dot.className = 'carousel-dot h-2 w-2 rounded-full bg-white/30 transition-all duration-500 ease-out hover:bg-white/55';
      }
    });
  }

  function nextSlide() {
    goToSlide(currentSlide + 1);
  }

  function prevSlide() {
    goToSlide(currentSlide - 1);
  }

  function startAutoSlide() {
    stopAutoSlide();
    autoSlideTimer = setInterval(nextSlide, SLIDE_INTERVAL);
  }

  function stopAutoSlide() {
    if (autoSlideTimer) {
      clearInterval(autoSlideTimer);
      autoSlideTimer = null;
    }
  }

  if (totalSlides > 0) {
    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        prevSlide();
        startAutoSlide();
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        nextSlide();
        startAutoSlide();
      });
    }

    dots.forEach((dot, idx) => {
      dot.addEventListener('click', () => {
        goToSlide(idx);
        startAutoSlide();
      });
    });

    if (carouselContainer) {
      carouselContainer.addEventListener('mouseenter', stopAutoSlide);
      carouselContainer.addEventListener('mouseleave', startAutoSlide);
    }

    // Initialize carousel
    goToSlide(0);
    startAutoSlide();
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

    navLinks.forEach(link => {
      const href = link.getAttribute('href');
      const indicator = link.querySelector('.active-indicator');
      if (href === currentSection || (currentSection === '#' && href === '#')) {
        link.classList.add('text-[#7c3aed]');
        link.classList.remove('text-[#3d3554]');
        if (indicator) indicator.classList.remove('hidden');
      } else {
        link.classList.remove('text-[#7c3aed]');
        link.classList.add('text-[#3d3554]');
        if (indicator) indicator.classList.add('hidden');
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
