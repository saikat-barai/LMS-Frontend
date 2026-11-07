@extends('frontend.master')

@section('content')
    <!-- ==================== ALL INSTRUCTORS PAGE ==================== -->
    <section class="relative min-h-screen overflow-hidden bg-soft-gradient pb-14 pt-24 sm:pb-16 sm:pt-28 lg:pb-20 lg:pt-32">
        <!-- Subtle Ambient Glows -->
        <div class="pointer-events-none absolute -left-24 top-20 h-72 w-72 rounded-full bg-[#3b2670]/8 blur-[95px]"></div>
        <div class="pointer-events-none absolute -right-24 top-1/3 h-80 w-80 rounded-full bg-primary/10 blur-[100px]"></div>

        <div class="container-lms relative z-10">
            <!-- Page Title Header (Clean Centered, No Left Icon) -->
            <div class="text-center">
                <h1 class="font-display text-2xl font-bold tracking-tight text-foreground sm:text-3xl lg:text-4xl">
                    Our <span class="bg-[linear-gradient(90deg,#3b2670_0%,#8b5cf6_100%)] bg-clip-text text-transparent">Instructors</span>
                </h1>
            </div>

            <!-- Subject Filter Tabs (Wraps into Multiple Rows on Mobile & Desktop) -->
            <div class="mt-6 flex flex-wrap items-center justify-center gap-2 sm:mt-8 sm:gap-3" role="tablist" aria-label="Instructor Subjects">
                <button type="button" data-instructor-filter="all" class="course-filter-pill is-active inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670] bg-[#3b2670] px-4 py-2 text-xs font-semibold text-white hover:text-white shadow-[0_8px_20px_-6px_rgba(59,38,112,0.45)] transition-all duration-200 sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>All Teachers</span>
                    <span class="filter-count rounded-md bg-white/20 px-2 py-0.5 text-[11px] font-semibold text-white">29</span>
                </button>

                <button type="button" data-instructor-filter="physics" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>Physics</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">6</span>
                </button>

                <button type="button" data-instructor-filter="chemistry" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>Chemistry</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">5</span>
                </button>

                <button type="button" data-instructor-filter="math" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>Mathematics</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">6</span>
                </button>

                <button type="button" data-instructor-filter="biology" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>Biology</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">5</span>
                </button>

                <button type="button" data-instructor-filter="ict" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>ICT</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">3</span>
                </button>

                <button type="button" data-instructor-filter="english-bangla" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>English &amp; Bangla</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">4</span>
                </button>
            </div>

            <!-- ==================== UNIFIED INSTRUCTORS GRID ==================== -->
            <div class="mt-8 grid grid-cols-1 gap-6 sm:mt-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Instructor 1 (Physics) -->
                <article data-instructor-category="physics" class="instructor-card-item group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.24)]">
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
                            <a href="#" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full bg-[#ef4444] text-white shadow-[0_6px_16px_-4px_rgba(239,68,68,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#dc2626] hover:shadow-[0_10px_20px_-4px_rgba(239,68,68,0.65)]">
                                <i class="ph-fill ph-youtube-logo text-lg"></i>
                            </a>
                            <a href="#" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full bg-[#2563eb] text-white shadow-[0_6px_16px_-4px_rgba(37,99,235,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#1d4ed8] hover:shadow-[0_10px_20px_-4px_rgba(37,99,235,0.65)]">
                                <i class="ph-fill ph-facebook-logo text-lg"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Instructor 2 (Chemistry) -->
                <article data-instructor-category="chemistry" class="instructor-card-item group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.24)]">
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
                            <a href="#" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full bg-[#ef4444] text-white shadow-[0_6px_16px_-4px_rgba(239,68,68,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#dc2626] hover:shadow-[0_10px_20px_-4px_rgba(239,68,68,0.65)]">
                                <i class="ph-fill ph-youtube-logo text-lg"></i>
                            </a>
                            <a href="#" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full bg-[#2563eb] text-white shadow-[0_6px_16px_-4px_rgba(37,99,235,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#1d4ed8] hover:shadow-[0_10px_20px_-4px_rgba(37,99,235,0.65)]">
                                <i class="ph-fill ph-facebook-logo text-lg"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Instructor 3 (Mathematics) -->
                <article data-instructor-category="math" class="instructor-card-item group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.24)]">
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
                            <a href="#" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full bg-[#ef4444] text-white shadow-[0_6px_16px_-4px_rgba(239,68,68,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#dc2626] hover:shadow-[0_10px_20px_-4px_rgba(239,68,68,0.65)]">
                                <i class="ph-fill ph-youtube-logo text-lg"></i>
                            </a>
                            <a href="#" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full bg-[#2563eb] text-white shadow-[0_6px_16px_-4px_rgba(37,99,235,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#1d4ed8] hover:shadow-[0_10px_20px_-4px_rgba(37,99,235,0.65)]">
                                <i class="ph-fill ph-facebook-logo text-lg"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Instructor 4 (ICT) -->
                <article data-instructor-category="ict" class="instructor-card-item group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.24)]">
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
                            <a href="#" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full bg-[#ef4444] text-white shadow-[0_6px_16px_-4px_rgba(239,68,68,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#dc2626] hover:shadow-[0_10px_20px_-4px_rgba(239,68,68,0.65)]">
                                <i class="ph-fill ph-youtube-logo text-lg"></i>
                            </a>
                            <a href="#" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full bg-[#2563eb] text-white shadow-[0_6px_16px_-4px_rgba(37,99,235,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#1d4ed8] hover:shadow-[0_10px_20px_-4px_rgba(37,99,235,0.65)]">
                                <i class="ph-fill ph-facebook-logo text-lg"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Instructor 5 (Biology) -->
                <article data-instructor-category="biology" class="instructor-card-item group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.24)]">
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
                            <a href="#" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full bg-[#ef4444] text-white shadow-[0_6px_16px_-4px_rgba(239,68,68,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#dc2626] hover:shadow-[0_10px_20px_-4px_rgba(239,68,68,0.65)]">
                                <i class="ph-fill ph-youtube-logo text-lg"></i>
                            </a>
                            <a href="#" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full bg-[#2563eb] text-white shadow-[0_6px_16px_-4px_rgba(37,99,235,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#1d4ed8] hover:shadow-[0_10px_20px_-4px_rgba(37,99,235,0.65)]">
                                <i class="ph-fill ph-facebook-logo text-lg"></i>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Instructor 6 (English & Bangla) -->
                <article data-instructor-category="english-bangla" class="instructor-card-item group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.24)]">
                    <!-- Top Hero-Matched Banner -->
                    <div class="relative h-28 w-full overflow-hidden bg-gradient-to-r from-[#1a1340] via-[#3b2670] to-[#4c328a] transition-all duration-500 group-hover:brightness-110">
                        <div class="pointer-events-none absolute inset-0 opacity-30 [background:radial-gradient(circle_at_20%_30%,#a78bfa_0%,transparent_55%),radial-gradient(circle_at_85%_70%,#e879f9_0%,transparent_50%)]"></div>
                        <div class="pointer-events-none absolute -right-6 -top-6 h-24 w-24 rounded-full border border-white/10"></div>
                        <div class="pointer-events-none absolute -left-4 -bottom-10 h-28 w-28 rounded-full border border-white/10"></div>
                    </div>

                    <!-- Overlapping Larger Avatar -->
                    <div class="relative mx-auto -mt-14 flex justify-center sm:-mt-16">
                        <div class="relative h-28 w-28 rounded-full bg-white p-1 shadow-[0_10px_24px_-6px_rgba(26,19,64,0.32)] ring-4 ring-[#3b2670]/20 transition-all duration-300 group-hover:ring-[#3b2670]/45 group-hover:shadow-[0_14px_28px_-6px_rgba(59,38,112,0.38)] sm:h-32 sm:w-32">
                            <img src="{{ asset('assets/frontend/images/instructor-team.jpg') }}" alt="Redwan Husain" class="h-full w-full rounded-full object-cover">
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col items-center px-6 pb-6 pt-4 text-center">
                        <h3 class="font-display text-lg font-semibold tracking-tight text-slate-900 transition-colors duration-200 group-hover:text-[#3b2670] sm:text-xl">
                            Redwan Husain
                        </h3>

                        <!-- Subject Pill -->
                        <span class="mt-2.5 inline-flex items-center gap-1.5 rounded-full border border-[#3b2670]/15 bg-[#f4f0ff] px-3.5 py-1 text-xs font-semibold text-[#3b2670]">
                            <i data-lucide="book-open" class="h-3.5 w-3.5"></i>
                            English &amp; Bangla
                        </span>

                        <!-- Credentials -->
                        <p class="mt-3.5 text-sm text-slate-600">
                            Senior Language &amp; Admission Mentor
                        </p>
                        <p class="mt-1 text-xs text-slate-500">
                            Department of English, University of Dhaka
                        </p>

                        <!-- Social Media Icons -->
                        <div class="mt-auto flex items-center justify-center gap-3.5 pt-5">
                            <a href="#" aria-label="YouTube" class="grid h-10 w-10 place-items-center rounded-full bg-[#ef4444] text-white shadow-[0_6px_16px_-4px_rgba(239,68,68,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#dc2626] hover:shadow-[0_10px_20px_-4px_rgba(239,68,68,0.65)]">
                                <i class="ph-fill ph-youtube-logo text-lg"></i>
                            </a>
                            <a href="#" aria-label="Facebook" class="grid h-10 w-10 place-items-center rounded-full bg-[#2563eb] text-white shadow-[0_6px_16px_-4px_rgba(37,99,235,0.5)] transition-all duration-200 hover:-translate-y-0.5 hover:bg-[#1d4ed8] hover:shadow-[0_10px_20px_-4px_rgba(37,99,235,0.65)]">
                                <i class="ph-fill ph-facebook-logo text-lg"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterButtons = document.querySelectorAll('[data-instructor-filter]');
            const instructorCards = document.querySelectorAll('.instructor-card-item');

            filterButtons.forEach((btn) => {
                btn.addEventListener('click', () => {
                    const selected = btn.getAttribute('data-instructor-filter');

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

                    instructorCards.forEach((card) => {
                        const category = card.getAttribute('data-instructor-category');
                        const shouldShow = selected === 'all' || category === selected;
                        card.classList.toggle('hidden', !shouldShow);
                        card.classList.toggle('flex', shouldShow);
                    });
                });
            });
        });
    </script>
@endsection

