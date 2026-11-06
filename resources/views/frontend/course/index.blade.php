@extends('frontend.master')

@section('content')
    <!-- ==================== ALL COURSES PAGE ==================== -->
    <section class="relative min-h-screen overflow-hidden bg-soft-gradient pb-14 pt-24 sm:pb-16 sm:pt-28 lg:pb-20 lg:pt-32">
        <!-- Subtle Ambient Glows -->
        <div class="pointer-events-none absolute -left-24 top-20 h-72 w-72 rounded-full bg-[#3b2670]/8 blur-[95px]"></div>
        <div class="pointer-events-none absolute -right-24 top-1/3 h-80 w-80 rounded-full bg-primary/10 blur-[100px]"></div>

        <div class="container-lms relative z-10">
            <!-- Page Title Header (No Left Icon) -->
            <div class="text-center">
                <h1 class="font-display text-2xl font-bold tracking-tight text-foreground sm:text-3xl lg:text-4xl">
                    All <span class="bg-[linear-gradient(90deg,#3b2670_0%,#8b5cf6_100%)] bg-clip-text text-transparent">Courses</span>
                </h1>
            </div>

            <!-- Category / Batch Filter Tabs (Reduced Border Radius & Fixed Active Hover White Text) -->
            <div class="mt-6 flex items-center gap-2.5 overflow-x-auto pb-2 sm:mt-8 sm:flex-wrap sm:justify-center sm:gap-3 sm:overflow-visible sm:pb-0 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden" role="tablist" aria-label="Course Categories">
                <button type="button" data-course-filter="all" class="course-filter-pill is-active inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670] bg-[#3b2670] px-4 py-2 text-xs font-semibold text-white hover:text-white shadow-[0_8px_20px_-6px_rgba(59,38,112,0.45)] transition-all duration-200 sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>All Courses</span>
                    <span class="filter-count rounded-md bg-white/20 px-2 py-0.5 text-[11px] font-semibold text-white">60</span>
                </button>

                <button type="button" data-course-filter="hsc-27" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>HSC 27</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">20</span>
                </button>

                <button type="button" data-course-filter="hsc-28" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>HSC 28</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">15</span>
                </button>

                <button type="button" data-course-filter="ssc-26" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>SSC 26</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">21</span>
                </button>

                <button type="button" data-course-filter="ssc-27" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>SSC 27</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">21</span>
                </button>

                <button type="button" data-course-filter="class-9" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>Class 9</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">18</span>
                </button>

                <button type="button" data-course-filter="class-8" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>Class 8</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">4</span>
                </button>
            </div>

            <!-- ==================== UNIFIED COURSES GRID ==================== -->
            <div class="mt-8 grid grid-cols-1 gap-6 sm:mt-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 (HSC 28) -->
                <article data-course-category="hsc-28" class="course-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Thumbnail -->
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                        <img src="{{ asset('assets/frontend/images/hero_banner_2.jpg') }}" alt="EBI Basic To Pro 2.0 for HSC-28" class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                        <span class="absolute left-3 top-3 inline-flex items-center rounded-full bg-[#3b2670] px-3 py-1 text-xs font-semibold text-white shadow-sm">
                            Combo
                        </span>
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <span class="inline-flex w-fit items-center rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                            3 courses
                        </span>

                        <h3 class="mt-3 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            EBI Basic To Pro 2.0 for HSC-28
                        </h3>

                        <!-- Included Courses Box -->
                        <div class="mt-4 rounded-xl border border-[#3b2670]/10 bg-[#f9f7ff] p-3.5">
                            <div class="text-center text-xs font-semibold text-slate-700">Courses:</div>
                            <div class="mt-2.5 flex flex-col gap-2">
                                <div class="rounded-lg border border-[#3b2670]/12 bg-white px-3 py-2 text-center text-xs font-medium text-[#3b2670] shadow-sm">
                                    Bangla Basic To Pro HSC-28
                                </div>
                                <div class="rounded-lg border border-[#3b2670]/12 bg-white px-3 py-2 text-center text-xs font-medium text-[#3b2670] shadow-sm">
                                    English Basic To Pro HSC-28
                                </div>
                                <div class="rounded-lg border border-[#3b2670]/12 bg-white px-3 py-2 text-center text-xs font-medium text-[#3b2670] shadow-sm">
                                    ICT Basic To Pro HSC-28
                                </div>
                            </div>
                        </div>

                        <!-- Price Row -->
                        <div class="mt-auto pt-5">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳2,990</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳6,000</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳3,010</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Card 2 (HSC 28) -->
                <article data-course-category="hsc-28" class="course-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Thumbnail -->
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                        <img src="{{ asset('assets/frontend/images/hero_banner_1.jpg') }}" alt="PCMB 1st Paper Combo Course HSC-28" class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                        <span class="absolute left-3 top-3 inline-flex items-center rounded-full bg-[#3b2670] px-3 py-1 text-xs font-semibold text-white shadow-sm">
                            Combo
                        </span>
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <span class="inline-flex w-fit items-center rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                            4 courses
                        </span>

                        <h3 class="mt-3 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            PCMB 1st Paper Combo Course HSC-28
                        </h3>

                        <!-- Included Courses Box -->
                        <div class="mt-4 rounded-xl border border-[#3b2670]/10 bg-[#f9f7ff] p-3.5">
                            <div class="text-center text-xs font-semibold text-slate-700">Courses:</div>
                            <div class="mt-2.5 grid grid-cols-1 gap-2 sm:grid-cols-2">
                                <div class="flex items-center justify-center rounded-lg border border-[#3b2670]/12 bg-white px-2.5 py-2 text-center text-xs font-medium leading-snug text-[#3b2670] shadow-sm">
                                    Physics 1st Paper Basic To Pro HSC-28
                                </div>
                                <div class="flex items-center justify-center rounded-lg border border-[#3b2670]/12 bg-white px-2.5 py-2 text-center text-xs font-medium leading-snug text-[#3b2670] shadow-sm">
                                    Chemistry 1st Paper Basic To Pro HSC-28
                                </div>
                                <div class="flex items-center justify-center rounded-lg border border-[#3b2670]/12 bg-white px-2.5 py-2 text-center text-xs font-medium leading-snug text-[#3b2670] shadow-sm">
                                    Higher Math 1st Paper Basic To Pro HSC-28
                                </div>
                                <div class="flex items-center justify-center rounded-lg border border-[#3b2670]/12 bg-white px-2.5 py-2 text-center text-xs font-medium leading-snug text-[#3b2670] shadow-sm">
                                    Biology 1st Paper Basic To Pro HSC-28
                                </div>
                            </div>
                        </div>

                        <!-- Price Row -->
                        <div class="mt-auto pt-5">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳9,990</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳20,000</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳10,010</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Card 3 (SSC 26) -->
                <article data-course-category="ssc-26" class="course-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Thumbnail -->
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                        <img src="{{ asset('assets/frontend/images/hero_banner_3.jpg') }}" alt="FRPB-26 X MCQ & SQ Thunder Series for SSC-26" class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                        <span class="absolute left-3 top-3 inline-flex items-center rounded-full bg-[#3b2670] px-3 py-1 text-xs font-semibold text-white shadow-sm">
                            Combo
                        </span>
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <span class="inline-flex w-fit items-center rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                            2 courses
                        </span>

                        <h3 class="mt-3 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            FRPB-26 X MCQ &amp; SQ Thunder Series for SSC-26
                        </h3>

                        <!-- Included Courses Box -->
                        <div class="mt-4 rounded-xl border border-[#3b2670]/10 bg-[#f9f7ff] p-3.5">
                            <div class="text-center text-xs font-semibold text-slate-700">Courses:</div>
                            <div class="mt-2.5 flex flex-col gap-2">
                                <div class="rounded-lg border border-[#3b2670]/12 bg-white px-3 py-2 text-center text-xs font-medium text-[#3b2670] shadow-sm">
                                    MCQ &amp; SQ THUNDER SERIES 2.0 SSC-26
                                </div>
                                <div class="rounded-lg border border-[#3b2670]/12 bg-white px-3 py-2 text-center text-xs font-medium leading-snug text-[#3b2670] shadow-sm">
                                    Final Revision Premium Batch for SSC 26 (FRPB-26) Science
                                </div>
                            </div>
                        </div>

                        <!-- Price Row -->
                        <div class="mt-auto pt-5">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳2,990</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳3,690</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳700</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Card 4 (HSC 27) -->
                <article data-course-category="hsc-27" class="course-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Thumbnail -->
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                        <img src="{{ asset('assets/frontend/images/featured-hsc-physics.jpg') }}" alt="PCMB 2nd Paper Full Academic Combo HSC-27" class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                        <span class="absolute left-3 top-3 inline-flex items-center rounded-full bg-[#3b2670] px-3 py-1 text-xs font-semibold text-white shadow-sm">
                            Combo
                        </span>
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <span class="inline-flex w-fit items-center rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                            4 courses
                        </span>

                        <h3 class="mt-3 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            PCMB 2nd Paper Full Academic Combo HSC-27
                        </h3>

                        <!-- Included Courses Box -->
                        <div class="mt-4 rounded-xl border border-[#3b2670]/10 bg-[#f9f7ff] p-3.5">
                            <div class="text-center text-xs font-semibold text-slate-700">Courses:</div>
                            <div class="mt-2.5 grid grid-cols-1 gap-2 sm:grid-cols-2">
                                <div class="flex items-center justify-center rounded-lg border border-[#3b2670]/12 bg-white px-2.5 py-2 text-center text-xs font-medium leading-snug text-[#3b2670] shadow-sm">
                                    Physics 2nd Paper Basic To Pro HSC-27
                                </div>
                                <div class="flex items-center justify-center rounded-lg border border-[#3b2670]/12 bg-white px-2.5 py-2 text-center text-xs font-medium leading-snug text-[#3b2670] shadow-sm">
                                    Chemistry 2nd Paper Basic To Pro HSC-27
                                </div>
                                <div class="flex items-center justify-center rounded-lg border border-[#3b2670]/12 bg-white px-2.5 py-2 text-center text-xs font-medium leading-snug text-[#3b2670] shadow-sm">
                                    Higher Math 2nd Paper Basic To Pro HSC-27
                                </div>
                                <div class="flex items-center justify-center rounded-lg border border-[#3b2670]/12 bg-white px-2.5 py-2 text-center text-xs font-medium leading-snug text-[#3b2670] shadow-sm">
                                    Biology 2nd Paper Basic To Pro HSC-27
                                </div>
                            </div>
                        </div>

                        <!-- Price Row -->
                        <div class="mt-auto pt-5">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳8,990</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳16,000</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳7,010</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Card 5 (SSC 27) -->
                <article data-course-category="ssc-27" class="course-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Thumbnail -->
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                        <img src="{{ asset('assets/frontend/images/featured-ssc.jpg') }}" alt="SSC-27 Science All-in-One Academic Batch 2.0" class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                        <span class="absolute left-3 top-3 inline-flex items-center rounded-full bg-[#3b2670] px-3 py-1 text-xs font-semibold text-white shadow-sm">
                            Combo
                        </span>
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <span class="inline-flex w-fit items-center rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                            3 courses
                        </span>

                        <h3 class="mt-3 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            SSC-27 Science All-in-One Academic Batch 2.0
                        </h3>

                        <!-- Included Courses Box -->
                        <div class="mt-4 rounded-xl border border-[#3b2670]/10 bg-[#f9f7ff] p-3.5">
                            <div class="text-center text-xs font-semibold text-slate-700">Courses:</div>
                            <div class="mt-2.5 flex flex-col gap-2">
                                <div class="rounded-lg border border-[#3b2670]/12 bg-white px-3 py-2 text-center text-xs font-medium text-[#3b2670] shadow-sm">
                                    Physics &amp; Chemistry Core Batch SSC-27
                                </div>
                                <div class="rounded-lg border border-[#3b2670]/12 bg-white px-3 py-2 text-center text-xs font-medium text-[#3b2670] shadow-sm">
                                    Higher Math &amp; General Math Master SSC-27
                                </div>
                                <div class="rounded-lg border border-[#3b2670]/12 bg-white px-3 py-2 text-center text-xs font-medium text-[#3b2670] shadow-sm">
                                    Biology &amp; ICT Complete Batch SSC-27
                                </div>
                            </div>
                        </div>

                        <!-- Price Row -->
                        <div class="mt-auto pt-5">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳3,490</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳5,500</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳2,010</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Card 6 (Class 9) -->
                <article data-course-category="class-9" class="course-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Thumbnail -->
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                        <img src="{{ asset('assets/frontend/images/featured-admission.jpg') }}" alt="Class 9 Complete Academic Foundation Combo" class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105">
                        <span class="absolute left-3 top-3 inline-flex items-center rounded-full bg-[#3b2670] px-3 py-1 text-xs font-semibold text-white shadow-sm">
                            Combo
                        </span>
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <span class="inline-flex w-fit items-center rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                            3 courses
                        </span>

                        <h3 class="mt-3 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            Class 9 Complete Academic Foundation Combo
                        </h3>

                        <!-- Included Courses Box -->
                        <div class="mt-4 rounded-xl border border-[#3b2670]/10 bg-[#f9f7ff] p-3.5">
                            <div class="text-center text-xs font-semibold text-slate-700">Courses:</div>
                            <div class="mt-2.5 flex flex-col gap-2">
                                <div class="rounded-lg border border-[#3b2670]/12 bg-white px-3 py-2 text-center text-xs font-medium text-[#3b2670] shadow-sm">
                                    Class 9 General Mathematics Basic To Pro
                                </div>
                                <div class="rounded-lg border border-[#3b2670]/12 bg-white px-3 py-2 text-center text-xs font-medium text-[#3b2670] shadow-sm">
                                    Class 9 Science &amp; ICT Complete Batch
                                </div>
                                <div class="rounded-lg border border-[#3b2670]/12 bg-white px-3 py-2 text-center text-xs font-medium text-[#3b2670] shadow-sm">
                                    Class 9 English &amp; Bangla Foundation
                                </div>
                            </div>
                        </div>

                        <!-- Price Row -->
                        <div class="mt-auto pt-5">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳2,490</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳4,000</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳1,510</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterButtons = document.querySelectorAll('[data-course-filter]');
            const courseCards = document.querySelectorAll('.course-card-item');

            filterButtons.forEach((btn) => {
                btn.addEventListener('click', () => {
                    const selected = btn.getAttribute('data-course-filter');

                    filterButtons.forEach((item) => {
                        const isActive = item === btn;
                        const badge = item.querySelector('.filter-count');

                        item.classList.toggle('is-active', isActive);
                        item.classList.toggle('bg-[#3b2670]', isActive);
                        item.classList.toggle('border-[#3b2670]', isActive);
                        item.classList.toggle('text-white', isActive);
                        item.classList.toggle('hover:text-white', isActive);
                        item.classList.toggle('shadow-[0_8px_20px_-6px_rgba(59,38,112,0.45)]', isActive);

                        item.classList.toggle('bg-white', !isActive);
                        item.classList.toggle('border-[#3b2670]/12', !isActive);
                        item.classList.toggle('text-slate-700', !isActive);
                        item.classList.toggle('hover:border-[#3b2670]/35', !isActive);
                        item.classList.toggle('hover:text-[#3b2670]', !isActive);
                        item.classList.toggle('shadow-sm', !isActive);

                        if (badge) {
                            badge.classList.toggle('bg-white/20', isActive);
                            badge.classList.toggle('text-white', isActive);
                            badge.classList.toggle('bg-slate-100', !isActive);
                            badge.classList.toggle('text-slate-600', !isActive);
                        }
                    });

                    courseCards.forEach((card) => {
                        const category = card.getAttribute('data-course-category');
                        const shouldShow = selected === 'all' || category === selected;
                        card.classList.toggle('hidden', !shouldShow);
                        card.classList.toggle('flex', shouldShow);
                    });
                });
            });
        });
    </script>
@endsection
