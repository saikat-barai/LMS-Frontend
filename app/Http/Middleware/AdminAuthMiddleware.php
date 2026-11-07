<?php

namespace App\Http\Middleware;

use App\Enums\AdminStatus;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::guard('admin')->check()) {
            return redirect()
                ->route('admin.login')
                ->with('error', 'Please sign in to access the admin dashboard.');
        }

        $admin = Auth::guard('admin')->user();

        if ($admin && $admin->status !== AdminStatus::Active) {
            Auth::guard('admin')->logout();

            return redirect()
                ->route('admin.login')
                ->with('error', 'Your account is currently inactive. Please contact Super Admin.');
        }

        return $next($request);
    }
}

