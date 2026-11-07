@extends('frontend.student.layout')

@section('student_content')
    <div class="space-y-6">
        <!-- Header & Subject Filter -->
        <div class="flex flex-col justify-between gap-4 rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:flex-row sm:items-center sm:p-6">
            <div>
                <h2 class="font-display text-lg font-bold tracking-tight text-slate-900 sm:text-xl">
                    Smart Notes, Lecture Sheets &amp; E-Books
                </h2>
                <p class="mt-0.5 text-xs text-slate-500 sm:text-sm">
                    Download annotated class slides, chapter summary PDFs, and question banks
                </p>
            </div>

            <div class="flex items-center gap-2 overflow-x-auto pb-1 sm:pb-0">
                <button type="button" data-note-filter="all" class="course-filter-pill is-active rounded-lg border px-3.5 py-1.5 text-xs font-semibold transition-all">
                    <span>All (6)</span>
                </button>
                <button type="button" data-note-filter="physics" class="course-filter-pill rounded-lg border px-3.5 py-1.5 text-xs font-semibold transition-all">
                    <span>Physics</span>
                </button>
                <button type="button" data-note-filter="chemistry" class="course-filter-pill rounded-lg border px-3.5 py-1.5 text-xs font-semibold transition-all">
                    <span>Chemistry</span>
                </button>
                <button type="button" data-note-filter="math" class="course-filter-pill rounded-lg border px-3.5 py-1.5 text-xs font-semibold transition-all">
                    <span>Math</span>
                </button>
            </div>
        </div>

        <!-- Resources Grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <!-- Resource 1 -->
            <div data-note-category="physics" class="note-card flex flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] transition-all hover:border-[#3b2670]/35">
                <div class="flex items-start gap-3.5">
                    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                        <i data-lucide="file-text" class="h-5 w-5"></i>
                    </span>
                    <div class="min-w-0">
                        <div class="flex items-center gap-2">
                            <span class="rounded bg-[#f4f0ff] px-2 py-0.5 text-[11px] font-semibold text-[#3b2670]">Physics 1st Paper</span>
                            <span class="text-xs text-slate-400">PDF • 4.2 MB</span>
                        </div>
                        <h3 class="mt-1.5 font-display text-sm font-bold text-slate-900 sm:text-base">
                            Chapter 02: Vector Complete Smart Note &amp; Formula Sheet
                        </h3>
                        <p class="mt-0.5 text-xs text-slate-500">By Niaz Morshed Faysal • 42 Pages</p>
                    </div>
                </div>

                <div class="mt-4 flex items-center justify-end gap-2.5 border-t border-slate-100 pt-3.5">
                    <a href="#" class="inline-flex items-center gap-1 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 hover:border-[#3b2670] hover:text-[#3b2670]">
                        <i data-lucide="eye" class="h-3.5 w-3.5"></i>
                        <span>Read Online</span>
                    </a>
                    <a href="#" class="btn-primary px-3.5 py-1.5 text-xs">
                        <i data-lucide="download" class="h-3.5 w-3.5"></i>
                        <span>Download PDF</span>
                    </a>
                </div>
            </div>

            <!-- Resource 2 -->
            <div data-note-category="chemistry" class="note-card flex flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] transition-all hover:border-[#3b2670]/35">
                <div class="flex items-start gap-3.5">
                    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                        <i data-lucide="file-text" class="h-5 w-5"></i>
                    </span>
                    <div class="min-w-0">
                        <div class="flex items-center gap-2">
                            <span class="rounded bg-[#f4f0ff] px-2 py-0.5 text-[11px] font-semibold text-[#3b2670]">Chemistry 1st Paper</span>
                            <span class="text-xs text-slate-400">PDF • 5.8 MB</span>
                        </div>
                        <h3 class="mt-1.5 font-display text-sm font-bold text-slate-900 sm:text-base">
                            Chapter 03: Periodic Properties &amp; Chemical Bonding Master Sheet
                        </h3>
                        <p class="mt-0.5 text-xs text-slate-500">By Dr. Rafiul Alam • 56 Pages</p>
                    </div>
                </div>

                <div class="mt-4 flex items-center justify-end gap-2.5 border-t border-slate-100 pt-3.5">
                    <a href="#" class="inline-flex items-center gap-1 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 hover:border-[#3b2670] hover:text-[#3b2670]">
                        <i data-lucide="eye" class="h-3.5 w-3.5"></i>
                        <span>Read Online</span>
                    </a>
                    <a href="#" class="btn-primary px-3.5 py-1.5 text-xs">
                        <i data-lucide="download" class="h-3.5 w-3.5"></i>
                        <span>Download PDF</span>
                    </a>
                </div>
            </div>

            <!-- Resource 3 -->
            <div data-note-category="math" class="note-card flex flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] transition-all hover:border-[#3b2670]/35">
                <div class="flex items-start gap-3.5">
                    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                        <i data-lucide="book" class="h-5 w-5"></i>
                    </span>
                    <div class="min-w-0">
                        <div class="flex items-center gap-2">
                            <span class="rounded bg-[#f4f0ff] px-2 py-0.5 text-[11px] font-semibold text-[#3b2670]">Higher Math</span>
                            <span class="text-xs text-slate-400">PDF • 3.9 MB</span>
                        </div>
                        <h3 class="mt-1.5 font-display text-sm font-bold text-slate-900 sm:text-base">
                            Matrix, Determinant &amp; Straight Line Board Question Bank
                        </h3>
                        <p class="mt-0.5 text-xs text-slate-500">By Fahad Hossain Shovon • 38 Pages</p>
                    </div>
                </div>

                <div class="mt-4 flex items-center justify-end gap-2.5 border-t border-slate-100 pt-3.5">
                    <a href="#" class="inline-flex items-center gap-1 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 hover:border-[#3b2670] hover:text-[#3b2670]">
                        <i data-lucide="eye" class="h-3.5 w-3.5"></i>
                        <span>Read Online</span>
                    </a>
                    <a href="#" class="btn-primary px-3.5 py-1.5 text-xs">
                        <i data-lucide="download" class="h-3.5 w-3.5"></i>
                        <span>Download PDF</span>
                    </a>
                </div>
            </div>

            <!-- Resource 4 -->
            <div data-note-category="physics" class="note-card flex flex-col justify-between rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] transition-all hover:border-[#3b2670]/35">
                <div class="flex items-start gap-3.5">
                    <span class="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                        <i data-lucide="file-text" class="h-5 w-5"></i>
                    </span>
                    <div class="min-w-0">
                        <div class="flex items-center gap-2">
                            <span class="rounded bg-[#f4f0ff] px-2 py-0.5 text-[11px] font-semibold text-[#3b2670]">Physics 1st Paper</span>
                            <span class="text-xs text-slate-400">PDF • 6.1 MB</span>
                        </div>
                        <h3 class="mt-1.5 font-display text-sm font-bold text-slate-900 sm:text-base">
                            Newtonian Mechanics Annotated Class Slide &amp; CQ Practice
                        </h3>
                        <p class="mt-0.5 text-xs text-slate-500">By Niaz Morshed Faysal • 64 Pages</p>
                    </div>
                </div>

                <div class="mt-4 flex items-center justify-end gap-2.5 border-t border-slate-100 pt-3.5">
                    <a href="#" class="inline-flex items-center gap-1 rounded-lg border border-slate-200 px-3 py-1.5 text-xs font-semibold text-slate-700 hover:border-[#3b2670] hover:text-[#3b2670]">
                        <i data-lucide="eye" class="h-3.5 w-3.5"></i>
                        <span>Read Online</span>
                    </a>
                    <a href="#" class="btn-primary px-3.5 py-1.5 text-xs">
                        <i data-lucide="download" class="h-3.5 w-3.5"></i>
                        <span>Download PDF</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('[data-note-filter]');
            const cards = document.querySelectorAll('.note-card');

            buttons.forEach((btn) => {
                btn.addEventListener('click', () => {
                    const filter = btn.getAttribute('data-note-filter');
                    buttons.forEach((b) => b.classList.toggle('is-active', b === btn));
                    cards.forEach((card) => {
                        const cat = card.getAttribute('data-note-category');
                        const show = filter === 'all' || cat === filter;
                        card.classList.toggle('hidden', !show);
                        card.classList.toggle('flex', show);
                    });
                });
            });
        });
    </script>
@endsection

