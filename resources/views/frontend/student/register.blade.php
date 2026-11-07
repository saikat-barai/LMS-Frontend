@extends('frontend.master')

@section('content')
    <!-- ==================== STUDENT REGISTER PAGE (CENTERED SINGLE FORM CARD) ==================== -->
    <section class="relative min-h-screen overflow-hidden bg-soft-gradient pb-16 pt-24 sm:pb-20 sm:pt-28 lg:pb-24 lg:pt-32">
        <div class="container-lms relative z-10">
            <div class="mx-auto max-w-3xl overflow-hidden rounded-2xl border border-[#3b2670]/12 bg-white p-6 shadow-[0_20px_50px_-18px_rgba(26,19,64,0.14)] sm:p-8 lg:p-10">
                <!-- Header -->
                <div class="text-center">
                    <h1 class="font-display text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                        Student <span class="bg-[linear-gradient(90deg,#3b2670_0%,#8b5cf6_100%)] bg-clip-text text-transparent">Registration</span>
                    </h1>
                    <p class="mt-1.5 text-xs text-slate-500 sm:text-sm">
                        Fill in your student &amp; academic details below to create your account
                    </p>
                </div>

                <!-- Registration Form -->
                <form action="{{ route('student.dashboard') }}" method="GET" enctype="multipart/form-data" class="mt-7 space-y-5">

                    <!-- Larger Profile Image Upload with Remove Option -->
                    <div class="flex flex-col items-center justify-between gap-4 rounded-xl border border-[#3b2670]/12 bg-[#f9f7ff] p-4 sm:flex-row sm:px-5">
                        <div class="flex flex-col items-center gap-4 text-center sm:flex-row sm:text-left">
                            <div class="relative flex h-20 w-20 shrink-0 items-center justify-center overflow-hidden rounded-full border-2 border-[#3b2670]/25 bg-white text-[#3b2670] shadow-sm sm:h-24 sm:w-24">
                                <img id="profile-preview-img" src="" alt="Profile Preview" class="hidden h-full w-full object-cover">
                                <i id="profile-preview-icon" data-lucide="user" class="h-9 w-9 sm:h-10 sm:w-10"></i>
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-800 sm:text-base">Student Profile Photo</div>
                                <p class="mt-0.5 text-xs text-slate-500">Upload a clear passport/square size photo (JPG, PNG)</p>
                                <p id="profile-file-name" class="mt-1 hidden text-xs font-semibold text-[#3b2670]"></p>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center justify-center gap-2">
                            <label for="reg-profile-image" class="inline-flex cursor-pointer items-center gap-1.5 rounded-lg border border-[#3b2670]/20 bg-white px-3.5 py-2 text-xs font-semibold text-[#3b2670] shadow-sm transition-colors hover:bg-[#3b2670] hover:text-white">
                                <i data-lucide="upload" class="h-3.5 w-3.5"></i>
                                <span>Choose Photo</span>
                                <input id="reg-profile-image" name="profile_image" type="file" accept="image/*" class="hidden">
                            </label>

                            <button
                                id="remove-profile-image"
                                type="button"
                                class="hidden items-center gap-1 rounded-lg border border-rose-200 bg-rose-50 px-3 py-2 text-xs font-semibold text-rose-600 transition-colors hover:bg-rose-600 hover:text-white"
                            >
                                <i data-lucide="trash-2" class="h-3.5 w-3.5"></i>
                                <span>Remove</span>
                            </button>
                        </div>
                    </div>

                    <!-- Row 1: Student Full Name & Student Phone Number -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="reg-name" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Student Full Name <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="user" class="h-4 w-4"></i>
                                </span>
                                <input
                                    id="reg-name"
                                    name="name"
                                    type="text"
                                    required
                                    placeholder="Enter student full name"
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-3.5 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="reg-phone" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Student Phone Number <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="phone" class="h-4 w-4"></i>
                                </span>
                                <input
                                    id="reg-phone"
                                    name="phone"
                                    type="tel"
                                    required
                                    placeholder="017XXXXXXXX"
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-3.5 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: Guardian Phone Number & WhatsApp Number -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="reg-guardian-phone" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Guardian Phone Number <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="phone-call" class="h-4 w-4"></i>
                                </span>
                                <input
                                    id="reg-guardian-phone"
                                    name="guardian_phone"
                                    type="tel"
                                    required
                                    placeholder="018XXXXXXXX (Father/Mother)"
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-3.5 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="reg-whatsapp" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                WhatsApp Number <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="message-circle" class="h-4 w-4"></i>
                                </span>
                                <input
                                    id="reg-whatsapp"
                                    name="whatsapp_number"
                                    type="tel"
                                    required
                                    placeholder="017XXXXXXXX (WhatsApp)"
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-3.5 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Row 3: Email Address, Date of Birth & Gender (No Age Field) -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                        <div>
                            <label for="reg-email" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Email Address
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="mail" class="h-4 w-4"></i>
                                </span>
                                <input
                                    id="reg-email"
                                    name="email"
                                    type="email"
                                    placeholder="student@example.com"
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-3.5 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="reg-dob" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Date of Birth <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="calendar" class="h-4 w-4"></i>
                                </span>
                                <input
                                    id="reg-dob"
                                    name="date_of_birth"
                                    type="date"
                                    required
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-3 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="reg-gender" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Gender <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="users" class="h-4 w-4"></i>
                                </span>
                                <select
                                    id="reg-gender"
                                    name="gender"
                                    required
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-8 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Row 4: Current Class (Required) & Batch (Not Required) -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="reg-class" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Current Class <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="book-open" class="h-4 w-4"></i>
                                </span>
                                <select
                                    id="reg-class"
                                    name="student_class"
                                    required
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-8 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                                    <option value="">Select Class</option>
                                    <option value="class-6">Class 6</option>
                                    <option value="class-7">Class 7</option>
                                    <option value="class-8">Class 8</option>
                                    <option value="class-9">Class 9</option>
                                    <option value="class-10">Class 10 (SSC)</option>
                                    <option value="class-11">Class 11 (HSC 1st Year)</option>
                                    <option value="class-12">Class 12 (HSC 2nd Year)</option>
                                    <option value="admission">University / Medical Admission</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="reg-batch" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Batch
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="graduation-cap" class="h-4 w-4"></i>
                                </span>
                                <select
                                    id="reg-batch"
                                    name="batch"
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-8 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                                    <option value="" selected>Default / Select Batch</option>
                                    <option value="hsc-27">HSC 27</option>
                                    <option value="hsc-28">HSC 28</option>
                                    <option value="ssc-26">SSC 26</option>
                                    <option value="ssc-27">SSC 27</option>
                                    <option value="class-9">Class 9 Batch</option>
                                    <option value="class-8">Class 8 Batch</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Row 5: School / College Name & Present Address -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="reg-institution" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                School / College Name <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="building-2" class="h-4 w-4"></i>
                                </span>
                                <input
                                    id="reg-institution"
                                    name="institution"
                                    type="text"
                                    required
                                    placeholder="e.g. Notre Dame College, Dhaka"
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-3.5 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="reg-address" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Present Address <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="map-pin" class="h-4 w-4"></i>
                                </span>
                                <input
                                    id="reg-address"
                                    name="address"
                                    type="text"
                                    required
                                    placeholder="House/Road, Area, District"
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-3.5 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Row 6: Password & Confirm Password -->
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="reg-password" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Password <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="lock" class="h-4 w-4"></i>
                                </span>
                                <input
                                    id="reg-password"
                                    name="password"
                                    type="password"
                                    required
                                    placeholder="Min. 6 characters"
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-10 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                                <button
                                    type="button"
                                    data-toggle-password="reg-password"
                                    aria-label="Toggle password visibility"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-slate-600"
                                >
                                    <i data-lucide="eye" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </div>

                        <div>
                            <label for="reg-password-confirm" class="block text-xs font-semibold text-slate-700 sm:text-sm">
                                Confirm Password <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative mt-1.5">
                                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                                    <i data-lucide="shield-check" class="h-4 w-4"></i>
                                </span>
                                <input
                                    id="reg-password-confirm"
                                    name="password_confirmation"
                                    type="password"
                                    required
                                    placeholder="Re-enter password"
                                    class="w-full rounded-lg border border-slate-200 bg-slate-50/60 py-2.5 pl-10 pr-10 text-sm text-slate-900 placeholder:text-slate-400 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                                >
                                <button
                                    type="button"
                                    data-toggle-password="reg-password-confirm"
                                    aria-label="Toggle password visibility"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-slate-600"
                                >
                                    <i data-lucide="eye" class="h-4 w-4"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-1">
                        <button type="submit" class="btn-primary w-full py-3 text-sm font-semibold">
                            <span>Create Student Account</span>
                            <i data-lucide="arrow-right" class="h-4 w-4"></i>
                        </button>
                    </div>
                </form>

                <!-- Switch to Login -->
                <div class="mt-6 border-t border-slate-100 pt-5 text-center">
                    <p class="text-xs text-slate-600 sm:text-sm">
                        Already have an account?
                        <a href="{{ route('student.login') }}" class="font-semibold text-[#3b2670] underline-offset-4 hover:text-[#7c3aed] hover:underline">
                            Sign In Here
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Password visibility toggle
            document.querySelectorAll('[data-toggle-password]').forEach((btn) => {
                btn.addEventListener('click', () => {
                    const inputId = btn.getAttribute('data-toggle-password');
                    const input = document.getElementById(inputId);
                    if (!input) return;
                    input.type = input.type === 'password' ? 'text' : 'password';
                });
            });

            // Live Profile Photo Preview + Remove Option
            const photoInput = document.getElementById('reg-profile-image');
            const previewImg = document.getElementById('profile-preview-img');
            const previewIcon = document.getElementById('profile-preview-icon');
            const removeBtn = document.getElementById('remove-profile-image');
            const fileNameEl = document.getElementById('profile-file-name');

            if (photoInput && previewImg) {
                photoInput.addEventListener('change', (e) => {
                    const file = e.target.files && e.target.files[0];
                    if (!file) return;
                    const reader = new FileReader();
                    reader.onload = (ev) => {
                        previewImg.src = ev.target.result;
                        previewImg.classList.remove('hidden');
                        if (previewIcon) previewIcon.classList.add('hidden');
                        if (removeBtn) {
                            removeBtn.classList.remove('hidden');
                            removeBtn.classList.add('inline-flex');
                        }
                        if (fileNameEl) {
                            fileNameEl.textContent = file.name;
                            fileNameEl.classList.remove('hidden');
                        }
                    };
                    reader.readAsDataURL(file);
                });

                if (removeBtn) {
                    removeBtn.addEventListener('click', () => {
                        photoInput.value = '';
                        previewImg.src = '';
                        previewImg.classList.add('hidden');
                        if (previewIcon) previewIcon.classList.remove('hidden');
                        removeBtn.classList.add('hidden');
                        removeBtn.classList.remove('inline-flex');
                        if (fileNameEl) {
                            fileNameEl.textContent = '';
                            fileNameEl.classList.add('hidden');
                        }
                    });
                }
            }
        });
    </script>
@endsection
