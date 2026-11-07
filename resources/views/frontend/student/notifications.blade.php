@extends('frontend.student.layout')

@section('student_content')
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="flex flex-col justify-between gap-4 rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:flex-row sm:items-center sm:p-6">
            <div>
                <h2 class="font-display text-lg font-bold tracking-tight text-slate-900 sm:text-xl">
                    Notifications &amp; Notices
                </h2>
                <p class="mt-0.5 text-xs text-slate-500 sm:text-sm">
                    Stay updated with class schedules, new lecture notes, payment reminders, and batch announcements
                </p>
            </div>

            <div class="inline-flex w-fit items-center gap-2 rounded-lg border border-rose-200 bg-rose-50 px-3.5 py-2 text-xs font-bold text-rose-600">
                <i data-lucide="bell-ring" class="h-4 w-4"></i>
                <span>03 Unread Notifications</span>
            </div>
        </div>

        <!-- Notifications List -->
        <div class="space-y-3.5">
            <!-- Notification 1 (Unread - Payment Alert) -->
            <div class="flex flex-col justify-between gap-4 rounded-2xl border border-rose-200/80 bg-white p-4 shadow-[0_8px_24px_-12px_rgba(26,19,64,0.08)] sm:flex-row sm:items-center sm:p-5">
                <div class="flex items-start gap-3.5">
                    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-rose-50 text-rose-600 ring-1 ring-rose-200">
                        <i data-lucide="alert-circle" class="h-5 w-5"></i>
                    </span>
                    <div class="min-w-0">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="rounded bg-rose-100 px-2 py-0.5 text-[11px] font-bold text-rose-700">Payment Alert</span>
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-rose-600">
                                <span class="h-1.5 w-1.5 rounded-full bg-rose-600"></span>
                                Unread
                            </span>
                            <span class="text-xs text-slate-400">• Today, 10:30 AM</span>
                        </div>
                        <h3 class="mt-1 font-display text-sm font-bold text-slate-900 sm:text-base">
                            November 2026 Monthly Tuition Fee Reminder (৳1,500 Due)
                        </h3>
                        <p class="mt-0.5 text-xs leading-relaxed text-slate-600 sm:text-sm">
                            Your November 2026 monthly tuition fee for <strong>HSC Physics 1st Paper Master Batch</strong> is due by 10 November 2026. You can pay via Cash at the office counter or online.
                        </p>
                    </div>
                </div>

                <a href="{{ route('student.orders.details') }}" class="inline-flex shrink-0 items-center justify-center gap-1.5 rounded-lg border border-rose-200 bg-rose-50 px-3.5 py-2 text-xs font-semibold text-rose-700 transition-colors hover:bg-rose-600 hover:text-white">
                    <span>View Invoice</span>
                    <i data-lucide="arrow-right" class="h-3.5 w-3.5"></i>
                </a>
            </div>

            <!-- Notification 2 (Unread - Study Notes) -->
            <div class="flex flex-col justify-between gap-4 rounded-2xl border border-[#3b2670]/25 bg-white p-4 shadow-[0_8px_24px_-12px_rgba(26,19,64,0.08)] sm:flex-row sm:items-center sm:p-5">
                <div class="flex items-start gap-3.5">
                    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670] ring-1 ring-[#3b2670]/15">
                        <i data-lucide="file-text" class="h-5 w-5"></i>
                    </span>
                    <div class="min-w-0">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="rounded bg-[#f4f0ff] px-2 py-0.5 text-[11px] font-bold text-[#3b2670]">Lecture Note</span>
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-[#3b2670]">
                                <span class="h-1.5 w-1.5 rounded-full bg-[#3b2670]"></span>
                                Unread
                            </span>
                            <span class="text-xs text-slate-400">• 2 hours ago</span>
                        </div>
                        <h3 class="mt-1 font-display text-sm font-bold text-slate-900 sm:text-base">
                            New Smart Note Uploaded: Chapter 02 Vector Complete Formula &amp; CQ Sheet
                        </h3>
                        <p class="mt-0.5 text-xs leading-relaxed text-slate-600 sm:text-sm">
                            Instructor Niaz Morshed Faysal has uploaded the annotated PDF slide and practice sheet for Vector Lecture 08.
                        </p>
                    </div>
                </div>

                <a href="{{ route('student.resources') }}" class="inline-flex shrink-0 items-center justify-center gap-1.5 rounded-lg border border-[#3b2670]/20 bg-[#f4f0ff] px-3.5 py-2 text-xs font-semibold text-[#3b2670] transition-colors hover:bg-[#3b2670] hover:text-white">
                    <span>View Notes</span>
                    <i data-lucide="arrow-right" class="h-3.5 w-3.5"></i>
                </a>
            </div>

            <!-- Notification 3 (Unread - Class Schedule) -->
            <div class="flex flex-col justify-between gap-4 rounded-2xl border border-[#3b2670]/25 bg-white p-4 shadow-[0_8px_24px_-12px_rgba(26,19,64,0.08)] sm:flex-row sm:items-center sm:p-5">
                <div class="flex items-start gap-3.5">
                    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-emerald-50 text-emerald-600 ring-1 ring-emerald-200">
                        <i data-lucide="calendar-clock" class="h-5 w-5"></i>
                    </span>
                    <div class="min-w-0">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="rounded bg-emerald-50 px-2 py-0.5 text-[11px] font-bold text-emerald-700">Class Notice</span>
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-600">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-600"></span>
                                Unread
                            </span>
                            <span class="text-xs text-slate-400">• Yesterday, 6:15 PM</span>
                        </div>
                        <h3 class="mt-1 font-display text-sm font-bold text-slate-900 sm:text-base">
                            Special Friday Problem-Solving Class Scheduled at 10:00 AM
                        </h3>
                        <p class="mt-0.5 text-xs leading-relaxed text-slate-600 sm:text-sm">
                            An extra live Q&amp;A and board question solve class for PCMB 1st Paper Combo will be held this Friday morning.
                        </p>
                    </div>
                </div>

                <a href="{{ route('student.classroom') }}" class="inline-flex shrink-0 items-center justify-center gap-1.5 rounded-lg border border-slate-200 bg-white px-3.5 py-2 text-xs font-semibold text-slate-700 transition-colors hover:border-[#3b2670] hover:text-[#3b2670]">
                    <span>Course Room</span>
                    <i data-lucide="arrow-right" class="h-3.5 w-3.5"></i>
                </a>
            </div>

            <!-- Notification 4 (Read - Payment Confirmation) -->
            <div class="flex flex-col justify-between gap-4 rounded-2xl border border-[#3b2670]/12 bg-white p-4 shadow-[0_8px_24px_-12px_rgba(26,19,64,0.06)] sm:flex-row sm:items-center sm:p-5">
                <div class="flex items-start gap-3.5">
                    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-slate-100 text-slate-600">
                        <i data-lucide="check-circle-2" class="h-5 w-5"></i>
                    </span>
                    <div class="min-w-0">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="rounded bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">Payment Received</span>
                            <span class="text-xs text-slate-400">• 12 Oct 2026</span>
                        </div>
                        <h3 class="mt-1 font-display text-sm font-bold text-slate-800 sm:text-base">
                            Cash Payment Confirmed for Sep 2026 – Oct 2026 (৳3,000)
                        </h3>
                        <p class="mt-0.5 text-xs leading-relaxed text-slate-500 sm:text-sm">
                            Your cash payment of ৳3,000 for Invoice #INV-2026-841 has been recorded by the Accounts Desk.
                        </p>
                    </div>
                </div>

                <a href="{{ route('student.orders.details') }}" class="inline-flex shrink-0 items-center justify-center gap-1.5 rounded-lg border border-slate-200 bg-white px-3.5 py-2 text-xs font-semibold text-slate-600 transition-colors hover:border-[#3b2670] hover:text-[#3b2670]">
                    <span>Receipt</span>
                </a>
            </div>
        </div>
    </div>
@endsection

