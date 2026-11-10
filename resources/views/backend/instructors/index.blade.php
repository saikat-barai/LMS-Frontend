@extends('backend.master')

@section('title', 'Instructors - Z Academy Admin')
@section('page_title', 'Instructors')

@section('content')
    <div class="overflow-hidden rounded-2xl border border-slate-200/80 bg-white shadow-xs">
        <!-- Card Header: Title on Left + Real-Time Search & Add New Button on Right -->
        <div class="flex flex-col gap-3 border-b border-slate-100 px-5 py-4 sm:px-6 lg:flex-row lg:items-center lg:justify-between">
            <div class="flex items-center gap-3">
                <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-[#f4f0ff] text-[#3b2670]">
                    <i data-lucide="users" class="h-5 w-5"></i>
                </span>
                <div>
                    <div class="flex items-center gap-2.5">
                        <h2 class="font-display text-base font-bold text-slate-900">Instructors List</h2>
                        <span
                            id="instructor-count-badge"
                            class="rounded-full bg-[#f4f0ff] px-2.5 py-0.5 text-xs font-bold text-[#3b2670]"
                        >
                            {{ $instructors->total() }}
                        </span>
                    </div>
                    <p class="text-xs text-slate-500">Manage all teachers, assigned subjects, and login accounts</p>
                </div>
            </div>

            <!-- Right Controls: Real-Time Search Bar + Add New Button -->
            <div class="flex flex-col gap-2.5 sm:flex-row sm:items-center lg:justify-end">
                <div class="relative w-full sm:w-72 lg:w-80">
                    <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                        <i data-lucide="search" class="h-4 w-4"></i>
                    </span>
                    <input
                        id="instructor-realtime-search"
                        type="search"
                        value="{{ $search ?? '' }}"
                        data-search-url="{{ route('admin.instructors.index') }}"
                        placeholder="Search name, phone, email or subject..."
                        autocomplete="off"
                        class="admin-input h-10 w-full rounded-xl border border-slate-200 bg-slate-50/80 pl-9 pr-8 text-xs font-medium text-slate-800 placeholder:text-slate-400 transition-colors focus:bg-white sm:text-sm"
                    >
                    <span
                        id="instructor-search-spinner"
                        class="pointer-events-none absolute inset-y-0 right-0 hidden items-center pr-3 text-[#3b2670]"
                    >
                        <svg class="h-4 w-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v3a5 5 0 00-5 5H4z"></path>
                        </svg>
                    </span>
                </div>

                <a
                    href="{{ route('admin.instructors.create') }}"
                    class="inline-flex h-10 shrink-0 items-center justify-center gap-2 rounded-xl bg-[#3b2670] px-4 text-xs font-semibold text-white shadow-xs transition hover:bg-[#2d1b57] sm:text-sm"
                >
                    <i data-lucide="user-plus" class="h-4 w-4"></i>
                    <span>Add New</span>
                </a>
            </div>
        </div>

        <!-- Instructors Data Table Wrapper (Updated Live via Real-Time Search) -->
        <div id="instructor-table-wrapper">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[820px] text-left text-sm">
                    <thead>
                        <tr class="border-b border-slate-100 bg-slate-50/60 text-[11px] font-bold uppercase tracking-wider text-slate-500">
                            <th class="px-5 py-3.5 sm:px-6">Instructor</th>
                            <th class="px-4 py-3.5">Contact</th>
                            <th class="px-4 py-3.5">Subjects</th>
                            <th class="px-4 py-3.5">Social Media</th>
                            <th class="w-24 px-4 py-3.5 text-center">Order</th>
                            <th class="w-32 px-4 py-3.5">Status</th>
                            <th class="w-28 px-5 py-3.5 text-right sm:px-6">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse ($instructors as $instructor)
                            @php
                                $rawWhatsapp = preg_replace('/[^0-9]/', '', (string) $instructor->whatsapp_number);
                                if (str_starts_with($rawWhatsapp, '01') && strlen($rawWhatsapp) === 11) {
                                    $waLinkNumber = '88'.$rawWhatsapp;
                                } else {
                                    $waLinkNumber = $rawWhatsapp;
                                }
                            @endphp
                            <tr
                                class="admin-table-row transition-colors"
                                data-instructor-row
                                data-search-text="{{ strtolower($instructor->name.' '.$instructor->phone.' '.$instructor->whatsapp_number.' '.$instructor->email.' '.$instructor->designation.' '.$instructor->subjects->pluck('name')->implode(' ')) }}"
                            >
                                <!-- Instructor Profile + Name + Designation -->
                                <td class="px-5 py-4 sm:px-6">
                                    <div class="flex items-center gap-3.5">
                                        <div class="grid h-11 w-11 shrink-0 place-items-center overflow-hidden rounded-xl border border-slate-200 bg-[#f4f0ff] font-display text-sm font-bold text-[#3b2670]">
                                            @if ($instructor->profileImageUrl())
                                                <img
                                                    src="{{ $instructor->profileImageUrl() }}"
                                                    alt="{{ $instructor->name }}"
                                                    class="h-full w-full object-cover"
                                                >
                                            @else
                                                {{ strtoupper(substr($instructor->name, 0, 2)) }}
                                            @endif
                                        </div>
                                        <div class="min-w-0">
                                            <div class="font-display text-sm font-bold text-slate-900">
                                                {{ $instructor->name }}
                                            </div>
                                            <div class="mt-0.5 flex flex-wrap items-center gap-2 text-xs text-slate-500">
                                                <span>{{ $instructor->designation ?: 'Instructor' }}</span>
                                                @if ($instructor->experience)
                                                    <span class="text-slate-300">•</span>
                                                    <span class="font-medium text-[#3b2670]">{{ $instructor->experience }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <!-- Clickable Contact (Phone, WhatsApp, Email) -->
                                <td class="px-4 py-4">
                                    <div class="space-y-1.5 text-xs">
                                        <!-- Clickable Phone Number -->
                                        <div>
                                            <a
                                                href="tel:{{ $instructor->phone }}"
                                                title="Call {{ $instructor->phone }}"
                                                class="inline-flex items-center gap-1.5 font-semibold text-slate-800 transition hover:text-[#3b2670] hover:underline"
                                            >
                                                <i data-lucide="phone" class="h-3.5 w-3.5 shrink-0 text-[#3b2670]"></i>
                                                <span>{{ $instructor->phone }}</span>
                                            </a>
                                        </div>

                                        <!-- Clickable WhatsApp Number -->
                                        @if ($instructor->whatsapp_number)
                                            <div>
                                                <a
                                                    href="https://wa.me/{{ $waLinkNumber }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    title="Chat on WhatsApp ({{ $instructor->whatsapp_number }})"
                                                    class="inline-flex items-center gap-1.5 font-semibold text-emerald-700 transition hover:text-emerald-800 hover:underline"
                                                >
                                                    <svg class="h-3.5 w-3.5 shrink-0 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21" />
                                                        <path d="M9 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0v1a5 5 0 0 0 5 5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0 0 1" />
                                                    </svg>
                                                    <span>{{ $instructor->whatsapp_number }}</span>
                                                </a>
                                            </div>
                                        @endif

                                        <!-- Clickable Email Address -->
                                        @if ($instructor->email)
                                            <div>
                                                <a
                                                    href="mailto:{{ $instructor->email }}"
                                                    title="Send Email to {{ $instructor->email }}"
                                                    class="inline-flex items-center gap-1.5 text-slate-500 transition hover:text-[#3b2670] hover:underline"
                                                >
                                                    <i data-lucide="mail" class="h-3.5 w-3.5 shrink-0 text-slate-400"></i>
                                                    <span class="max-w-[190px] truncate">{{ $instructor->email }}</span>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </td>

                                <!-- Assigned Subjects -->
                                <td class="px-4 py-4">
                                    @if ($instructor->subjects->isNotEmpty())
                                        <div class="flex flex-wrap gap-1.5">
                                            @foreach ($instructor->subjects as $subject)
                                                <span class="inline-flex items-center gap-1 rounded-lg bg-[#f4f0ff] px-2.5 py-1 text-xs font-semibold text-[#3b2670]">
                                                    {{ $subject->name }}
                                                </span>
                                            @endforeach
                                        </div>
                                    @else
                                        <span class="text-xs text-slate-400">Not assigned</span>
                                    @endif
                                </td>

                                <!-- Polished Round Circle Social Media Icons (Inline Crisp SVGs) -->
                                <td class="px-4 py-4">
                                    @php
                                        $socials = is_array($instructor->social_links) ? $instructor->social_links : [];
                                    @endphp
                                    @if (count($socials) > 0)
                                        <div class="flex flex-wrap items-center gap-2">
                                            @foreach ($socials as $social)
                                                @php
                                                    $iconKey = strtolower(trim((string) ($social['icon'] ?? 'globe')));
                                                    $socialTitle = $social['title'] ?? ucfirst($iconKey);
                                                    $socialUrl = $social['url'] ?? '#';

                                                    $badgeStyle = match ($iconKey) {
                                                        'facebook' => 'border-blue-200 bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white hover:border-blue-600',
                                                        'youtube' => 'border-rose-200 bg-rose-50 text-rose-600 hover:bg-rose-600 hover:text-white hover:border-rose-600',
                                                        'linkedin' => 'border-sky-200 bg-sky-50 text-sky-700 hover:bg-sky-700 hover:text-white hover:border-sky-700',
                                                        'instagram' => 'border-pink-200 bg-pink-50 text-pink-600 hover:bg-pink-600 hover:text-white hover:border-pink-600',
                                                        'twitter', 'x' => 'border-slate-300 bg-slate-100 text-slate-800 hover:bg-slate-900 hover:text-white hover:border-slate-900',
                                                        'whatsapp', 'message-circle' => 'border-emerald-200 bg-emerald-50 text-emerald-600 hover:bg-emerald-600 hover:text-white hover:border-emerald-600',
                                                        'telegram', 'send' => 'border-cyan-200 bg-cyan-50 text-cyan-600 hover:bg-cyan-600 hover:text-white hover:border-cyan-600',
                                                        default => 'border-[#3b2670]/20 bg-[#f4f0ff] text-[#3b2670] hover:bg-[#3b2670] hover:text-white hover:border-[#3b2670]',
                                                    };
                                                @endphp
                                                <a
                                                    href="{{ $socialUrl }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    title="{{ $socialTitle }}"
                                                    aria-label="{{ $socialTitle }}"
                                                    class="grid h-9 w-9 place-items-center rounded-full border shadow-2xs transition-all duration-150 {{ $badgeStyle }}"
                                                >
                                                    @switch($iconKey)
                                                        @case('facebook')
                                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M13.5 22v-8.2h2.8l.4-3.2h-3.2V8.5c0-.9.3-1.6 1.6-1.6h1.7V4.1c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3v2.3H7.3v3.2h2.8V22h3.4z"/>
                                                            </svg>
                                                            @break

                                                        @case('youtube')
                                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31.4 31.4 0 0 0 0 12a31.4 31.4 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31.4 31.4 0 0 0 24 12a31.4 31.4 0 0 0-.5-5.8zM9.6 15.6V8.4l6.3 3.6-6.3 3.6z"/>
                                                            </svg>
                                                            @break

                                                        @case('linkedin')
                                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M6.9 8.5H3.6V20h3.3V8.5zM5.3 3.5a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM20.4 13.4c0-3.2-1.7-4.7-4-4.7-1.8 0-2.7 1-3.1 1.7V8.5H10c0 1 0 11.5 0 11.5h3.3v-6.4c0-.3 0-.7.1-.9.3-.7.9-1.4 1.9-1.4 1.4 0 1.9 1 1.9 2.6V20h3.3v-6.6z"/>
                                                            </svg>
                                                            @break

                                                        @case('instagram')
                                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"/>
                                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>
                                                            </svg>
                                                            @break

                                                        @case('twitter')
                                                        @case('x')
                                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                                            </svg>
                                                            @break

                                                        @case('whatsapp')
                                                        @case('message-circle')
                                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M3 21l1.65-3.8a9 9 0 1 1 3.4 2.9L3 21" />
                                                                <path d="M9 10a.5.5 0 0 0 1 0V9a.5.5 0 0 0-1 0v1a5 5 0 0 0 5 5h1a.5.5 0 0 0 0-1h-1a.5.5 0 0 0 0 1" />
                                                            </svg>
                                                            @break

                                                        @case('telegram')
                                                        @case('send')
                                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m22 2-7 20-4-9-9-4Z"/>
                                                                <path d="M22 2 11 13"/>
                                                            </svg>
                                                            @break

                                                        @default
                                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <circle cx="12" cy="12" r="10"/>
                                                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/>
                                                                <path d="M2 12h20"/>
                                                            </svg>
                                                    @endswitch
                                                </a>
                                            @endforeach
                                        </div>
                                    @else
                                        <span class="text-xs text-slate-400">—</span>
                                    @endif
                                </td>

                                <!-- Sort Order -->
                                <td class="px-4 py-4 text-center">
                                    <span class="inline-flex items-center justify-center rounded-lg bg-slate-100 px-2.5 py-1 font-mono text-xs font-semibold text-slate-700">
                                        #{{ $instructor->sort_order ?? 0 }}
                                    </span>
                                </td>

                                <!-- Status Badge -->
                                <td class="px-4 py-4">
                                    @if ($instructor->status?->value === 'active')
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
                                <td class="px-5 py-4 text-right sm:px-6">
                                    <div class="inline-flex items-center justify-end gap-1.5">
                                        <a
                                            href="{{ route('admin.instructors.edit', $instructor) }}"
                                            title="Edit Instructor"
                                            class="grid h-8 w-8 place-items-center rounded-lg border border-slate-200 text-slate-600 transition hover:border-[#3b2670]/30 hover:bg-[#f4f0ff] hover:text-[#3b2670]"
                                        >
                                            <i data-lucide="pencil" class="h-3.5 w-3.5"></i>
                                        </a>

                                        <form
                                            action="{{ route('admin.instructors.destroy', $instructor) }}"
                                            method="POST"
                                            class="inline-block"
                                            onsubmit="return confirm('Are you sure you want to delete this instructor?');"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                title="Delete Instructor"
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
                                <td colspan="7" class="px-6 py-14 text-center">
                                    <div class="mx-auto grid h-12 w-12 place-items-center rounded-2xl bg-[#f4f0ff] text-[#3b2670]">
                                        <i data-lucide="users" class="h-6 w-6"></i>
                                    </div>
                                    <h3 class="mt-3 font-display text-sm font-bold text-slate-800">No instructors found</h3>
                                    <p class="mt-1 text-xs text-slate-500">
                                        {{ !empty($search) ? 'No instructors matched your search query.' : 'Click "Add New" to register your first instructor.' }}
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Reusable System Pagination -->
            {{ $instructors->links('backend.partials.pagination') }}
        </div>
    </div>
@endsection
