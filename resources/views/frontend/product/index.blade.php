@extends('frontend.master')

@section('content')
    <!-- ==================== OUR PRODUCTS PAGE ==================== -->
    <section class="relative min-h-screen overflow-hidden bg-soft-gradient pb-14 pt-24 sm:pb-16 sm:pt-28 lg:pb-20 lg:pt-32">
        <div class="container-lms relative z-10">
            <!-- Page Title Header -->
            <div class="text-center">
                <h1 class="font-display text-2xl font-bold tracking-tight text-foreground sm:text-3xl lg:text-4xl">
                    Our <span class="bg-[linear-gradient(90deg,#3b2670_0%,#8b5cf6_100%)] bg-clip-text text-transparent">Products</span>
                </h1>
            </div>

            <!-- Category Filter Tabs (Wraps into Multiple Rows on Mobile & Desktop) -->
            <div class="mt-6 flex flex-wrap items-center justify-center gap-2 sm:mt-8 sm:gap-3" role="tablist" aria-label="Product Categories">
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

            <!-- ==================== PRODUCTS GRID (1:1 SQUARE IMAGES + CLICK FOR MULTI-IMAGE GALLERY) ==================== -->
            <div class="mt-8 grid grid-cols-1 gap-6 sm:mt-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Product 1: Official Batch Jersey -->
                <article
                    data-product-category="jersey"
                    data-product-title="Z Academy Official Student Batch Jersey (2026 Edition)"
                    data-product-price="৳450"
                    data-product-old-price="৳650"
                    data-product-stock="In Stock (35 pcs)"
                    data-product-images='[
                        "https://images.unsplash.com/photo-1581655353564-df123a1eb820?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1562157873-818bc0726f68?auto=format&fit=crop&w=900&q=80"
                    ]'
                    class="product-card-item group flex cursor-pointer flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]"
                >
                    <!-- 1:1 Square Product Image -->
                    <div class="relative aspect-square w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1581655353564-df123a1eb820?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Official Student Batch Jersey"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                        <span class="absolute bottom-3 right-3 inline-flex items-center gap-1.5 rounded-lg bg-slate-900/75 px-2.5 py-1 text-xs font-semibold text-white backdrop-blur-sm transition-colors group-hover:bg-[#3b2670]">
                            <i data-lucide="images" class="h-3.5 w-3.5"></i>
                            <span>4 Photos</span>
                        </span>
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
                        <div class="mt-auto pt-4">
                            <div class="flex items-center justify-between gap-3 border-t border-slate-100 pt-4">
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
                <article
                    data-product-category="bottle"
                    data-product-title="Z Academy Matte Insulated Stainless Water Bottle (750ml)"
                    data-product-price="৳590"
                    data-product-old-price="৳850"
                    data-product-stock="In Stock (22 pcs)"
                    data-product-images='[
                        "https://images.unsplash.com/photo-1602143407151-7111542de6e8?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1523362628745-0c100150b504?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=900&q=80"
                    ]'
                    class="product-card-item group flex cursor-pointer flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]"
                >
                    <!-- 1:1 Square Product Image -->
                    <div class="relative aspect-square w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Insulated Stainless Steel Water Bottle"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                        <span class="absolute bottom-3 right-3 inline-flex items-center gap-1.5 rounded-lg bg-slate-900/75 px-2.5 py-1 text-xs font-semibold text-white backdrop-blur-sm transition-colors group-hover:bg-[#3b2670]">
                            <i data-lucide="images" class="h-3.5 w-3.5"></i>
                            <span>3 Photos</span>
                        </span>
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
                        <div class="mt-auto pt-4">
                            <div class="flex items-center justify-between gap-3 border-t border-slate-100 pt-4">
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
                <article
                    data-product-category="jersey"
                    data-product-title="Z Academy Premium Winter Student Hoodie (Deep Violet)"
                    data-product-price="৳990"
                    data-product-old-price="৳1,350"
                    data-product-stock="In Stock (14 pcs)"
                    data-product-images='[
                        "https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1578681994506-b8f463449011?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?auto=format&fit=crop&w=900&q=80"
                    ]'
                    class="product-card-item group flex cursor-pointer flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]"
                >
                    <!-- 1:1 Square Product Image -->
                    <div class="relative aspect-square w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Winter Premium Student Hoodie"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                        <span class="absolute bottom-3 right-3 inline-flex items-center gap-1.5 rounded-lg bg-slate-900/75 px-2.5 py-1 text-xs font-semibold text-white backdrop-blur-sm transition-colors group-hover:bg-[#3b2670]">
                            <i data-lucide="images" class="h-3.5 w-3.5"></i>
                            <span>3 Photos</span>
                        </span>
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
                        <div class="mt-auto pt-4">
                            <div class="flex items-center justify-between gap-3 border-t border-slate-100 pt-4">
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
                <article
                    data-product-category="bottle"
                    data-product-title="Z Academy Smart LED Temperature Display Flask (500ml)"
                    data-product-price="৳650"
                    data-product-old-price="৳900"
                    data-product-stock="Out of Stock (0 pcs)"
                    data-product-images='[
                        "https://images.unsplash.com/photo-1523362628745-0c100150b504?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1602143407151-7111542de6e8?auto=format&fit=crop&w=900&q=80"
                    ]'
                    class="product-card-item group flex cursor-pointer flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]"
                >
                    <!-- 1:1 Square Product Image -->
                    <div class="relative aspect-square w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1523362628745-0c100150b504?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Thermal Travel Flask Bottle"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                        <span class="absolute bottom-3 right-3 inline-flex items-center gap-1.5 rounded-lg bg-slate-900/75 px-2.5 py-1 text-xs font-semibold text-white backdrop-blur-sm transition-colors group-hover:bg-[#3b2670]">
                            <i data-lucide="images" class="h-3.5 w-3.5"></i>
                            <span>2 Photos</span>
                        </span>
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
                        <div class="mt-auto pt-4">
                            <div class="flex items-center justify-between gap-3 border-t border-slate-100 pt-4">
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
                <article
                    data-product-category="jersey"
                    data-product-title="Z Academy Official Collar Polo T-Shirt (Batch Edition)"
                    data-product-price="৳490"
                    data-product-old-price="৳700"
                    data-product-stock="In Stock (28 pcs)"
                    data-product-images='[
                        "https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1581655353564-df123a1eb820?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1562157873-818bc0726f68?auto=format&fit=crop&w=900&q=80"
                    ]'
                    class="product-card-item group flex cursor-pointer flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]"
                >
                    <!-- 1:1 Square Product Image -->
                    <div class="relative aspect-square w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Classic Polo Jersey"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                        <span class="absolute bottom-3 right-3 inline-flex items-center gap-1.5 rounded-lg bg-slate-900/75 px-2.5 py-1 text-xs font-semibold text-white backdrop-blur-sm transition-colors group-hover:bg-[#3b2670]">
                            <i data-lucide="images" class="h-3.5 w-3.5"></i>
                            <span>3 Photos</span>
                        </span>
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
                        <div class="mt-auto pt-4">
                            <div class="flex items-center justify-between gap-3 border-t border-slate-100 pt-4">
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
                <article
                    data-product-category="stationery"
                    data-product-title="Z Academy Spiral Lecture & Formula Notebook (3-Pack)"
                    data-product-price="৳320"
                    data-product-old-price="৳450"
                    data-product-stock="In Stock (50 pcs)"
                    data-product-images='[
                        "https://images.unsplash.com/photo-1531346878377-a5be20888e57?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1517842645767-c639042777db?auto=format&fit=crop&w=900&q=80",
                        "https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=900&q=80"
                    ]'
                    class="product-card-item group flex cursor-pointer flex-col overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white shadow-[0_8px_26px_-10px_rgba(26,19,64,0.1)] transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#3b2670]/35 hover:shadow-[0_22px_44px_-14px_rgba(59,38,112,0.22)]"
                >
                    <!-- 1:1 Square Product Image -->
                    <div class="relative aspect-square w-full overflow-hidden bg-slate-100">
                        <img
                            src="https://images.unsplash.com/photo-1531346878377-a5be20888e57?auto=format&fit=crop&w=900&q=80"
                            alt="Z Academy Spiral Lecture Notebook Set"
                            class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-105"
                        >
                        <span class="absolute bottom-3 right-3 inline-flex items-center gap-1.5 rounded-lg bg-slate-900/75 px-2.5 py-1 text-xs font-semibold text-white backdrop-blur-sm transition-colors group-hover:bg-[#3b2670]">
                            <i data-lucide="images" class="h-3.5 w-3.5"></i>
                            <span>3 Photos</span>
                        </span>
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
                        <div class="mt-auto pt-4">
                            <div class="flex items-center justify-between gap-3 border-t border-slate-100 pt-4">
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

    <!-- ==================== PRODUCT MULTI-IMAGE GALLERY MODAL ==================== -->
    <div
        id="product-gallery-modal"
        class="fixed inset-0 z-[100] hidden items-center justify-center bg-slate-950/80 p-4 backdrop-blur-sm"
        role="dialog"
        aria-modal="true"
        aria-labelledby="modal-product-title"
    >
        <div class="relative w-full max-w-lg overflow-hidden rounded-2xl border border-white/15 bg-white shadow-2xl">
            <!-- Modal Header -->
            <div class="flex items-center justify-between gap-3 border-b border-slate-100 px-5 py-3.5">
                <div class="min-w-0">
                    <h3 id="modal-product-title" class="truncate font-display text-sm font-bold text-slate-900 sm:text-base">
                        Product Name
                    </h3>
                    <div class="mt-0.5 flex items-center gap-2 text-xs">
                        <span id="modal-product-price" class="font-display font-bold text-[#3b2670]">৳450</span>
                        <span id="modal-product-old-price" class="text-slate-400 line-through">৳650</span>
                        <span class="text-slate-300">•</span>
                        <span id="modal-product-stock" class="font-semibold text-emerald-600">In Stock</span>
                    </div>
                </div>

                <button
                    id="close-gallery-modal"
                    type="button"
                    aria-label="Close gallery"
                    class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-slate-100 text-slate-600 transition-colors hover:bg-rose-50 hover:text-rose-600"
                >
                    <i data-lucide="x" class="h-4 w-4"></i>
                </button>
            </div>

            <!-- Main 1:1 Image Viewer with Prev/Next Controls -->
            <div class="relative aspect-square w-full bg-slate-100">
                <img
                    id="modal-main-image"
                    src=""
                    alt="Product Preview"
                    class="h-full w-full object-cover"
                >

                <!-- Prev Button -->
                <button
                    id="modal-prev-btn"
                    type="button"
                    aria-label="Previous image"
                    class="absolute left-3 top-1/2 grid h-9 w-9 -translate-y-1/2 place-items-center rounded-full bg-slate-900/70 text-white shadow-md backdrop-blur-sm transition-colors hover:bg-[#3b2670]"
                >
                    <i data-lucide="chevron-left" class="h-5 w-5"></i>
                </button>

                <!-- Next Button -->
                <button
                    id="modal-next-btn"
                    type="button"
                    aria-label="Next image"
                    class="absolute right-3 top-1/2 grid h-9 w-9 -translate-y-1/2 place-items-center rounded-full bg-slate-900/70 text-white shadow-md backdrop-blur-sm transition-colors hover:bg-[#3b2670]"
                >
                    <i data-lucide="chevron-right" class="h-5 w-5"></i>
                </button>

                <!-- Image Counter Pill -->
                <span id="modal-image-counter" class="absolute bottom-3 left-1/2 -translate-x-1/2 rounded-full bg-slate-900/75 px-3 py-1 text-xs font-semibold text-white backdrop-blur-sm">
                    1 / 4
                </span>
            </div>

            <!-- Thumbnails Strip -->
            <div id="modal-thumbnails" class="flex items-center justify-center gap-2.5 overflow-x-auto bg-slate-50 px-5 py-3.5">
                <!-- Populated dynamically by JS -->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // 1. Category Filter Logic
            const filterButtons = document.querySelectorAll('[data-product-filter]');
            const productCards = document.querySelectorAll('.product-card-item');

            filterButtons.forEach((btn) => {
                btn.addEventListener('click', () => {
                    const selected = btn.getAttribute('data-product-filter');

                    filterButtons.forEach((b) => {
                        b.classList.toggle('is-active', b === btn);
                    });

                    productCards.forEach((card) => {
                        const category = card.getAttribute('data-product-category');
                        const shouldShow = selected === 'all' || category === selected;
                        card.classList.toggle('hidden', !shouldShow);
                        card.classList.toggle('flex', shouldShow);
                    });
                });
            });

            // 2. Product Multi-Image Lightbox Modal Logic
            const modal = document.getElementById('product-gallery-modal');
            const closeBtn = document.getElementById('close-gallery-modal');
            const mainImg = document.getElementById('modal-main-image');
            const thumbsContainer = document.getElementById('modal-thumbnails');
            const prevBtn = document.getElementById('modal-prev-btn');
            const nextBtn = document.getElementById('modal-next-btn');
            const counterEl = document.getElementById('modal-image-counter');
            const titleEl = document.getElementById('modal-product-title');
            const priceEl = document.getElementById('modal-product-price');
            const oldPriceEl = document.getElementById('modal-product-old-price');
            const stockEl = document.getElementById('modal-product-stock');

            let currentImages = [];
            let currentIndex = 0;

            const renderSlide = (index) => {
                if (!currentImages.length) return;
                currentIndex = (index + currentImages.length) % currentImages.length;
                mainImg.src = currentImages[currentIndex];
                counterEl.textContent = `${currentIndex + 1} / ${currentImages.length}`;

                thumbsContainer.querySelectorAll('button').forEach((thumbBtn, idx) => {
                    if (idx === currentIndex) {
                        thumbBtn.classList.add('ring-2', 'ring-[#3b2670]', 'opacity-100');
                        thumbBtn.classList.remove('opacity-60');
                    } else {
                        thumbBtn.classList.remove('ring-2', 'ring-[#3b2670]', 'opacity-100');
                        thumbBtn.classList.add('opacity-60');
                    }
                });
            };

            const openGalleryModal = (card) => {
                try {
                    currentImages = JSON.parse(card.getAttribute('data-product-images') || '[]');
                } catch (e) {
                    currentImages = [];
                }
                if (!currentImages.length) return;

                titleEl.textContent = card.getAttribute('data-product-title') || '';
                priceEl.textContent = card.getAttribute('data-product-price') || '';
                oldPriceEl.textContent = card.getAttribute('data-product-old-price') || '';
                stockEl.textContent = card.getAttribute('data-product-stock') || '';

                thumbsContainer.innerHTML = '';
                currentImages.forEach((imgUrl, idx) => {
                    const btn = document.createElement('button');
                    btn.type = 'button';
                    btn.className = 'h-14 w-14 shrink-0 overflow-hidden rounded-lg border border-slate-200 transition-all hover:opacity-100';
                    btn.innerHTML = `<img src="${imgUrl}" alt="Thumbnail ${idx + 1}" class="h-full w-full object-cover">`;
                    btn.addEventListener('click', () => renderSlide(idx));
                    thumbsContainer.appendChild(btn);
                });

                renderSlide(0);
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            };

            const closeGalleryModal = () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = '';
            };

            productCards.forEach((card) => {
                card.addEventListener('click', () => openGalleryModal(card));
            });

            if (prevBtn) prevBtn.addEventListener('click', (e) => { e.stopPropagation(); renderSlide(currentIndex - 1); });
            if (nextBtn) nextBtn.addEventListener('click', (e) => { e.stopPropagation(); renderSlide(currentIndex + 1); });
            if (closeBtn) closeBtn.addEventListener('click', closeGalleryModal);

            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) closeGalleryModal();
                });
            }

            document.addEventListener('keydown', (e) => {
                if (!modal || modal.classList.contains('hidden')) return;
                if (e.key === 'Escape') closeGalleryModal();
                if (e.key === 'ArrowLeft') renderSlide(currentIndex - 1);
                if (e.key === 'ArrowRight') renderSlide(currentIndex + 1);
            });
        });
    </script>
@endsection
