@extends('frontend.student.layout')

@section('student_content')
<div class="space-y-6">
    <!-- Page Header & Summary Badges -->
    <div class="flex flex-col justify-between gap-4 rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:flex-row sm:items-center sm:p-6">
        <div>
            <h2 class="font-display text-lg font-bold tracking-tight text-slate-900 sm:text-xl">
                Payment History
            </h2>
            <p class="mt-0.5 text-xs text-slate-500 sm:text-sm">
                Track your monthly tuition payments, course fees, cash/online receipts, and due balances
            </p>
        </div>

        <div class="flex flex-wrap items-center gap-2.5">
            <div class="inline-flex items-center gap-1.5 rounded-lg border border-emerald-200 bg-emerald-50 px-3.5 py-2 text-xs font-bold text-emerald-700">
                <i data-lucide="check-circle-2" class="h-4 w-4"></i>
                <span>Total Paid: ৳18,470</span>
            </div>
            <div class="inline-flex items-center gap-1.5 rounded-lg border border-rose-200 bg-rose-50 px-3.5 py-2 text-xs font-bold text-rose-600">
                <i data-lucide="alert-circle" class="h-4 w-4"></i>
                <span>Due: ৳1,500</span>
            </div>
        </div>
    </div>

    <!-- Payment History Table -->
    <div class="rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:p-6">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[740px] text-left text-sm">
                <thead>
                    <tr class="border-b border-slate-200 text-xs font-bold uppercase tracking-wider text-slate-400">
                        <th class="pb-3 pr-4">Invoice &amp; Date</th>
                        <th class="px-3 pb-3">Course / Batch</th>
                        <th class="px-3 pb-3">Payment Month</th>
                        <th class="px-3 pb-3">Method</th>
                        <th class="px-3 pb-3">Amount</th>
                        <th class="px-3 pb-3">Status</th>
                        <th class="pb-3 pl-3 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <!-- Row 1: Due Payment -->
                    <tr class="bg-rose-50/25">
                        <td class="py-4 pr-4">
                            <div class="font-display text-xs font-bold text-slate-900 sm:text-sm">#INV-2026-905</div>
                            <div class="text-xs text-slate-400">05 Nov 2026</div>
                        </td>
                        <td class="px-3 py-4">
                            <div class="font-semibold text-slate-900">HSC Physics 1st Paper Master Batch</div>
                            <div class="text-xs text-slate-500">HSC ’28 Academic Batch</div>
                        </td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-700">
                                <i data-lucide="calendar" class="h-3.5 w-3.5 text-[#3b2670]"></i>
                                November 2026
                            </span>
                        </td>
                        <td class="px-3 py-4">
                            <span class="inline-flex rounded-md border border-slate-200 bg-white px-2.5 py-0.5 text-xs font-semibold text-slate-600">
                                Cash / Online
                            </span>
                        </td>
                        <td class="px-3 py-4 font-display font-bold text-rose-600">৳1,500</td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md bg-rose-50 px-2.5 py-1 text-xs font-bold text-rose-600 ring-1 ring-rose-200/70">
                                <span class="h-1.5 w-1.5 rounded-full bg-rose-500"></span>
                                Due
                            </span>
                        </td>
                        <td class="py-4 pl-3 text-right">
                            <a href="{{ route('student.orders.details') }}" class="inline-flex items-center gap-1.5 rounded-lg border border-[#3b2670]/20 bg-[#f4f0ff] px-3 py-1.5 text-xs font-semibold text-[#3b2670] transition-colors hover:bg-[#3b2670] hover:text-white">
                                <i data-lucide="eye" class="h-3.5 w-3.5"></i>
                                <span>Details</span>
                            </a>
                        </td>
                    </tr>

                    <!-- Row 2: Cash Payment (Multi-Month) -->
                    <tr>
                        <td class="py-4 pr-4">
                            <div class="font-display text-xs font-bold text-slate-900 sm:text-sm">#INV-2026-841</div>
                            <div class="text-xs text-slate-400">12 Oct 2026</div>
                        </td>
                        <td class="px-3 py-4">
                            <div class="font-semibold text-slate-900">HSC Physics 1st Paper Master Batch</div>
                            <div class="text-xs text-slate-500">HSC ’28 Academic Batch</div>
                        </td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                                <i data-lucide="calendar-range" class="h-3.5 w-3.5"></i>
                                Sep 2026 – Oct 2026
                            </span>
                        </td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md border border-emerald-200 bg-emerald-50 px-2.5 py-0.5 text-xs font-semibold text-emerald-700">
                                <i data-lucide="banknote" class="h-3.5 w-3.5"></i>
                                Cash
                            </span>
                        </td>
                        <td class="px-3 py-4 font-display font-bold text-slate-900">৳3,000</td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                Paid
                            </span>
                        </td>
                        <td class="py-4 pl-3 text-right">
                            <a href="{{ route('student.orders.details') }}" class="inline-flex items-center gap-1.5 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 transition-colors hover:border-[#3b2670] hover:text-[#3b2670]">
                                <i data-lucide="eye" class="h-3.5 w-3.5"></i>
                                <span>Details</span>
                            </a>
                        </td>
                    </tr>

                    <!-- Row 3: bKash Payment -->
                    <tr>
                        <td class="py-4 pr-4">
                            <div class="font-display text-xs font-bold text-slate-900 sm:text-sm">#INV-2026-719</div>
                            <div class="text-xs text-slate-400">25 Sep 2026</div>
                        </td>
                        <td class="px-3 py-4">
                            <div class="font-semibold text-slate-900">PCMB 1st Paper Combo Course HSC-28</div>
                            <div class="text-xs text-slate-500">4 Courses Included</div>
                        </td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-700">
                                <i data-lucide="calendar" class="h-3.5 w-3.5 text-[#3b2670]"></i>
                                September 2026 (Full)
                            </span>
                        </td>
                        <td class="px-3 py-4">
                            <span class="inline-flex rounded-md border border-pink-200 bg-pink-50 px-2.5 py-0.5 text-xs font-semibold text-pink-700">
                                bKash
                            </span>
                        </td>
                        <td class="px-3 py-4 font-display font-bold text-slate-900">৳9,990</td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                Paid
                            </span>
                        </td>
                        <td class="py-4 pl-3 text-right">
                            <a href="{{ route('student.orders.details') }}" class="inline-flex items-center gap-1.5 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 transition-colors hover:border-[#3b2670] hover:text-[#3b2670]">
                                <i data-lucide="eye" class="h-3.5 w-3.5"></i>
                                <span>Details</span>
                            </a>
                        </td>
                    </tr>

                    <!-- Row 4: Cash Payment -->
                    <tr>
                        <td class="py-4 pr-4">
                            <div class="font-display text-xs font-bold text-slate-900 sm:text-sm">#INV-2026-502</div>
                            <div class="text-xs text-slate-400">10 Aug 2026</div>
                        </td>
                        <td class="px-3 py-4">
                            <div class="font-semibold text-slate-900">EBI Basic To Pro 2.0 for HSC-28</div>
                            <div class="text-xs text-slate-500">English, Bangla &amp; ICT</div>
                        </td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                                <i data-lucide="calendar-range" class="h-3.5 w-3.5"></i>
                                Aug 2026 – Oct 2026
                            </span>
                        </td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md border border-emerald-200 bg-emerald-50 px-2.5 py-0.5 text-xs font-semibold text-emerald-700">
                                <i data-lucide="banknote" class="h-3.5 w-3.5"></i>
                                Cash
                            </span>
                        </td>
                        <td class="px-3 py-4 font-display font-bold text-slate-900">৳2,990</td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                Paid
                            </span>
                        </td>
                        <td class="py-4 pl-3 text-right">
                            <a href="{{ route('student.orders.details') }}" class="inline-flex items-center gap-1.5 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 transition-colors hover:border-[#3b2670] hover:text-[#3b2670]">
                                <i data-lucide="eye" class="h-3.5 w-3.5"></i>
                                <span>Details</span>
                            </a>
                        </td>
                    </tr>

                    <!-- Row 5: Nagad Payment -->
                    <tr>
                        <td class="py-4 pr-4">
                            <div class="font-display text-xs font-bold text-slate-900 sm:text-sm">#INV-2026-418</div>
                            <div class="text-xs text-slate-400">02 Jul 2026</div>
                        </td>
                        <td class="px-3 py-4">
                            <div class="font-semibold text-slate-900">HSC Science Foundation &amp; Calculator Batch</div>
                            <div class="text-xs text-slate-500">Foundation Batch</div>
                        </td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-700">
                                <i data-lucide="calendar" class="h-3.5 w-3.5 text-[#3b2670]"></i>
                                July 2026
                            </span>
                        </td>
                        <td class="px-3 py-4">
                            <span class="inline-flex rounded-md border border-orange-200 bg-orange-50 px-2.5 py-0.5 text-xs font-semibold text-orange-700">
                                Nagad
                            </span>
                        </td>
                        <td class="px-3 py-4 font-display font-bold text-slate-900">৳2,490</td>
                        <td class="px-3 py-4">
                            <span class="inline-flex items-center gap-1 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-700">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                Paid
                            </span>
                        </td>
                        <td class="py-4 pl-3 text-right">
                            <a href="{{ route('student.orders.details') }}" class="inline-flex items-center gap-1.5 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 transition-colors hover:border-[#3b2670] hover:text-[#3b2670]">
                                <i data-lucide="eye" class="h-3.5 w-3.5"></i>
                                <span>Details</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection