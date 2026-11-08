@extends('backend.master')

@section('title', 'Subjects - Z Academy Admin')
@section('page_title', 'Subjects')

@section('content')
    <div class="grid grid-cols-1 items-start gap-6 xl:grid-cols-12">
        <!-- Left Column: Subjects Data Table (8 Cols) -->
        <div class="overflow-hidden rounded-2xl border border-slate-200/80 bg-white shadow-xs xl:col-span-8">
            <div class="flex items-center justify-between border-b border-slate-100 px-5 py-4 sm:px-6">
                <div class="flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                        <i data-lucide="book-marked" class="h-4 w-4"></i>
                    </span>
                    <div>
                        <h2 class="font-display text-base font-bold text-slate-900">Subject List</h2>
                        <p class="text-xs text-slate-500">All academic subjects and visibility status</p>
                    </div>
                </div>

                <span class="rounded-full bg-[#f4f0ff] px-3 py-1 text-xs font-bold text-[#3b2670]">
                    {{ $subjects->total() }} {{ $subjects->total() === 1 ? 'Subject' : 'Subjects' }}
                </span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full min-w-[480px] text-left text-sm">
                    <thead>
                        <tr class="border-b border-slate-100 bg-slate-50/60 text-[11px] font-bold uppercase tracking-wider text-slate-500">
                            <th class="px-5 py-3.5 sm:px-6">Subject</th>
                            <th class="w-36 px-4 py-3.5">Status</th>
                            <th class="w-28 px-5 py-3.5 text-right sm:px-6">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse ($subjects as $item)
                            <tr class="admin-table-row transition-colors">
                                <!-- Subject Image + Name -->
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
                                                <i data-lucide="book-marked" class="h-5 w-5"></i>
                                            @endif
                                        </div>
                                        <div class="min-w-0">
                                            <div class="font-display text-sm font-bold text-slate-900">
                                                {{ $item->name }}
                                            </div>
                                        </div>
                                    </div>
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
                                            title="Edit Subject"
                                            data-edit-class
                                            data-entity-label="Subject"
                                            data-update-url="{{ route('admin.subjects.update', $item) }}"
                                            data-class-name="{{ $item->name }}"
                                            data-class-status="{{ $item->status?->value ?? 'active' }}"
                                            data-class-image="{{ $item->imageUrl() ?? '' }}"
                                            class="grid h-8 w-8 place-items-center rounded-lg border border-slate-200 text-slate-600 transition hover:border-[#3b2670]/30 hover:bg-[#f4f0ff] hover:text-[#3b2670]"
                                        >
                                            <i data-lucide="pencil" class="h-3.5 w-3.5"></i>
                                        </button>

                                        <form
                                            action="{{ route('admin.subjects.destroy', $item) }}"
                                            method="POST"
                                            class="inline-block"
                                            onsubmit="return confirm('Are you sure you want to delete this subject?');"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                title="Delete Subject"
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
                                <td colspan="3" class="px-6 py-14 text-center">
                                    <div class="mx-auto grid h-12 w-12 place-items-center rounded-2xl bg-[#f4f0ff] text-[#3b2670]">
                                        <i data-lucide="book-marked" class="h-6 w-6"></i>
                                    </div>
                                    <h3 class="mt-3 font-display text-sm font-bold text-slate-800">No subjects added yet</h3>
                                    <p class="mt-1 text-xs text-slate-500">Use the form on the right to create your first subject.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Reusable System Pagination -->
            {{ $subjects->links('backend.partials.pagination') }}
        </div>

        <!-- Right Column: Add / Edit Subject Form Card (4 Cols) -->
        <div
            id="class-form-card"
            class="rounded-2xl border border-slate-200/80 bg-white p-5 shadow-xs transition-all sm:p-6 xl:sticky xl:top-22 xl:col-span-4"
        >
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div class="flex items-center gap-2.5">
                    <span class="grid h-9 w-9 place-items-center rounded-xl bg-[#3b2670] text-white">
                        <i data-lucide="plus" class="h-4 w-4"></i>
                    </span>
                    <div>
                        <h2 id="class-form-title" class="font-display text-base font-bold text-slate-900">
                            Add New Subject
                        </h2>
                        <p id="class-form-subtitle" class="text-xs text-slate-500">
                            Create a new academic subject
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

            <form
                id="class-Quick-form"
                data-entity-label="Subject"
                action="{{ route('admin.subjects.store') }}"
                data-store-url="{{ route('admin.subjects.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="mt-5 space-y-4"
            >
                @csrf
                <input type="hidden" name="_method" id="class-form-method" value="POST">

                <!-- 1. Subject Name -->
                <div>
                    <label for="class_name" class="mb-1.5 block text-xs font-bold text-slate-700">
                        Subject Name <span class="text-rose-500">*</span>
                    </label>
                    <input
                        id="class_name"
                        name="name"
                        type="text"
                        value="{{ old('name') }}"
                        required
                        placeholder="e.g., Physics 1st Paper"
                        class="admin-input h-11 w-full rounded-xl border border-slate-200 bg-slate-50/60 px-3.5 text-sm text-slate-900 placeholder:text-slate-400"
                    >
                </div>

                <!-- 2. Subject Image (Optional — Auto WebP via Intervention Image) -->
                <div>
                    <div class="mb-1.5 flex items-center justify-between">
                        <label for="class_image" class="block text-xs font-bold text-slate-700">
                            Subject Image
                        </label>
                        <span class="text-[11px] font-medium text-slate-400">Auto WebP</span>
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
                                alt="Subject Preview"
                                class="hidden h-full w-full object-cover"
                            >
                            <i id="class-image-placeholder" data-lucide="image-plus" class="h-5 w-5 transition group-hover:text-[#3b2670]"></i>
                        </div>

                        <div class="min-w-0 flex-1">
                            <div id="class-image-label" class="truncate text-xs font-semibold text-slate-700 group-hover:text-[#3b2670]">
                                Click to upload image
                            </div>
                            <p class="mt-0.5 text-[11px] text-slate-400">
                                PNG, JPG or WEBP (Converted to WebP)
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
                        <option value="active" @selected(old('status', 'active') === 'active')>Active</option>
                        <option value="inactive" @selected(old('status') === 'inactive')>Inactive</option>
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
                        <span id="class-form-submit-text">Save Subject</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

