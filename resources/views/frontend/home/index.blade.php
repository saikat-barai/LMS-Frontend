@extends('frontend.master')
@section('content')
<!-- ==================== HERO SECTION ==================== -->
<section class="hero-section">
    <!-- Subtle Background Glows -->
    <div class="hero-glow-left"></div>
    <div class="hero-glow-right"></div>

    <!-- Coverflow Hero Carousel -->
    <div class="hero-slider-wrapper">
        <div class="swiper hero-swiper hero-swiper-container">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide hero-slide">
                    <div class="hero-slide-card">
                        <img src="{{ asset('assets/frontend/images/hero_banner_1.jpg') }}" alt="Science Division Final Revision Batch SSC 27" class="hero-slide-img">
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide hero-slide">
                    <div class="hero-slide-card">
                        <img src="{{ asset('assets/frontend/images/hero_banner_2.jpg') }}" alt="HSC 28 Physics & Math Full Course" class="hero-slide-img">
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide hero-slide">
                    <div class="hero-slide-card">
                        <img src="{{ asset('assets/frontend/images/hero_banner_3.jpg') }}" alt="Commerce & Humanities Revision Batch SSC 27" class="hero-slide-img">
                    </div>
                </div>

                <!-- Clones so side peeks always exist -->
                <div class="swiper-slide hero-slide" aria-hidden="true">
                    <div class="hero-slide-card">
                        <img src="{{ asset('assets/frontend/images/hero_banner_1.jpg') }}" alt="" class="hero-slide-img">
                    </div>
                </div>
                <div class="swiper-slide hero-slide" aria-hidden="true">
                    <div class="hero-slide-card">
                        <img src="{{ asset('assets/frontend/images/hero_banner_2.jpg') }}" alt="" class="hero-slide-img">
                    </div>
                </div>
                <div class="swiper-slide hero-slide" aria-hidden="true">
                    <div class="hero-slide-card">
                        <img src="{{ asset('assets/frontend/images/hero_banner_3.jpg') }}" alt="" class="hero-slide-img">
                    </div>
                </div>

            </div>

            <!-- Nav arrows on center-card edges -->
            <button id="hero-swiper-prev" aria-label="Previous Slide" class="hero-nav-btn hero-nav-prev">
                <i data-lucide="arrow-left" class="h-4 w-4 md:hidden"></i>
                <i data-lucide="chevron-left" class="hidden h-5 w-5 md:block sm:h-6 sm:w-6"></i>
            </button>
            <button id="hero-swiper-next" aria-label="Next Slide" class="hero-nav-btn hero-nav-next">
                <i data-lucide="arrow-right" class="h-4 w-4 md:hidden"></i>
                <i data-lucide="chevron-right" class="hidden h-5 w-5 md:block sm:h-6 sm:w-6"></i>
            </button>
        </div>

        <!-- Pagination below carousel (pill + dots) -->
        <div class="swiper-pagination hero-swiper-pagination" role="tablist" aria-label="Hero slides">
            <button type="button" class="swiper-pagination-bullet" data-hero-dot="0" aria-label="Go to slide 1"></button>
            <button type="button" class="swiper-pagination-bullet swiper-pagination-bullet-active" data-hero-dot="1" aria-label="Go to slide 2" aria-current="true"></button>
            <button type="button" class="swiper-pagination-bullet" data-hero-dot="2" aria-label="Go to slide 3"></button>
        </div>
    </div>

    <!-- Courses + live stats -->
    <div class="relative z-10 mx-auto mt-4 w-full max-w-[1240px] px-3.5 sm:mt-6 sm:px-5">
        <div class="grid items-stretch gap-4 md:grid-cols-2 md:gap-5">

            <!-- Left: Online + Offline -->
            <div class="relative flex h-full min-h-0 flex-col overflow-hidden rounded-2xl border border-purple-300/20 bg-gradient-to-b from-[#251849] via-[#1c1238] to-[#150d2a] p-4 shadow-[0_20px_45px_-15px_rgba(8,4,20,0.8)] sm:p-6">
                <div class="pointer-events-none absolute inset-x-8 top-0 h-px bg-gradient-to-r from-transparent via-purple-300/40 to-transparent"></div>

                <span class="inline-flex w-fit items-center gap-1.5 rounded-full border border-purple-400/25 bg-purple-500/15 px-3 py-1 text-xs font-semibold text-purple-200">
                    <span class="h-1.5 w-1.5 rounded-full bg-purple-400"></span>
                    Our Courses
                </span>
                <h3 class="mt-2.5 font-display text-xl font-bold leading-snug tracking-tight text-white sm:mt-3 sm:text-2xl">
                    Batches are ongoing!
                </h3>
                <p class="mt-1 text-sm font-medium text-purple-200/85 sm:text-[0.95rem]">
                    Book your seat now!
                </p>

                <div class="mt-3.5 flex flex-1 flex-col gap-2.5 sm:mt-4">
                    <a href="{{ route('courses') }}" class="group flex flex-1 items-center justify-between gap-3 rounded-xl border border-white/10 bg-white/[0.06] px-3.5 py-3 transition-all duration-200 hover:border-purple-400/35 hover:bg-white/[0.11]">
                        <div class="flex min-w-0 items-center gap-3">
                            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-[#7c3aed] to-[#5b21b6] text-white shadow-sm ring-1 ring-white/15 sm:h-11 sm:w-11">
                                <i class="ph-fill ph-monitor-play text-lg leading-none sm:text-xl"></i>
                            </span>
                            <div class="min-w-0">
                                <div class="text-[0.95rem] font-semibold text-white sm:text-base">Online Course</div>
                                <div class="truncate text-xs text-purple-200/80 sm:text-sm">Live &amp; recorded classes</div>
                            </div>
                        </div>
                        <i data-lucide="chevron-right" class="h-4 w-4 shrink-0 text-purple-300/70 transition-transform duration-200 group-hover:translate-x-0.5 group-hover:text-white"></i>
                    </a>

                    <a href="{{ route('courses') }}" class="group flex flex-1 items-center justify-between gap-3 rounded-xl border border-white/10 bg-white/[0.06] px-3.5 py-3 transition-all duration-200 hover:border-purple-400/35 hover:bg-white/[0.11]">
                        <div class="flex min-w-0 items-center gap-3">
                            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-[#7c3aed] to-[#5b21b6] text-white shadow-sm ring-1 ring-white/15 sm:h-11 sm:w-11">
                                <i class="ph-fill ph-buildings text-lg leading-none sm:text-xl"></i>
                            </span>
                            <div class="min-w-0">
                                <div class="text-[0.95rem] font-semibold text-white sm:text-base">Offline Course</div>
                                <div class="truncate text-xs text-purple-200/80 sm:text-sm">Join our campus classes</div>
                            </div>
                        </div>
                        <i data-lucide="chevron-right" class="h-4 w-4 shrink-0 text-purple-300/70 transition-transform duration-200 group-hover:translate-x-0.5 group-hover:text-white"></i>
                    </a>
                </div>

                <a href="{{ route('courses') }}" class="mt-3.5 inline-flex w-fit items-center gap-1.5 text-sm font-semibold text-purple-200 transition-all hover:gap-2 hover:text-white sm:mt-4 sm:text-[0.95rem]">
                    <span>See All Courses</span>
                    <i data-lucide="arrow-right" class="h-4 w-4"></i>
                </a>
            </div>

            <!-- Right: stats -->
            <div class="relative flex h-full min-h-0 flex-col overflow-hidden rounded-2xl border border-purple-300/20 bg-gradient-to-b from-[#251849] via-[#1c1238] to-[#150d2a] p-4 shadow-[0_20px_45px_-15px_rgba(8,4,20,0.8)] sm:p-6">
                <div class="pointer-events-none absolute inset-x-8 top-0 h-px bg-gradient-to-r from-transparent via-purple-300/40 to-transparent"></div>

                <span class="inline-flex w-fit items-center gap-1.5 rounded-full border border-purple-400/25 bg-purple-500/15 px-3 py-1 text-xs font-semibold text-purple-200">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
                    Live Stats
                </span>
                <h3 class="mt-2.5 font-display text-xl font-bold leading-snug tracking-tight text-white sm:mt-3 sm:text-2xl">
                    See the stats!
                </h3>
                <p class="mt-1 text-sm font-medium text-purple-200/85 sm:text-[0.95rem]">
                    The trust we are building!
                </p>

                <div class="mt-3.5 grid flex-1 grid-cols-2 gap-2.5 sm:mt-4 sm:gap-3">
                    <div class="flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/[0.06] p-3 sm:gap-3 sm:px-3.5 sm:py-3">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-[#7c3aed] to-[#5b21b6] text-white shadow-sm ring-1 ring-white/15 sm:h-11 sm:w-11">
                            <i class="ph-fill ph-users text-lg leading-none sm:text-xl"></i>
                        </span>
                        <div class="min-w-0">
                            <div class="font-display text-lg font-bold leading-tight tracking-tight text-white sm:text-xl">291,012</div>
                            <div class="truncate text-xs text-purple-200/80 sm:text-sm">Students</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/[0.06] p-3 sm:gap-3 sm:px-3.5 sm:py-3">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-[#7c3aed] to-[#5b21b6] text-white shadow-sm ring-1 ring-white/15 sm:h-11 sm:w-11">
                            <i class="ph-fill ph-play text-lg leading-none sm:text-xl"></i>
                        </span>
                        <div class="min-w-0">
                            <div class="font-display text-lg font-bold leading-tight tracking-tight text-white sm:text-xl">66</div>
                            <div class="truncate text-xs text-purple-200/80 sm:text-sm">Courses</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/[0.06] p-3 sm:gap-3 sm:px-3.5 sm:py-3">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-[#7c3aed] to-[#5b21b6] text-white shadow-sm ring-1 ring-white/15 sm:h-11 sm:w-11">
                            <i class="ph-fill ph-user text-lg leading-none sm:text-xl"></i>
                        </span>
                        <div class="min-w-0">
                            <div class="font-display text-lg font-bold leading-tight tracking-tight text-white sm:text-xl">29</div>
                            <div class="truncate text-xs text-purple-200/80 sm:text-sm">Teachers</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/[0.06] p-3 sm:gap-3 sm:px-3.5 sm:py-3">
                        <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-[#7c3aed] to-[#5b21b6] text-white shadow-sm ring-1 ring-white/15 sm:h-11 sm:w-11">
                            <i class="ph-fill ph-video-camera text-lg leading-none sm:text-xl"></i>
                        </span>
                        <div class="min-w-0">
                            <div class="font-display text-lg font-bold leading-tight tracking-tight text-white sm:text-xl">5,325</div>
                            <div class="truncate text-xs text-purple-200/80 sm:text-sm">Videos</div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('courses') }}" class="mt-3.5 inline-flex w-fit items-center gap-1.5 text-sm font-semibold text-purple-200 transition-all hover:gap-2 hover:text-white sm:mt-4 sm:text-[0.95rem]">
                    <span>See All Courses</span>
                    <i data-lucide="arrow-right" class="h-4 w-4"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- ==================== CATEGORIES SECTION ==================== -->
<section id="ebooks" class="relative overflow-hidden bg-soft-gradient py-10 md:py-12 lg:py-14">
    <div class="pointer-events-none absolute -left-20 top-16 h-64 w-64 rounded-full bg-primary/8 blur-[80px]"></div>
    <div class="pointer-events-none absolute -right-12 bottom-8 h-72 w-72 rounded-full bg-primary-glow/10 blur-[90px]"></div>
    <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/25 to-transparent"></div>

    <div class="container-lms relative">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="font-display text-3xl font-bold tracking-tight text-foreground sm:text-4xl">
                Find your <span class="bg-[linear-gradient(90deg,#8b5cf6_0%,#a78bfa_100%)] bg-clip-text text-transparent">learning</span> path
            </h2>
        </div>

        <div class="mt-8 grid gap-5 sm:grid-cols-2 md:mt-10 lg:grid-cols-3 lg:gap-6">
            <!-- 1. Academic Courses (Blue) -->
            <a href="#courses" class="group relative flex min-h-[220px] flex-col overflow-hidden rounded-2xl border border-blue-200/80 bg-gradient-to-br from-[#f8fbff] via-[#eff6ff] to-[#e2edff] p-6 shadow-[0_4px_20px_-6px_rgba(37,99,235,0.1)] transition-all duration-300 ease-out hover:-translate-y-1 hover:border-blue-400/80 hover:shadow-[0_18px_38px_-12px_rgba(37,99,235,0.22)]">
                <div class="pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-blue-500/10 blur-2xl transition-transform duration-500 group-hover:scale-125"></div>
                <div class="relative flex h-full flex-col">
                    <div class="flex items-center justify-between gap-3">
                        <span class="grid h-12 w-12 place-items-center rounded-xl bg-gradient-to-br from-blue-600 to-blue-700 text-white shadow-[0_8px_20px_-6px_rgba(37,99,235,0.55)] ring-4 ring-blue-500/10 transition-transform duration-300 group-hover:scale-105">
                            <i data-lucide="graduation-cap" class="h-6 w-6"></i>
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-md border border-blue-200 bg-white/85 px-2.5 py-1 text-xs font-semibold text-blue-700 shadow-sm backdrop-blur-sm">
                            <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
                            24 Courses
                        </span>
                    </div>
                    <h3 class="mt-5 font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors group-hover:text-blue-700 sm:text-xl">
                        Academic Courses
                    </h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Comprehensive Class 6–12 curriculum with interactive live &amp; recorded classes.
                    </p>
                    <div class="mt-auto flex items-center justify-end gap-1.5 pt-5 text-sm font-semibold text-blue-700">
                        <span>Explore</span>
                        <i data-lucide="chevron-right" class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </div>
                </div>
            </a>

            <!-- 2. Admission Courses (Emerald) -->
            <a href="#courses" class="group relative flex min-h-[220px] flex-col overflow-hidden rounded-2xl border border-emerald-200/80 bg-gradient-to-br from-[#f7fef9] via-[#ecfdf3] to-[#dcfce7] p-6 shadow-[0_4px_20px_-6px_rgba(22,163,74,0.1)] transition-all duration-300 ease-out hover:-translate-y-1 hover:border-emerald-400/80 hover:shadow-[0_18px_38px_-12px_rgba(22,163,74,0.22)]">
                <div class="pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-emerald-500/10 blur-2xl transition-transform duration-500 group-hover:scale-125"></div>
                <div class="relative flex h-full flex-col">
                    <div class="flex items-center justify-between gap-3">
                        <span class="grid h-12 w-12 place-items-center rounded-xl bg-gradient-to-br from-emerald-600 to-green-700 text-white shadow-[0_8px_20px_-6px_rgba(22,163,74,0.55)] ring-4 ring-emerald-500/10 transition-transform duration-300 group-hover:scale-105">
                            <i data-lucide="book-open" class="h-6 w-6"></i>
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-md border border-emerald-200 bg-white/85 px-2.5 py-1 text-xs font-semibold text-emerald-700 shadow-sm backdrop-blur-sm">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-600"></span>
                            12 Courses
                        </span>
                    </div>
                    <h3 class="mt-5 font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors group-hover:text-emerald-700 sm:text-xl">
                        Admission Courses
                    </h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Specialized preparation tracks for engineering, medical &amp; university admissions.
                    </p>
                    <div class="mt-auto flex items-center justify-end gap-1.5 pt-5 text-sm font-semibold text-emerald-700">
                        <span>Explore</span>
                        <i data-lucide="chevron-right" class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </div>
                </div>
            </a>

            <!-- 3. Mathematics (Purple) -->
            <a href="#courses" class="group relative flex min-h-[220px] flex-col overflow-hidden rounded-2xl border border-purple-200/80 bg-gradient-to-br from-[#fcfaff] via-[#f5f0ff] to-[#ede4ff] p-6 shadow-[0_4px_20px_-6px_rgba(147,51,234,0.1)] transition-all duration-300 ease-out hover:-translate-y-1 hover:border-purple-400/80 hover:shadow-[0_18px_38px_-12px_rgba(147,51,234,0.22)]">
                <div class="pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-purple-500/10 blur-2xl transition-transform duration-500 group-hover:scale-125"></div>
                <div class="relative flex h-full flex-col">
                    <div class="flex items-center justify-between gap-3">
                        <span class="grid h-12 w-12 place-items-center rounded-xl bg-gradient-to-br from-purple-600 to-purple-700 text-white shadow-[0_8px_20px_-6px_rgba(147,51,234,0.55)] ring-4 ring-purple-500/10 transition-transform duration-300 group-hover:scale-105">
                            <i data-lucide="calculator" class="h-6 w-6"></i>
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-md border border-purple-200 bg-white/85 px-2.5 py-1 text-xs font-semibold text-purple-700 shadow-sm backdrop-blur-sm">
                            <span class="h-1.5 w-1.5 rounded-full bg-purple-600"></span>
                            18 Courses
                        </span>
                    </div>
                    <h3 class="mt-5 font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors group-hover:text-purple-700 sm:text-xl">
                        Mathematics
                    </h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Master advanced mathematical concepts, olympiad drills &amp; analytical problem solving.
                    </p>
                    <div class="mt-auto flex items-center justify-end gap-1.5 pt-5 text-sm font-semibold text-purple-700">
                        <span>Explore</span>
                        <i data-lucide="chevron-right" class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </div>
                </div>
            </a>

            <!-- 4. Science & Physics (Orange) -->
            <a href="#courses" class="group relative flex min-h-[220px] flex-col overflow-hidden rounded-2xl border border-orange-200/80 bg-gradient-to-br from-[#fffcf8] via-[#fff5eb] to-[#ffead5] p-6 shadow-[0_4px_20px_-6px_rgba(234,88,12,0.1)] transition-all duration-300 ease-out hover:-translate-y-1 hover:border-orange-400/80 hover:shadow-[0_18px_38px_-12px_rgba(234,88,12,0.22)]">
                <div class="pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-orange-500/10 blur-2xl transition-transform duration-500 group-hover:scale-125"></div>
                <div class="relative flex h-full flex-col">
                    <div class="flex items-center justify-between gap-3">
                        <span class="grid h-12 w-12 place-items-center rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 text-white shadow-[0_8px_20px_-6px_rgba(234,88,12,0.55)] ring-4 ring-orange-500/10 transition-transform duration-300 group-hover:scale-105">
                            <i data-lucide="flask-conical" class="h-6 w-6"></i>
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-md border border-orange-200 bg-white/85 px-2.5 py-1 text-xs font-semibold text-orange-700 shadow-sm backdrop-blur-sm">
                            <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span>
                            15 Courses
                        </span>
                    </div>
                    <h3 class="mt-5 font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors group-hover:text-orange-600 sm:text-xl">
                        Science &amp; Physics
                    </h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Deep-dive into physics, chemistry &amp; biology with visual simulations and labs.
                    </p>
                    <div class="mt-auto flex items-center justify-end gap-1.5 pt-5 text-sm font-semibold text-orange-600">
                        <span>Explore</span>
                        <i data-lucide="chevron-right" class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </div>
                </div>
            </a>

            <!-- 5. Technology (Indigo) -->
            <a href="#courses" class="group relative flex min-h-[220px] flex-col overflow-hidden rounded-2xl border border-indigo-200/80 bg-gradient-to-br from-[#f9faff] via-[#eef2ff] to-[#e0e7ff] p-6 shadow-[0_4px_20px_-6px_rgba(79,70,229,0.1)] transition-all duration-300 ease-out hover:-translate-y-1 hover:border-indigo-400/80 hover:shadow-[0_18px_38px_-12px_rgba(79,70,229,0.22)]">
                <div class="pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-indigo-500/10 blur-2xl transition-transform duration-500 group-hover:scale-125"></div>
                <div class="relative flex h-full flex-col">
                    <div class="flex items-center justify-between gap-3">
                        <span class="grid h-12 w-12 place-items-center rounded-xl bg-gradient-to-br from-indigo-600 to-indigo-700 text-white shadow-[0_8px_20px_-6px_rgba(79,70,229,0.55)] ring-4 ring-indigo-500/10 transition-transform duration-300 group-hover:scale-105">
                            <i data-lucide="code-2" class="h-6 w-6"></i>
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-md border border-indigo-200 bg-white/85 px-2.5 py-1 text-xs font-semibold text-indigo-700 shadow-sm backdrop-blur-sm">
                            <span class="h-1.5 w-1.5 rounded-full bg-indigo-600"></span>
                            10 Courses
                        </span>
                    </div>
                    <h3 class="mt-5 font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors group-hover:text-indigo-700 sm:text-xl">
                        Technology
                    </h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Modern coding, ICT mastery, web development &amp; practical digital skills.
                    </p>
                    <div class="mt-auto flex items-center justify-end gap-1.5 pt-5 text-sm font-semibold text-indigo-700">
                        <span>Explore</span>
                        <i data-lucide="chevron-right" class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </div>
                </div>
            </a>

            <!-- 6. Community (Rose) -->
            <a href="#courses" class="group relative flex min-h-[220px] flex-col overflow-hidden rounded-2xl border border-rose-200/80 bg-gradient-to-br from-[#fff9fa] via-[#fff1f3] to-[#ffe4e8] p-6 shadow-[0_4px_20px_-6px_rgba(225,29,72,0.1)] transition-all duration-300 ease-out hover:-translate-y-1 hover:border-rose-400/80 hover:shadow-[0_18px_38px_-12px_rgba(225,29,72,0.22)]">
                <div class="pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-rose-500/10 blur-2xl transition-transform duration-500 group-hover:scale-125"></div>
                <div class="relative flex h-full flex-col">
                    <div class="flex items-center justify-between gap-3">
                        <span class="grid h-12 w-12 place-items-center rounded-xl bg-gradient-to-br from-rose-500 to-pink-600 text-white shadow-[0_8px_20px_-6px_rgba(225,29,72,0.55)] ring-4 ring-rose-500/10 transition-transform duration-300 group-hover:scale-105">
                            <i data-lucide="users" class="h-6 w-6"></i>
                        </span>
                        <span class="inline-flex items-center gap-1.5 rounded-md border border-rose-200 bg-white/85 px-2.5 py-1 text-xs font-semibold text-rose-700 shadow-sm backdrop-blur-sm">
                            <span class="h-1.5 w-1.5 rounded-full bg-rose-600"></span>
                            8 Courses
                        </span>
                    </div>
                    <h3 class="mt-5 font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors group-hover:text-rose-600 sm:text-xl">
                        Community
                    </h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Join our supportive peer learning network, study clubs &amp; 1-on-1 mentorship.
                    </p>
                    <div class="mt-auto flex items-center justify-end gap-1.5 pt-5 text-sm font-semibold text-rose-600">
                        <span>Explore</span>
                        <i data-lucide="chevron-right" class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ==================== FEATURED COURSES ==================== -->
<section id="courses" class="relative overflow-hidden bg-soft-gradient py-10 md:py-12 lg:py-14">
    <div class="pointer-events-none absolute -right-24 top-24 h-72 w-72 rounded-full bg-primary/6 blur-[90px]"></div>
    <div class="pointer-events-none absolute -left-16 bottom-10 h-64 w-64 rounded-full bg-primary-glow/8 blur-[80px]"></div>

    <div class="container-lms relative">
        <div class="flex items-center justify-between gap-4">
            <h2 class="font-display text-3xl font-bold tracking-tight text-foreground sm:text-4xl">
                Discover our <span class="bg-[linear-gradient(90deg,#3b2670_0%,#8b5cf6_100%)] bg-clip-text text-transparent">top courses</span>
            </h2>
            <a href="{{ route('courses') }}" class="btn-primary hidden shrink-0 px-4 py-2.5 text-sm sm:inline-flex">
                <span>View All</span>
                <i data-lucide="arrow-right" class="h-4 w-4"></i>
            </a>
        </div>

        <div class="mt-8 grid gap-6 sm:grid-cols-2 md:mt-9 lg:grid-cols-3">
            <!-- Course 1 -->
            <article class="group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                <!-- Course Thumbnail -->
                <div class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                    <img src="{{ asset('assets/frontend/images/featured-ssc.jpg') }}" alt="SSC-27 Full Prep 2.0" class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                </div>

                <!-- Card Body -->
                <div class="flex flex-1 flex-col p-5 sm:p-6">
                    <!-- Course Title -->
                    <h3 class="line-clamp-2 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                        SSC-27 Full Academic &amp; Final Revision Batch 2.0
                    </h3>

                    <!-- Instructor Info -->
                    <div class="mt-3.5 flex items-center gap-2.5">
                        <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="Niaz Morshed Faysal" class="h-8 w-8 shrink-0 rounded-full object-cover ring-1 ring-slate-200">
                        <div class="min-w-0">
                            <div class="truncate text-sm font-medium text-slate-800">Niaz Morshed Faysal</div>
                            <div class="truncate text-xs text-slate-500">Lead SSC Mentor &amp; Panel</div>
                        </div>
                    </div>

                    <!-- Price & Enroll Link -->
                    <div class="mt-auto pt-4">
                        <div class="mb-3.5 h-px w-full bg-slate-100"></div>
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex flex-wrap items-baseline gap-x-2 gap-y-0.5">
                                <span class="font-display text-lg font-bold text-slate-900 sm:text-xl">৳3,499</span>
                                <span class="text-xs text-slate-400 line-through">৳4,999</span>
                                <span class="text-xs font-medium text-emerald-600">Save ৳1,500</span>
                            </div>
                            <a href="#courses" class="inline-flex shrink-0 items-center gap-1 text-sm font-semibold text-[#3b2670] transition-all group-hover:gap-1.5 group-hover:text-[#2a1c58]">
                                <span>Enroll</span>
                                <i data-lucide="arrow-right" class="h-4 w-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Course 2 -->
            <article class="group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                <!-- Course Thumbnail -->
                <div class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                    <img src="{{ asset('assets/frontend/images/featured-hsc-physics.jpg') }}" alt="HSC Physics Master Class" class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                </div>

                <!-- Card Body -->
                <div class="flex flex-1 flex-col p-5 sm:p-6">
                    <!-- Course Title -->
                    <h3 class="line-clamp-2 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                        HSC Physics 1st &amp; 2nd Paper Complete Master Class
                    </h3>

                    <!-- Instructor Info -->
                    <div class="mt-3.5 flex items-center gap-2.5">
                        <img src="{{ asset('assets/frontend/images/instructor-rafiul.jpg') }}" alt="Dr. Rafiul Alam" class="h-8 w-8 shrink-0 rounded-full object-cover ring-1 ring-slate-200">
                        <div class="min-w-0">
                            <div class="truncate text-sm font-medium text-slate-800">Dr. Rafiul Alam</div>
                            <div class="truncate text-xs text-slate-500">Senior Physics Instructor</div>
                        </div>
                    </div>

                    <!-- Price & Enroll Link -->
                    <div class="mt-auto pt-4">
                        <div class="mb-3.5 h-px w-full bg-slate-100"></div>
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex flex-wrap items-baseline gap-x-2 gap-y-0.5">
                                <span class="font-display text-lg font-bold text-slate-900 sm:text-xl">৳2,799</span>
                                <span class="text-xs text-slate-400 line-through">৳3,499</span>
                                <span class="text-xs font-medium text-emerald-600">Save ৳700</span>
                            </div>
                            <a href="#courses" class="inline-flex shrink-0 items-center gap-1 text-sm font-semibold text-[#3b2670] transition-all group-hover:gap-1.5 group-hover:text-[#2a1c58]">
                                <span>Enroll</span>
                                <i data-lucide="arrow-right" class="h-4 w-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Course 3 -->
            <article class="group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                <!-- Course Thumbnail -->
                <div class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                    <img src="{{ asset('assets/frontend/images/featured-admission.jpg') }}" alt="University Admission Combo" class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                </div>

                <!-- Card Body -->
                <div class="flex flex-1 flex-col p-5 sm:p-6">
                    <!-- Course Title -->
                    <h3 class="line-clamp-2 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                        University &amp; Engineering Admission All-in-One Combo
                    </h3>

                    <!-- Instructor Info -->
                    <div class="mt-3.5 flex items-center gap-2.5">
                        <img src="{{ asset('assets/frontend/images/instructor-team.jpg') }}" alt="Team EduSphere" class="h-8 w-8 shrink-0 rounded-full object-cover ring-1 ring-slate-200">
                        <div class="min-w-0">
                            <div class="truncate text-sm font-medium text-slate-800">Team EduSphere</div>
                            <div class="truncate text-xs text-slate-500">BUET, DU &amp; DMC Mentor Panel</div>
                        </div>
                    </div>

                    <!-- Price & Enroll Link -->
                    <div class="mt-auto pt-4">
                        <div class="mb-3.5 h-px w-full bg-slate-100"></div>
                        <div class="flex items-center justify-between gap-3">
                            <div class="flex flex-wrap items-baseline gap-x-2 gap-y-0.5">
                                <span class="font-display text-lg font-bold text-slate-900 sm:text-xl">৳5,299</span>
                                <span class="text-xs text-slate-400 line-through">৳6,999</span>
                                <span class="text-xs font-medium text-emerald-600">Save ৳1,700</span>
                            </div>
                            <a href="#courses" class="inline-flex shrink-0 items-center gap-1 text-sm font-semibold text-[#3b2670] transition-all group-hover:gap-1.5 group-hover:text-[#2a1c58]">
                                <span>Enroll</span>
                                <i data-lucide="arrow-right" class="h-4 w-4"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- Mobile view all button -->
        <div class="mt-6 flex justify-center sm:hidden">
            <a href="{{ route('courses') }}" class="btn-primary px-5 py-2.5 text-sm">
                <span>View All Courses</span>
                <i data-lucide="arrow-right" class="h-4 w-4"></i>
            </a>
        </div>
    </div>
</section>

<!-- ==================== INSTRUCTORS SECTION ==================== -->
<section id="instructors" class="relative overflow-hidden bg-soft-gradient py-10 md:py-12 lg:py-14">
    <div class="container-lms">
        <!-- Header: Left Title, Right See All -->
        <div class="flex items-center justify-between gap-4">
            <h2 class="font-display text-3xl font-bold tracking-tight text-foreground sm:text-4xl">
                Learn from <span class="bg-[linear-gradient(90deg,#3b2670_0%,#8b5cf6_100%)] bg-clip-text text-transparent">the best</span>
            </h2>

            <a href="{{ route('instructors') }}" class="btn-primary shrink-0 px-4 py-2.5 text-sm">
                <span>See All</span>
                <i data-lucide="arrow-right" class="h-4 w-4"></i>
            </a>
        </div>

        <!-- Instructor Swiper Carousel -->
        <div class="swiper instructor-swiper mt-7 !pb-12 !pt-4 !px-1">
            <div class="swiper-wrapper">

                <!-- Instructor 1 -->
                <div class="swiper-slide h-auto">
                    <article class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.24)]">
                        <!-- Top Hero-Matched Banner -->
                        <div class="relative h-28 w-full overflow-hidden bg-gradient-to-r from-[#1a1340] via-[#3b2670] to-[#4c328a] transition-all duration-500 group-hover:brightness-110">
                            <div class="pointer-events-none absolute inset-0 opacity-30 [background:radial-gradient(circle_at_20%_30%,#a78bfa_0%,transparent_55%),radial-gradient(circle_at_85%_70%,#e879f9_0%,transparent_50%)]"></div>
                            <div class="pointer-events-none absolute -right-6 -top-6 h-24 w-24 rounded-full border border-white/10"></div>
                            <div class="pointer-events-none absolute -left-4 -bottom-10 h-28 w-28 rounded-full border border-white/10"></div>
                        </div>

                        <!-- Overlapping Larger Avatar -->
                        <div class="relative mx-auto -mt-14 flex justify-center sm:-mt-16">
                            <div class="relative h-28 w-28 rounded-full bg-white p-1 shadow-[0_10px_24px_-6px_rgba(26,19,64,0.32)] ring-4 ring-[#3b2670]/20 transition-all duration-300 group-hover:ring-[#3b2670]/45 group-hover:shadow-[0_14px_28px_-6px_rgba(59,38,112,0.38)] sm:h-32 sm:w-32">
                                <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="Niaz Morshed Faysal" class="h-full w-full rounded-full object-cover">
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="flex flex-1 flex-col items-center px-6 pb-6 pt-4 text-center">
                            <h3 class="font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors duration-200 group-hover:text-[#3b2670] sm:text-xl">
                                Niaz Morshed Faysal
                            </h3>

                            <!-- Subject Pill -->
                            <span class="mt-2.5 inline-flex items-center gap-1.5 rounded-full border border-[#3b2670]/15 bg-[#f4f0ff] px-3.5 py-1 text-xs font-semibold text-[#3b2670]">
                                <i data-lucide="book-open" class="h-3.5 w-3.5"></i>
                                Physics
                            </span>

                            <!-- Credentials -->
                            <p class="mt-3.5 text-sm text-slate-600">
                                Founder &amp; Lead Instructor, Physics Wing
                            </p>
                            <p class="mt-1 text-xs text-slate-500">
                                B.Sc. in CSE, AUST
                            </p>

                            <!-- Social Media Icons -->
                            <div class="mt-auto flex items-center justify-center gap-3.5 pt-5">
                                <a href="#instructors" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full bg-[#ef4444] text-white shadow-[0_6px_16px_-4px_rgba(239,68,68,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#dc2626] hover:shadow-[0_10px_20px_-4px_rgba(239,68,68,0.65)]">
                                    <i class="ph-fill ph-youtube-logo text-lg"></i>
                                </a>
                                <a href="#instructors" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full bg-[#2563eb] text-white shadow-[0_6px_16px_-4px_rgba(37,99,235,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#1d4ed8] hover:shadow-[0_10px_20px_-4px_rgba(37,99,235,0.65)]">
                                    <i class="ph-fill ph-facebook-logo text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Instructor 2 -->
                <div class="swiper-slide h-auto">
                    <article class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.24)]">
                        <!-- Top Hero-Matched Banner -->
                        <div class="relative h-28 w-full overflow-hidden bg-gradient-to-r from-[#1a1340] via-[#3b2670] to-[#4c328a] transition-all duration-500 group-hover:brightness-110">
                            <div class="pointer-events-none absolute inset-0 opacity-30 [background:radial-gradient(circle_at_20%_30%,#a78bfa_0%,transparent_55%),radial-gradient(circle_at_85%_70%,#e879f9_0%,transparent_50%)]"></div>
                            <div class="pointer-events-none absolute -right-6 -top-6 h-24 w-24 rounded-full border border-white/10"></div>
                            <div class="pointer-events-none absolute -left-4 -bottom-10 h-28 w-28 rounded-full border border-white/10"></div>
                        </div>

                        <!-- Overlapping Larger Avatar -->
                        <div class="relative mx-auto -mt-14 flex justify-center sm:-mt-16">
                            <div class="relative h-28 w-28 rounded-full bg-white p-1 shadow-[0_10px_24px_-6px_rgba(26,19,64,0.32)] ring-4 ring-[#3b2670]/20 transition-all duration-300 group-hover:ring-[#3b2670]/45 group-hover:shadow-[0_14px_28px_-6px_rgba(59,38,112,0.38)] sm:h-32 sm:w-32">
                                <img src="{{ asset('assets/frontend/images/instructor-rafiul.jpg') }}" alt="Dr. Rafiul Alam" class="h-full w-full rounded-full object-cover">
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="flex flex-1 flex-col items-center px-6 pb-6 pt-4 text-center">
                            <h3 class="font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors duration-200 group-hover:text-[#3b2670] sm:text-xl">
                                Dr. Rafiul Alam
                            </h3>

                            <!-- Subject Pill -->
                            <span class="mt-2.5 inline-flex items-center gap-1.5 rounded-full border border-[#3b2670]/15 bg-[#f4f0ff] px-3.5 py-1 text-xs font-semibold text-[#3b2670]">
                                <i data-lucide="book-open" class="h-3.5 w-3.5"></i>
                                Chemistry
                            </span>

                            <!-- Credentials -->
                            <p class="mt-3.5 text-sm text-slate-600">
                                Founder, Alam Chemistry Academy
                            </p>
                            <p class="mt-1 text-xs text-slate-500">
                                Applied Chemistry, University of Dhaka
                            </p>

                            <!-- Social Media Icons -->
                            <div class="mt-auto flex items-center justify-center gap-3.5 pt-5">
                                <a href="#instructors" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full bg-[#ef4444] text-white shadow-[0_6px_16px_-4px_rgba(239,68,68,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#dc2626] hover:shadow-[0_10px_20px_-4px_rgba(239,68,68,0.65)]">
                                    <i class="ph-fill ph-youtube-logo text-lg"></i>
                                </a>
                                <a href="#instructors" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full bg-[#2563eb] text-white shadow-[0_6px_16px_-4px_rgba(37,99,235,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#1d4ed8] hover:shadow-[0_10px_20px_-4px_rgba(37,99,235,0.65)]">
                                    <i class="ph-fill ph-facebook-logo text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Instructor 3 -->
                <div class="swiper-slide h-auto">
                    <article class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.24)]">
                        <!-- Top Hero-Matched Banner -->
                        <div class="relative h-28 w-full overflow-hidden bg-gradient-to-r from-[#1a1340] via-[#3b2670] to-[#4c328a] transition-all duration-500 group-hover:brightness-110">
                            <div class="pointer-events-none absolute inset-0 opacity-30 [background:radial-gradient(circle_at_20%_30%,#a78bfa_0%,transparent_55%),radial-gradient(circle_at_85%_70%,#e879f9_0%,transparent_50%)]"></div>
                            <div class="pointer-events-none absolute -right-6 -top-6 h-24 w-24 rounded-full border border-white/10"></div>
                            <div class="pointer-events-none absolute -left-4 -bottom-10 h-28 w-28 rounded-full border border-white/10"></div>
                        </div>

                        <!-- Overlapping Larger Avatar -->
                        <div class="relative mx-auto -mt-14 flex justify-center sm:-mt-16">
                            <div class="relative h-28 w-28 rounded-full bg-white p-1 shadow-[0_10px_24px_-6px_rgba(26,19,64,0.32)] ring-4 ring-[#3b2670]/20 transition-all duration-300 group-hover:ring-[#3b2670]/45 group-hover:shadow-[0_14px_28px_-6px_rgba(59,38,112,0.38)] sm:h-32 sm:w-32">
                                <img src="{{ asset('assets/frontend/images/instructor-team.jpg') }}" alt="Fahad Hossain Shovon" class="h-full w-full rounded-full object-cover">
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="flex flex-1 flex-col items-center px-6 pb-6 pt-4 text-center">
                            <h3 class="font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors duration-200 group-hover:text-[#3b2670] sm:text-xl">
                                Fahad Hossain Shovon
                            </h3>

                            <!-- Subject Pill -->
                            <span class="mt-2.5 inline-flex items-center gap-1.5 rounded-full border border-[#3b2670]/15 bg-[#f4f0ff] px-3.5 py-1 text-xs font-semibold text-[#3b2670]">
                                <i data-lucide="book-open" class="h-3.5 w-3.5"></i>
                                Higher Math
                            </span>

                            <!-- Credentials -->
                            <p class="mt-3.5 text-sm text-slate-600">
                                Founder &amp; Chief Mentor, Mathletes
                            </p>
                            <p class="mt-1 text-xs text-slate-500">
                                Mathematics, University of Chittagong
                            </p>

                            <!-- Social Media Icons -->
                            <div class="mt-auto flex items-center justify-center gap-3.5 pt-5">
                                <a href="#instructors" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full bg-[#ef4444] text-white shadow-[0_6px_16px_-4px_rgba(239,68,68,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#dc2626] hover:shadow-[0_10px_20px_-4px_rgba(239,68,68,0.65)]">
                                    <i class="ph-fill ph-youtube-logo text-lg"></i>
                                </a>
                                <a href="#instructors" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full bg-[#2563eb] text-white shadow-[0_6px_16px_-4px_rgba(37,99,235,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#1d4ed8] hover:shadow-[0_10px_20px_-4px_rgba(37,99,235,0.65)]">
                                    <i class="ph-fill ph-facebook-logo text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Instructor 4 -->
                <div class="swiper-slide h-auto">
                    <article class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.24)]">
                        <!-- Top Hero-Matched Banner -->
                        <div class="relative h-28 w-full overflow-hidden bg-gradient-to-r from-[#1a1340] via-[#3b2670] to-[#4c328a] transition-all duration-500 group-hover:brightness-110">
                            <div class="pointer-events-none absolute inset-0 opacity-30 [background:radial-gradient(circle_at_20%_30%,#a78bfa_0%,transparent_55%),radial-gradient(circle_at_85%_70%,#e879f9_0%,transparent_50%)]"></div>
                            <div class="pointer-events-none absolute -right-6 -top-6 h-24 w-24 rounded-full border border-white/10"></div>
                            <div class="pointer-events-none absolute -left-4 -bottom-10 h-28 w-28 rounded-full border border-white/10"></div>
                        </div>

                        <!-- Overlapping Larger Avatar -->
                        <div class="relative mx-auto -mt-14 flex justify-center sm:-mt-16">
                            <div class="relative h-28 w-28 rounded-full bg-white p-1 shadow-[0_10px_24px_-6px_rgba(26,19,64,0.32)] ring-4 ring-[#3b2670]/20 transition-all duration-300 group-hover:ring-[#3b2670]/45 group-hover:shadow-[0_14px_28px_-6px_rgba(59,38,112,0.38)] sm:h-32 sm:w-32">
                                <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="Tanvir Hasan" class="h-full w-full rounded-full object-cover">
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="flex flex-1 flex-col items-center px-6 pb-6 pt-4 text-center">
                            <h3 class="font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors duration-200 group-hover:text-[#3b2670] sm:text-xl">
                                Tanvir Hasan
                            </h3>

                            <!-- Subject Pill -->
                            <span class="mt-2.5 inline-flex items-center gap-1.5 rounded-full border border-[#3b2670]/15 bg-[#f4f0ff] px-3.5 py-1 text-xs font-semibold text-[#3b2670]">
                                <i data-lucide="book-open" class="h-3.5 w-3.5"></i>
                                ICT &amp; Programming
                            </span>

                            <!-- Credentials -->
                            <p class="mt-3.5 text-sm text-slate-600">
                                Senior Software Engineer &amp; ICT Educator
                            </p>
                            <p class="mt-1 text-xs text-slate-500">
                                B.Sc. in CSE, BUET
                            </p>

                            <!-- Social Media Icons -->
                            <div class="mt-auto flex items-center justify-center gap-3.5 pt-5">
                                <a href="#instructors" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full bg-[#ef4444] text-white shadow-[0_6px_16px_-4px_rgba(239,68,68,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#dc2626] hover:shadow-[0_10px_20px_-4px_rgba(239,68,68,0.65)]">
                                    <i class="ph-fill ph-youtube-logo text-lg"></i>
                                </a>
                                <a href="#instructors" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full bg-[#2563eb] text-white shadow-[0_6px_16px_-4px_rgba(37,99,235,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#1d4ed8] hover:shadow-[0_10px_20px_-4px_rgba(37,99,235,0.65)]">
                                    <i class="ph-fill ph-facebook-logo text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Instructor 5 -->
                <div class="swiper-slide h-auto">
                    <article class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.24)]">
                        <!-- Top Hero-Matched Banner -->
                        <div class="relative h-28 w-full overflow-hidden bg-gradient-to-r from-[#1a1340] via-[#3b2670] to-[#4c328a] transition-all duration-500 group-hover:brightness-110">
                            <div class="pointer-events-none absolute inset-0 opacity-30 [background:radial-gradient(circle_at_20%_30%,#a78bfa_0%,transparent_55%),radial-gradient(circle_at_85%_70%,#e879f9_0%,transparent_50%)]"></div>
                            <div class="pointer-events-none absolute -right-6 -top-6 h-24 w-24 rounded-full border border-white/10"></div>
                            <div class="pointer-events-none absolute -left-4 -bottom-10 h-28 w-28 rounded-full border border-white/10"></div>
                        </div>

                        <!-- Overlapping Larger Avatar -->
                        <div class="relative mx-auto -mt-14 flex justify-center sm:-mt-16">
                            <div class="relative h-28 w-28 rounded-full bg-white p-1 shadow-[0_10px_24px_-6px_rgba(26,19,64,0.32)] ring-4 ring-[#3b2670]/20 transition-all duration-300 group-hover:ring-[#3b2670]/45 group-hover:shadow-[0_14px_28px_-6px_rgba(59,38,112,0.38)] sm:h-32 sm:w-32">
                                <img src="{{ asset('assets/frontend/images/instructor-rafiul.jpg') }}" alt="Junnurain Khan" class="h-full w-full rounded-full object-cover">
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="flex flex-1 flex-col items-center px-6 pb-6 pt-4 text-center">
                            <h3 class="font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors duration-200 group-hover:text-[#3b2670] sm:text-xl">
                                Junnurain Khan
                            </h3>

                            <!-- Subject Pill -->
                            <span class="mt-2.5 inline-flex items-center gap-1.5 rounded-full border border-[#3b2670]/15 bg-[#f4f0ff] px-3.5 py-1 text-xs font-semibold text-[#3b2670]">
                                <i data-lucide="book-open" class="h-3.5 w-3.5"></i>
                                Biology
                            </span>

                            <!-- Credentials -->
                            <p class="mt-3.5 text-sm text-slate-600">
                                Lead Medical Admission Mentor
                            </p>
                            <p class="mt-1 text-xs text-slate-500">
                                MBBS, Dhaka Medical College (DMC)
                            </p>

                            <!-- Social Media Icons -->
                            <div class="mt-auto flex items-center justify-center gap-3.5 pt-5">
                                <a href="#instructors" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full bg-[#ef4444] text-white shadow-[0_6px_16px_-4px_rgba(239,68,68,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#dc2626] hover:shadow-[0_10px_20px_-4px_rgba(239,68,68,0.65)]">
                                    <i class="ph-fill ph-youtube-logo text-lg"></i>
                                </a>
                                <a href="#instructors" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full bg-[#2563eb] text-white shadow-[0_6px_16px_-4px_rgba(37,99,235,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#1d4ed8] hover:shadow-[0_10px_20px_-4px_rgba(37,99,235,0.65)]">
                                    <i class="ph-fill ph-facebook-logo text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

            </div>

            <!-- Pagination -->
            <div class="swiper-pagination instructor-pagination"></div>
        </div>
    </div>
</section>

<!-- ==================== TESTIMONIALS (STUDENT REVIEWS) ==================== -->
<section id="exams" class="relative overflow-hidden bg-soft-gradient py-12 md:py-14 lg:py-16">
    <!-- Subtle ambient glows -->
    <div class="pointer-events-none absolute -left-24 top-1/4 h-72 w-72 rounded-full bg-[#3b2670]/8 blur-[95px]"></div>
    <div class="pointer-events-none absolute -right-24 bottom-1/4 h-72 w-72 rounded-full bg-primary/10 blur-[95px]"></div>

    <!-- Centered Header -->
    <div class="container-lms relative z-10 text-center">
        <h2 class="font-display text-3xl font-bold tracking-tight text-foreground sm:text-4xl lg:text-[2.5rem]">
            What Our <span class="bg-[linear-gradient(90deg,#3b2670_0%,#8b5cf6_100%)] bg-clip-text text-transparent">Students Say</span>
        </h2>
        <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-muted-foreground sm:text-base">
            Feedbacks from students who have transformed their learning journey with EduSphere
        </p>

        <!-- Rating Pill Badge -->
        <div class="mt-5 inline-flex items-center gap-2.5 rounded-full border border-[#3b2670]/15 bg-white px-4 py-2 shadow-[0_6px_20px_-6px_rgba(59,38,112,0.14)]">
            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                <i class="ph-fill ph-star text-sm"></i>
                <i class="ph-fill ph-star text-sm"></i>
                <i class="ph-fill ph-star text-sm"></i>
                <i class="ph-fill ph-star text-sm"></i>
                <i class="ph-fill ph-star text-sm"></i>
            </div>
            <span class="text-xs font-bold text-slate-900 sm:text-sm">5.0</span>
            <span class="text-xs text-slate-500 sm:text-sm">average rating</span>
        </div>
    </div>

    <!-- Full-Width 2-Row Infinite Marquee Wrapper -->
    <div class="relative mt-9 w-full overflow-hidden py-2 sm:mt-11">
        <!-- Smooth Left & Right Edge Fade Overlays -->
        <div class="pointer-events-none absolute inset-y-0 left-0 z-20 w-8 bg-gradient-to-r from-[#f7f5ff] via-[#f7f5ff]/85 to-transparent sm:w-20 lg:w-32"></div>
        <div class="pointer-events-none absolute inset-y-0 right-0 z-20 w-8 bg-gradient-to-l from-[#f7f5ff] via-[#f7f5ff]/85 to-transparent sm:w-20 lg:w-32"></div>

        <!-- ==================== ROW 1: Right to Left ==================== -->
        <div class="reviews-marquee-track reviews-marquee-left gap-4 sm:gap-5">
            <!-- Set 1 -->
            <div class="flex shrink-0 items-stretch gap-4 sm:gap-5">
                <!-- Review 1 -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "আলহামদুলিল্লাহ স্যারদের পড়ানো অসম্ভব রকমের ভালো। এক কথায় যা অতুলনীয়! আল্লাহর কাছে শুকরিয়া আদায় করছি এত ভালো একটা প্ল্যাটফর্মের সাথে যুক্ত হয়ে পড়তে পারছি।"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="Mubina Khanom" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Mubina Khanom</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 2 -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "To be honest, this series is too much effective! Before I was weak in MCQ of Math. Right now I get 27–29 out of 30. Thank you EduSphere mentors!"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-rafiul.jpg') }}" alt="Shamim Shohan" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Shamim Shohan</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 3 -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "এতো এতো বেশি হেল্পফুল এই কোর্সগুলো যে কি বলবো! বেসিক সহ সব CQ, MCQ কাভার হয়ে যায়। আমি গাইড হাতে নিলে মনে হয় সব টাইপ পারি, আলহামদুলিল্লাহ!"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-team.jpg') }}" alt="Afrina Jahan" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Afrina Jahan</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 4 -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "আমি SSC 27 ব্যাচের শিক্ষার্থী। শেষ ২ মাসে রিভিশন ব্যাচে জয়েন করে আমার ফিজিক্স ও হায়ার ম্যাথের ভয় পুরোপুরি কেটে গেছে। স্যারদের নোটগুলো অসাধারণ।"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="Borhan Uddin" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Borhan Uddin</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 5 -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "The live classes and smart notes are top-tier. Interactive quizzes and chapter model tests gave me the exact confidence I needed before board exams."
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-rafiul.jpg') }}" alt="Ayesha Siddika" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Ayesha Siddika</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Set 2 (Duplicate for seamless infinite loop) -->
            <div class="flex shrink-0 items-stretch gap-4 sm:gap-5" aria-hidden="true">
                <!-- Review 1 Clone -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "আলহামদুলিল্লাহ স্যারদের পড়ানো অসম্ভব রকমের ভালো। এক কথায় যা অতুলনীয়! আল্লাহর কাছে শুকরিয়া আদায় করছি এত ভালো একটা প্ল্যাটফর্মের সাথে যুক্ত হয়ে পড়তে পারছি।"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Mubina Khanom</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 2 Clone -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "To be honest, this series is too much effective! Before I was weak in MCQ of Math. Right now I get 27–29 out of 30. Thank you EduSphere mentors!"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-rafiul.jpg') }}" alt="" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Shamim Shohan</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 3 Clone -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "এতো এতো বেশি হেল্পফুল এই কোর্সগুলো যে কি বলবো! বেসিক সহ সব CQ, MCQ কাভার হয়ে যায়। আমি গাইড হাতে নিলে মনে হয় সব টাইপ পারি, আলহামদুলিল্লাহ!"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-team.jpg') }}" alt="" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Afrina Jahan</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 4 Clone -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "আমি SSC 27 ব্যাচের শিক্ষার্থী। শেষ ২ মাসে রিভিশন ব্যাচে জয়েন করে আমার ফিজিক্স ও হায়ার ম্যাথের ভয় পুরোপুরি কেটে গেছে। স্যারদের নোটগুলো অসাধারণ।"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Borhan Uddin</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 5 Clone -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "The live classes and smart notes are top-tier. Interactive quizzes and chapter model tests gave me the exact confidence I needed before board exams."
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-rafiul.jpg') }}" alt="" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Ayesha Siddika</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- ==================== ROW 2: Left to Right ==================== -->
        <div class="reviews-marquee-track reviews-marquee-right mt-4 gap-4 sm:mt-5 sm:gap-5">
            <!-- Set 1 -->
            <div class="flex shrink-0 items-stretch gap-4 sm:gap-5">
                <!-- Review 6 -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "বিশ্বাস করেন, ক্লাসগুলো সব দেখার পর আমার মধ্যে এতটাই আত্মবিশ্বাস হয়েছে যে বোর্ড পরীক্ষায় সর্বোচ্চ নম্বর পাওয়া এখন অনেক সহজ মনে হচ্ছে!"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-team.jpg') }}" alt="Mahin Rahman" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Mahin Rahman</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 7 -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "প্রত্যেক স্যারই অনেক সুন্দরভাবে এবং গুছিয়ে আমাদের ক্লাসগুলো করিয়ে থাকেন। একটি কোর্সেই অনেকগুলো সাবজেক্টের সেরা প্রস্তুতি হয়ে যাচ্ছে।"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="Nusrat Jahan" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Nusrat Jahan</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 8 -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "Physics and Chemistry Basic to Pro course-এ এত সুন্দর করে বোঝানো হয় যে প্রত্যেকটা টপিক পানির মতো সহজ হয়ে যায়। ধৈর্য সহকারে ক্লাস করলেই সেরা রেজাল্ট সম্ভব।"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-rafiul.jpg') }}" alt="Tanvir Ahmed" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Tanvir Ahmed</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 9 -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "Clean platform, super smooth videos, and doubt solving is super fast. Mentors answer questions almost instantly during live sessions!"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-team.jpg') }}" alt="Rakib Hossain" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Rakib Hossain</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 10 -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "সত্যি বলতে আমি EduSphere-এর ক্লাস করার পর এখন অন্য কোথাও পড়ার প্রয়োজন মনে করি না। ভিজ্যুয়াল অ্যানিমেশন ও স্মার্ট নোটগুলো পড়া মনে রাখতে দারুণ সাহায্য করে।"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="Sadiya Farhin" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Sadiya Farhin</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Set 2 (Duplicate for seamless infinite loop) -->
            <div class="flex shrink-0 items-stretch gap-4 sm:gap-5" aria-hidden="true">
                <!-- Review 6 Clone -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "বিশ্বাস করেন, ক্লাসগুলো সব দেখার পর আমার মধ্যে এতটাই আত্মবিশ্বাস হয়েছে যে বোর্ড পরীক্ষায় সর্বোচ্চ নম্বর পাওয়া এখন অনেক সহজ মনে হচ্ছে!"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-team.jpg') }}" alt="" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Mahin Rahman</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 7 Clone -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "প্রত্যেক স্যারই অনেক সুন্দরভাবে এবং গুছিয়ে আমাদের ক্লাসগুলো করিয়ে থাকেন। একটি কোর্সেই অনেকগুলো সাবজেক্টের সেরা প্রস্তুতি হয়ে যাচ্ছে।"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Nusrat Jahan</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 8 Clone -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "Physics and Chemistry Basic to Pro course-এ এত সুন্দর করে বোঝানো হয় যে প্রত্যেকটা টপিক পানির মতো সহজ হয়ে যায়। ধৈর্য সহকারে ক্লাস করলেই সেরা রেজাল্ট সম্ভব।"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-rafiul.jpg') }}" alt="" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Tanvir Ahmed</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 9 Clone -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "Clean platform, super smooth videos, and doubt solving is super fast. Mentors answer questions almost instantly during live sessions!"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-team.jpg') }}" alt="" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Rakib Hossain</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Review 10 Clone -->
                <article class="group flex w-[285px] shrink-0 flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-1 hover:border-[#3b2670]/35 hover:shadow-[0_18px_38px_-12px_rgba(59,38,112,0.2)] sm:w-[350px] sm:p-6 md:w-[380px]">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                                <i class="ph-fill ph-star text-sm sm:text-base"></i>
                            </div>
                            <i class="ph-fill ph-quotes text-2xl text-[#3b2670]/15 transition-colors group-hover:text-[#3b2670]/30 sm:text-3xl"></i>
                        </div>
                        <p class="mt-3.5 text-[13.5px] italic leading-relaxed text-slate-700 sm:text-sm">
                            "সত্যি বলতে আমি EduSphere-এর ক্লাস করার পর এখন অন্য কোথাও পড়ার প্রয়োজন মনে করি না। ভিজ্যুয়াল অ্যানিমেশন ও স্মার্ট নোটগুলো পড়া মনে রাখতে দারুণ সাহায্য করে।"
                        </p>
                    </div>
                    <div class="mt-5 flex items-center gap-3 border-t border-slate-100 pt-4">
                        <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="" class="h-10 w-10 shrink-0 rounded-full object-cover ring-2 ring-[#3b2670]/15">
                        <div class="min-w-0">
                            <h4 class="truncate text-sm font-semibold text-slate-900">Sadiya Farhin</h4>
                            <p class="flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <i class="ph-fill ph-check-circle text-xs"></i> Verified Student
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CTA SECTION ==================== -->
<section class="relative overflow-hidden bg-soft-gradient py-8 md:py-10 lg:py-12">
    <div class="container-lms">
        <div class="relative overflow-hidden rounded-2xl border border-[#3b2670]/15 bg-gradient-to-r from-[#1a1340] via-[#2a1c58] to-[#3b2670] px-6 py-8 text-white shadow-[0_18px_40px_-16px_rgba(26,19,64,0.45)] sm:px-10 sm:py-10 lg:px-12 lg:py-11">
            <!-- Subtle Primary Glows -->
            <div class="pointer-events-none absolute -right-12 -top-12 h-56 w-56 rounded-full bg-[#8b5cf6]/20 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-14 -left-12 h-56 w-56 rounded-full bg-[#a78bfa]/15 blur-3xl"></div>

            <div class="relative flex flex-col items-center justify-between gap-6 text-center lg:flex-row lg:gap-10 lg:text-left">
                <div class="max-w-xl">
                    <h2 class="font-display text-2xl font-bold tracking-tight text-white sm:text-3xl">
                        Ready to start your learning journey?
                    </h2>
                    <p class="mt-2.5 text-sm leading-relaxed text-[#e9d5ff]/90 sm:text-base">
                        Join 290,000+ students preparing with live classes, smart notes, and expert mentors.
                    </p>
                </div>

                <div class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row sm:items-center lg:shrink-0">
                    <a href="#courses" class="inline-flex w-full items-center justify-center gap-2 rounded-lg bg-white px-6 py-3 text-sm font-semibold text-[#3b2670] shadow-sm transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#f4f0ff] hover:shadow-md sm:w-auto">
                        <span>Create Free Account</span>
                        <i data-lucide="arrow-right" class="h-4 w-4"></i>
                    </a>
                    <a href="{{ route('courses') }}" class="inline-flex w-full items-center justify-center gap-2 rounded-lg border border-white/25 bg-white/10 px-6 py-3 text-sm font-semibold text-white backdrop-blur-sm transition-all duration-200 hover:-translate-y-0.5 hover:border-white/40 hover:bg-white/15 sm:w-auto">
                        <i data-lucide="book-open" class="h-4 w-4"></i>
                        <span>Browse Courses</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection