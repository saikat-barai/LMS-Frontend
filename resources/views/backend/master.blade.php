<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - Z Academy')</title>

    <!-- Google Fonts: Manrope & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Manrope', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        display: ['Outfit', 'Manrope', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            DEFAULT: '#3b2670',
                            accent: '#6d28d9',
                            light: '#f4f0ff',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Backend Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}?v={{ filemtime(public_path('assets/backend/css/style.css')) }}">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-[#f6f5fb] text-slate-900 font-sans antialiased">

    <div class="admin-shell">
        <!-- Mobile Sidebar Backdrop -->
        <div id="admin-sidebar-backdrop" class="fixed inset-0 z-40 hidden bg-slate-950/60 backdrop-blur-xs lg:hidden"></div>

        <!-- ==================== FIXED LEFT SIDEBAR (SCROLLABLE WITHOUT SCROLLBAR) ==================== -->
        <aside id="admin-sidebar" class="admin-sidebar border-r border-white/10">
            <!-- Brand Header -->
            <div class="flex h-[4.5rem] shrink-0 items-center justify-between border-b border-white/10 px-5">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5">
                    <div class="rounded-lg bg-white px-2.5 py-1 shadow-xs">
                        <img
                            src="{{ asset('assets/frontend/images/Z Academy Glossy Purple Logo.png') }}"
                            alt="Z Academy"
                            width="105"
                            height="34"
                            class="admin-logo-img h-7 w-auto object-contain"
                        >
                    </div>
                    <span class="rounded border border-purple-400/25 bg-purple-500/20 px-2 py-0.5 text-[10px] font-bold uppercase tracking-wider text-purple-200">
                        Admin
                    </span>
                </a>

                <button
                    id="admin-sidebar-close"
                    type="button"
                    aria-label="Close sidebar"
                    class="grid h-8 w-8 place-items-center rounded-lg text-slate-300 hover:bg-white/10 hover:text-white lg:hidden"
                >
                    <i data-lucide="x" class="h-4 w-4"></i>
                </button>
            </div>

            <!-- Scrollable Sidebar Navigation (Hidden Scrollbar) -->
            <div class="admin-sidebar-scroll px-3.5 py-4 space-y-5">
                <!-- Group 1: Overview -->
                <div>
                    <div class="px-3 pb-1.5 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                        Overview
                    </div>
                    <nav class="space-y-1">
                        <a href="{{ route('admin.dashboard') }}" class="sidebar-nav-link {{ request()->routeIs('admin.dashboard') ? 'is-active' : '' }}">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="layout-dashboard" class="h-4 w-4"></i>
                                <span>Dashboard</span>
                            </span>
                        </a>
                    </nav>
                </div>

                <!-- Group 2: Academic Modules -->
                <div>
                    <div class="px-3 pb-1.5 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                        Academic
                    </div>
                    <nav class="space-y-1">
                        <a href="{{ route('admin.classes.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.classes.*') ? 'is-active' : '' }}">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="school" class="h-4 w-4"></i>
                                <span>Classes</span>
                            </span>
                            <span class="rounded bg-white/10 px-1.5 py-0.5 text-[11px] font-semibold text-slate-300">
                                {{ str_pad((string) \App\Models\AcademicClass::count(), 2, '0', STR_PAD_LEFT) }}
                            </span>
                        </a>

                        <a href="{{ route('admin.subjects.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.subjects.*') ? 'is-active' : '' }}">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="book-marked" class="h-4 w-4"></i>
                                <span>Subjects</span>
                            </span>
                            <span class="rounded bg-white/10 px-1.5 py-0.5 text-[11px] font-semibold text-slate-300">
                                {{ str_pad((string) \App\Models\Subject::count(), 2, '0', STR_PAD_LEFT) }}
                            </span>
                        </a>

                        <a href="#" class="sidebar-nav-link">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="layers" class="h-4 w-4"></i>
                                <span>Batches</span>
                            </span>
                            <span class="rounded bg-white/10 px-1.5 py-0.5 text-[11px] font-semibold text-slate-300">08</span>
                        </a>

                        <a href="#" class="sidebar-nav-link">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="book-open" class="h-4 w-4"></i>
                                <span>Courses &amp; Combos</span>
                            </span>
                            <span class="rounded bg-white/10 px-1.5 py-0.5 text-[11px] font-semibold text-slate-300">18</span>
                        </a>

                        <a href="#" class="sidebar-nav-link">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="calendar-clock" class="h-4 w-4"></i>
                                <span>Class Schedule</span>
                            </span>
                        </a>

                        <a href="#" class="sidebar-nav-link">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="file-text" class="h-4 w-4"></i>
                                <span>Smart Notes &amp; PDF</span>
                            </span>
                        </a>
                    </nav>
                </div>

                <!-- Group 3: People -->
                <div>
                    <div class="px-3 pb-1.5 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                        People
                    </div>
                    <nav class="space-y-1">
                        <a href="#" class="sidebar-nav-link">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="graduation-cap" class="h-4 w-4"></i>
                                <span>Students</span>
                            </span>
                            <span class="rounded bg-white/10 px-1.5 py-0.5 text-[11px] font-semibold text-slate-300">1,840</span>
                        </a>

                        <a href="{{ route('admin.instructors.index') }}" class="sidebar-nav-link {{ request()->routeIs('admin.instructors.*') ? 'is-active' : '' }}">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="users" class="h-4 w-4"></i>
                                <span>Instructors</span>
                            </span>
                            <span class="rounded bg-white/10 px-1.5 py-0.5 text-[11px] font-semibold text-slate-300">
                                {{ str_pad((string) \App\Models\Admin::where('role', \App\Enums\AdminRole::Teacher)->count(), 2, '0', STR_PAD_LEFT) }}
                            </span>
                        </a>
                    </nav>
                </div>

                <!-- Group 4: Store & Billing -->
                <div>
                    <div class="px-3 pb-1.5 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                        Store &amp; Accounts
                    </div>
                    <nav class="space-y-1">
                        <a href="#" class="sidebar-nav-link">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="shopping-bag" class="h-4 w-4"></i>
                                <span>Products</span>
                            </span>
                            <span class="rounded bg-white/10 px-1.5 py-0.5 text-[11px] font-semibold text-slate-300">06</span>
                        </a>

                        <a href="#" class="sidebar-nav-link">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="credit-card" class="h-4 w-4"></i>
                                <span>Payment History</span>
                            </span>
                        </a>

                        <a href="#" class="sidebar-nav-link">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="alert-circle" class="h-4 w-4"></i>
                                <span>Due Payments</span>
                            </span>
                            <span class="rounded bg-rose-500/20 px-1.5 py-0.5 text-[11px] font-bold text-rose-300">42</span>
                        </a>
                    </nav>
                </div>

                <!-- Group 5: Communication & System -->
                <div>
                    <div class="px-3 pb-1.5 text-[11px] font-bold uppercase tracking-wider text-slate-400">
                        System
                    </div>
                    <nav class="space-y-1">
                        <a href="#" class="sidebar-nav-link">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="bell" class="h-4 w-4"></i>
                                <span>Notifications</span>
                            </span>
                        </a>

                        <a href="#" class="sidebar-nav-link">
                            <span class="flex items-center gap-2.5">
                                <i data-lucide="settings" class="h-4 w-4"></i>
                                <span>Settings</span>
                            </span>
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Sidebar Bottom Quick Logout Link -->
            <div class="shrink-0 border-t border-white/10 p-3.5">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex w-full cursor-pointer items-center justify-between rounded-xl bg-white/5 px-3.5 py-2.5 text-xs font-semibold text-slate-300 transition-colors hover:bg-rose-500/15 hover:text-rose-300">
                        <span class="flex items-center gap-2">
                            <i data-lucide="log-out" class="h-4 w-4"></i>
                            <span>Sign Out</span>
                        </span>
                        <span class="text-[11px] text-slate-400">v1.0</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- ==================== MAIN CONTENT WRAPPER ==================== -->
        <div class="admin-main-wrapper">
            <!-- Fixed Polished Top Header -->
            <header class="admin-header flex items-center justify-between gap-4 px-4 sm:px-6 lg:px-8">
                <!-- Left: Mobile Menu Toggle + Page Title + Professional Search Bar -->
                <div class="flex flex-1 items-center gap-4 lg:gap-6">
                    <button
                        id="admin-sidebar-open"
                        type="button"
                        aria-label="Open sidebar"
                        class="grid h-10 w-10 shrink-0 place-items-center rounded-xl border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 lg:hidden"
                    >
                        <i data-lucide="menu" class="h-5 w-5"></i>
                    </button>

                    <div class="shrink-0">
                        <h1 class="font-display text-base font-bold tracking-tight text-slate-900 sm:text-lg">
                            @yield('page_title', 'Dashboard')
                        </h1>
                    </div>

                    <!-- Standard Professional Search Bar -->
                    <div class="relative hidden max-w-md flex-1 md:block">
                        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                            <i data-lucide="search" class="h-4 w-4"></i>
                        </span>
                        <input
                            type="search"
                            placeholder="Search students, phone, invoices, or courses..."
                            class="w-full rounded-xl border border-slate-200 bg-slate-50/80 py-2 pl-10 pr-4 text-xs font-medium text-slate-800 placeholder:text-slate-400 transition-colors focus:border-[#6d28d9] focus:bg-white sm:text-sm"
                        >
                    </div>
                </div>

                <!-- Right: Website Link, Notification Bell, & Rounded Profile Avatar -->
                <div class="flex items-center gap-2.5 sm:gap-3.5">
                    <!-- Visit Frontend Website -->
                    <a
                        href="{{ route('home') }}"
                        target="_blank"
                        class="inline-flex h-10 items-center gap-1.5 rounded-xl border border-slate-200 bg-white px-3.5 text-xs font-semibold text-slate-700 transition-colors hover:border-[#3b2670] hover:text-[#3b2670]"
                    >
                        <i data-lucide="globe" class="h-4 w-4 text-[#3b2670]"></i>
                        <span class="hidden sm:inline">Live Website</span>
                    </a>

                    <!-- Notification Icon -->
                    <button
                        type="button"
                        aria-label="Notifications"
                        class="relative grid h-10 w-10 place-items-center rounded-xl border border-slate-200 bg-white text-slate-600 transition-colors hover:border-[#3b2670] hover:text-[#3b2670]"
                    >
                        <i data-lucide="bell" class="h-4 w-4"></i>
                        <span class="absolute right-2.5 top-2.5 h-2 w-2 rounded-full bg-rose-500 ring-2 ring-white"></span>
                    </button>

                    <div class="hidden h-6 w-px bg-slate-200 sm:block"></div>

                    <!-- Right-Side Rounded Profile Icon & Dropdown -->
                    @php
                        $currentAdmin = auth('admin')->user();
                    @endphp
                    <div class="relative">
                        <button
                            id="admin-profile-btn"
                            type="button"
                            aria-label="Admin Profile Menu"
                            class="flex cursor-pointer items-center gap-2.5 rounded-full p-0.5 text-left transition-opacity hover:opacity-90"
                        >
                            <div class="relative h-10 w-10 shrink-0 overflow-hidden rounded-full border-2 border-[#3b2670]/25 bg-[#f4f0ff] p-0.5 shadow-xs">
                                <img
                                    src="{{ $currentAdmin?->profile_image ? asset($currentAdmin->profile_image) : asset('assets/frontend/images/instructor-niaz.jpg') }}"
                                    alt="{{ $currentAdmin?->name ?? 'Admin Profile' }}"
                                    class="h-full w-full rounded-full object-cover"
                                >
                                <span class="absolute bottom-0 right-0 h-2.5 w-2.5 rounded-full border-2 border-white bg-emerald-500"></span>
                            </div>
                            <div class="hidden pr-1 sm:block">
                                <div class="text-xs font-bold leading-tight text-slate-900">{{ $currentAdmin?->name ?? 'Super Admin' }}</div>
                                <div class="text-[11px] font-medium text-slate-500">{{ $currentAdmin ? $currentAdmin->roleLabel() : 'Super Admin' }}</div>
                            </div>
                            <i data-lucide="chevron-down" class="hidden h-3.5 w-3.5 text-slate-400 sm:block"></i>
                        </button>

                        <!-- Profile Dropdown Menu -->
                        <div
                            id="admin-profile-menu"
                            class="absolute right-0 mt-2.5 hidden w-56 overflow-hidden rounded-2xl border border-slate-200/90 bg-white p-1.5 shadow-xl"
                        >
                            <div class="border-b border-slate-100 px-3 py-2.5">
                                <div class="text-xs font-bold text-slate-900">{{ $currentAdmin?->name ?? 'Super Admin' }}</div>
                                <div class="truncate text-[11px] text-slate-500">{{ $currentAdmin?->phone ?? '01700000001' }} • {{ $currentAdmin ? $currentAdmin->roleLabel() : 'Super Admin' }}</div>
                            </div>

                            <div class="py-1">
                                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5 rounded-lg px-3 py-2 text-xs font-semibold text-slate-700 hover:bg-[#f4f0ff] hover:text-[#3b2670]">
                                    <i data-lucide="user" class="h-3.5 w-3.5"></i>
                                    <span>Admin Profile</span>
                                </a>
                                <a href="#" class="flex items-center gap-2.5 rounded-lg px-3 py-2 text-xs font-semibold text-slate-700 hover:bg-[#f4f0ff] hover:text-[#3b2670]">
                                    <i data-lucide="settings" class="h-3.5 w-3.5"></i>
                                    <span>Settings</span>
                                </a>
                            </div>

                            <div class="border-t border-slate-100 pt-1">
                                <form action="{{ route('admin.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="flex w-full cursor-pointer items-center gap-2.5 rounded-lg px-3 py-2 text-xs font-semibold text-rose-600 hover:bg-rose-50">
                                        <i data-lucide="log-out" class="h-3.5 w-3.5"></i>
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dynamic Page Content -->
            <main class="admin-content p-4 sm:p-6 lg:p-8">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Reusable Global Toaster -->
    @include('backend.partials.toast')

    <!-- Backend Main JS -->
    <script src="{{ asset('assets/backend/js/app.js') }}?v={{ filemtime(public_path('assets/backend/js/app.js')) }}"></script>
</body>

</html>
