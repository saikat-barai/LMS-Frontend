@extends('frontend.student.layout')

@section('student_content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col justify-between gap-4 rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:flex-row sm:items-center sm:p-6">
        <div>
            <h2 class="font-display text-lg font-bold tracking-tight text-slate-900 sm:text-xl">
                My Enrolled Courses
            </h2>
            <p class="mt-0.5 text-xs text-slate-500 sm:text-sm">
                All your enrolled courses, classes, and attached lecture notes in one place
            </p>
        </div>

        <div class="inline-flex w-fit items-center gap-2 rounded-lg border border-[#3b2670]/15 bg-[#f4f0ff] px-3.5 py-2 text-xs font-bold text-[#3b2670]">
            <i data-lucide="book-open" class="h-4 w-4"></i>
            <span>04 Enrolled Courses</span>
        </div>
    </div>

    <!-- Enrolled Courses Grid (Clean Listing + Notes Button) -->
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
        <!-- Enrolled Course 1 -->
        <article class="group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-0.5 hover:border-[#3b2670]/35">
            <a href="{{ route('student.classroom') }}" class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('assets/frontend/images/hero_banner_1.jpg') }}" alt="PCMB 1st Paper Combo Course HSC-28" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                <span class="absolute left-3 top-3 rounded-md bg-[#3b2670] px-2.5 py-1 text-xs font-semibold text-white shadow-sm">
                    HSC ’28 Combo
                </span>
            </a>

            <div class="flex flex-1 flex-col p-5">
                <a href="{{ route('student.classroom') }}">
                    <h3 class="font-display text-base font-bold leading-snug text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                        PCMB 1st Paper Combo Course HSC-28
                    </h3>
                </a>

                <p class="mt-1.5 text-xs text-slate-500 sm:text-sm">
                    Physics, Chemistry, Higher Math &amp; Biology 1st Paper
                </p>

                <div class="mt-3 flex flex-wrap items-center gap-3 text-xs font-medium text-slate-600">
                    <span class="inline-flex items-center gap-1.5 rounded-md bg-slate-100 px-2.5 py-1">
                        <i data-lucide="calendar" class="h-3.5 w-3.5 text-[#3b2670]"></i>
                        Sun, Tue, Thu • 8:30 PM
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-[#3b2670]">
                        <i data-lucide="file-text" class="h-3.5 w-3.5"></i>
                        18 Lecture Notes
                    </span>
                </div>

                <div class="mt-auto flex items-center gap-2.5 pt-5">
                    <a href="{{ route('student.classroom') }}" class="btn-primary flex-1 py-2.5 text-xs sm:text-sm">
                        <i data-lucide="book-open" class="h-4 w-4"></i>
                        <span>Course Details</span>
                    </a>
                    <a href="{{ route('student.resources') }}" class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-[#3b2670]/20 bg-[#f4f0ff] px-4 py-2.5 text-xs font-semibold text-[#3b2670] transition-colors hover:bg-[#3b2670] hover:text-white sm:text-sm">
                        <i data-lucide="file-text" class="h-4 w-4"></i>
                        <span>Notes</span>
                    </a>
                </div>
            </div>
        </article>

        <!-- Enrolled Course 2 -->
        <article class="group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-0.5 hover:border-[#3b2670]/35">
            <a href="{{ route('student.classroom') }}" class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('assets/frontend/images/hero_banner_2.jpg') }}" alt="EBI Basic To Pro 2.0 for HSC-28" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                <span class="absolute left-3 top-3 rounded-md bg-[#3b2670] px-2.5 py-1 text-xs font-semibold text-white shadow-sm">
                    HSC ’28 Combo
                </span>
            </a>

            <div class="flex flex-1 flex-col p-5">
                <a href="{{ route('student.classroom') }}">
                    <h3 class="font-display text-base font-bold leading-snug text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                        EBI Basic To Pro 2.0 for HSC-28 (English, Bangla, ICT)
                    </h3>
                </a>

                <p class="mt-1.5 text-xs text-slate-500 sm:text-sm">
                    English 1st &amp; 2nd, Bangla 1st &amp; 2nd, and ICT Complete
                </p>

                <div class="mt-3 flex flex-wrap items-center gap-3 text-xs font-medium text-slate-600">
                    <span class="inline-flex items-center gap-1.5 rounded-md bg-slate-100 px-2.5 py-1">
                        <i data-lucide="calendar" class="h-3.5 w-3.5 text-[#3b2670]"></i>
                        Sat, Mon, Wed • 7:30 PM
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-[#3b2670]">
                        <i data-lucide="file-text" class="h-3.5 w-3.5"></i>
                        14 Lecture Notes
                    </span>
                </div>

                <div class="mt-auto flex items-center gap-2.5 pt-5">
                    <a href="{{ route('student.classroom') }}" class="btn-primary flex-1 py-2.5 text-xs sm:text-sm">
                        <i data-lucide="book-open" class="h-4 w-4"></i>
                        <span>Course Details</span>
                    </a>
                    <a href="{{ route('student.resources') }}" class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-[#3b2670]/20 bg-[#f4f0ff] px-4 py-2.5 text-xs font-semibold text-[#3b2670] transition-colors hover:bg-[#3b2670] hover:text-white sm:text-sm">
                        <i data-lucide="file-text" class="h-4 w-4"></i>
                        <span>Notes</span>
                    </a>
                </div>
            </div>
        </article>

        <!-- Enrolled Course 3 -->
        <article class="group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-0.5 hover:border-[#3b2670]/35">
            <a href="{{ route('student.classroom') }}" class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('assets/frontend/images/featured-hsc-physics.jpg') }}" alt="HSC Physics 1st Paper Master Class" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                <span class="absolute left-3 top-3 rounded-md bg-[#3b2670] px-2.5 py-1 text-xs font-semibold text-white shadow-sm">
                    Academic
                </span>
            </a>

            <div class="flex flex-1 flex-col p-5">
                <a href="{{ route('student.classroom') }}">
                    <h3 class="font-display text-base font-bold leading-snug text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                        HSC Physics 1st Paper Complete Master Batch
                    </h3>
                </a>

                <p class="mt-1.5 text-xs text-slate-500 sm:text-sm">
                    Instructor: Niaz Morshed Faysal • Concept &amp; CQ/MCQ Solve
                </p>

                <div class="mt-3 flex flex-wrap items-center gap-3 text-xs font-medium text-slate-600">
                    <span class="inline-flex items-center gap-1.5 rounded-md bg-slate-100 px-2.5 py-1">
                        <i data-lucide="calendar" class="h-3.5 w-3.5 text-[#3b2670]"></i>
                        Fri &amp; Sat • 4:00 PM
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-[#3b2670]">
                        <i data-lucide="file-text" class="h-3.5 w-3.5"></i>
                        10 Lecture Notes
                    </span>
                </div>

                <div class="mt-auto flex items-center gap-2.5 pt-5">
                    <a href="{{ route('student.classroom') }}" class="btn-primary flex-1 py-2.5 text-xs sm:text-sm">
                        <i data-lucide="book-open" class="h-4 w-4"></i>
                        <span>Course Details</span>
                    </a>
                    <a href="{{ route('student.resources') }}" class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-[#3b2670]/20 bg-[#f4f0ff] px-4 py-2.5 text-xs font-semibold text-[#3b2670] transition-colors hover:bg-[#3b2670] hover:text-white sm:text-sm">
                        <i data-lucide="file-text" class="h-4 w-4"></i>
                        <span>Notes</span>
                    </a>
                </div>
            </div>
        </article>

        <!-- Enrolled Course 4 -->
        <article class="group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.09)] transition-all duration-300 hover:-translate-y-0.5 hover:border-[#3b2670]/35">
            <a href="{{ route('student.classroom') }}" class="relative aspect-[16/9] w-full overflow-hidden bg-slate-100">
                <img src="{{ asset('assets/frontend/images/featured-ssc.jpg') }}" alt="HSC Science Foundation Batch" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                <span class="absolute left-3 top-3 rounded-md bg-[#3b2670] px-2.5 py-1 text-xs font-semibold text-white shadow-sm">
                    Foundation
                </span>
            </a>

            <div class="flex flex-1 flex-col p-5">
                <a href="{{ route('student.classroom') }}">
                    <h3 class="font-display text-base font-bold leading-snug text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                        HSC Science Foundation &amp; Calculator Hacks Batch
                    </h3>
                </a>

                <p class="mt-1.5 text-xs text-slate-500 sm:text-sm">
                    Instructor: Fahad Hossain Shovon • Math &amp; Physics Tricks
                </p>

                <div class="mt-3 flex flex-wrap items-center gap-3 text-xs font-medium text-slate-600">
                    <span class="inline-flex items-center gap-1.5 rounded-md bg-slate-100 px-2.5 py-1">
                        <i data-lucide="calendar" class="h-3.5 w-3.5 text-[#3b2670]"></i>
                        Recorded &amp; Live Solve
                    </span>
                    <span class="inline-flex items-center gap-1.5 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-[#3b2670]">
                        <i data-lucide="file-text" class="h-3.5 w-3.5"></i>
                        08 Lecture Notes
                    </span>
                </div>

                <div class="mt-auto flex items-center gap-2.5 pt-5">
                    <a href="{{ route('student.classroom') }}" class="btn-primary flex-1 py-2.5 text-xs sm:text-sm">
                        <i data-lucide="book-open" class="h-4 w-4"></i>
                        <span>Course Details</span>
                    </a>
                    <a href="{{ route('student.resources') }}" class="inline-flex items-center justify-center gap-1.5 rounded-lg border border-[#3b2670]/20 bg-[#f4f0ff] px-4 py-2.5 text-xs font-semibold text-[#3b2670] transition-colors hover:bg-[#3b2670] hover:text-white sm:text-sm">
                        <i data-lucide="file-text" class="h-4 w-4"></i>
                        <span>Notes</span>
                    </a>
                </div>
            </div>
        </article>
    </div>
</div>
@endsection