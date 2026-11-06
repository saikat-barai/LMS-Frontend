<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSphere - Modern Learning Management System</title>
    <meta name="description" content="A modern Learning Management System for students and educators — live classes, expert mentors, and progress that sticks.">

    <!-- Google Fonts: Manrope & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Outfit:wght@500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Manrope', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        display: ['Outfit', 'Manrope', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            DEFAULT: '#8b5cf6',
                            glow: '#e879f9',
                            dark: '#7c3aed',
                            light: '#c4b5fd',
                        },
                        secondary: {
                            DEFAULT: '#fb923c',
                            foreground: '#431407',
                        },
                        surface: '#f7f5ff',
                        'surface-2': '#f0ebff',
                        card: '#ffffff',
                        border: '#ebe6ff',
                        foreground: '#1e1635',
                        'muted-foreground': '#6f6785',
                    },
                    boxShadow: {
                        soft: '0 8px 24px -10px rgba(139, 92, 246, 0.18)',
                        card: '0 10px 30px -10px rgba(30, 22, 53, 0.08)',
                        elegant: '0 24px 48px -20px rgba(139, 92, 246, 0.3)',
                        glow: '0 0 40px rgba(232, 121, 249, 0.28)',
                    }
                }
            }
        }
    </script>

    <!-- Swiper CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Phosphor Icons (stats / course cards) -->
    <script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1"></script>
</head>

