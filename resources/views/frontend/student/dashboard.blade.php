@extends('frontend.student.layout')

@section('student_content')
    <div class="space-y-6">
        <!-- Live Class Alert Banner -->
        <div class="flex flex-col justify-between gap-4 rounded-2xl border border-[#3b2670]/15 bg-white p-4 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:flex-row sm:items-center sm:p-5">
            <div class="flex items-start gap-3.5 sm:items-center">
                <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-rose-50 text-rose-600 ring-1 ring-rose-200">
                    <i data-lucide="radio" class="h-5 w-5"></i>
                </span>
                <div>
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="inline-flex items-center gap-1 rounded-md bg-rose-600 px-2 py-0.5 text-[11px] font-bold text-white">
                            <span class="h-1.5 w-1.5 animate-ping rounded-full bg-white"></span>
                            LIVE NOW
                        </span>
                        <span class="text-xs font-semibold text-slate-500">Physics 1st Paper • Vector (Lecture 08)</span>
                    </div>
                    <h2 class="mt-1 font-display text-base font-bold text-slate-900 sm:text-lg">
                        3D Vector Resolution &amp; River-Boat Problem Solving
                    </h2>
                    <p class="mt-0.5 text-xs text-slate-500">
                        Instructor: <span class="font-semibold text-slate-700">Niaz Morshed Faysal</span> • Started 15 mins ago
                    </p>
                </div>
            </div>

            <a href="{{ route('student.classroom') }}" class="btn-primary shrink-0 px-4 py-2.5 text-xs sm:text-sm">
                <i data-lucide="video" class="h-4 w-4"></i>
                <span>Join Live Class</span>
            </a>
        </div>

        <!-- 4 KPI Summary Cards: Enrolled Courses, Due Payment, Total Payment, Notifications -->
        <div class="grid grid-cols-2 gap-3.5 sm:gap-4 xl:grid-cols-4">
            <!-- Card 1: Enrolled Courses -->
            <a href="{{ route('student.courses') }}" class="group rounded-2xl border border-[#3b2670]/12 bg-white p-4 shadow-[0_8px_24px_-12px_rgba(26,19,64,0.08)] transition-all hover:border-[#3b2670]/35 sm:p-5">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500">Enrolled Courses</span>
                    <span class="grid h-9 w-9 place-items-center rounded-lg bg-[#f4f0ff] text-[#3b2670]">
                        <i data-lucide="book-open" class="h-4 w-4"></i>
                    </span>
                </div>
                <div class="mt-3 font-display text-2xl font-bold text-slate-900 sm:text-3xl">04</div>
                <div class="mt-1 text-xs font-medium text-emerald-600">Active batches enrolled</div>
            </a>

            <!-- Card 2: Due Payment -->
            <a href="{{ route('student.orders') }}" class="group rounded-2xl border border-[#3b2670]/12 bg-white p-4 shadow-[0_8px_24px_-12px_rgba(26,19,64,0.08)] transition-all hover:border-[#3b2670]/35 sm:p-5">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500">Due Payment</span>
                    <span class="grid h-9 w-9 place-items-center rounded-lg bg-rose-50 text-rose-600">
                        <i data-lucide="alert-circle" class="h-4 w-4"></i>
                    </span>
                </div>
                <div class="mt-3 font-display text-2xl font-bold text-rose-600 sm:text-3xl">৳1,500</div>
                <div class="mt-1 text-xs font-medium text-slate-500">Nov 2026 Monthly Fee</div>
            </a>

            <!-- Card 3: Complete Total Payment -->
            <a href="{{ route('student.orders') }}" class="group rounded-2xl border border-[#3b2670]/12 bg-white p-4 shadow-[0_8px_24px_-12px_rgba(26,19,64,0.08)] transition-all hover:border-[#3b2670]/35 sm:p-5">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500">Total Payment</span>
                    <span class="grid h-9 w-9 place-items-center rounded-lg bg-emerald-50 text-emerald-600">
                        <i data-lucide="wallet" class="h-4 w-4"></i>
                    </span>
                </div>
                <div class="mt-3 font-display text-2xl font-bold text-slate-900 sm:text-3xl">৳18,470</div>
                <div class="mt-1 text-xs font-medium text-emerald-600">Completed payments</div>
            </a>

            <!-- Card 4: Notifications / Alerts -->
            <a href="{{ route('student.notifications') }}" class="group rounded-2xl border border-[#3b2670]/12 bg-white p-4 shadow-[0_8px_24px_-12px_rgba(26,19,64,0.08)] transition-all hover:border-[#3b2670]/35 sm:p-5">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500">Notifications</span>
                    <span class="grid h-9 w-9 place-items-center rounded-lg bg-amber-50 text-amber-600">
                        <i data-lucide="bell-ring" class="h-4 w-4"></i>
                    </span>
                </div>
                <div class="mt-3 font-display text-2xl font-bold text-slate-900 sm:text-3xl">03</div>
                <div class="mt-1 text-xs font-medium text-amber-600">Unread notices &amp; alerts</div>
            </a>
        </div>

        <!-- Continue Learning Section (Clean Course Cards -> Click to Go to Course Details) -->
        <div class="rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:p-6">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <h2 class="font-display text-lg font-bold tracking-tight text-slate-900 sm:text-xl">
                        Continue Learning
                    </h2>
                    <p class="mt-0.5 text-xs text-slate-500 sm:text-sm">
                        Select any of your enrolled courses below to view classes and study materials
                    </p>
                </div>
                <a href="{{ route('student.courses') }}" class="inline-flex shrink-0 items-center gap-1 text-xs font-semibold text-[#3b2670] hover:text-[#7c3aed] sm:text-sm">
                    <span>All Courses</span>
                    <i data-lucide="arrow-right" class="h-4 w-4"></i>
                </a>
            </div>

            <div class="mt-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                <!-- Enrolled Course 1 -->
                <a href="{{ route('student.classroom') }}" class="group flex items-center justify-between gap-4 rounded-xl border border-slate-200/80 bg-[#fcfbff] p-4 transition-all hover:border-[#3b2670]/40 hover:bg-white hover:shadow-sm">
                    <div class="flex min-w-0 items-center gap-3.5">
                        <img src="{{ asset('assets/frontend/images/hero_banner_1.jpg') }}" alt="PCMB 1st Paper Combo" class="h-16 w-24 shrink-0 rounded-lg object-cover sm:h-18 sm:w-28">
                        <div class="min-w-0">
                            <span class="inline-flex rounded bg-[#f4f0ff] px-2 py-0.5 text-[11px] font-semibold text-[#3b2670]">
                                HSC ’28 Combo
                            </span>
                            <h3 class="mt-1 truncate font-display text-sm font-bold text-slate-900 group-hover:text-[#3b2670] sm:text-base">
                                PCMB 1st Paper Combo Course HSC-28
                            </h3>
                            <p class="mt-0.5 text-xs text-slate-500">Physics, Chemistry, Math &amp; Biology</p>
                        </div>
                    </div>

                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-lg bg-[#f4f0ff] text-[#3b2670] transition-colors group-hover:bg-[#3b2670] group-hover:text-white">
                        <i data-lucide="chevron-right" class="h-4 w-4"></i>
                    </span>
                </a>

                <!-- Enrolled Course 2 -->
                <a href="{{ route('student.classroom') }}" class="group flex items-center justify-between gap-4 rounded-xl border border-slate-200/80 bg-[#fcfbff] p-4 transition-all hover:border-[#3b2670]/40 hover:bg-white hover:shadow-sm">
                    <div class="flex min-w-0 items-center gap-3.5">
                        <img src="{{ asset('assets/frontend/images/hero_banner_2.jpg') }}" alt="EBI Basic To Pro" class="h-16 w-24 shrink-0 rounded-lg object-cover sm:h-18 sm:w-28">
                        <div class="min-w-0">
                            <span class="inline-flex rounded bg-[#f4f0ff] px-2 py-0.5 text-[11px] font-semibold text-[#3b2670]">
                                HSC ’28 Combo
                            </span>
                            <h3 class="mt-1 truncate font-display text-sm font-bold text-slate-900 group-hover:text-[#3b2670] sm:text-base">
                                EBI Basic To Pro 2.0 for HSC-28
                            </h3>
                            <p class="mt-0.5 text-xs text-slate-500">English, Bangla &amp; ICT Complete Batch</p>
                        </div>
                    </div>

                    <span class="grid h-9 w-9 shrink-0 place-items-center rounded-lg bg-[#f4f0ff] text-[#3b2670] transition-colors group-hover:bg-[#3b2670] group-hover:text-white">
                        <i data-lucide="chevron-right" class="h-4 w-4"></i>
                    </span>
                </a>
            </div>
        </div>

        <!-- Bottom 2-Column Section: Upcoming Schedule & Recent Notifications -->
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Upcoming Schedule -->
            <div class="rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:p-6">
                <div class="flex items-center justify-between">
                    <h3 class="font-display text-base font-bold text-slate-900 sm:text-lg">
                        Upcoming Schedule
                    </h3>
                    <span class="rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                        This Week
                    </span>
                </div>

                <div class="mt-4 space-y-3">
                    <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3.5">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 flex-col items-center justify-center rounded-lg bg-[#3b2670] text-white">
                                <span class="text-[10px] font-semibold uppercase leading-none text-purple-200">Today</span>
                                <span class="mt-0.5 font-display text-xs font-bold leading-none">8:30P</span>
                            </div>
                            <div class="min-w-0">
                                <h4 class="truncate text-sm font-semibold text-slate-900">Chemistry: Periodic Table Lec-05</h4>
                                <p class="text-xs text-slate-500">Dr. Rafiul Alam • Live Class</p>
                            </div>
                        </div>
                        <span class="shrink-0 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                            8:30 PM
                        </span>
                    </div>

                    <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3.5">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 flex-col items-center justify-center rounded-lg bg-[#f4f0ff] text-[#3b2670]">
                                <span class="text-[10px] font-semibold uppercase leading-none">Sun</span>
                                <span class="mt-0.5 font-display text-xs font-bold leading-none">4:00P</span>
                            </div>
                            <div class="min-w-0">
                                <h4 class="truncate text-sm font-semibold text-slate-900">ICT: Number System &amp; Logic Gates</h4>
                                <p class="text-xs text-slate-500">Tanvir Ahmed • Live Class</p>
                            </div>
                        </div>
                        <span class="shrink-0 rounded-md bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-600">
                            4:00 PM
                        </span>
                    </div>

                    <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3.5">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 flex-col items-center justify-center rounded-lg bg-[#f4f0ff] text-[#3b2670]">
                                <span class="text-[10px] font-semibold uppercase leading-none">Mon</span>
                                <span class="mt-0.5 font-display text-xs font-bold leading-none">7:30P</span>
                            </div>
                            <div class="min-w-0">
                                <h4 class="truncate text-sm font-semibold text-slate-900">Higher Math: Matrix &amp; Determinant</h4>
                                <p class="text-xs text-slate-500">Fahad Hossain Shovon • Live Class</p>
                            </div>
                        </div>
                        <span class="shrink-0 rounded-md bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-600">
                            7:30 PM
                        </span>
                    </div>
                </div>
            </div>

            <!-- Recent Notifications & Alerts -->
            <div class="rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:p-6">
                <div class="flex items-center justify-between">
                    <h3 class="font-display text-base font-bold text-slate-900 sm:text-lg">
                        Notifications &amp; Alerts
                    </h3>
                    <a href="{{ route('student.notifications') }}" class="text-xs font-semibold text-[#3b2670] hover:text-[#7c3aed]">
                        View All →
                    </a>
                </div>

                <div class="mt-4 space-y-3">
                    <div class="flex items-start gap-3 rounded-xl border border-rose-100 bg-rose-50/50 p-3.5">
                        <span class="mt-0.5 grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-rose-100 text-rose-600">
                            <i data-lucide="alert-circle" class="h-4 w-4"></i>
                        </span>
                        <div class="min-w-0 flex-1">
                            <div class="flex items-center justify-between gap-2">
                                <h4 class="truncate text-sm font-semibold text-slate-900">November 2026 Tuition Fee Due</h4>
                                <span class="shrink-0 text-[11px] font-medium text-rose-600">Today</span>
                            </div>
                            <p class="mt-0.5 text-xs text-slate-600">Your monthly installment of ৳1,500 for HSC ’28 Batch is due by 10 Nov.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3.5">
                        <span class="mt-0.5 grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-[#f4f0ff] text-[#3b2670]">
                            <i data-lucide="file-text" class="h-4 w-4"></i>
                        </span>
                        <div class="min-w-0 flex-1">
                            <div class="flex items-center justify-between gap-2">
                                <h4 class="truncate text-sm font-semibold text-slate-900">New Lecture Sheet Uploaded</h4>
                                <span class="shrink-0 text-[11px] text-slate-400">2h ago</span>
                            </div>
                            <p class="mt-0.5 text-xs text-slate-500">Physics 1st Paper: Chapter 02 Vector Smart Note PDF is now available.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3.5">
                        <span class="mt-0.5 grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-emerald-50 text-emerald-600">
                            <i data-lucide="calendar-clock" class="h-4 w-4"></i>
                        </span>
                        <div class="min-w-0 flex-1">
                            <div class="flex items-center justify-between gap-2">
                                <h4 class="truncate text-sm font-semibold text-slate-900">Friday Extra Solve Class Notice</h4>
                                <span class="shrink-0 text-[11px] text-slate-400">Yesterday</span>
                            </div>
                            <p class="mt-0.5 text-xs text-slate-500">Special problem-solving session scheduled this Friday at 10:00 AM.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
