<?php

namespace App\Http\Controllers\Backend;

use App\Enums\AdminStatus;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function login(): View|RedirectResponse
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('backend.auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'phone' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $admin = Admin::query()
            ->where('phone', trim($credentials['phone']))
            ->first();

        if (! $admin || ! Hash::check($credentials['password'], $admin->password)) {
            return back()
                ->withInput($request->only('phone'))
                ->with('error', 'Invalid phone number or password.');
        }

        if ($admin->status !== AdminStatus::Active) {
            return back()
                ->withInput($request->only('phone'))
                ->with('error', 'Your account is inactive. Please contact Super Admin.');
        }

        Auth::guard('admin')->login($admin);
        $request->session()->regenerate();

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Welcome back, '.$admin->name.'! Logged in successfully.');
    }

    public function index(): View
    {
        return view('backend.dashboard.index');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('admin.login')
            ->with('success', 'You have been logged out successfully.');
    }
}