<body class="min-h-screen bg-soft-gradient text-foreground font-sans antialiased selection:bg-primary/20 selection:text-primary">

    <!-- ==================== HEADER ==================== -->
    <header id="main-header" class="site-header">
        <div id="header-pill" class="header-bar">
            <div id="header-content" class="header-inner">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="header-logo">
                    <img src="{{ asset('assets/frontend/images/Z Academy Glossy Purple Logo.png') }}?v=2" alt="Z Academy" class="h-9 w-auto object-contain sm:h-10 lg:h-11">
                </a>

                <!-- Desktop Navigation -->
                <nav class="header-nav" aria-label="Primary">
                    <a href="{{ route('home') }}" data-nav-target="home" class="desktop-nav-link {{ request()->routeIs('home') ? 'is-active' : '' }}">
                        Home
                        <span class="active-indicator {{ request()->routeIs('home') ? '' : 'is-hidden' }}"></span>
                    </a>
                    <a href="{{ route('courses') }}" data-nav-target="courses" class="desktop-nav-link {{ request()->routeIs('courses*') ? 'is-active' : '' }}">
                        Courses
                        <span class="active-indicator {{ request()->routeIs('courses*') ? '' : 'is-hidden' }}"></span>
                    </a>
                    <a href="{{ route('home') }}#instructors" data-nav-target="instructors" class="desktop-nav-link">
                        Instructors
                        <span class="active-indicator is-hidden"></span>
                    </a>
                    <a href="{{ route('home') }}#exams" data-nav-target="exams" class="desktop-nav-link">
                        Exams
                        <span class="active-indicator is-hidden"></span>
                    </a>
                    <a href="{{ route('home') }}#ebooks" data-nav-target="ebooks" class="desktop-nav-link">
                        E-Books
                        <span class="active-indicator is-hidden"></span>
                    </a>
                </nav>

                <!-- Action Buttons -->
                <div class="header-actions">
                    <a href="#login" class="header-cta-btn">Login</a>
                    <button id="mobile-menu-btn" type="button" aria-label="Open menu" aria-expanded="false" class="header-menu-btn">
                        <i id="menu-icon-open" data-lucide="align-right" class="header-menu-icon"></i>
                        <i id="menu-icon-close" data-lucide="x" class="header-menu-icon is-hidden"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="header-mobile-menu is-hidden">
            <nav class="header-mobile-nav">
                <a href="{{ route('home') }}" class="header-mobile-link {{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a>
                <a href="{{ route('courses') }}" class="header-mobile-link {{ request()->routeIs('courses*') ? 'is-active' : '' }}">Courses</a>
                <a href="{{ route('home') }}#instructors" class="header-mobile-link">Instructors</a>
                <a href="{{ route('home') }}#exams" class="header-mobile-link">Exams</a>
                <a href="{{ route('home') }}#ebooks" class="header-mobile-link">E-Books</a>
                <div class="header-mobile-cta">
                    <a href="#login" class="header-cta-btn header-cta-btn--block">Login</a>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- ==================== FOOTER ==================== -->
    <footer class="w-full border-t border-[#3b2670]/20 bg-[#160f30] pb-16 text-white lg:pb-0">
        <div class="container-lms py-10 sm:py-12">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-[1.4fr_0.85fr_0.95fr_1.2fr] lg:gap-10">
                <!-- 1. Brand & Social Media -->
                <div>
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-2.5">
                        <span class="grid h-9 w-9 place-items-center rounded-lg bg-[#3b2670] text-white shadow-sm ring-1 ring-white/15">
                            <i data-lucide="graduation-cap" class="h-5 w-5"></i>
                        </span>
                        <span class="font-display text-xl font-bold tracking-tight text-white">
                            EduSphere
                        </span>
                    </a>
                    <p class="mt-3.5 max-w-xs text-[0.95rem] leading-relaxed text-slate-300/90">
                        A complete online learning platform with live classes, smart notes, and expert mentors.
                    </p>
                    <div class="mt-5 flex items-center gap-3">
                        <a href="#" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full border border-white/20 bg-white/5 text-slate-100 transition-all duration-200 hover:-translate-y-0.5 hover:border-[#2563eb] hover:bg-[#2563eb] hover:text-white">
                            <i class="ph-fill ph-facebook-logo text-[1.3rem] leading-none"></i>
                        </a>
                        <a href="#" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full border border-white/20 bg-white/5 text-slate-100 transition-all duration-200 hover:-translate-y-0.5 hover:border-[#ef4444] hover:bg-[#ef4444] hover:text-white">
                            <i class="ph-fill ph-youtube-logo text-[1.3rem] leading-none"></i>
                        </a>
                        <a href="#" aria-label="Instagram" class="grid h-10 w-10 place-items-center rounded-full border border-white/20 bg-white/5 text-slate-100 transition-all duration-200 hover:-translate-y-0.5 hover:border-pink-500 hover:bg-pink-600 hover:text-white">
                            <i class="ph-fill ph-instagram-logo text-[1.3rem] leading-none"></i>
                        </a>
                        <a href="#" aria-label="LinkedIn" class="grid h-10 w-10 place-items-center rounded-full border border-white/20 bg-white/5 text-slate-100 transition-all duration-200 hover:-translate-y-0.5 hover:border-sky-500 hover:bg-sky-600 hover:text-white">
                            <i class="ph-fill ph-linkedin-logo text-[1.3rem] leading-none"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Quick Links -->
                <div>
                    <h4 class="font-display text-base font-semibold tracking-wide text-white sm:text-[1.05rem]">Quick Links</h4>
                    <ul class="mt-4 space-y-2.5">
                        <li><a href="#" class="text-[0.95rem] text-slate-300/90 transition-colors hover:text-white">About Us</a></li>
                        <li><a href="{{ route('courses') }}" class="text-[0.95rem] text-slate-300/90 transition-colors hover:text-white">All Courses</a></li>
                        <li><a href="{{ route('home') }}#instructors" class="text-[0.95rem] text-slate-300/90 transition-colors hover:text-white">Instructors</a></li>
                        <li><a href="#" class="text-[0.95rem] text-slate-300/90 transition-colors hover:text-white">Contact Us</a></li>
                    </ul>
                </div>

                <!-- 3. Legal & Policies -->
                <div>
                    <h4 class="font-display text-base font-semibold tracking-wide text-white sm:text-[1.05rem]">Legal &amp; Policy</h4>
                    <ul class="mt-4 space-y-2.5">
                        <li><a href="#" class="text-[0.95rem] text-slate-300/90 transition-colors hover:text-white">Terms &amp; Conditions</a></li>
                        <li><a href="#" class="text-[0.95rem] text-slate-300/90 transition-colors hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-[0.95rem] text-slate-300/90 transition-colors hover:text-white">Refund Policy</a></li>
                        <li><a href="#" class="text-[0.95rem] text-slate-300/90 transition-colors hover:text-white">Help &amp; FAQ</a></li>
                    </ul>
                </div>

                <!-- 4. Contact Information -->
                <div>
                    <h4 class="font-display text-base font-semibold tracking-wide text-white sm:text-[1.05rem]">Contact Us</h4>
                    <ul class="mt-4 space-y-3 text-[0.95rem] text-slate-300/90">
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="phone" class="mt-1 h-4 w-4 shrink-0 text-[#c4b5fd]"></i>
                            <a href="tel:+8801700000000" class="transition-colors hover:text-white">+880 1700-000000 (10 AM – 10 PM)</a>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="mail" class="mt-1 h-4 w-4 shrink-0 text-[#c4b5fd]"></i>
                            <a href="mailto:support@edusphere.com" class="transition-colors hover:text-white">support@edusphere.com</a>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i data-lucide="map-pin" class="mt-1 h-4 w-4 shrink-0 text-[#c4b5fd]"></i>
                            <span>House 14, Road 07, Dhanmondi, Dhaka-1205, Bangladesh</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright Bar -->
            <div class="mt-8 flex flex-col items-center justify-between gap-3 border-t border-white/10 pt-6 text-center sm:flex-row sm:text-left">
                <p class="text-xs text-slate-300/80 sm:text-sm">© 2026 EduSphere. All rights reserved.</p>
                <div class="flex flex-wrap items-center justify-center gap-4 text-xs text-slate-300/80 sm:text-sm">
                    <a href="#" class="transition-colors hover:text-white">Privacy</a>
                    <span class="text-white/25">•</span>
                    <a href="#" class="transition-colors hover:text-white">Terms</a>
                    <span class="text-white/25">•</span>
                    <a href="#" class="transition-colors hover:text-white">Refund Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ==================== MOBILE APP BOTTOM NAVIGATION BAR ==================== -->
    <nav aria-label="Mobile Bottom Navigation" class="mobile-bottom-nav lg:hidden">
        <div class="mobile-bottom-nav-inner">
            <a href="{{ route('home') }}" class="mobile-bottom-link {{ request()->routeIs('home') ? 'is-active' : '' }}" data-bottom-nav="home">
                <i class="ph ph-house-simple mobile-bottom-icon"></i>
                <span class="mobile-bottom-label">Home</span>
            </a>

            <a href="{{ route('courses') }}" class="mobile-bottom-link {{ request()->routeIs('courses*') ? 'is-active' : '' }}" data-bottom-nav="courses">
                <i data-lucide="book-open" class="mobile-bottom-icon"></i>
                <span class="mobile-bottom-label">Courses</span>
            </a>

            <a href="{{ route('home') }}#instructors" class="mobile-bottom-link" data-bottom-nav="instructors">
                <i data-lucide="users" class="mobile-bottom-icon"></i>
                <span class="mobile-bottom-label">Teachers</span>
            </a>

            <a href="#login" class="mobile-bottom-link" data-bottom-nav="login">
                <i data-lucide="user" class="mobile-bottom-icon"></i>
                <span class="mobile-bottom-label">Profile</span>
            </a>
        </div>
    </nav>

    <!-- Swiper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Main JavaScript File -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>

</html>