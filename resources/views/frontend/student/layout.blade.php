@extends('frontend.master')

@section('content')
    <!-- ==================== STUDENT PORTAL LAYOUT ==================== -->
    <section class="relative min-h-screen overflow-hidden bg-soft-gradient pb-16 pt-24 sm:pb-20 sm:pt-28 lg:pb-24 lg:pt-32">
        <!-- Ambient Glows -->
        <div class="pointer-events-none absolute -left-24 top-20 h-72 w-72 rounded-full bg-[#3b2670]/8 blur-[95px]"></div>
        <div class="pointer-events-none absolute -right-24 top-1/3 h-80 w-80 rounded-full bg-primary/8 blur-[100px]"></div>

        <div class="container-lms relative z-10">
            <!-- Student Top Profile Banner -->
            <div class="relative overflow-hidden rounded-2xl border border-[#3b2670]/15 bg-gradient-to-r from-[#1a1340] via-[#2a1c58] to-[#3b2670] p-5 text-white shadow-[0_16px_38px_-14px_rgba(26,19,64,0.4)] sm:p-6 lg:px-8 lg:py-6">
                <div class="pointer-events-none absolute -right-12 -top-12 h-48 w-48 rounded-full bg-[#8b5cf6]/20 blur-3xl"></div>
                <div class="pointer-events-none absolute -bottom-12 left-1/3 h-40 w-40 rounded-full bg-[#e879f9]/12 blur-3xl"></div>

                <div class="relative flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <!-- Student Info -->
                    <div class="flex items-center gap-3.5 sm:gap-4">
                        <div class="relative h-14 w-14 shrink-0 rounded-full bg-white p-0.5 shadow-md ring-2 ring-purple-300/35 sm:h-16 sm:w-16">
                            <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="Tasnim Mahi" class="h-full w-full rounded-full object-cover">
                            <span class="absolute bottom-0.5 right-0.5 h-3.5 w-3.5 rounded-full border-2 border-[#1a1340] bg-emerald-400" title="Online"></span>
                        </div>

                        <div class="min-w-0">
                            <div class="flex flex-wrap items-center gap-2">
                                <h1 class=" truncate font-display text-lg font-bold tracking-tight text-white sm:text-xl">
                                    Tasnim Mahi
                                </h1>
                                <span class="inline-flex items-center rounded-md border border-purple-300/25 bg-white/10 px-2 py-0.5 text-[11px] font-semibold text-purple-200">
                                    ID: #ZA-28041
                                </span>
                            </div>
                            <div class="mt-1 flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-purple-200/85 sm:text-sm">
                                <span class="inline-flex items-center gap-1">
                                    <i data-lucide="graduation-cap" class="h-3.5 w-3.5 text-purple-300"></i>
                                    HSC ’28 Batch (Science)
                                </span>
                                <span class="hidden text-white/25 sm:inline">•</span>
                                <span class="inline-flex items-center gap-1">
                                    <i data-lucide="building-2" class="h-3.5 w-3.5 text-purple-300"></i>
                                    Notre Dame College, Dhaka
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="flex flex-wrap items-center gap-2.5 sm:shrink-0">
                        <a href="{{ route('courses') }}" class="inline-flex items-center gap-1.5 rounded-lg border border-white/20 bg-white/10 px-3.5 py-2 text-xs font-semibold text-white backdrop-blur-sm transition-all hover:bg-white/20 sm:text-sm">
                            <i data-lucide="compass" class="h-4 w-4"></i>
                            <span>Explore Courses</span>
                        </a>
                        <a href="{{ route('student.login') }}" class="inline-flex items-center gap-1.5 rounded-lg border border-rose-400/30 bg-rose-500/15 px-3.5 py-2 text-xs font-semibold text-rose-200 transition-all hover:bg-rose-500/25 hover:text-white sm:text-sm">
                            <i data-lucide="log-out" class="h-4 w-4"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile Navigation Bar (Wraps into Multiple Rows on Mobile & Tablet, No Horizontal Scroll) -->
            <div class="mt-4 flex flex-wrap items-center gap-2 lg:hidden">
                <a href="{{ route('student.dashboard') }}" class="course-filter-pill {{ request()->routeIs('student.dashboard') ? 'is-active' : '' }} inline-flex shrink-0 items-center gap-1.5 rounded-lg border px-3.5 py-2 text-xs font-semibold shadow-sm transition-all">
                    <i data-lucide="layout-dashboard" class="h-3.5 w-3.5"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('student.courses') }}" class="course-filter-pill {{ request()->routeIs('student.courses*') ? 'is-active' : '' }} inline-flex shrink-0 items-center gap-1.5 rounded-lg border px-3.5 py-2 text-xs font-semibold shadow-sm transition-all">
                    <i data-lucide="play-circle" class="h-3.5 w-3.5"></i>
                    <span>My Courses</span>
                    <span class="filter-count rounded bg-slate-100 px-1.5 py-0.5 text-[10px] font-bold text-slate-600">04</span>
                </a>
                <a href="{{ route('student.resources') }}" class="course-filter-pill {{ request()->routeIs('student.resources*') ? 'is-active' : '' }} inline-flex shrink-0 items-center gap-1.5 rounded-lg border px-3.5 py-2 text-xs font-semibold shadow-sm transition-all">
                    <i data-lucide="file-text" class="h-3.5 w-3.5"></i>
                    <span>Notes</span>
                </a>
                <a href="{{ route('student.orders') }}" class="course-filter-pill {{ request()->routeIs('student.orders*') ? 'is-active' : '' }} inline-flex shrink-0 items-center gap-1.5 rounded-lg border px-3.5 py-2 text-xs font-semibold shadow-sm transition-all">
                    <i data-lucide="credit-card" class="h-3.5 w-3.5"></i>
                    <span>Payment History</span>
                </a>
                <a href="{{ route('student.notifications') }}" class="course-filter-pill {{ request()->routeIs('student.notifications*') ? 'is-active' : '' }} inline-flex shrink-0 items-center gap-1.5 rounded-lg border px-3.5 py-2 text-xs font-semibold shadow-sm transition-all">
                    <i data-lucide="bell" class="h-3.5 w-3.5"></i>
                    <span>Notifications</span>
                    <span class="filter-count rounded bg-rose-100 px-1.5 py-0.5 text-[10px] font-bold text-rose-600">03</span>
                </a>
                <a href="{{ route('student.profile') }}" class="course-filter-pill {{ request()->routeIs('student.profile*') ? 'is-active' : '' }} inline-flex shrink-0 items-center gap-1.5 rounded-lg border px-3.5 py-2 text-xs font-semibold shadow-sm transition-all">
                    <i data-lucide="settings" class="h-3.5 w-3.5"></i>
                    <span>Profile</span>
                </a>
            </div>

            <!-- Main Portal Grid (Desktop Sidebar + Content Area) -->
            <div class="mt-5 grid grid-cols-1 gap-6 lg:mt-7 lg:grid-cols-12 lg:gap-7">
                <!-- Desktop Sidebar -->
                <aside class="hidden lg:col-span-3 lg:block">
                    <div class="sticky top-24 overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white p-4 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)]">
                        <div class="px-3 pb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                            Student Menu
                        </div>

                        <nav class="space-y-1" aria-label="Student Dashboard Navigation">
                            <a href="{{ route('student.dashboard') }}" class="flex items-center justify-between rounded-xl px-3.5 py-2.5 text-sm font-semibold transition-all {{ request()->routeIs('student.dashboard') ? 'bg-[#3b2670] text-white shadow-[0_8px_18px_-6px_rgba(59,38,112,0.45)]' : 'text-slate-700 hover:bg-[#f4f0ff] hover:text-[#3b2670]' }}">
                                <span class="flex items-center gap-2.5">
                                    <i data-lucide="layout-dashboard" class="h-4 w-4"></i>
                                    <span>Dashboard</span>
                                </span>
                            </a>

                            <a href="{{ route('student.courses') }}" class="flex items-center justify-between rounded-xl px-3.5 py-2.5 text-sm font-semibold transition-all {{ request()->routeIs('student.courses*') ? 'bg-[#3b2670] text-white shadow-[0_8px_18px_-6px_rgba(59,38,112,0.45)]' : 'text-slate-700 hover:bg-[#f4f0ff] hover:text-[#3b2670]' }}">
                                <span class="flex items-center gap-2.5">
                                    <i data-lucide="play-circle" class="h-4 w-4"></i>
                                    <span>My Courses</span>
                                </span>
                                <span class="rounded-md px-2 py-0.5 text-xs font-bold {{ request()->routeIs('student.courses*') ? 'bg-white/20 text-white' : 'bg-[#f4f0ff] text-[#3b2670]' }}">
                                    04
                                </span>
                            </a>

                            <a href="{{ route('student.resources') }}" class="flex items-center justify-between rounded-xl px-3.5 py-2.5 text-sm font-semibold transition-all {{ request()->routeIs('student.resources*') ? 'bg-[#3b2670] text-white shadow-[0_8px_18px_-6px_rgba(59,38,112,0.45)]' : 'text-slate-700 hover:bg-[#f4f0ff] hover:text-[#3b2670]' }}">
                                <span class="flex items-center gap-2.5">
                                    <i data-lucide="file-text" class="h-4 w-4"></i>
                                    <span>Smart Notes &amp; PDF</span>
                                </span>
                                <span class="rounded-md px-2 py-0.5 text-xs font-bold {{ request()->routeIs('student.resources*') ? 'bg-white/20 text-white' : 'bg-slate-100 text-slate-600' }}">
                                    18
                                </span>
                            </a>

                            <a href="{{ route('student.orders') }}" class="flex items-center justify-between rounded-xl px-3.5 py-2.5 text-sm font-semibold transition-all {{ request()->routeIs('student.orders*') ? 'bg-[#3b2670] text-white shadow-[0_8px_18px_-6px_rgba(59,38,112,0.45)]' : 'text-slate-700 hover:bg-[#f4f0ff] hover:text-[#3b2670]' }}">
                                <span class="flex items-center gap-2.5">
                                    <i data-lucide="credit-card" class="h-4 w-4"></i>
                                    <span>Payment History</span>
                                </span>
                            </a>

                            <a href="{{ route('student.notifications') }}" class="flex items-center justify-between rounded-xl px-3.5 py-2.5 text-sm font-semibold transition-all {{ request()->routeIs('student.notifications*') ? 'bg-[#3b2670] text-white shadow-[0_8px_18px_-6px_rgba(59,38,112,0.45)]' : 'text-slate-700 hover:bg-[#f4f0ff] hover:text-[#3b2670]' }}">
                                <span class="flex items-center gap-2.5">
                                    <i data-lucide="bell" class="h-4 w-4"></i>
                                    <span>Notifications</span>
                                </span>
                                <span class="rounded-md px-2 py-0.5 text-xs font-bold {{ request()->routeIs('student.notifications*') ? 'bg-white/20 text-white' : 'bg-rose-50 text-rose-600' }}">
                                    03
                                </span>
                            </a>

                            <a href="{{ route('student.profile') }}" class="flex items-center justify-between rounded-xl px-3.5 py-2.5 text-sm font-semibold transition-all {{ request()->routeIs('student.profile*') ? 'bg-[#3b2670] text-white shadow-[0_8px_18px_-6px_rgba(59,38,112,0.45)]' : 'text-slate-700 hover:bg-[#f4f0ff] hover:text-[#3b2670]' }}">
                                <span class="flex items-center gap-2.5">
                                    <i data-lucide="settings" class="h-4 w-4"></i>
                                    <span>Profile Settings</span>
                                </span>
                            </a>
                        </nav>

                        <div class="my-3.5 h-px bg-slate-100"></div>

                        <!-- Support Box inside Sidebar -->
                        <div class="rounded-xl border border-[#3b2670]/10 bg-[#f9f7ff] p-3.5">
                            <div class="flex items-center gap-2 text-xs font-bold text-[#3b2670]">
                                <i data-lucide="headphones" class="h-4 w-4"></i>
                                <span>Need Help?</span>
                            </div>
                            <p class="mt-1 text-xs leading-relaxed text-slate-600">
                                Call our student helpline (10 AM – 10 PM) for any batch or class support.
                            </p>
                            <a href="tel:+8801700000000" class="mt-2.5 inline-flex items-center gap-1 text-xs font-bold text-[#3b2670] hover:text-[#7c3aed]">
                                <span>+880 1700-000000</span>
                                <i data-lucide="arrow-up-right" class="h-3.5 w-3.5"></i>
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Main Dynamic Student Page Content -->
                <div class="lg:col-span-9">
                    @yield('student_content')
                </div>
            </div>
        </div>
    </section>
@endsection

