@extends('frontend.master')

@section('content')
    <!-- ==================== STUDENT PRODUCTS PAGE ==================== -->
    <section class="relative min-h-screen overflow-hidden bg-soft-gradient pb-14 pt-24 sm:pb-16 sm:pt-28 lg:pb-20 lg:pt-32">
        <div class="container-lms relative z-10">
            <!-- Page Title Header (Aligned with Courses & Instructors Pages) -->
            <div class="text-center">
                <h1 class="font-display text-2xl font-bold tracking-tight text-foreground sm:text-3xl lg:text-4xl">
                    Student <span class="bg-[linear-gradient(90deg,#3b2670_0%,#8b5cf6_100%)] bg-clip-text text-transparent">Products</span>
                </h1>
            </div>

            <!-- Category Filter Tabs (Matching Courses & Instructors Filter Style) -->
            <div class="mt-6 flex items-center gap-2.5 overflow-x-auto pb-2 sm:mt-8 sm:flex-wrap sm:justify-center sm:gap-3 sm:overflow-visible sm:pb-0 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden" role="tablist" aria-label="Product Categories">
                <button type="button" data-product-filter="all" class="course-filter-pill is-active inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670] bg-[#3b2670] px-4 py-2 text-xs font-semibold text-white shadow-[0_8px_20px_-6px_rgba(59,38,112,0.45)] transition-all duration-200 hover:text-white sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>All Products</span>
                    <span class="filter-count rounded-md bg-white/20 px-2 py-0.5 text-[11px] font-semibold text-white">6</span>
                </button>

                <button type="button" data-product-filter="jersey" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>Jerseys &amp; Apparel</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">3</span>
                </button>

                <button type="button" data-product-filter="bottle" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>Water Bottles</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">2</span>
                </button>

                <button type="button" data-product-filter="stationery" class="course-filter-pill inline-flex shrink-0 items-center gap-2 rounded-lg border border-[#3b2670]/12 bg-white px-4 py-2 text-xs font-semibold text-slate-700 shadow-sm transition-all duration-200 hover:border-[#3b2670]/35 hover:text-[#3b2670] sm:px-5 sm:py-2.5 sm:text-sm">
                    <span>Notebooks &amp; Kits</span>
                    <span class="filter-count rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-600">1</span>
                </button>
            </div>

            <!-- ==================== PRODUCTS GRID ==================== -->
            <div class="mt-8 grid grid-cols-1 gap-6 sm:mt-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Product 1: Official Batch Jersey -->
                <article data-product-category="jersey" class="product-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Product Image -->
                    <div class="relative aspect-[16/10] w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1581655353564-df123a1eb820?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Official HSC Batch Jersey"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <!-- Stock Status & Stock Quantity -->
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1.5 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-emerald-200/70">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                In Stock
                            </span>
                            <span class="inline-flex items-center gap-1 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                                Stock: 35 pcs
                            </span>
                        </div>

                        <!-- Product Name -->
                        <h3 class="mt-3.5 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            Z Academy Official Student Batch Jersey (2026 Edition)
                        </h3>

                        <!-- Price & Discounted Price -->
                        <div class="mt-auto border-t border-slate-100 pt-4 mt-4">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳450</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳650</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳200</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product 2: Insulated Water Bottle -->
                <article data-product-category="bottle" class="product-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Product Image -->
                    <div class="relative aspect-[16/10] w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Insulated Stainless Steel Water Bottle"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <!-- Stock Status & Stock Quantity -->
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1.5 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-emerald-200/70">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                In Stock
                            </span>
                            <span class="inline-flex items-center gap-1 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                                Stock: 22 pcs
                            </span>
                        </div>

                        <!-- Product Name -->
                        <h3 class="mt-3.5 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            Z Academy Matte Insulated Stainless Water Bottle (750ml)
                        </h3>

                        <!-- Price & Discounted Price -->
                        <div class="mt-auto border-t border-slate-100 pt-4 mt-4">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳590</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳850</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳260</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product 3: Premium Student Hoodie -->
                <article data-product-category="jersey" class="product-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Product Image -->
                    <div class="relative aspect-[16/10] w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Winter Premium Student Hoodie"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <!-- Stock Status & Stock Quantity -->
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1.5 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-emerald-200/70">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                In Stock
                            </span>
                            <span class="inline-flex items-center gap-1 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                                Stock: 14 pcs
                            </span>
                        </div>

                        <!-- Product Name -->
                        <h3 class="mt-3.5 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            Z Academy Premium Winter Student Hoodie (Deep Violet)
                        </h3>

                        <!-- Price & Discounted Price -->
                        <div class="mt-auto border-t border-slate-100 pt-4 mt-4">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳990</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳1,350</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳360</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product 4: Smart Temperature Flask Bottle -->
                <article data-product-category="bottle" class="product-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Product Image -->
                    <div class="relative aspect-[16/10] w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1523362628745-0c100150b504?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Thermal Travel Flask Bottle"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <!-- Stock Status & Stock Quantity -->
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1.5 rounded-md bg-rose-50 px-2.5 py-1 text-xs font-semibold text-rose-600 ring-1 ring-rose-200/70">
                                <span class="h-1.5 w-1.5 rounded-full bg-rose-500"></span>
                                Out of Stock
                            </span>
                            <span class="inline-flex items-center gap-1 rounded-md bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-600">
                                Stock: 0 pcs
                            </span>
                        </div>

                        <!-- Product Name -->
                        <h3 class="mt-3.5 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            Z Academy Smart LED Temperature Display Flask (500ml)
                        </h3>

                        <!-- Price & Discounted Price -->
                        <div class="mt-auto border-t border-slate-100 pt-4 mt-4">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳650</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳900</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳250</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product 5: Official Collar Polo Jersey -->
                <article data-product-category="jersey" class="product-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Product Image -->
                    <div class="relative aspect-[16/10] w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Classic Polo Jersey"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <!-- Stock Status & Stock Quantity -->
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1.5 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-emerald-200/70">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                In Stock
                            </span>
                            <span class="inline-flex items-center gap-1 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                                Stock: 28 pcs
                            </span>
                        </div>

                        <!-- Product Name -->
                        <h3 class="mt-3.5 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            Z Academy Official Collar Polo T-Shirt (Batch Edition)
                        </h3>

                        <!-- Price & Discounted Price -->
                        <div class="mt-auto border-t border-slate-100 pt-4 mt-4">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳490</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳700</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳210</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Product 6: Spiral Lecture Notebook Pack -->
                <article data-product-category="stationery" class="product-card-item group flex flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]">
                    <!-- Product Image -->
                    <div class="relative aspect-[16/10] w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1531346878377-a5be20888e57?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Spiral Lecture Notebook Set"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                    </div>

                    <!-- Card Body -->
                    <div class="flex flex-1 flex-col p-5 sm:p-6">
                        <!-- Stock Status & Stock Quantity -->
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1.5 rounded-md bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-emerald-200/70">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                In Stock
                            </span>
                            <span class="inline-flex items-center gap-1 rounded-md bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                                Stock: 50 pcs
                            </span>
                        </div>

                        <!-- Product Name -->
                        <h3 class="mt-3.5 font-display text-base font-semibold leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-[#3b2670] sm:text-lg">
                            Z Academy Spiral Lecture &amp; Formula Notebook (3-Pack)
                        </h3>

                        <!-- Price & Discounted Price -->
                        <div class="mt-auto border-t border-slate-100 pt-4 mt-4">
                            <div class="flex items-center justify-between gap-3">
                                <div class="flex items-baseline gap-2">
                                    <span class="font-display text-lg font-bold text-[#3b2670] sm:text-xl">৳320</span>
                                    <span class="text-xs text-slate-400 line-through sm:text-sm">৳450</span>
                                </div>
                                <span class="text-sm font-bold text-emerald-600 sm:text-[15px]">Save ৳130</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterButtons = document.querySelectorAll('[data-product-filter]');
            const productCards = document.querySelectorAll('.product-card-item');

            if (!filterButtons.length || !productCards.length) return;

            filterButtons.forEach((btn) => {
                btn.addEventListener('click', () => {
                    const selected = btn.getAttribute('data-product-filter');

                    filterButtons.forEach((b) => {
                        const isActive = b === btn;
                        b.classList.toggle('is-active', isActive);
                    });

                    productCards.forEach((card) => {
                        const category = card.getAttribute('data-product-category');
                        const shouldShow = selected === 'all' || category === selected;
                        card.classList.toggle('hidden', !shouldShow);
                        card.classList.toggle('flex', shouldShow);
                    });
                });
            });
        });
    </script>
@endsection
