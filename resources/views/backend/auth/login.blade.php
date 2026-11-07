<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Z Academy</title>

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

<body class="flex min-h-screen items-center justify-center bg-[#f6f5fb] px-4 py-10 font-sans text-slate-900 antialiased">

    <div class="w-full max-w-md">
        <!-- Login Card -->
        <div class="overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white p-6 shadow-[0_20px_50px_-18px_rgba(26,19,64,0.14)] sm:p-8">
            <!-- Top Centered Logo -->
            <div class="flex flex-col items-center text-center">
                <a href="{{ route('home') }}" class="inline-block">
                    <img
                        src="{{ asset('assets/frontend/images/Z Academy Glossy Purple Logo.png') }}"
                        alt="Z Academy"
                        width="135"
                        height="44"
                        class="h-11 w-auto object-contain sm:h-12"
                    >
                </a>
                <h1 class="mt-4 font-display text-xl font-bold tracking-tight text-slate-900 sm:text-2xl">
                    Admin <span class="bg-[linear-gradient(90deg,#3b2670_0%,#8b5cf6_100%)] bg-clip-text text-transparent">Login</span>
                </h1>
                <p class="mt-1 text-xs text-slate-500 sm:text-sm">
                    Sign in with your phone number and password
                </p>
            </div>

            <!-- Dynamic Admin Login Form (Phone Number & Password with Eye Toggle) -->
            <form action="{{ route('admin.login.submit') }}" method="POST" class="mt-6 space-y-4 sm:space-y-5">
                @csrf

                <!-- Phone Number -->
                <div>
                    <label for="admin-phone" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                        Phone Number <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative mt-1.5">
                        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                            <i data-lucide="phone" class="h-4 w-4"></i>
                        </span>
                        <input
                            id="admin-phone"
                            name="phone"
                            type="tel"
                            value="{{ old('phone') }}"
                            required
                            autofocus
                            placeholder="01700000001"
                            class="w-full rounded-xl border border-slate-200 bg-slate-50/70 py-2.5 pl-10 pr-4 text-sm text-slate-900 placeholder:text-slate-400 transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>
                </div>

                <!-- Password with Hide/Unhide Eye Icon -->
                <div>
                    <label for="admin-password" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                        Password <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative mt-1.5">
                        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                            <i data-lucide="lock" class="h-4 w-4"></i>
                        </span>
                        <input
                            id="admin-password"
                            name="password"
                            type="password"
                            required
                            placeholder="Enter your password"
                            class="w-full rounded-xl border border-slate-200 bg-slate-50/70 py-2.5 pl-10 pr-10 text-sm text-slate-900 placeholder:text-slate-400 transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                        <button
                            type="button"
                            data-toggle-password="admin-password"
                            aria-label="Toggle password visibility"
                            class="absolute inset-y-0 right-0 flex cursor-pointer items-center pr-3.5 text-slate-400 transition-colors hover:text-[#3b2670]"
                        >
                            <i data-lucide="eye" class="eye-open h-4 w-4"></i>
                            <i data-lucide="eye-off" class="eye-closed hidden h-4 w-4"></i>
                        </button>
                    </div>
                </div>

                <!-- Sign In Button -->
                <div class="pt-1">
                    <button
                        type="submit"
                        class="inline-flex w-full cursor-pointer items-center justify-center gap-2 rounded-xl bg-[#3b2670] px-5 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-[#2a1c58]"
                    >
                        <span>Sign In</span>
                        <i data-lucide="arrow-right" class="h-4 w-4"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Reusable Global Toaster -->
    @include('backend.partials.toast')

    <!-- Backend JS -->
    <script src="{{ asset('assets/backend/js/app.js') }}?v={{ filemtime(public_path('assets/backend/js/app.js')) }}"></script>
</body>

</html>
