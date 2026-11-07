@extends('frontend.student.layout')

@section('student_content')
    <div class="space-y-6">
        <!-- Top Breadcrumb & Course Header -->
        <div class="flex flex-col justify-between gap-3 rounded-2xl border border-[#3b2670]/12 bg-white p-4 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:flex-row sm:items-center sm:px-6 sm:py-4">
            <div class="min-w-0">
                <div class="flex items-center gap-2 text-xs font-semibold text-[#3b2670]">
                    <a href="{{ route('student.courses') }}" class="inline-flex items-center gap-1 hover:underline">
                        <i data-lucide="arrow-left" class="h-3.5 w-3.5"></i>
                        <span>Back to My Courses</span>
                    </a>
                    <span class="text-slate-300">/</span>
                    <span class="truncate text-slate-500">Physics 1st Paper • Chapter 02: Vector</span>
                </div>
                <h2 class="mt-1 truncate font-display text-base font-bold text-slate-900 sm:text-lg">
                    Lecture 08: 3D Vector Resolution &amp; River-Boat Problem Solving
                </h2>
            </div>

            <div class="flex shrink-0 items-center gap-2">
                <a href="{{ route('student.resources') }}" class="inline-flex items-center gap-1.5 rounded-lg border border-[#3b2670]/20 bg-[#f4f0ff] px-3.5 py-2 text-xs font-semibold text-[#3b2670] transition-colors hover:bg-[#3b2670] hover:text-white">
                    <i data-lucide="download" class="h-3.5 w-3.5"></i>
                    <span>Lecture Sheet</span>
                </a>
                <a href="{{ route('student.exam.room') }}" class="btn-primary px-3.5 py-2 text-xs">
                    <i data-lucide="clipboard-check" class="h-3.5 w-3.5"></i>
                    <span>Lecture Quiz</span>
                </a>
            </div>
        </div>

        <!-- Video Player & Module Playlist Grid -->
        <div class="grid grid-cols-1 gap-6 xl:grid-cols-12">
            <!-- Left: Video Player & Lesson Notes (7 Cols) -->
            <div class="space-y-5 xl:col-span-7">
                <!-- Video Player Box -->
                <div class="overflow-hidden rounded-2xl border border-[#3b2670]/15 bg-[#120c24] shadow-[0_18px_40px_-15px_rgba(18,12,36,0.5)]">
                    <div class="relative aspect-video w-full overflow-hidden bg-slate-950">
                        <img src="{{ asset('assets/frontend/images/featured-hsc-physics.jpg') }}" alt="Lesson Video Player" class="h-full w-full object-cover opacity-65">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#120c24] via-[#120c24]/30 to-transparent"></div>

                        <!-- Center Play Button -->
                        <button type="button" aria-label="Play Video" class="group absolute inset-0 m-auto flex h-16 w-16 items-center justify-center rounded-full bg-[#3b2670]/90 text-white shadow-[0_0_35px_rgba(139,92,246,0.65)] ring-4 ring-white/20 transition-transform duration-300 hover:scale-110 hover:bg-[#7c3aed]">
                            <i data-lucide="play" class="ml-1 h-7 w-7 fill-current"></i>
                        </button>

                        <!-- Bottom Player Controls Bar -->
                        <div class="absolute inset-x-0 bottom-0 p-3.5 sm:p-4">
                            <div class="h-1.5 w-full overflow-hidden rounded-full bg-white/20">
                                <div class="h-full w-2/5 rounded-full bg-[#a78bfa]"></div>
                            </div>
                            <div class="mt-2.5 flex items-center justify-between text-xs font-medium text-white/90">
                                <div class="flex items-center gap-3">
                                    <span>18:42 / 46:15</span>
                                    <span class="rounded bg-white/15 px-1.5 py-0.5 text-[10px] font-bold">1080p HD</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span>1.25x</span>
                                    <i data-lucide="maximize-2" class="h-4 w-4 cursor-pointer"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lesson Meta Bar -->
                    <div class="flex flex-wrap items-center justify-between gap-3 border-t border-white/10 bg-[#1a1233] px-4 py-3 text-xs text-purple-200 sm:px-5">
                        <div class="flex items-center gap-2.5">
                            <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="Niaz Morshed Faysal" class="h-7 w-7 rounded-full object-cover ring-1 ring-purple-300/40">
                            <span>Instructor: <strong class="text-white">Niaz Morshed Faysal</strong></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button" class="inline-flex items-center gap-1 rounded-md bg-emerald-500/20 px-2.5 py-1 text-xs font-semibold text-emerald-300">
                                <i data-lucide="check-circle-2" class="h-3.5 w-3.5"></i>
                                <span>Mark Completed</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Lesson Summary & Discussion Box -->
                <div class="rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)]">
                    <h3 class="font-display text-base font-bold text-slate-900">
                        Key Topics Covered in This Class
                    </h3>
                    <ul class="mt-3 space-y-2 text-xs text-slate-600 sm:text-sm">
                        <li class="flex items-start gap-2">
                            <i data-lucide="check" class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600"></i>
                            <span>Shortest time vs shortest path river-boat crossing derivations &amp; shortcuts.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i data-lucide="check" class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600"></i>
                            <span>3D unit vector components, direction cosines, andrain-umbrella relative velocity.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i data-lucide="check" class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600"></i>
                            <span>Previous 10 years Dhaka Board &amp; BUET admission question solving.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right: Course Module Playlist (5 Cols) -->
            <div class="xl:col-span-5">
                <div class="overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)]">
                    <div class="border-b border-slate-100 bg-[#f9f7ff] px-5 py-4">
                        <div class="flex items-center justify-between">
                            <h3 class="font-display text-base font-bold text-slate-900">
                                Course Content
                            </h3>
                            <span class="rounded-md bg-[#3b2670] px-2.5 py-0.5 text-xs font-semibold text-white">
                                8 / 12 Done
                            </span>
                        </div>
                        <p class="mt-0.5 text-xs text-slate-500">Chapter 02: Vector (12 Lessons)</p>
                    </div>

                    <div class="divide-y divide-slate-100">
                        <!-- Lesson Item 1 (Completed) -->
                        <a href="#" class="flex items-center justify-between gap-3 px-5 py-3.5 transition-colors hover:bg-slate-50">
                            <div class="flex min-w-0 items-center gap-3">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-emerald-50 text-emerald-600">
                                    <i data-lucide="check" class="h-4 w-4"></i>
                                </span>
                                <div class="min-w-0">
                                    <div class="truncate text-xs font-semibold text-slate-800 sm:text-sm">Lec 06: Dot &amp; Cross Product</div>
                                    <div class="text-[11px] text-slate-400">42 mins • Recorded</div>
                                </div>
                            </div>
                            <span class="shrink-0 text-xs font-semibold text-emerald-600">Watched</span>
                        </a>

                        <!-- Lesson Item 2 (Completed) -->
                        <a href="#" class="flex items-center justify-between gap-3 px-5 py-3.5 transition-colors hover:bg-slate-50">
                            <div class="flex min-w-0 items-center gap-3">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-emerald-50 text-emerald-600">
                                    <i data-lucide="check" class="h-4 w-4"></i>
                                </span>
                                <div class="min-w-0">
                                    <div class="truncate text-xs font-semibold text-slate-800 sm:text-sm">Lec 07: Vector Calculus (Grad, Div, Curl)</div>
                                    <div class="text-[11px] text-slate-400">51 mins • Recorded</div>
                                </div>
                            </div>
                            <span class="shrink-0 text-xs font-semibold text-emerald-600">Watched</span>
                        </a>

                        <!-- Lesson Item 3 (Active Playing) -->
                        <a href="#" class="flex items-center justify-between gap-3 bg-[#f4f0ff]/80 px-5 py-3.5">
                            <div class="flex min-w-0 items-center gap-3">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-[#3b2670] text-white">
                                    <i data-lucide="play" class="h-3.5 w-3.5"></i>
                                </span>
                                <div class="min-w-0">
                                    <div class="truncate text-xs font-bold text-[#3b2670] sm:text-sm">Lec 08: River-Boat Problem Solving</div>
                                    <div class="text-[11px] font-medium text-[#7c3aed]">46 mins • Playing Now</div>
                                </div>
                            </div>
                            <span class="shrink-0 rounded bg-[#3b2670] px-2 py-0.5 text-[10px] font-bold text-white">Playing</span>
                        </a>

                        <!-- Lesson Item 4 (Upcoming) -->
                        <a href="#" class="flex items-center justify-between gap-3 px-5 py-3.5 transition-colors hover:bg-slate-50">
                            <div class="flex min-w-0 items-center gap-3">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-slate-100 text-slate-500">
                                    <i data-lucide="lock" class="h-3.5 w-3.5"></i>
                                </span>
                                <div class="min-w-0">
                                    <div class="truncate text-xs font-semibold text-slate-700 sm:text-sm">Lec 09: Rain-Umbrella &amp; Relative Velocity</div>
                                    <div class="text-[11px] text-slate-400">48 mins • Video Class</div>
                                </div>
                            </div>
                            <span class="shrink-0 text-xs text-slate-400">48:00</span>
                        </a>

                        <!-- Lesson Item 5 (Chapter Exam) -->
                        <a href="{{ route('student.exam.room') }}" class="flex items-center justify-between gap-3 px-5 py-3.5 transition-colors hover:bg-slate-50">
                            <div class="flex min-w-0 items-center gap-3">
                                <span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-amber-50 text-amber-600">
                                    <i data-lucide="clipboard-check" class="h-3.5 w-3.5"></i>
                                </span>
                                <div class="min-w-0">
                                    <div class="truncate text-xs font-semibold text-slate-800 sm:text-sm">Chapter 02 Final MCQ Exam</div>
                                    <div class="text-[11px] text-slate-400">50 Marks • 40 Mins</div>
                                </div>
                            </div>
                            <span class="shrink-0 rounded bg-emerald-50 px-2 py-0.5 text-[11px] font-bold text-emerald-600">Start</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

