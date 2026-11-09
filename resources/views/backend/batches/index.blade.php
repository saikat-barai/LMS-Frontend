@extends('backend.master')

@section('title', 'Batches - Z Academy Admin')
@section('page_title', 'Batches')

@section('content')
    <div class="grid grid-cols-1 items-start gap-6 xl:grid-cols-12">
        <!-- Left Column: Batches Data Table (8 Cols) -->
        <div class="overflow-hidden rounded-2xl border border-slate-200/80 bg-white shadow-xs xl:col-span-8">
            <div class="flex flex-col gap-3 border-b border-slate-100 px-5 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                <div class="flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                        <i data-lucide="layers" class="h-4 w-4"></i>
                    </span>
                    <div>
                        <h2 class="font-display text-base font-bold text-slate-900">Batch List</h2>
                        <p class="text-xs text-slate-500">All academic batches under respective classes</p>
                    </div>
                </div>

                <span class="rounded-full bg-[#f4f0ff] px-3 py-1 text-xs font-bold text-[#3b2670]">
                    {{ $batches->total() }} {{ $batches->total() === 1 ? 'Batch' : 'Batches' }}
                </span>
            </div>

            @if (!$tableReady)
                <div class="m-5 rounded-xl border border-amber-200 bg-amber-50/70 p-4 text-xs text-amber-800">
                    <div class="flex items-start gap-2.5">
                        <i data-lucide="alert-triangle" class="mt-0.5 h-4 w-4 shrink-0 text-amber-600"></i>
                        <div>
                            <p class="font-bold">Migration Pending</p>
                            <p class="mt-0.5 text-amber-700">The <code>batches</code> table has not been migrated to the database yet. Please run <code>php artisan migrate</code> whenever you are ready.</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="overflow-x-auto">
                <table class="w-full min-w-[580px] text-left text-sm">
                    <thead>
                        <tr class="border-b border-slate-100 bg-slate-50/60 text-[11px] font-bold uppercase tracking-wider text-slate-500">
                            <th class="px-5 py-3.5 sm:px-6">Batch Name</th>
                            <th class="px-4 py-3.5">Academic Class</th>
                            <th class="w-24 px-4 py-3.5 text-center">Order</th>
                            <th class="w-28 px-4 py-3.5 text-center">Featured</th>
                            <th class="w-32 px-4 py-3.5">Status</th>
                            <th class="w-28 px-5 py-3.5 text-right sm:px-6">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse ($batches as $item)
                            <tr class="admin-table-row transition-colors">
                                <!-- Batch Name & Thumbnail -->
                                <td class="px-5 py-3.5 sm:px-6">
                                    <div class="flex items-center gap-3.5">
                                        <div class="grid h-11 w-11 shrink-0 place-items-center overflow-hidden rounded-xl border border-slate-200 bg-[#f4f0ff] text-[#3b2670]">
                                            @if ($item->imageUrl())
                                                <img
                                                    src="{{ $item->imageUrl() }}"
                                                    alt="{{ $item->name }}"
                                                    class="h-full w-full object-cover"
                                                >
                                            @else
                                                <i data-lucide="layers" class="h-5 w-5"></i>
                                            @endif
                                        </div>
                                        <div class="min-w-0">
                                            <div class="font-display text-sm font-bold text-slate-900">
                                                {{ $item->name }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <!-- Academic Class -->
                                <td class="px-4 py-3.5">
                                    @if ($item->academicClass)
                                        <span class="inline-flex items-center gap-1.5 rounded-lg bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                                            <i data-lucide="school" class="h-3.5 w-3.5"></i>
                                            <span>{{ $item->academicClass->name }}</span>
                                        </span>
                                    @else
                                        <span class="text-xs text-slate-400">Unassigned</span>
                                    @endif
                                </td>

                                <!-- Sort Order -->
                                <td class="px-4 py-3.5 text-center">
                                    <span class="inline-flex items-center justify-center rounded-md bg-slate-100 px-2 py-0.5 font-mono text-xs font-semibold text-slate-700">
                                        {{ $item->sort_order ?? 0 }}
                                    </span>
                                </td>

                                <!-- Featured Status -->
                                <td class="px-4 py-3.5 text-center">
                                    @if ($item->is_featured)
                                        <span class="inline-flex items-center gap-1 rounded-full bg-amber-50 px-2.5 py-1 text-xs font-bold text-amber-700 ring-1 ring-amber-200">
                                            <svg class="h-3.5 w-3.5 fill-amber-500 text-amber-500" viewBox="0 0 24 24">
                                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                            </svg>
                                            <span>Featured</span>
                                        </span>
                                    @else
                                        <span class="text-xs text-slate-400">—</span>
                                    @endif
                                </td>

                                <!-- Status Badge -->
                                <td class="px-4 py-3.5">
                                    @if ($item->status?->value === 'active')
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
                                            title="Edit Batch"
                                            data-edit-batch
                                            data-update-url="{{ route('admin.batches.update', $item) }}"
                                            data-batch-name="{{ $item->name }}"
                                            data-batch-class-id="{{ $item->class_id }}"
                                            data-batch-class-name="{{ $item->academicClass?->name ?? '' }}"
                                            data-batch-featured="{{ $item->is_featured ? '1' : '0' }}"
                                            data-batch-sort-order="{{ $item->sort_order ?? 0 }}"
                                            data-batch-status="{{ $item->status?->value ?? 'active' }}"
                                            data-batch-image="{{ $item->imageUrl() ?? '' }}"
                                            class="grid h-8 w-8 place-items-center rounded-lg border border-slate-200 text-slate-600 transition hover:border-[#3b2670]/30 hover:bg-[#f4f0ff] hover:text-[#3b2670]"
                                        >
                                            <i data-lucide="pencil" class="h-3.5 w-3.5"></i>
                                        </button>

                                        <form
                                            action="{{ route('admin.batches.destroy', $item) }}"
                                            method="POST"
                                            class="inline-block"
                                            onsubmit="return confirm('Are you sure you want to delete this batch?');"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                title="Delete Batch"
                                                class="grid h-8 w-8 place-items-center rounded-lg border border-slate-200 text-slate-500 transition hover:border-rose-200 hover:bg-rose-50 hover:text-rose-600"
                                            >
                                                <i data-lucide="trash-2" class="h-3.5 w-3.5"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-14 text-center">
                                    <div class="mx-auto grid h-12 w-12 place-items-center rounded-2xl bg-[#f4f0ff] text-[#3b2670]">
                                        <i data-lucide="layers" class="h-6 w-6"></i>
                                    </div>
                                    <h3 class="mt-3 font-display text-sm font-bold text-slate-800">No batches added yet</h3>
                                    <p class="mt-1 text-xs text-slate-500">Use the form on the right to create your first academic batch.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Reusable System Pagination -->
            {{ $batches->links('backend.partials.pagination') }}
        </div>

        <!-- Right Column: Add / Edit Batch Form Card (4 Cols) -->
        <div
            id="batch-form-card"
            class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs transition-all sm:p-6 xl:sticky xl:top-22 xl:col-span-4"
        >
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div class="flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#3b2670] text-white">
                        <i data-lucide="plus" class="h-4 w-4"></i>
                    </span>
                    <div>
                        <h2 id="batch-form-title" class="font-display text-base font-bold text-slate-900">
                            Add New Batch
                        </h2>
                        <p id="batch-form-subtitle" class="text-xs text-slate-500">
                            Create a new batch under a class
                        </p>
                    </div>
                </div>

                <button
                    id="batch-form-cancel"
                    type="button"
                    class="hidden rounded-lg border border-slate-200 px-2.5 py-1 text-xs font-semibold text-slate-600 transition hover:bg-slate-100"
                >
                    Cancel
                </button>
            </div>

            <form
                id="batch-quick-form"
                action="{{ route('admin.batches.store') }}"
                data-store-url="{{ route('admin.batches.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="mt-5 space-y-4"
            >
                @csrf
                <input type="hidden" name="_method" id="batch-form-method" value="POST">

                <!-- 1. Academic Class (System-Aligned Custom Dropdown) -->
                <div>
                    <label class="mb-1.5 block text-xs font-bold text-slate-700">
                        Select Class <span class="text-rose-500">*</span>
                    </label>

                    <!-- Hidden Input to store chosen class_id for submission -->
                    <input
                        type="hidden"
                        name="class_id"
                        id="batch_class_id"
                        value="{{ old('class_id') }}"
                        required
                    >

                    <!-- Custom Dropdown Container -->
                    <div id="custom-class-dropdown" class="relative">
                        <!-- Trigger Button -->
                        <button
                            id="class-dropdown-trigger"
                            type="button"
                            aria-haspopup="listbox"
                            aria-expanded="false"
                            class="admin-input flex h-11 w-full items-center justify-between rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-left text-xs text-slate-700 transition focus:border-[#3b2670] focus:bg-white focus:outline-none sm:text-sm"
                        >
                            <span class="flex items-center gap-2 truncate">
                                <span class="grid h-6 w-6 shrink-0 place-items-center rounded-md bg-[#f4f0ff] text-[#3b2670]">
                                    <i data-lucide="school" class="h-3.5 w-3.5"></i>
                                </span>
                                <span id="class-dropdown-selected-label" class="font-medium text-slate-700">
                                    @php
                                        $initialClass = $classes->firstWhere('id', old('class_id'));
                                    @endphp
                                    {{ $initialClass ? $initialClass->name : 'Choose an Academic Class...' }}
                                </span>
                            </span>
                            <i data-lucide="chevron-down" id="class-dropdown-chevron" class="h-4 w-4 shrink-0 text-slate-400 transition-transform duration-200"></i>
                        </button>

                        <!-- Floating Dropdown Menu -->
                        <div
                            id="class-dropdown-menu"
                            class="absolute left-0 top-full z-30 mt-1.5 hidden w-full overflow-hidden rounded-xl border border-slate-200 bg-white py-1.5 shadow-xl transition-all"
                        >
                            <div class="max-h-56 overflow-y-auto px-1 space-y-0.5">
                                @forelse ($classes as $cls)
                                    <div
                                        data-class-option
                                        data-id="{{ $cls->id }}"
                                        data-name="{{ $cls->name }}"
                                        class="group flex cursor-pointer items-center justify-between rounded-lg px-3 py-2 text-xs font-semibold text-slate-700 transition hover:bg-[#f4f0ff] hover:text-[#3b2670] sm:text-sm"
                                    >
                                        <div class="flex items-center gap-2 truncate">
                                            <span class="grid h-6 w-6 shrink-0 place-items-center rounded bg-slate-100 text-slate-500 group-hover:bg-[#3b2670] group-hover:text-white">
                                                <i data-lucide="school" class="h-3 w-3"></i>
                                            </span>
                                            <span class="truncate">{{ $cls->name }}</span>
                                        </div>
                                        <span class="class-option-check hidden text-[#3b2670]">
                                            <i data-lucide="check" class="h-3.5 w-3.5"></i>
                                        </span>
                                    </div>
                                @empty
                                    <div class="px-3 py-3 text-center text-xs text-slate-400">
                                        No active classes found.
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Batch Name -->
                <div>
                    <label for="batch_name" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Batch Name <span class="text-rose-500">*</span>
                    </label>
                    <input
                        id="batch_name"
                        name="name"
                        type="text"
                        value="{{ old('name') }}"
                        required
                        placeholder="e.g., HSC '26 Victory Batch"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                    >
                </div>

                <!-- 3. Featured Toggle Card -->
                <div class="rounded-xl border border-slate-200/80 bg-slate-50/60 p-3.5 transition hover:border-[#3b2670]/30">
                    <label class="flex cursor-pointer items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <span class="grid h-7 w-7 place-items-center rounded-lg bg-amber-50 text-amber-600">
                                <svg class="h-4 w-4 fill-amber-500 text-amber-500" viewBox="0 0 24 24">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </span>
                            <div>
                                <span class="text-xs font-bold text-slate-800">Featured Batch</span>
                                <p class="text-[11px] text-slate-500">Highlight this batch on frontend showcase</p>
                            </div>
                        </div>
                        <input
                            type="checkbox"
                            name="is_featured"
                            id="batch_is_featured"
                            value="1"
                            @checked(old('is_featured'))
                            class="h-4 w-4 rounded border-slate-300 text-[#3b2670] focus:ring-[#3b2670]"
                        >
                    </label>
                </div>

                <!-- 4. Sort Order -->
                <div>
                    <label for="batch_sort_order" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Sort Order
                    </label>
                    <input
                        id="batch_sort_order"
                        name="sort_order"
                        type="number"
                        min="0"
                        value="{{ old('sort_order', 0) }}"
                        placeholder="0"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                    >
                    <p class="mt-1 text-[11px] text-slate-400">Lower numbers appear first (e.g., 0, 1, 2)</p>
                </div>

                <!-- 5. Batch Image (Optional — Auto WebP) -->
                <div>
                    <div class="mb-1.5 flex items-center justify-between">
                        <label for="batch_image" class="block text-xs font-bold text-slate-700">
                            Batch Image / Thumbnail
                        </label>
                        <span class="text-[11px] font-medium text-slate-400">Auto WebP</span>
                    </div>

                    <label
                        for="batch_image"
                        class="group relative flex cursor-pointer items-center gap-3.5 rounded-xl border border-dashed border-slate-300 bg-slate-50/60 p-3 transition hover:border-[#3b2670] hover:bg-[#f4f0ff]/40"
                    >
                        <!-- Image Preview Box -->
                        <div class="grid h-14 w-14 shrink-0 place-items-center overflow-hidden rounded-xl border border-slate-200 bg-white text-slate-400">
                            <img
                                id="batch-image-preview"
                                src=""
                                alt="Batch Preview"
                                class="hidden h-full w-full object-cover"
                            >
                            <i id="batch-image-placeholder" data-lucide="image-plus" class="h-5 w-5 transition group-hover:text-[#3b2670]"></i>
                        </div>

                        <div class="min-w-0 flex-1">
                            <div id="batch-image-label" class="truncate text-xs font-semibold text-slate-700 group-hover:text-[#3b2670]">
                                Click to upload image
                            </div>
                            <p class="mt-0.5 text-[11px] text-slate-400">
                                PNG, JPG or WEBP (Converted to WebP)
                            </p>
                        </div>

                        <input
                            id="batch_image"
                            name="image"
                            type="file"
                            accept="image/*"
                            class="sr-only"
                        >
                    </label>
                </div>

                <!-- 5. Status -->
                <div>
                    <label for="batch_status" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Status <span class="text-rose-500">*</span>
                    </label>
                    <select
                        id="batch_status"
                        name="status"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm font-medium text-slate-800"
                    >
                        <option value="active" @selected(old('status', 'active') === 'active')>Active</option>
                        <option value="inactive" @selected(old('status') === 'inactive')>Inactive</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button
                        id="batch-form-submit"
                        type="submit"
                        class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-xl bg-[#3b2670] px-5 text-sm font-semibold text-white shadow-xs transition hover:bg-[#2d1b57]"
                    >
                        <i data-lucide="check" class="h-4 w-4"></i>
                        <span id="batch-form-submit-text">Save Batch</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

