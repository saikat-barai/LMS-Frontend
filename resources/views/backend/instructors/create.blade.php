@extends('backend.master')

@section('title', 'Add New Instructor - Z Academy Admin')
@section('page_title', 'Add New Instructor')

@section('content')
    <div class="space-y-6">
        <!-- Top Header Bar with Back Link -->
        <div class="flex flex-wrap items-center justify-between gap-3">
            <div>
                <h2 class="font-display text-lg font-bold text-slate-900">Create Instructor Account</h2>
                <p class="text-xs text-slate-500">Add a new teacher with subject assignment and social media profiles</p>
            </div>

            <a
                href="{{ route('admin.instructors.index') }}"
                class="inline-flex h-10 items-center gap-2 rounded-xl border border-slate-200 bg-white px-4 text-xs font-semibold text-slate-700 shadow-2xs transition hover:border-[#3b2670]/30 hover:text-[#3b2670] sm:text-sm"
            >
                <i data-lucide="arrow-left" class="h-4 w-4"></i>
                <span>Back to Instructors</span>
            </a>
        </div>

        <form action="{{ route('admin.instructors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('backend.instructors._form', ['instructor' => null])
        </form>
    </div>
@endsection

