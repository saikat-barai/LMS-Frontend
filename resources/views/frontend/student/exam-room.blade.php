@extends('frontend.student.layout')

@section('student_content')
    <div class="space-y-6">
        <!-- Sticky Exam Header Bar -->
        <div class="flex flex-col justify-between gap-4 rounded-2xl border border-[#3b2670]/15 bg-white p-4 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] sm:flex-row sm:items-center sm:px-6 sm:py-4">
            <div>
                <div class="flex flex-wrap items-center gap-2">
                    <span class="rounded-md bg-[#3b2670] px-2.5 py-0.5 text-[11px] font-bold text-white">
                        Physics 1st Paper
                    </span>
                    <span class="text-xs font-semibold text-slate-500">50 Marks • Negative Marking: -0.25</span>
                </div>
                <h2 class="mt-1 font-display text-base font-bold text-slate-900 sm:text-lg">
                    Chapter 02: Vector Final MCQ Model Test
                </h2>
            </div>

            <!-- Live Countdown Timer & Submit -->
            <div class="flex flex-wrap items-center gap-3">
                <div class="inline-flex items-center gap-2 rounded-xl border border-rose-200 bg-rose-50 px-3.5 py-2 text-rose-700">
                    <i data-lucide="clock" class="h-4 w-4"></i>
                    <span id="exam-timer" class="font-display text-sm font-bold tracking-wider sm:text-base">38:45</span>
                </div>
                <a href="{{ route('student.exams') }}" class="btn-primary px-4 py-2 text-xs sm:text-sm">
                    <i data-lucide="check-circle" class="h-4 w-4"></i>
                    <span>Submit Exam</span>
                </a>
            </div>
        </div>

        <!-- Questions List -->
        <div class="space-y-4">
            <!-- Question 1 -->
            <div class="rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:p-6">
                <div class="flex items-center justify-between gap-2">
                    <span class="rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-bold text-[#3b2670]">
                        Question 01 of 50
                    </span>
                    <span class="text-xs font-semibold text-slate-400">1 Mark</span>
                </div>

                <p class="mt-3 font-display text-sm font-semibold leading-relaxed text-slate-900 sm:text-base">
                    যদি দুটি সমমানের ভেক্টরের লব্ধির মান যেকোনো একটি ভেক্টরের মানের সমান হয়, তবে ভেক্টরদ্বয়ের মধ্যবর্তী কোণ কত ডিগ্রি?
                </p>

                <div class="mt-4 grid grid-cols-1 gap-2.5 sm:grid-cols-2">
                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-3 text-xs font-medium text-slate-700 transition-all hover:border-[#3b2670]/40 hover:bg-[#f9f7ff] sm:text-sm">
                        <input type="radio" name="q1" class="h-4 w-4 text-[#3b2670] focus:ring-[#3b2670]">
                        <span>A) 60°</span>
                    </label>
                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-[#3b2670] bg-[#f4f0ff] p-3 text-xs font-semibold text-[#3b2670] transition-all sm:text-sm">
                        <input type="radio" name="q1" checked class="h-4 w-4 text-[#3b2670] focus:ring-[#3b2670]">
                        <span>B) 120°</span>
                    </label>
                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-3 text-xs font-medium text-slate-700 transition-all hover:border-[#3b2670]/40 hover:bg-[#f9f7ff] sm:text-sm">
                        <input type="radio" name="q1" class="h-4 w-4 text-[#3b2670] focus:ring-[#3b2670]">
                        <span>C) 90°</span>
                    </label>
                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-3 text-xs font-medium text-slate-700 transition-all hover:border-[#3b2670]/40 hover:bg-[#f9f7ff] sm:text-sm">
                        <input type="radio" name="q1" class="h-4 w-4 text-[#3b2670] focus:ring-[#3b2670]">
                        <span>D) 180°</span>
                    </label>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:p-6">
                <div class="flex items-center justify-between gap-2">
                    <span class="rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-bold text-[#3b2670]">
                        Question 02 of 50
                    </span>
                    <span class="text-xs font-semibold text-slate-400">1 Mark</span>
                </div>

                <p class="mt-3 font-display text-sm font-semibold leading-relaxed text-slate-900 sm:text-base">
                    স্রোতের বেগের দ্বিগুণ বেগে একজন সাঁতারু নদী আড়াআড়িভাবে ন্যূনতম দূরত্বে পার হতে চাইলে তাকে স্রোতের সাথে কত কোণে সাঁতার কাটতে হবে?
                </p>

                <div class="mt-4 grid grid-cols-1 gap-2.5 sm:grid-cols-2">
                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-3 text-xs font-medium text-slate-700 transition-all hover:border-[#3b2670]/40 hover:bg-[#f9f7ff] sm:text-sm">
                        <input type="radio" name="q2" class="h-4 w-4 text-[#3b2670] focus:ring-[#3b2670]">
                        <span>A) 90°</span>
                    </label>
                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-3 text-xs font-medium text-slate-700 transition-all hover:border-[#3b2670]/40 hover:bg-[#f9f7ff] sm:text-sm">
                        <input type="radio" name="q2" class="h-4 w-4 text-[#3b2670] focus:ring-[#3b2670]">
                        <span>B) 150°</span>
                    </label>
                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-[#3b2670] bg-[#f4f0ff] p-3 text-xs font-semibold text-[#3b2670] transition-all sm:text-sm">
                        <input type="radio" name="q2" checked class="h-4 w-4 text-[#3b2670] focus:ring-[#3b2670]">
                        <span>C) 120°</span>
                    </label>
                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-3 text-xs font-medium text-slate-700 transition-all hover:border-[#3b2670]/40 hover:bg-[#f9f7ff] sm:text-sm">
                        <input type="radio" name="q2" class="h-4 w-4 text-[#3b2670] focus:ring-[#3b2670]">
                        <span>D) 135°</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Bottom Submit Bar -->
        <div class="flex items-center justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-4 shadow-sm sm:px-6">
            <span class="text-xs font-semibold text-slate-600 sm:text-sm">Answered: <strong class="text-[#3b2670]">2 / 50</strong> Questions</span>
            <a href="{{ route('student.exams') }}" class="btn-primary px-6 py-2.5 text-xs sm:text-sm">
                <span>Finish &amp; Submit Answer Sheet</span>
                <i data-lucide="arrow-right" class="h-4 w-4"></i>
            </a>
        </div>
    </div>
@endsection

