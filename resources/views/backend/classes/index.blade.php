@extends('backend.master')

@section('title', 'Classes - Z Academy Admin')
@section('page_title', 'Classes')

@section('content')
    @php
        $classes = [
            [
                'id' => 1,
                'sl' => '01',
                'name' => 'HSC 2026 (2nd Year)',
                'image' => asset('assets/frontend/images/courses/course-1.jpg'),
                'status' => 'active',
            ],
            [
                'id' => 2,
                'sl' => '02',
                'name' => 'HSC 2027 (1st Year)',
                'image' => asset('assets/frontend/images/courses/course-2.jpg'),
                'status' => 'active',
            ],
            [
                'id' => 3,
                'sl' => '03',
                'name' => 'HSC 2028 (Foundation)',
                'image' => asset('assets/frontend/images/courses/course-3.jpg'),
                'status' => 'active',
            ],
            [
                'id' => 4,
                'sl' => '04',
                'name' => 'SSC 2026 (Class 10)',
                'image' => asset('assets/frontend/images/courses/course-4.jpg'),
                'status' => 'active',
            ],
            [
                'id' => 5,
                'sl' => '05',
                'name' => 'Class 09 (Academic)',
                'image' => asset('assets/frontend/images/courses/course-1.jpg'),
                'status' => 'active',
            ],
            [
                'id' => 6,
                'sl' => '06',
                'name' => 'University & Engineering Admission',
                'image' => asset('assets/frontend/images/courses/course-2.jpg'),
                'status' => 'inactive',
            ],
        ];
    @endphp

    <div class="space-y-6">
        <!-- Top Bar: Search, Status Filter & Add Class Button -->
        <div class="flex flex-col gap-3 rounded-2xl border border-slate-200/80 bg-white p-4 shadow-xs sm:flex-row sm:items-center sm:justify-between sm:p-5">
            <div class="flex flex-1 flex-col gap-3 sm:flex-row sm:items-center">
                <!-- Search Input -->
                <div class="relative w-full sm:max-w-xs">
                    <i data-lucide="search" class="pointer-events-none absolute left-3.5 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"></i>
                    <input
                        id="class-search-input"
                        type="text"
                        placeholder="Search class name..."
                        class="admin-input h-10 w-full rounded-xl border border-slate-200 bg-slate-50/70 pl-9 pr-3.5 text-xs text-slate-800 placeholder:text-slate-400 sm:text-sm"
                    >
                </div>

                <!-- Status Filter -->
                <div class="w-full sm:w-44">
                    <select
                        id="class-status-filter"
                        aria-label="Filter by status"
                        class="admin-input h-10 w-full rounded-xl border border-slate-200 bg-slate-50/70 px-3 text-xs font-medium text-slate-700 sm:text-sm"
                    >
                        <option value="all">All Status ({{ count($classes) }})</option>
                        <option value="active">Active (05)</option>
                        <option value="inactive">Inactive (01)</option>
                    </select>
                </div>
            </div>

            <!-- Top Add Class Button -->
            <div class="flex items-center justify-end">
                <button
                    id="top-add-class-btn"
                    type="button"
                    class="inline-flex h-10 w-full items-center justify-center gap-2 rounded-xl bg-[#3b2670] px-4 text-xs font-semibold text-white shadow-xs transition hover:bg-[#2d1b57] sm:w-auto sm:text-sm"
                >
                    <i data-lucide="plus" class="h-4 w-4"></i>
                    <span>Add Class</span>
                </button>
            </div>
        </div>

        <!-- Main Split Grid: Left Class List Table (8 Cols) + Right Add/Edit Class Form (4 Cols) -->
        <div class="grid grid-cols-1 items-start gap-6 xl:grid-cols-12">
            <!-- Left Column: Classes Data Table -->
            <div class="rounded-2xl border border-slate-200/80 bg-white shadow-xs xl:col-span-8">
                <div class="flex items-center justify-between border-b border-slate-100 px-5 py-4 sm:px-6">
                    <div class="flex items-center gap-2.5">
                        <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                            <i data-lucide="school" class="h-4 w-4"></i>
                        </span>
                        <div>
                            <h2 class="font-display text-base font-bold text-slate-900">Class List</h2>
                            <p class="text-xs text-slate-500">Manage all academic classes and visibility status</p>
                        </div>
                    </div>

                    <span id="class-count-badge" class="rounded-full bg-[#f4f0ff] px-3 py-1 text-xs font-bold text-[#3b2670]">
                        {{ count($classes) }} Classes
                    </span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full min-w-[540px] text-left text-sm">
                        <thead>
                            <tr class="border-b border-slate-100 bg-slate-50/60 text-[11px] font-bold uppercase tracking-wider text-slate-500">
                                <th class="w-16 px-5 py-3.5 sm:px-6">SL</th>
                                <th class="px-4 py-3.5">Class</th>
                                <th class="w-32 px-4 py-3.5">Status</th>
                                <th class="w-28 px-5 py-3.5 text-right sm:px-6">Action</th>
                            </tr>
                        </thead>
                        <tbody id="class-table-body" class="divide-y divide-slate-100">
                            @foreach ($classes as $item)
                                <tr
                                    class="admin-table-row transition-colors"
                                    data-class-row
                                    data-name="{{ strtolower($item['name']) }}"
                                    data-status="{{ $item['status'] }}"
                                >
                                    <!-- SL -->
                                    <td class="px-5 py-3.5 font-mono text-xs font-semibold text-slate-500 sm:px-6">
                                        #{{ $item['sl'] }}
                                    </td>

                                    <!-- Class Image + Name -->
                                    <td class="px-4 py-3.5">
                                        <div class="flex items-center gap-3.5">
                                            <div class="h-11 w-11 shrink-0 overflow-hidden rounded-xl border border-slate-200 bg-slate-100">
                                                <img
                                                    src="{{ $item['image'] }}"
                                                    alt="{{ $item['name'] }}"
                                                    class="h-full w-full object-cover"
                                                >
                                            </div>
                                            <div class="min-w-0">
                                                <div class="font-display text-sm font-bold text-slate-900">
                                                    {{ $item['name'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Status Badge -->
                                    <td class="px-4 py-3.5">
                                        @if ($item['status'] === 'active')
                                            <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-xs font-semibold text-emerald-700 ring-1 ring-emerald-200/80">
                                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                                Active
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1.5 rounded-full bg-slate-100 px-2.5 py-1 text-xs font-semibold text-slate-600 ring-1 ring-slate-200/80">
                                                <span class="h-1.5 w-1.5 rounded-full bg-slate-400"></span>
                                                Inactive
                                            </span>
                                        @endif
                                    </td>

                                    <!-- Actions -->
                                    <td class="px-5 py-3.5 text-right sm:px-6">
                                        <div class="inline-flex items-center justify-end gap-1.5">
                                            <button
                                                type="button"
                                                title="Edit Class"
                                                data-edit-class
                                                data-class-name="{{ $item['name'] }}"
                                                data-class-status="{{ $item['status'] }}"
                                                data-class-image="{{ $item['image'] }}"
                                                class="grid h-8 w-8 place-items-center rounded-lg border border-slate-200 text-slate-600 transition hover:border-[#3b2670]/30 hover:bg-[#f4f0ff] hover:text-[#3b2670]"
                                            >
                                                <i data-lucide="pencil" class="h-3.5 w-3.5"></i>
                                            </button>

                                            <button
                                                type="button"
                                                title="Delete Class"
                                                data-delete-class="{{ $item['name'] }}"
                                                class="grid h-8 w-8 place-items-center rounded-lg border border-slate-200 text-slate-500 transition hover:border-rose-200 hover:bg-rose-50 hover:text-rose-600"
                                            >
                                                <i data-lucide="trash-2" class="h-3.5 w-3.5"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Empty Search State -->
                <div id="class-empty-state" class="hidden px-6 py-12 text-center">
                    <div class="mx-auto grid h-12 w-12 place-items-center rounded-2xl bg-slate-100 text-slate-400">
                        <i data-lucide="search-x" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-3 font-display text-sm font-bold text-slate-800">No matching classes found</h3>
                    <p class="mt-1 text-xs text-slate-500">Try clearing your search query or switching the status filter.</p>
                </div>
            </div>

            <!-- Right Column: Add / Edit Class Form Card -->
            <div
                id="class-form-card"
                class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs transition-all sm:p-6 xl:sticky xl:top-22 xl:col-span-4"
            >
                <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                    <div class="flex items-center gap-2.5">
                        <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#3b2670] text-white">
                            <i id="class-form-icon" data-lucide="plus" class="h-4 w-4"></i>
                        </span>
                        <div>
                            <h2 id="class-form-title" class="font-display text-base font-bold text-slate-900">
                                Add New Class
                            </h2>
                            <p id="class-form-subtitle" class="text-xs text-slate-500">
                                Create a new academic class
                            </p>
                        </div>
                    </div>

                    <button
                        id="class-form-cancel"
                        type="button"
                        class="hidden rounded-lg border border-slate-200 px-2.5 py-1 text-xs font-semibold text-slate-600 transition hover:bg-slate-100"
                    >
                        Cancel
                    </button>
                </div>

                <form id="class-Quick-form" action="#" method="POST" enctype="multipart/form-data" class="mt-5 space-y-4">
                    @csrf

                    <!-- 1. Class Name -->
                    <div>
                        <label for="class_name" class="mb-1.5 block text-xs font-bold text-slate-700">
                            Class Name <span class="text-rose-500">*</span>
                        </label>
                        <input
                            id="class_name"
                            name="name"
                            type="text"
                            required
                            placeholder="e.g., HSC 2028 (Science)"
                            class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                        >
                    </div>

                    <!-- 2. Class Image (Optional) -->
                    <div>
                        <div class="mb-1.5 flex items-center justify-between">
                            <label for="class_image" class="block text-xs font-bold text-slate-700">
                                Class Image
                            </label>
                            <span class="text-[11px] font-medium text-slate-400">Optional (1:1 ratio)</span>
                        </div>

                        <label
                            for="class_image"
                            class="group relative flex cursor-pointer items-center gap-3.5 rounded-xl border border-dashed border-slate-300 bg-slate-50/60 p-3 transition hover:border-[#3b2670] hover:bg-[#f4f0ff]/40"
                        >
                            <!-- Image Preview Box -->
                            <div class="grid h-14 w-14 shrink-0 place-items-center overflow-hidden rounded-xl border border-slate-200 bg-white text-slate-400">
                                <img
                                    id="class-image-preview"
                                    src=""
                                    alt="Class Preview"
                                    class="hidden h-full w-full object-cover"
                                >
                                <i id="class-image-placeholder" data-lucide="image-plus" class="h-5 w-5 transition group-hover:text-[#3b2670]"></i>
                            </div>

                            <div class="min-w-0 flex-1">
                                <div id="class-image-label" class="truncate text-xs font-semibold text-slate-700 group-hover:text-[#3b2670]">
                                    Click to upload image
                                </div>
                                <p class="mt-0.5 text-[11px] text-slate-400">
                                    PNG, JPG or WEBP (Max 2MB)
                                </p>
                            </div>

                            <input
                                id="class_image"
                                name="image"
                                type="file"
                                accept="image/*"
                                class="sr-only"
                            >
                        </label>
                    </div>

                    <!-- 3. Status -->
                    <div>
                        <label for="class_status" class="mb-1.5 block text-xs font-bold text-slate-700">
                            Status <span class="text-rose-500">*</span>
                        </label>
                        <select
                            id="class_status"
                            name="status"
                            class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm font-medium text-slate-800"
                        >
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button
                            id="class-form-submit"
                            type="submit"
                            class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-xl bg-[#3b2670] px-5 text-sm font-semibold text-white shadow-xs transition hover:bg-[#2d1b57]"
                        >
                            <i data-lucide="check" class="h-4 w-4"></i>
                            <span id="class-form-submit-text">Save Class</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

