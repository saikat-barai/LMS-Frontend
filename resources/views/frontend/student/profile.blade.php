@extends('frontend.student.layout')

@section('student_content')
    <div class="space-y-6">
        <!-- Personal Profile Settings Card -->
        <div class="rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:p-6">
            <div class="flex flex-col justify-between gap-4 border-b border-slate-100 pb-5 sm:flex-row sm:items-center">
                <div>
                    <h2 class="font-display text-lg font-bold tracking-tight text-slate-900 sm:text-xl">
                        Student Profile Information
                    </h2>
                    <p class="mt-0.5 text-xs text-slate-500 sm:text-sm">
                        Update your personal details, academic class, contact numbers, and address
                    </p>
                </div>

                <!-- Larger Avatar Upload Preview -->
                <div class="flex items-center gap-3.5">
                    <div class="relative flex h-20 w-20 shrink-0 items-center justify-center overflow-hidden rounded-full border-2 border-[#3b2670]/25 bg-slate-100 text-[#3b2670] shadow-sm sm:h-24 sm:w-24">
                        <img id="edit-profile-img" data-default-src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" src="{{ asset('assets/frontend/images/instructor-niaz.jpg') }}" alt="Tasnim Mahi" class="h-full w-full object-cover">
                    </div>
                    <div class="flex flex-wrap items-center gap-2">
                        <label class="inline-flex cursor-pointer items-center justify-center gap-1.5 rounded-lg border border-[#3b2670]/20 bg-[#f4f0ff] px-3.5 py-2 text-xs font-semibold text-[#3b2670] transition-colors hover:bg-[#3b2670] hover:text-white">
                            <i data-lucide="upload" class="h-3.5 w-3.5"></i>
                            <span>Change Photo</span>
                            <input id="edit-profile-input" type="file" class="hidden" accept="image/*">
                        </label>
                        <button
                            id="remove-edit-profile-img"
                            type="button"
                            class="hidden items-center gap-1 rounded-lg border border-rose-200 bg-rose-50 px-3 py-2 text-xs font-semibold text-rose-600 transition-colors hover:bg-rose-600 hover:text-white"
                        >
                            <i data-lucide="trash-2" class="h-3.5 w-3.5"></i>
                            <span>Remove</span>
                        </button>
                    </div>
                </div>
            </div>

            <form action="#" method="GET" class="mt-5 space-y-4">
                <!-- Row 1: Student Full Name & Student Phone Number -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">Student Full Name <span class="text-rose-500">*</span></label>
                        <input
                            type="text"
                            required
                            value="Tasnim Mahi"
                            class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">Student Phone Number <span class="text-rose-500">*</span></label>
                        <input
                            type="tel"
                            required
                            value="01712-345678"
                            class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>
                </div>

                <!-- Row 2: Guardian Phone Number & WhatsApp Number -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">Guardian Phone Number <span class="text-rose-500">*</span></label>
                        <input
                            type="tel"
                            required
                            value="01819-000000"
                            class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">WhatsApp Number <span class="text-rose-500">*</span></label>
                        <input
                            type="tel"
                            required
                            value="01712-345678"
                            class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>
                </div>

                <!-- Row 3: Email Address, Date of Birth & Gender -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">Email Address</label>
                        <input
                            type="email"
                            value="tasnim.mahi@example.com"
                            class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">Date of Birth <span class="text-rose-500">*</span></label>
                        <input
                            type="date"
                            required
                            value="2009-05-14"
                            class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">Gender <span class="text-rose-500">*</span></label>
                        <select required class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white">
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <!-- Row 4: Current Class & Batch -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">Current Class <span class="text-rose-500">*</span></label>
                        <select required class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white">
                            <option value="class-8">Class 8</option>
                            <option value="class-9">Class 9</option>
                            <option value="class-10">Class 10 (SSC)</option>
                            <option value="class-11" selected>Class 11 (HSC 1st Year)</option>
                            <option value="class-12">Class 12 (HSC 2nd Year)</option>
                            <option value="admission">University / Medical Admission</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">Batch</label>
                        <select class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white">
                            <option value="">Default / None</option>
                            <option value="hsc-27">HSC 27 Batch</option>
                            <option value="hsc-28" selected>HSC 28 Batch</option>
                            <option value="ssc-26">SSC 26 Batch</option>
                            <option value="ssc-27">SSC 27 Batch</option>
                        </select>
                    </div>
                </div>

                <!-- Row 5: School / College Name & Present Address -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">School / College Name <span class="text-rose-500">*</span></label>
                        <input
                            type="text"
                            required
                            value="Notre Dame College, Dhaka"
                            class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">Present Address <span class="text-rose-500">*</span></label>
                        <input
                            type="text"
                            required
                            value="House 14, Road 07, Dhanmondi, Dhaka-1205"
                            class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>
                </div>

                <div class="flex justify-end pt-2">
                    <button type="submit" class="btn-primary px-5 py-2.5 text-xs sm:text-sm">
                        <i data-lucide="save" class="h-4 w-4"></i>
                        <span>Save Profile Changes</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Change Password Card -->
        <div class="rounded-2xl border border-[#3b2670]/12 bg-white p-5 shadow-[0_8px_26px_-10px_rgba(26,19,64,0.08)] sm:p-6">
            <h3 class="font-display text-base font-bold text-slate-900 sm:text-lg">
                Security &amp; Change Password
            </h3>
            <p class="mt-0.5 text-xs text-slate-500">
                Keep your account secure with a strong password
            </p>

            <form action="#" method="GET" class="mt-4 space-y-4">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">Current Password</label>
                        <input
                            type="password"
                            placeholder="••••••••"
                            class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">New Password</label>
                        <input
                            type="password"
                            placeholder="Min. 6 characters"
                            class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 sm:text-sm">Confirm New Password</label>
                        <input
                            type="password"
                            placeholder="Re-enter new password"
                            class="mt-1.5 w-full rounded-lg border border-slate-200 bg-slate-50/60 px-3.5 py-2.5 text-sm text-slate-900 outline-none transition-colors focus:border-[#6d28d9] focus:bg-white"
                        >
                    </div>
                </div>

                <div class="flex justify-end pt-1">
                    <button type="submit" class="inline-flex items-center gap-1.5 rounded-lg border border-[#3b2670] bg-white px-4 py-2.5 text-xs font-semibold text-[#3b2670] transition-colors hover:bg-[#3b2670] hover:text-white sm:text-sm">
                        <i data-lucide="key-round" class="h-4 w-4"></i>
                        <span>Update Password</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const fileInput = document.getElementById('edit-profile-input');
            const previewImg = document.getElementById('edit-profile-img');
            const removeBtn = document.getElementById('remove-edit-profile-img');

            if (fileInput && previewImg) {
                const defaultSrc = previewImg.getAttribute('data-default-src');

                fileInput.addEventListener('change', (e) => {
                    const file = e.target.files && e.target.files[0];
                    if (!file) return;
                    const reader = new FileReader();
                    reader.onload = (ev) => {
                        previewImg.src = ev.target.result;
                        if (removeBtn) {
                            removeBtn.classList.remove('hidden');
                            removeBtn.classList.add('inline-flex');
                        }
                    };
                    reader.readAsDataURL(file);
                });

                if (removeBtn) {
                    removeBtn.addEventListener('click', () => {
                        fileInput.value = '';
                        previewImg.src = defaultSrc;
                        removeBtn.classList.add('hidden');
                        removeBtn.classList.remove('inline-flex');
                    });
                }
            }
        });
    </script>
@endsection
