@extends('frontend.master')

@section('content')
    <!-- ==================== STUDENT LOGIN PAGE (CENTERED SINGLE FORM CARD) ==================== -->
    <section class="relative min-h-screen overflow-hidden bg-soft-gradient pb-16 pt-24 sm:pb-20 sm:pt-28 lg:pb-24 lg:pt-32">
        <!-- Ambient Glows -->
        <div class="pointer-events-none absolute -left-24 top-20 h-72 w-72 rounded-full bg-[#3b2670]/10 blur-[95px]"></div>
        <div class="pointer-events-none absolute -right-24 bottom-12 h-80 w-80 rounded-full bg-primary/10 blur-[100px]"></div>

        <div class="container-lms relative z-10">
            <div class="mx-auto max-w-md overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white p-6 shadow-[0_20px_50px_-18px_rgba(26,19,64,0.14)] sm:p-8">
                <!-- Header -->
                <div class="text-center">
                    <h1 class="font-display text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                        Student <span class="bg-[linear-gradient(90deg,#3b2670_0%,#8b5cf6_100%)] bg-clip-text text-transparent">Login</span>
                    </h1>
                    <p class="mt-1.5 text-xs text-slate-500 sm:text-sm">
                        Enter your phone number or email to sign in to your account
                    </p>
                </div>

                <!-- Login Form -->
                <form action="{{ route('student.dashboard') }}" method="GET" class="mt-6 space-y-4 sm:space-y-5">
                    <!-- Phone or Email -->
                    <div>
                        <label for="login-identity" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                            Phone Number or Email <span class="text-rose-500">*</span>
                        </label>
                        <div class="relative mt-1.5">
                            <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                <i data-lucide="phone" class="h-4 w-4"></i>
                            </span>
                            <input
                                id="login-identity"
                                name="identity"
                                type="text"
                                required
                                placeholder="017XXXXXXXX or student@example.com"
                                class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-4 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                            >
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="login-password" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Password <span class="text-rose-500">*</span>
                            </label>
                            <a href="#" class="text-xs font-semibold text-[#3b2670] transition-colors hover:text-[#7c3aed]">
                                Forgot password?
                            </a>
                        </div>
                        <div class="relative mt-1.5">
                            <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                <i data-lucide="lock" class="h-4 w-4"></i>
                            </span>
                            <input
                                id="login-password"
                                name="password"
                                type="password"
                                required
                                placeholder="Enter your password"
                                class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-10 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                            >
                            <button
                                type="button"
                                data-toggle-password="login-password"
                                aria-label="Toggle password visibility"
                                class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 transition-colors hover:text-slate-600"
                            >
                                <i data-lucide="eye" class="h-4 w-4"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me & Demo Dashboard Link -->
                    <div class="flex items-center justify-between pt-0.5">
                        <label class="inline-flex cursor-pointer items-center gap-2 text-xs font-medium text-slate-600 sm:text-sm">
                            <input type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-300 text-[#3b2670] focus:ring-[#3b2670]/25">
                            <span>Remember me</span>
                        </label>
                        <a href="{{ route('student.dashboard') }}" class="text-xs font-semibold text-[#3b2670] hover:text-[#7c3aed]">
                            Preview Dashboard →
                        </a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-primary w-full py-3 text-sm font-semibold">
                        <span>Sign In</span>
                        <i data-lucide="arrow-right" class="h-4 w-4"></i>
                    </button>
                </form>

                <!-- Switch to Register -->
                <div class="mt-6 border-t border-slate-100 pt-5 text-center">
                    <p class="text-xs text-slate-600 sm:text-sm">
                        Don’t have a student account yet?
                        <a href="{{ route('student.register') }}" class="font-semibold text-[#3b2670] underline-offset-4 hover:text-[#7c3aed] hover:underline">
                            Create New Account
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('[data-toggle-password]').forEach((btn) => {
                btn.addEventListener('click', () => {
                    const inputId = btn.getAttribute('data-toggle-password');
                    const input = document.getElementById(inputId);
                    if (!input) return;
                    input.type = input.type === 'password' ? 'text' : 'password';
                });
            });
        });
    </script>
@endsection
