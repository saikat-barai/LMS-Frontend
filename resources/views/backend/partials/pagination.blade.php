@if ($paginator->total() > 0)
    <div class="flex flex-col items-center justify-between gap-3 border-t border-slate-100 bg-slate-50/40 px-5 py-3.5 sm:flex-row sm:px-6">
        <!-- Showing X to Y of Z entries -->
        <div class="text-xs font-medium text-slate-500">
            Showing
            <span class="font-bold text-slate-800">{{ $paginator->firstItem() ?? 0 }}</span>
            to
            <span class="font-bold text-slate-800">{{ $paginator->lastItem() ?? 0 }}</span>
            of
            <span class="font-bold text-slate-800">{{ $paginator->total() }}</span>
            entries
        </div>

        <!-- Pagination Page Links -->
        <nav role="navigation" aria-label="Pagination Navigation" class="inline-flex items-center gap-1.5">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span
                    aria-disabled="true"
                    class="inline-flex h-8 w-8 cursor-not-allowed items-center justify-center rounded-lg border border-slate-200/80 bg-white text-slate-300"
                >
                    <i data-lucide="chevron-left" class="h-4 w-4"></i>
                </span>
            @else
                <a
                    href="{{ $paginator->previousPageUrl() }}"
                    rel="prev"
                    aria-label="Previous page"
                    class="inline-flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-600 transition hover:border-[#3b2670]/30 hover:bg-[#f4f0ff] hover:text-[#3b2670]"
                >
                    <i data-lucide="chevron-left" class="h-4 w-4"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @if ($paginator->hasPages())
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span class="inline-flex h-8 min-w-8 items-center justify-center px-1.5 text-xs font-semibold text-slate-400">
                            {{ $element }}
                        </span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span
                                    aria-current="page"
                                    class="inline-flex h-8 min-w-8 items-center justify-center rounded-lg bg-[#3b2670] px-2.5 text-xs font-bold text-white shadow-xs"
                                >
                                    {{ $page }}
                                </span>
                            @else
                                <a
                                    href="{{ $url }}"
                                    aria-label="Go to page {{ $page }}"
                                    class="inline-flex h-8 min-w-8 items-center justify-center rounded-lg border border-slate-200 bg-white px-2.5 text-xs font-semibold text-slate-700 transition hover:border-[#3b2670]/30 hover:bg-[#f4f0ff] hover:text-[#3b2670]"
                                >
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @else
                <span
                    aria-current="page"
                    class="inline-flex h-8 min-w-8 items-center justify-center rounded-lg bg-[#3b2670] px-2.5 text-xs font-bold text-white shadow-xs"
                >
                    1
                </span>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a
                    href="{{ $paginator->nextPageUrl() }}"
                    rel="next"
                    aria-label="Next page"
                    class="inline-flex h-8 w-8 items-center justify-center rounded-lg border border-slate-200 bg-white text-slate-600 transition hover:border-[#3b2670]/30 hover:bg-[#f4f0ff] hover:text-[#3b2670]"
                >
                    <i data-lucide="chevron-right" class="h-4 w-4"></i>
                </a>
            @else
                <span
                    aria-disabled="true"
                    class="inline-flex h-8 w-8 cursor-not-allowed items-center justify-center rounded-lg border border-slate-200/80 bg-white text-slate-300"
                >
                    <i data-lucide="chevron-right" class="h-4 w-4"></i>
                </span>
            @endif
        </nav>
    </div>
@endif
