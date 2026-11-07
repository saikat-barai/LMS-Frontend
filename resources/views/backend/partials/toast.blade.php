@php
    $initialToasts = [];

    if (session('success')) {
        $initialToasts[] = ['type' => 'success', 'title' => 'Success', 'message' => session('success')];
    }
    if (session('error')) {
        $initialToasts[] = ['type' => 'error', 'title' => 'Error', 'message' => session('error')];
    }
    if (session('warning')) {
        $initialToasts[] = ['type' => 'warning', 'title' => 'Warning', 'message' => session('warning')];
    }
    if (session('info')) {
        $initialToasts[] = ['type' => 'info', 'title' => 'Notice', 'message' => session('info')];
    }
    if (isset($errors) && $errors->any()) {
        $initialToasts[] = ['type' => 'error', 'title' => 'Validation Error', 'message' => $errors->first()];
    }
@endphp

<!-- Global Reusable Toaster Container -->
<div
    id="global-toast-container"
    data-initial-toasts='@json($initialToasts)'
    class="pointer-events-none fixed right-4 top-4 z-[9999] flex w-full max-w-sm flex-col gap-2.5 sm:right-6 sm:top-5"
    aria-live="polite"
></div>

