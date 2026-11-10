@php
    $isEdit = isset($instructor) && $instructor !== null;
    $selectedSubjects = old(
        'subjects',
        $isEdit ? $instructor->subjects->pluck('id')->all() : []
    );

    $existingSocials = old(
        'social_links',
        $isEdit && is_array($instructor->social_links) && count($instructor->social_links) > 0
            ? $instructor->social_links
            : [
                ['title' => 'Facebook', 'icon' => 'facebook', 'url' => ''],
            ]
    );
@endphp

<div class="grid grid-cols-1 items-start gap-6 xl:grid-cols-12">
    <!-- Left 8 Columns: Basic Info + Dynamic Social Media Repeater -->
    <div class="space-y-6 xl:col-span-8">
        <!-- Card 1: Basic Information -->
        <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs sm:p-6">
            <div class="flex items-center gap-2.5 border-b border-slate-100 pb-4">
                <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                    <i data-lucide="user-check" class="h-4 w-4"></i>
                </span>
                <div>
                    <h2 class="font-display text-base font-bold text-slate-900">Basic Information</h2>
                    <p class="text-xs text-slate-500">Personal, academic, and contact details of the instructor</p>
                </div>
            </div>

            <div class="mt-5 grid grid-cols-1 gap-4 sm:grid-cols-2">
                <!-- Full Name -->
                <div>
                    <label for="name" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Full Name <span class="text-rose-500">*</span>
                    </label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        value="{{ old('name', $isEdit ? $instructor->name : '') }}"
                        required
                        placeholder="e.g., Niaz Morshed Faysal"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                    >
                </div>

                <!-- Phone Number (Login ID) -->
                <div>
                    <label for="phone" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Phone Number (Login ID) <span class="text-rose-500">*</span>
                    </label>
                    <input
                        id="phone"
                        name="phone"
                        type="text"
                        value="{{ old('phone', $isEdit ? $instructor->phone : '') }}"
                        required
                        placeholder="e.g., 01700000005"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                    >
                </div>

                <!-- WhatsApp Number -->
                <div>
                    <label for="whatsapp_number" class="mb-1.5 block text-xs font-bold text-slate-700">
                        WhatsApp Number
                    </label>
                    <input
                        id="whatsapp_number"
                        name="whatsapp_number"
                        type="text"
                        value="{{ old('whatsapp_number', $isEdit ? $instructor->whatsapp_number : '') }}"
                        placeholder="e.g., 01700000005"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                    >
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Email Address
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email', $isEdit ? $instructor->email : '') }}"
                        placeholder="e.g., teacher@zacademy.edu.bd"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                    >
                </div>

                <!-- Designation / Qualification -->
                <div>
                    <label for="designation" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Qualification / Designation
                    </label>
                    <input
                        id="designation"
                        name="designation"
                        type="text"
                        value="{{ old('designation', $isEdit ? $instructor->designation : '') }}"
                        placeholder="e.g., B.Sc. in EEE, BUET"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                    >
                </div>

                <!-- Teaching Experience -->
                <div>
                    <label for="experience" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Teaching Experience
                    </label>
                    <input
                        id="experience"
                        name="experience"
                        type="text"
                        value="{{ old('experience', $isEdit ? $instructor->experience : '') }}"
                        placeholder="e.g., 6+ Years Experience"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                    >
                </div>

                <!-- Gender -->
                <div>
                    <label for="gender" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Gender <span class="text-rose-500">*</span>
                    </label>
                    @php
                        $currentGender = old('gender', $isEdit ? $instructor->gender : 'male');
                    @endphp
                    <select
                        id="gender"
                        name="gender"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm font-medium text-slate-800"
                    >
                        <option value="male" @selected($currentGender === 'male')>Male</option>
                        <option value="female" @selected($currentGender === 'female')>Female</option>
                        <option value="other" @selected($currentGender === 'other')>Other</option>
                    </select>
                </div>

                <!-- Date of Birth -->
                <div>
                    <label for="date_of_birth" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Date of Birth
                    </label>
                    <input
                        id="date_of_birth"
                        name="date_of_birth"
                        type="date"
                        value="{{ old('date_of_birth', $isEdit && $instructor->date_of_birth ? $instructor->date_of_birth->format('Y-m-d') : '') }}"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900"
                    >
                </div>

                <!-- Address -->
                <div class="sm:col-span-2">
                    <label for="address" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Address
                    </label>
                    <input
                        id="address"
                        name="address"
                        type="text"
                        value="{{ old('address', $isEdit ? $instructor->address : '') }}"
                        placeholder="e.g., Dhanmondi, Dhaka"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                    >
                </div>

                <!-- Short Bio -->
                <div class="sm:col-span-2">
                    <label for="bio" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Short Bio / About Instructor
                    </label>
                    <textarea
                        id="bio"
                        name="bio"
                        rows="3"
                        placeholder="Write a brief academic overview of the instructor..."
                        class="admin-input w-full rounded-xl border border-slate-200 bg-slate-50/60 p-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                    >{{ old('bio', $isEdit ? $instructor->bio : '') }}</textarea>
                </div>
            </div>
        </div>

        <!-- Card 2: Repeatable Social Media Links -->
        <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs sm:p-6">
            <div class="flex flex-wrap items-center justify-between gap-3 border-b border-slate-100 pb-4">
                <div class="flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                        <i data-lucide="share-2" class="h-4 w-4"></i>
                    </span>
                    <div>
                        <h2 class="font-display text-base font-bold text-slate-900">Social Media Links</h2>
                        <p class="text-xs text-slate-500">Select social icon class, default title, and paste profile URL</p>
                    </div>
                </div>

                <button
                    id="add-social-row-btn"
                    type="button"
                    class="inline-flex h-9 items-center gap-1.5 rounded-xl bg-[#f4f0ff] px-3.5 text-xs font-bold text-[#3b2670] transition hover:bg-[#3b2670] hover:text-white"
                >
                    <i data-lucide="plus" class="h-3.5 w-3.5"></i>
                    <span>Add Social Link</span>
                </button>
            </div>

            <div
                id="social-links-container"
                data-icon-options='@json($socialIconOptions)'
                class="mt-4 space-y-3"
            >
                @foreach ($existingSocials as $idx => $social)
                    @php
                        $rowIcon = $social['icon'] ?? 'facebook';
                        $rowTitle = $social['title'] ?? 'Facebook';
                        $rowUrl = $social['url'] ?? '';
                    @endphp
                    <div data-social-row class="grid grid-cols-1 gap-3 rounded-xl border border-slate-200/80 bg-slate-50/50 p-3.5 sm:grid-cols-12 sm:items-end">
                        <!-- Social Icon Class Select (4 Cols) -->
                        <div class="sm:col-span-4">
                            <label class="mb-1 block text-[11px] font-bold uppercase tracking-wider text-slate-500">
                                Icon Class
                            </label>
                            <select
                                name="social_links[{{ $idx }}][icon]"
                                data-social-icon-select
                                class="admin-input h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-xs font-medium text-slate-800 sm:text-sm"
                            >
                                @foreach ($socialIconOptions as $opt)
                                    <option
                                        value="{{ $opt['icon'] }}"
                                        data-default-title="{{ $opt['title'] }}"
                                        @selected($rowIcon === $opt['icon'])
                                    >
                                        {{ $opt['label'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Platform Title (3 Cols) -->
                        <div class="sm:col-span-3">
                            <label class="mb-1 block text-[11px] font-bold uppercase tracking-wider text-slate-500">
                                Title
                            </label>
                            <input
                                type="text"
                                name="social_links[{{ $idx }}][title]"
                                data-social-title-input
                                value="{{ $rowTitle }}"
                                placeholder="e.g., Facebook"
                                class="admin-input h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-xs text-slate-900 sm:text-sm"
                            >
                        </div>

                        <!-- Profile URL (4 Cols) -->
                        <div class="sm:col-span-4">
                            <label class="mb-1 block text-[11px] font-bold uppercase tracking-wider text-slate-500">
                                Profile Link / URL
                            </label>
                            <input
                                type="text"
                                name="social_links[{{ $idx }}][url]"
                                value="{{ $rowUrl }}"
                                placeholder="https://facebook.com/..."
                                class="admin-input h-10 w-full rounded-xl border border-slate-200 bg-white px-3 text-xs text-slate-900 sm:text-sm"
                            >
                        </div>

                        <!-- Remove Button (1 Col) -->
                        <div class="flex justify-end sm:col-span-1">
                            <button
                                type="button"
                                data-remove-social-row
                                title="Remove Link"
                                class="grid h-10 w-10 place-items-center rounded-xl border border-slate-200 bg-white text-slate-400 transition hover:border-rose-200 hover:bg-rose-50 hover:text-rose-600"
                            >
                                <i data-lucide="trash-2" class="h-4 w-4"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Right 4 Columns: Subject Assignment + Profile Image + Password & Status -->
    <div class="space-y-6 xl:col-span-4">
        <!-- Card 1: Subject Wise Assignment -->
        <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs sm:p-6">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div class="flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                        <i data-lucide="book-marked" class="h-4 w-4"></i>
                    </span>
                    <div>
                        <h2 class="font-display text-base font-bold text-slate-900">Assign Subjects</h2>
                        <p class="text-xs text-slate-500">Select subjects taught</p>
                    </div>
                </div>

                <a
                    href="{{ route('admin.subjects.index') }}"
                    class="text-xs font-bold text-[#3b2670] hover:underline"
                >
                    + Subjects
                </a>
            </div>

            <div class="mt-4">
                @if ($subjects->isNotEmpty())
                    <div class="grid max-h-60 grid-cols-1 gap-2 overflow-y-auto pr-1">
                        @foreach ($subjects as $subject)
                            @php
                                $isChecked = in_array($subject->id, $selectedSubjects);
                            @endphp
                            <label class="flex cursor-pointer items-center justify-between rounded-xl border border-slate-200/80 bg-slate-50/60 px-3.5 py-2.5 transition hover:border-[#3b2670]/40 hover:bg-[#f4f0ff]/40">
                                <span class="flex items-center gap-2.5">
                                    <span class="grid h-7 w-7 shrink-0 place-items-center overflow-hidden rounded-lg bg-[#f4f0ff] text-[#3b2670]">
                                        @if ($subject->imageUrl())
                                            <img src="{{ $subject->imageUrl() }}" alt="{{ $subject->name }}" class="h-full w-full object-cover">
                                        @else
                                            <i data-lucide="book-open" class="h-3.5 w-3.5"></i>
                                        @endif
                                    </span>
                                    <span class="text-xs font-bold text-slate-800 sm:text-sm">{{ $subject->name }}</span>
                                </span>
                                <input
                                    type="checkbox"
                                    name="subjects[]"
                                    value="{{ $subject->id }}"
                                    @checked($isChecked)
                                    class="h-4 w-4 rounded border-slate-300 text-[#3b2670] focus:ring-[#3b2670]"
                                >
                            </label>
                        @endforeach
                    </div>
                @else
                    <div class="rounded-xl border border-dashed border-slate-200 bg-slate-50/60 p-4 text-center">
                        <p class="text-xs text-slate-500">No active subjects found.</p>
                        <a
                            href="{{ route('admin.subjects.index') }}"
                            class="mt-2 inline-flex items-center gap-1 text-xs font-bold text-[#3b2670] hover:underline"
                        >
                            <span>Create Subjects First</span>
                            <i data-lucide="arrow-right" class="h-3.5 w-3.5"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>

        <!-- Card 2: Profile Icon / Image (Auto WebP via Intervention Image) -->
        <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs sm:p-6">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div class="flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                        <i data-lucide="camera" class="h-4 w-4"></i>
                    </span>
                    <div>
                        <h2 class="font-display text-base font-bold text-slate-900">Profile Image</h2>
                        <p class="text-xs text-slate-500">Auto WebP optimization</p>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                @php
                    $existingImg = $isEdit ? $instructor->profileImageUrl() : null;
                @endphp
                <label
                    for="class_image"
                    class="group relative flex cursor-pointer items-center gap-3.5 rounded-xl border border-dashed border-slate-300 bg-slate-50/60 p-3.5 transition hover:border-[#3b2670] hover:bg-[#f4f0ff]/40"
                >
                    <div class="grid h-16 w-16 shrink-0 place-items-center overflow-hidden rounded-xl border border-slate-200 bg-white text-slate-400">
                        <img
                            id="class-image-preview"
                            src="{{ $existingImg ?? '' }}"
                            alt="Instructor Preview"
                            class="{{ $existingImg ? '' : 'hidden' }} h-full w-full object-cover"
                        >
                        <i
                            id="class-image-placeholder"
                            data-lucide="image-plus"
                            class="{{ $existingImg ? 'hidden' : '' }} h-6 w-6 transition group-hover:text-[#3b2670]"
                        ></i>
                    </div>

                    <div class="min-w-0 flex-1">
                        <div id="class-image-label" class="truncate text-xs font-semibold text-slate-700 group-hover:text-[#3b2670]">
                            {{ $existingImg ? 'Change profile image' : 'Click to upload photo' }}
                        </div>
                        <p class="mt-0.5 text-[11px] text-slate-400">
                            PNG, JPG or WEBP (Saved as WebP)
                        </p>
                    </div>

                    <input
                        id="class_image"
                        name="profile_image"
                        type="file"
                        accept="image/*"
                        class="sr-only"
                    >
                </label>
            </div>
        </div>

        <!-- Card 3: Security, Status & Submit -->
        <div class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs sm:p-6">
            <div class="flex items-center gap-2.5 border-b border-slate-100 pb-4">
                <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#3b2670] text-white">
                    <i data-lucide="shield-check" class="h-4 w-4"></i>
                </span>
                <div>
                    <h2 class="font-display text-base font-bold text-slate-900">Account &amp; Status</h2>
                    <p class="text-xs text-slate-500">Login password and account status</p>
                </div>
            </div>

            <div class="mt-4 space-y-4">
                <!-- Password -->
                <div>
                    <label for="instructor_password" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Password
                        @if (! $isEdit)
                            <span class="text-rose-500">*</span>
                        @else
                            <span class="font-normal text-slate-400">(Optional)</span>
                        @endif
                    </label>
                    <div class="relative">
                        <input
                            id="instructor_password"
                            name="password"
                            type="password"
                            @if (! $isEdit) required @endif
                            placeholder="{{ $isEdit ? 'Leave blank to keep current' : 'Minimum 6 characters' }}"
                            class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 pl-3.5 pr-10 text-sm text-slate-900 placeholder:text-slate-400"
                        >
                        <button
                            type="button"
                            data-toggle-password="instructor_password"
                            aria-label="Toggle password visibility"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-700"
                        >
                            <i data-lucide="eye" class="eye-open h-4 w-4"></i>
                            <i data-lucide="eye-off" class="eye-closed hidden h-4 w-4"></i>
                        </button>
                    </div>
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Account Status <span class="text-rose-500">*</span>
                    </label>
                    @php
                        $currentStatus = old('status', $isEdit ? ($instructor->status?->value ?? 'active') : 'active');
                    @endphp
                    <select
                        id="status"
                        name="status"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm font-medium text-slate-800"
                    >
                        <option value="active" @selected($currentStatus === 'active')>Active</option>
                        <option value="inactive" @selected($currentStatus === 'inactive')>Inactive</option>
                    </select>
                </div>

                <!-- Sort Order -->
                <div>
                    <label for="sort_order" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Sort Order <span class="text-xs font-normal text-slate-400">(Lower numbers appear first)</span>
                    </label>
                    <input
                        id="sort_order"
                        name="sort_order"
                        type="number"
                        min="0"
                        value="{{ old('sort_order', $isEdit ? ($instructor->sort_order ?? 0) : 0) }}"
                        placeholder="0"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm font-medium text-slate-800 placeholder:text-slate-400"
                    >
                </div>

                <!-- Submit & Cancel -->
                <div class="flex flex-col gap-2.5 pt-2">
                    <button
                        type="submit"
                        class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-xl bg-[#3b2670] px-5 text-sm font-semibold text-white shadow-xs transition hover:bg-[#2d1b57]"
                    >
                        <i data-lucide="check" class="h-4 w-4"></i>
                        <span>{{ $isEdit ? 'Update Instructor' : 'Save Instructor' }}</span>
                    </button>

                    <a
                        href="{{ route('admin.instructors.index') }}"
                        class="inline-flex h-10 w-full items-center justify-center rounded-xl border border-slate-200 bg-white text-xs font-semibold text-slate-600 transition hover:bg-slate-50"
                    >
                        Cancel &amp; Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

