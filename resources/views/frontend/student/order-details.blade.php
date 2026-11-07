@extends('frontend.student.layout')

@section('student_content')
    <div class="space-y-6">
        <!-- Top Action Bar -->
        <div class="flex flex-wrap items-center justify-between gap-3 rounded-2xl border border-[#3b2670]/12 bg-white p-4 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:px-6">
            <a href="{{ route('student.orders') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-600 transition-colors hover:text-[#3b2670] sm:text-sm">
                <i data-lucide="arrow-left" class="h-4 w-4"></i>
                <span>Back to Payment History</span>
            </a>

            <div class="flex items-center gap-2">
                <button type="button" onclick="window.print()" class="inline-flex items-center gap-1.5 rounded-lg border border-slate-200 bg-white px-3.5 py-2 text-xs font-semibold text-slate-700 transition-colors hover:border-[#3b2670] hover:text-[#3b2670] sm:text-sm">
                    <i data-lucide="printer" class="h-4 w-4"></i>
                    <span>Print Receipt</span>
                </button>
            </div>
        </div>

        <!-- Payment Receipt / Details Card -->
        <div class="overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)]">
            <!-- Receipt Top Banner -->
            <div class="flex flex-col justify-between gap-4 border-b border-slate-100 bg-[#f9f7ff] p-5 sm:flex-row sm:items-center sm:p-6">
                <div>
                    <div class="flex flex-wrap items-center gap-2.5">
                        <span class="font-display text-lg font-bold text-slate-900 sm:text-xl">Invoice #INV-2026-841</span>
                        <span class="inline-flex items-center gap-1 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-700 ring-1 ring-emerald-200">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                            Paid
                        </span>
                    </div>
                    <p class="mt-1 text-xs text-slate-500 sm:text-sm">
                        Payment Date: <strong class="text-slate-700">12 October 2026, 04:35 PM</strong>
                    </p>
                </div>

                <div class="text-left sm:text-right">
                    <div class="text-xs font-semibold uppercase tracking-wider text-slate-400">Payment Period / Month</div>
                    <div class="mt-1 inline-flex items-center gap-1.5 rounded-lg bg-[#3b2670] px-3 py-1.5 text-xs font-bold text-white sm:text-sm">
                        <i data-lucide="calendar-range" class="h-4 w-4"></i>
                        <span>September 2026 – October 2026 (2 Months)</span>
                    </div>
                </div>
            </div>

            <div class="p-5 sm:p-6 space-y-6">
                <!-- Student & Payment Info Grid -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <!-- Student Info -->
                    <div class="rounded-xl border border-slate-100 bg-slate-50/70 p-4">
                        <div class="text-xs font-bold uppercase tracking-wider text-slate-400">Student Information</div>
                        <div class="mt-2.5 space-y-1.5 text-xs sm:text-sm">
                            <div class="flex justify-between">
                                <span class="text-slate-500">Student Name:</span>
                                <span class="font-semibold text-slate-900">Tasnim Mahi</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Student ID:</span>
                                <span class="font-semibold text-[#3b2670]">#ZA-28041</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Phone Number:</span>
                                <span class="font-semibold text-slate-800">01712-345678</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Class &amp; Batch:</span>
                                <span class="font-semibold text-slate-800">Class 11 • HSC ’28 Batch</span>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method & Collection Info -->
                    <div class="rounded-xl border border-slate-100 bg-slate-50/70 p-4">
                        <div class="text-xs font-bold uppercase tracking-wider text-slate-400">Payment Information</div>
                        <div class="mt-2.5 space-y-1.5 text-xs sm:text-sm">
                            <div class="flex justify-between">
                                <span class="text-slate-500">Payment Method:</span>
                                <span class="inline-flex items-center gap-1 rounded bg-emerald-100 px-2 py-0.5 text-xs font-bold text-emerald-800">
                                    <i data-lucide="banknote" class="h-3.5 w-3.5"></i>
                                    Cash (Office Counter)
                                </span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Receipt / Ref No:</span>
                                <span class="font-semibold text-slate-900">CSH-20261012-084</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Billing Months:</span>
                                <span class="font-semibold text-[#3b2670]">Sep 2026 to Oct 2026</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Received By:</span>
                                <span class="font-semibold text-slate-800">Accounts Desk (Z Academy)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Itemized Breakdown Table -->
                <div class="overflow-x-auto rounded-xl border border-slate-200/80">
                    <table class="w-full min-w-[540px] text-left text-sm">
                        <thead class="bg-slate-50 text-xs font-bold uppercase tracking-wider text-slate-500">
                            <tr>
                                <th class="px-4 py-3">Course / Batch Description</th>
                                <th class="px-4 py-3">Month / Duration</th>
                                <th class="px-4 py-3">Monthly Fee</th>
                                <th class="px-4 py-3 text-right">Sub-Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr>
                                <td class="px-4 py-4">
                                    <div class="font-semibold text-slate-900">HSC Physics 1st Paper Complete Master Batch</div>
                                    <div class="text-xs text-slate-500">Instructor: Niaz Morshed Faysal</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="font-semibold text-[#3b2670]">September 2026</div>
                                    <div class="text-xs text-slate-400">Monthly Tuition</div>
                                </td>
                                <td class="px-4 py-4 font-medium text-slate-700">৳1,500</td>
                                <td class="px-4 py-4 text-right font-display font-bold text-slate-900">৳1,500</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-4">
                                    <div class="font-semibold text-slate-900">HSC Physics 1st Paper Complete Master Batch</div>
                                    <div class="text-xs text-slate-500">Instructor: Niaz Morshed Faysal</div>
                                </td>
                                <td class="px-4 py-4">
                                    <div class="font-semibold text-[#3b2670]">October 2026</div>
                                    <div class="text-xs text-slate-400">Monthly Tuition</div>
                                </td>
                                <td class="px-4 py-4 font-medium text-slate-700">৳1,500</td>
                                <td class="px-4 py-4 text-right font-display font-bold text-slate-900">৳1,500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Payment Totals Summary -->
                <div class="flex flex-col items-end justify-between gap-4 border-t border-slate-100 pt-4 sm:flex-row sm:items-center">
                    <div class="text-xs text-slate-500">
                        <strong class="text-slate-700">Note:</strong> Please keep this invoice reference for any future billing queries.
                    </div>

                    <div class="w-full max-w-xs space-y-2 rounded-xl border border-[#3b2670]/12 bg-[#f9f7ff] p-4 text-sm">
                        <div class="flex justify-between text-xs text-slate-600">
                            <span>Total Payable (2 Months):</span>
                            <span class="font-semibold text-slate-900">৳3,000</span>
                        </div>
                        <div class="flex justify-between text-xs text-slate-600">
                            <span>Discount:</span>
                            <span class="font-semibold text-slate-900">৳0</span>
                        </div>
                        <div class="flex justify-between border-t border-slate-200/80 pt-2 font-display text-base font-bold text-emerald-700">
                            <span>Paid Amount (Cash):</span>
                            <span>৳3,000</span>
                        </div>
                        <div class="flex justify-between text-xs font-semibold text-slate-500">
                            <span>Due for this Invoice:</span>
                            <span>৳0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

