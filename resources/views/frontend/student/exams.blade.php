@extends('frontend.student.layout')

@section('student_content')
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="flex flex-col justify-between gap-4 rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:flex-row sm:items-center sm:p-6">
            <div>
                <h2 class="font-display text-lg font-bold tracking-tight text-slate-900 sm:text-xl">
                    Exams &amp; Merit Results
                </h2>
                <p class="mt-0.5 text-xs text-slate-500 sm:text-sm">
                    Participate in live MCQ/written exams and view your merit position &amp; solution sheets
                </p>
            </div>
            <div class="flex items-center gap-2.5">
                <span class="inline-flex items-center gap-1.5 rounded-lg border border-emerald-200 bg-emerald-50 px-3 py-1.5 text-xs font-bold text-emerald-700">
                    <i data-lucide="trophy" class="h-4 w-4"></i>
                    <span>Best Rank: #09</span>
                </span>
                <span class="inline-flex items-center gap-1.5 rounded-lg border border-[#3b2670]/15 bg-[#f4f0ff] px-3 py-1.5 text-xs font-bold text-[#3b2670]">
                    <span>Avg: 88.5%</span>
                </span>
            </div>
        </div>

        <!-- Live & Upcoming Exams -->
        <div class="rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:p-6">
            <div class="flex items-center justify-between">
                <h3 class="font-display text-base font-bold text-slate-900 sm:text-lg">
                    Live &amp; Upcoming Exams
                </h3>
                <span class="rounded-md bg-rose-50 px-2.5 py-1 text-xs font-bold text-rose-600">
                    2 Active
                </span>
            </div>

            <div class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-2">
                <!-- Live Exam Card -->
                <div class="flex flex-col justify-between rounded-xl border border-[#3b2670]/20 bg-[#fcfaff] p-4 shadow-sm">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1 rounded-md bg-rose-600 px-2.5 py-0.5 text-[11px] font-bold text-white">
                                <span class="h-1.5 w-1.5 animate-ping rounded-full bg-white"></span>
                                LIVE EXAM
                            </span>
                            <span class="text-xs font-semibold text-slate-500">Ends at 11:59 PM</span>
                        </div>

                        <h4 class="mt-2.5 font-display text-base font-bold text-slate-900">
                            Physics 1st Paper: Vector Chapter Final MCQ
                        </h4>

                        <div class="mt-3 grid grid-cols-3 gap-2 rounded-lg border border-slate-200/80 bg-white p-2.5 text-center">
                            <div>
                                <div class="text-[11px] text-slate-400">Questions</div>
                                <div class="font-display text-xs font-bold text-slate-800 sm:text-sm">50 MCQ</div>
                            </div>
                            <div class="border-x border-slate-100">
                                <div class="text-[11px] text-slate-400">Duration</div>
                                <div class="font-display text-xs font-bold text-slate-800 sm:text-sm">40 Mins</div>
                            </div>
                            <div>
                                <div class="text-[11px] text-slate-400">Negative</div>
                                <div class="font-display text-xs font-bold text-rose-600 sm:text-sm">-0.25</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-1">
                        <a href="{{ route('student.exam.room') }}" class="btn-primary w-full py-2.5 text-xs sm:text-sm">
                            <i data-lucide="play" class="h-4 w-4"></i>
                            <span>Start Exam Now</span>
                        </a>
                    </div>
                </div>

                <!-- Upcoming Exam Card -->
                <div class="flex flex-col justify-between rounded-xl border border-slate-200/80 bg-slate-50/60 p-4">
                    <div>
                        <div class="flex items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1 rounded-md bg-[#f4f0ff] px-2.5 py-0.5 text-[11px] font-bold text-[#3b2670]">
                                UPCOMING
                            </span>
                            <span class="text-xs font-semibold text-slate-500">Tomorrow, 4:00 PM</span>
                        </div>

                        <h4 class="mt-2.5 font-display text-base font-bold text-slate-900">
                            Chemistry 1st Paper: Periodic Table Weekly Test 04
                        </h4>

                        <div class="mt-3 grid grid-cols-3 gap-2 rounded-lg border border-slate-200/80 bg-white p-2.5 text-center">
                            <div>
                                <div class="text-[11px] text-slate-400">Questions</div>
                                <div class="font-display text-xs font-bold text-slate-800 sm:text-sm">30 MCQ</div>
                            </div>
                            <div class="border-x border-slate-100">
                                <div class="text-[11px] text-slate-400">Duration</div>
                                <div class="font-display text-xs font-bold text-slate-800 sm:text-sm">25 Mins</div>
                            </div>
                            <div>
                                <div class="text-[11px] text-slate-400">Negative</div>
                                <div class="font-display text-xs font-bold text-rose-600 sm:text-sm">-0.25</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-1">
                        <button type="button" class="inline-flex w-full items-center justify-center gap-1.5 rounded-lg border border-[#3b2670]/20 bg-white py-2.5 text-xs font-semibold text-[#3b2670] transition-colors hover:bg-[#f4f0ff] sm:text-sm">
                            <i data-lucide="bell" class="h-4 w-4"></i>
                            <span>Syllabus &amp; Routine</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Completed Exam Results History -->
        <div class="rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:p-6">
            <h3 class="font-display text-base font-bold text-slate-900 sm:text-lg">
                Completed Exam Results &amp; Merit List
            </h3>

            <div class="mt-4 overflow-x-auto">
                <table class="w-full min-w-[620px] text-left text-sm">
                    <thead>
                        <tr class="border-b border-slate-200 text-xs font-bold uppercase tracking-wider text-slate-400">
                            <th class="pb-3 pr-4">Exam Title</th>
                            <th class="pb-3 px-3">Date</th>
                            <th class="pb-3 px-3">Marks</th>
                            <th class="pb-3 px-3">Merit Rank</th>
                            <th class="pb-3 pl-3 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr>
                            <td class="py-3.5 pr-4">
                                <div class="font-semibold text-slate-900">ICT Number System &amp; Digital Logic Quiz</div>
                                <div class="text-xs text-slate-500">EBI Basic To Pro 2.0</div>
                            </td>
                            <td class="px-3 py-3.5 text-xs text-slate-500">04 Nov 2026</td>
                            <td class="px-3 py-3.5">
                                <span class="font-display font-bold text-emerald-600">29 / 30</span>
                            </td>
                            <td class="px-3 py-3.5">
                                <span class="inline-flex rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-bold text-[#3b2670]">
                                    #09 / 980
                                </span>
                            </td>
                            <td class="py-3.5 pl-3 text-right">
                                <a href="#" class="inline-flex items-center gap-1 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 hover:border-[#3b2670] hover:text-[#3b2670]">
                                    <span>Solution</span>
                                    <i data-lucide="external-link" class="h-3.5 w-3.5"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3.5 pr-4">
                                <div class="font-semibold text-slate-900">Physics 1st Paper: Weekly Quiz 03</div>
                                <div class="text-xs text-slate-500">PCMB 1st Paper Combo</div>
                            </td>
                            <td class="px-3 py-3.5 text-xs text-slate-500">01 Nov 2026</td>
                            <td class="px-3 py-3.5">
                                <span class="font-display font-bold text-emerald-600">46 / 50</span>
                            </td>
                            <td class="px-3 py-3.5">
                                <span class="inline-flex rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-bold text-[#3b2670]">
                                    #14 / 1,420
                                </span>
                            </td>
                            <td class="py-3.5 pl-3 text-right">
                                <a href="#" class="inline-flex items-center gap-1 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 hover:border-[#3b2670] hover:text-[#3b2670]">
                                    <span>Solution</span>
                                    <i data-lucide="external-link" class="h-3.5 w-3.5"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3.5 pr-4">
                                <div class="font-semibold text-slate-900">Chemistry Qualitative Analysis Test</div>
                                <div class="text-xs text-slate-500">PCMB 1st Paper Combo</div>
                            </td>
                            <td class="px-3 py-3.5 text-xs text-slate-500">28 Oct 2026</td>
                            <td class="px-3 py-3.5">
                                <span class="font-display font-bold text-emerald-600">44 / 50</span>
                            </td>
                            <td class="px-3 py-3.5">
                                <span class="inline-flex rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-bold text-[#3b2670]">
                                    #21 / 1,180
                                </span>
                            </td>
                            <td class="py-3.5 pl-3 text-right">
                                <a href="#" class="inline-flex items-center gap-1 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 hover:border-[#3b2670] hover:text-[#3b2670]">
                                    <span>Solution</span>
                                    <i data-lucide="external-link" class="h-3.5 w-3.5"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

