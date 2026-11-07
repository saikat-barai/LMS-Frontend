@extends('backend.master')

@section('title', 'Admin Dashboard - Z Academy')
@section('page_title', 'Dashboard Overview')

@section('content')
    <div class="space-y-6">
        <!-- 4 Clean KPI Summary Cards -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <!-- KPI 1: Total Students -->
            <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500">Total Students</span>
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                        <i data-lucide="graduation-cap" class="h-5 w-5"></i>
                    </span>
                </div>
                <div class="mt-3 font-display text-2xl font-bold text-slate-900 sm:text-3xl">1,840</div>
                <div class="mt-1 flex items-center justify-between text-xs">
                    <span class="font-semibold text-emerald-600">+48 this month</span>
                    <span class="text-slate-400">06 Batches</span>
                </div>
            </div>

            <!-- KPI 2: Total Payment Collected -->
            <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500">Total Collected (Nov)</span>
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                        <i data-lucide="wallet" class="h-5 w-5"></i>
                    </span>
                </div>
                <div class="mt-3 font-display text-2xl font-bold text-slate-900 sm:text-3xl">৳4,85,500</div>
                <div class="mt-1 flex items-center justify-between text-xs">
                    <span class="font-semibold text-emerald-600">Cash &amp; Online</span>
                    <span class="text-slate-400">312 Invoices</span>
                </div>
            </div>

            <!-- KPI 3: Due Payment -->
            <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500">Due Payments</span>
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-rose-50 text-rose-600">
                        <i data-lucide="alert-circle" class="h-5 w-5"></i>
                    </span>
                </div>
                <div class="mt-3 font-display text-2xl font-bold text-rose-600 sm:text-3xl">৳68,500</div>
                <div class="mt-1 flex items-center justify-between text-xs">
                    <span class="font-semibold text-rose-600">42 Students Due</span>
                    <span class="text-slate-400">Nov 2026</span>
                </div>
            </div>

            <!-- KPI 4: Courses & Products -->
            <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500">Courses &amp; Products</span>
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-amber-50 text-amber-600">
                        <i data-lucide="book-open" class="h-5 w-5"></i>
                    </span>
                </div>
                <div class="mt-3 font-display text-2xl font-bold text-slate-900 sm:text-3xl">18 / 06</div>
                <div class="mt-1 flex items-center justify-between text-xs">
                    <span class="font-semibold text-slate-600">18 Active Courses</span>
                    <span class="text-[#3b2670] font-semibold">149 Stock pcs</span>
                </div>
            </div>
        </div>

        <!-- Main Grid: Recent Payments Table (8 Cols) + Batch & Stock Overview (4 Cols) -->
        <div class="grid grid-cols-1 gap-6 xl:grid-cols-12">
            <!-- Left 8 Cols: Recent Tuition & Course Payments -->
            <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs sm:p-6 xl:col-span-8">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div>
                        <h2 class="font-display text-base font-bold text-slate-900 sm:text-lg">
                            Recent Payments
                        </h2>
                        <p class="text-xs text-slate-500">
                            Latest student fee collections via Cash, bKash, and Nagad
                        </p>
                    </div>
                    <a href="#" class="text-xs font-semibold text-[#3b2670] hover:underline">
                        View All →
                    </a>
                </div>

                <div class="mt-4 overflow-x-auto">
                    <table class="w-full min-w-[640px] text-left text-sm">
                        <thead>
                            <tr class="border-b border-slate-200 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                                <th class="pb-3 pr-3">Invoice</th>
                                <th class="px-3 pb-3">Student</th>
                                <th class="px-3 pb-3">Course / Batch</th>
                                <th class="px-3 pb-3">Month</th>
                                <th class="px-3 pb-3">Method</th>
                                <th class="px-3 pb-3">Amount</th>
                                <th class="pb-3 pl-3 text-right">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr>
                                <td class="py-3.5 pr-3">
                                    <div class="font-display text-xs font-bold text-slate-900">#INV-841</div>
                                    <div class="text-[11px] text-slate-400">12 Oct 2026</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <div class="font-semibold text-slate-900">Tasnim Mahi</div>
                                    <div class="text-xs text-slate-500">01712-345678</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <div class="font-medium text-slate-800">HSC Physics 1st Paper</div>
                                    <div class="text-xs text-slate-400">HSC ’28 Batch</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <span class="rounded bg-[#f4f0ff] px-2 py-0.5 text-xs font-semibold text-[#3b2670]">
                                        Sep – Oct 2026
                                    </span>
                                </td>
                                <td class="px-3 py-3.5">
                                    <span class="rounded border border-emerald-200 bg-emerald-50 px-2 py-0.5 text-xs font-semibold text-emerald-700">
                                        Cash
                                    </span>
                                </td>
                                <td class="px-3 py-3.5 font-display font-bold text-slate-900">৳3,000</td>
                                <td class="py-3.5 pl-3 text-right">
                                    <span class="inline-flex items-center gap-1 rounded-md bg-emerald-50 px-2 py-0.5 text-xs font-bold text-emerald-700">
                                        Paid
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="py-3.5 pr-3">
                                    <div class="font-display text-xs font-bold text-slate-900">#INV-905</div>
                                    <div class="text-[11px] text-slate-400">05 Nov 2026</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <div class="font-semibold text-slate-900">Ariful Islam</div>
                                    <div class="text-xs text-slate-500">01819-223344</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <div class="font-medium text-slate-800">PCMB 1st Paper Combo</div>
                                    <div class="text-xs text-slate-400">HSC ’28 Batch</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <span class="rounded bg-slate-100 px-2 py-0.5 text-xs font-semibold text-slate-700">
                                        Nov 2026
                                    </span>
                                </td>
                                <td class="px-3 py-3.5">
                                    <span class="rounded border border-slate-200 bg-white px-2 py-0.5 text-xs font-semibold text-slate-600">
                                        Cash
                                    </span>
                                </td>
                                <td class="px-3 py-3.5 font-display font-bold text-rose-600">৳1,500</td>
                                <td class="py-3.5 pl-3 text-right">
                                    <span class="inline-flex items-center gap-1 rounded-md bg-rose-50 px-2 py-0.5 text-xs font-bold text-rose-600">
                                        Due
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="py-3.5 pr-3">
                                    <div class="font-display text-xs font-bold text-slate-900">#INV-719</div>
                                    <div class="text-[11px] text-slate-400">25 Sep 2026</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <div class="font-semibold text-slate-900">Nusrat Jahan</div>
                                    <div class="text-xs text-slate-500">01911-556677</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <div class="font-medium text-slate-800">EBI Basic To Pro 2.0</div>
                                    <div class="text-xs text-slate-400">HSC ’28 Batch</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <span class="rounded bg-slate-100 px-2 py-0.5 text-xs font-semibold text-slate-700">
                                        Full Course
                                    </span>
                                </td>
                                <td class="px-3 py-3.5">
                                    <span class="rounded border border-pink-200 bg-pink-50 px-2 py-0.5 text-xs font-semibold text-pink-700">
                                        bKash
                                    </span>
                                </td>
                                <td class="px-3 py-3.5 font-display font-bold text-slate-900">৳2,990</td>
                                <td class="py-3.5 pl-3 text-right">
                                    <span class="inline-flex items-center gap-1 rounded-md bg-emerald-50 px-2 py-0.5 text-xs font-bold text-emerald-700">
                                        Paid
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td class="py-3.5 pr-3">
                                    <div class="font-display text-xs font-bold text-slate-900">#INV-684</div>
                                    <div class="text-[11px] text-slate-400">18 Sep 2026</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <div class="font-semibold text-slate-900">Samiul Haque</div>
                                    <div class="text-xs text-slate-500">01612-889900</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <div class="font-medium text-slate-800">FRPB-26 Science Combo</div>
                                    <div class="text-xs text-slate-400">SSC ’26 Batch</div>
                                </td>
                                <td class="px-3 py-3.5">
                                    <span class="rounded bg-[#f4f0ff] px-2 py-0.5 text-xs font-semibold text-[#3b2670]">
                                        Sep – Nov 2026
                                    </span>
                                </td>
                                <td class="px-3 py-3.5">
                                    <span class="rounded border border-orange-200 bg-orange-50 px-2 py-0.5 text-xs font-semibold text-orange-700">
                                        Nagad
                                    </span>
                                </td>
                                <td class="px-3 py-3.5 font-display font-bold text-slate-900">৳2,990</td>
                                <td class="py-3.5 pl-3 text-right">
                                    <span class="inline-flex items-center gap-1 rounded-md bg-emerald-50 px-2 py-0.5 text-xs font-bold text-emerald-700">
                                        Paid
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Right 4 Cols: Product Stock & Batch Summary -->
            <div class="space-y-6 xl:col-span-4">
                <!-- Product Stock Status -->
                <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs sm:p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="font-display text-base font-bold text-slate-900">
                            Product Stock
                        </h3>
                        <a href="{{ route('products') }}" target="_blank" class="text-xs font-semibold text-[#3b2670] hover:underline">
                            Store →
                        </a>
                    </div>

                    <div class="mt-4 space-y-3">
                        <div class="flex items-center justify-between rounded-xl border border-slate-100 bg-slate-50/70 px-3.5 py-2.5">
                            <div>
                                <div class="text-xs font-bold text-slate-800 sm:text-sm">Student Batch Jersey</div>
                                <div class="text-[11px] text-slate-500">৳450 (Reg. ৳650)</div>
                            </div>
                            <span class="rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-700">
                                35 pcs
                            </span>
                        </div>

                        <div class="flex items-center justify-between rounded-xl border border-slate-100 bg-slate-50/70 px-3.5 py-2.5">
                            <div>
                                <div class="text-xs font-bold text-slate-800 sm:text-sm">Insulated Water Bottle</div>
                                <div class="text-[11px] text-slate-500">৳590 (Reg. ৳850)</div>
                            </div>
                            <span class="rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-700">
                                22 pcs
                            </span>
                        </div>

                        <div class="flex items-center justify-between rounded-xl border border-slate-100 bg-slate-50/70 px-3.5 py-2.5">
                            <div>
                                <div class="text-xs font-bold text-slate-800 sm:text-sm">Smart LED Flask (500ml)</div>
                                <div class="text-[11px] text-slate-500">৳650 (Reg. ৳900)</div>
                            </div>
                            <span class="rounded-md bg-rose-50 px-2.5 py-1 text-xs font-bold text-rose-600">
                                0 pcs (Out)
                            </span>
                        </div>

                        <div class="flex items-center justify-between rounded-xl border border-slate-100 bg-slate-50/70 px-3.5 py-2.5">
                            <div>
                                <div class="text-xs font-bold text-slate-800 sm:text-sm">Spiral Notebook (3-Pack)</div>
                                <div class="text-[11px] text-slate-500">৳320 (Reg. ৳450)</div>
                            </div>
                            <span class="rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-700">
                                50 pcs
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Batch-wise Active Students -->
                <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs sm:p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="font-display text-base font-bold text-slate-900">
                            Active Batches
                        </h3>
                        <span class="text-xs font-semibold text-slate-400">6 Batches</span>
                    </div>

                    <div class="mt-3.5 grid grid-cols-2 gap-2.5 text-xs">
                        <div class="flex items-center justify-between rounded-lg border border-slate-100 bg-slate-50/70 px-3 py-2">
                            <span class="font-semibold text-slate-700">HSC 28</span>
                            <span class="font-bold text-[#3b2670]">540</span>
                        </div>
                        <div class="flex items-center justify-between rounded-lg border border-slate-100 bg-slate-50/70 px-3 py-2">
                            <span class="font-semibold text-slate-700">HSC 27</span>
                            <span class="font-bold text-[#3b2670]">480</span>
                        </div>
                        <div class="flex items-center justify-between rounded-lg border border-slate-100 bg-slate-50/70 px-3 py-2">
                            <span class="font-semibold text-slate-700">SSC 26</span>
                            <span class="font-bold text-[#3b2670]">360</span>
                        </div>
                        <div class="flex items-center justify-between rounded-lg border border-slate-100 bg-slate-50/70 px-3 py-2">
                            <span class="font-semibold text-slate-700">SSC 27</span>
                            <span class="font-bold text-[#3b2670]">240</span>
                        </div>
                        <div class="flex items-center justify-between rounded-lg border border-slate-100 bg-slate-50/70 px-3 py-2">
                            <span class="font-semibold text-slate-700">Class 9</span>
                            <span class="font-bold text-[#3b2670]">135</span>
                        </div>
                        <div class="flex items-center justify-between rounded-lg border border-slate-100 bg-slate-50/70 px-3 py-2">
                            <span class="font-semibold text-slate-700">Class 8</span>
                            <span class="font-bold text-[#3b2670]">85</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom 2-Column Section: Recent Student Admissions & Today's Schedule -->
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Recent Student Admissions -->
            <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs sm:p-6">
                <div class="flex items-center justify-between">
                    <h3 class="font-display text-base font-bold text-slate-900">
                        Recent Student Admissions
                    </h3>
                    <a href="#" class="text-xs font-semibold text-[#3b2670] hover:underline">
                        All Students →
                    </a>
                </div>

                <div class="mt-4 space-y-3">
                    <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3">
                        <div class="flex min-w-0 items-center gap-3">
                            <img src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="Tasnim Mahi" class="h-10 w-10 shrink-0 rounded-full object-cover">
                            <div class="min-w-0">
                                <div class="truncate text-sm font-bold text-slate-900">Tasnim Mahi</div>
                                <div class="truncate text-xs text-slate-500">01712-345678 • Notre Dame College</div>
                            </div>
                        </div>
                        <span class="shrink-0 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-bold text-[#3b2670]">
                            HSC 28
                        </span>
                    </div>

                    <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3">
                        <div class="flex min-w-0 items-center gap-3">
                            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-full bg-[#3b2670] font-display text-xs font-bold text-white">
                                AI
                            </span>
                            <div class="min-w-0">
                                <div class="truncate text-sm font-bold text-slate-900">Ariful Islam</div>
                                <div class="truncate text-xs text-slate-500">01819-223344 • Dhaka College</div>
                            </div>
                        </div>
                        <span class="shrink-0 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-bold text-[#3b2670]">
                            HSC 27
                        </span>
                    </div>

                    <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3">
                        <div class="flex min-w-0 items-center gap-3">
                            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-full bg-emerald-600 font-display text-xs font-bold text-white">
                                NJ
                            </span>
                            <div class="min-w-0">
                                <div class="truncate text-sm font-bold text-slate-900">Nusrat Jahan</div>
                                <div class="truncate text-xs text-slate-500">01911-556677 • Viqarunnisa Noon</div>
                            </div>
                        </div>
                        <span class="shrink-0 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-bold text-[#3b2670]">
                            SSC 26
                        </span>
                    </div>
                </div>
            </div>

            <!-- Today's Class Schedule -->
            <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs sm:p-6">
                <div class="flex items-center justify-between">
                    <h3 class="font-display text-base font-bold text-slate-900">
                        Today’s Class Schedule
                    </h3>
                    <span class="rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                        03 Classes
                    </span>
                </div>

                <div class="mt-4 space-y-3">
                    <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3">
                        <div class="min-w-0">
                            <div class="truncate text-sm font-bold text-slate-900">Physics 1st Paper: Vector Lec-08</div>
                            <div class="truncate text-xs text-slate-500">Niaz Morshed Faysal • HSC 28 Batch</div>
                        </div>
                        <span class="shrink-0 rounded-md bg-rose-50 px-2.5 py-1 text-xs font-bold text-rose-600">
                            Live Now
                        </span>
                    </div>

                    <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3">
                        <div class="min-w-0">
                            <div class="truncate text-sm font-bold text-slate-900">Chemistry: Periodic Table Lec-05</div>
                            <div class="truncate text-xs text-slate-500">Dr. Rafiul Alam • HSC 28 Batch</div>
                        </div>
                        <span class="shrink-0 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-bold text-emerald-700">
                            8:30 PM
                        </span>
                    </div>

                    <div class="flex items-center justify-between gap-3 rounded-xl border border-slate-100 bg-slate-50/70 p-3">
                        <div class="min-w-0">
                            <div class="truncate text-sm font-bold text-slate-900">Higher Math: Matrix &amp; Determinant</div>
                            <div class="truncate text-xs text-slate-500">Fahad Hossain Shovon • HSC 27 Batch</div>
                        </div>
                        <span class="shrink-0 rounded-md bg-slate-100 px-2.5 py-1 text-xs font-bold text-slate-700">
                            9:30 PM
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

