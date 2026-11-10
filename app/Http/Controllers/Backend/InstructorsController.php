<?php

namespace App\Http\Controllers\Backend;

use App\Enums\AdminRole;
use App\Enums\AdminStatus;
use App\Enums\ClassStatus;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Subject;
use App\Services\ImageUploadService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class InstructorsController extends Controller
{
    public function __construct(public ImageUploadService $imageUploadService) {}

    public function index(Request $request): View
    {
        $search = trim((string) $request->query('search', ''));

        $instructors = Admin::query()
            ->where('role', AdminRole::Teacher)
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('phone', 'like', "%{$search}%")
                        ->orWhere('whatsapp_number', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhere('designation', 'like', "%{$search}%")
                        ->orWhereHas('subjects', function ($sq) use ($search) {
                            $sq->where('name', 'like', "%{$search}%");
                        });
                });
            })
            ->with('subjects')
            ->orderBy('sort_order', 'asc')
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('backend.instructors.index', [
            'instructors' => $instructors,
            'search' => $search,
        ]);
    }

    public function create(): View
    {
        $subjects = Subject::query()
            ->where('status', ClassStatus::Active)
            ->orderBy('name')
            ->get();

        return view('backend.instructors.create', [
            'subjects' => $subjects,
            'socialIconOptions' => $this->socialIconOptions(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:30', 'unique:admins,phone'],
            'whatsapp_number' => ['nullable', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:255', 'unique:admins,email'],
            'designation' => ['nullable', 'string', 'max:255'],
            'experience' => ['nullable', 'string', 'max:100'],
            'gender' => ['required', Rule::in(['male', 'female', 'other'])],
            'date_of_birth' => ['nullable', 'date'],
            'address' => ['nullable', 'string', 'max:500'],
            'bio' => ['nullable', 'string', 'max:1500'],
            'password' => ['required', 'string', 'min:6'],
            'status' => ['required', Rule::in(AdminStatus::values())],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'profile_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'subjects' => ['nullable', 'array'],
            'subjects.*' => ['integer', 'exists:subjects,id'],
            'social_links' => ['nullable', 'array'],
            'social_links.*.title' => ['nullable', 'string', 'max:100'],
            'social_links.*.icon' => ['nullable', 'string', 'max:100'],
            'social_links.*.url' => ['nullable', 'string', 'max:500'],
        ]);

        $imagePath = null;
        if ($request->hasFile('profile_image')) {
            $imagePath = $this->imageUploadService->uploadWebp($request->file('profile_image'), 'instructors');
        }

        $socialLinks = $this->cleanSocialLinks($validated['social_links'] ?? []);

        $instructor = Admin::query()->create([
            'name' => trim($validated['name']),
            'phone' => trim($validated['phone']),
            'whatsapp_number' => $validated['whatsapp_number'] ? trim($validated['whatsapp_number']) : null,
            'email' => $validated['email'] ? trim($validated['email']) : null,
            'role' => AdminRole::Teacher,
            'designation' => $validated['designation'] ? trim($validated['designation']) : null,
            'experience' => $validated['experience'] ? trim($validated['experience']) : null,
            'gender' => $validated['gender'],
            'profile_image' => $imagePath,
            'date_of_birth' => $validated['date_of_birth'] ?? null,
            'address' => $validated['address'] ?? null,
            'bio' => $validated['bio'] ?? null,
            'social_links' => $socialLinks,
            'password' => $validated['password'],
            'status' => $validated['status'],
            'sort_order' => isset($validated['sort_order']) && $validated['sort_order'] !== null ? (int) $validated['sort_order'] : 0,
        ]);

        $instructor->subjects()->sync($validated['subjects'] ?? []);

        return redirect()
            ->route('admin.instructors.index')
            ->with('success', 'Instructor created successfully.');
    }

    public function edit(Admin $instructor): View
    {
        abort_unless($instructor->role === AdminRole::Teacher, 404);

        $instructor->load('subjects');

        $subjects = Subject::query()
            ->where('status', ClassStatus::Active)
            ->orderBy('name')
            ->get();

        return view('backend.instructors.edit', [
            'instructor' => $instructor,
            'subjects' => $subjects,
            'socialIconOptions' => $this->socialIconOptions(),
        ]);
    }

    public function update(Request $request, Admin $instructor): RedirectResponse
    {
        abort_unless($instructor->role === AdminRole::Teacher, 404);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => [
                'required',
                'string',
                'max:30',
                Rule::unique('admins', 'phone')->ignore($instructor->id),
            ],
            'whatsapp_number' => ['nullable', 'string', 'max:30'],
            'email' => [
                'nullable',
                'email',
                'max:255',
                Rule::unique('admins', 'email')->ignore($instructor->id),
            ],
            'designation' => ['nullable', 'string', 'max:255'],
            'experience' => ['nullable', 'string', 'max:100'],
            'gender' => ['required', Rule::in(['male', 'female', 'other'])],
            'date_of_birth' => ['nullable', 'date'],
            'address' => ['nullable', 'string', 'max:500'],
            'bio' => ['nullable', 'string', 'max:1500'],
            'password' => ['nullable', 'string', 'min:6'],
            'status' => ['required', Rule::in(AdminStatus::values())],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'profile_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'subjects' => ['nullable', 'array'],
            'subjects.*' => ['integer', 'exists:subjects,id'],
            'social_links' => ['nullable', 'array'],
            'social_links.*.title' => ['nullable', 'string', 'max:100'],
            'social_links.*.icon' => ['nullable', 'string', 'max:100'],
            'social_links.*.url' => ['nullable', 'string', 'max:500'],
        ]);

        $imagePath = $instructor->profile_image;

        if ($request->hasFile('profile_image')) {
            $this->imageUploadService->delete($instructor->profile_image);
            $imagePath = $this->imageUploadService->uploadWebp($request->file('profile_image'), 'instructors');
        }

        $socialLinks = $this->cleanSocialLinks($validated['social_links'] ?? []);

        $updateData = [
            'name' => trim($validated['name']),
            'phone' => trim($validated['phone']),
            'whatsapp_number' => $validated['whatsapp_number'] ? trim($validated['whatsapp_number']) : null,
            'email' => $validated['email'] ? trim($validated['email']) : null,
            'designation' => $validated['designation'] ? trim($validated['designation']) : null,
            'experience' => $validated['experience'] ? trim($validated['experience']) : null,
            'gender' => $validated['gender'],
            'profile_image' => $imagePath,
            'date_of_birth' => $validated['date_of_birth'] ?? null,
            'address' => $validated['address'] ?? null,
            'bio' => $validated['bio'] ?? null,
            'social_links' => $socialLinks,
            'status' => $validated['status'],
            'sort_order' => isset($validated['sort_order']) && $validated['sort_order'] !== null ? (int) $validated['sort_order'] : 0,
        ];

        if (! empty($validated['password'])) {
            $updateData['password'] = $validated['password'];
        }

        $instructor->update($updateData);
        $instructor->subjects()->sync($validated['subjects'] ?? []);

        return redirect()
            ->route('admin.instructors.index')
            ->with('success', 'Instructor updated successfully.');
    }

    public function destroy(Admin $instructor): RedirectResponse
    {
        abort_unless($instructor->role === AdminRole::Teacher, 404);

        $this->imageUploadService->delete($instructor->profile_image);
        $instructor->delete();

        return redirect()
            ->route('admin.instructors.index')
            ->with('success', 'Instructor deleted successfully.');
    }

    /**
     * Filter out empty social link rows and normalize structure.
     *
     * @param  array<int, array<string, mixed>>  $links
     * @return array<int, array{title: string, icon: string, url: string}>
     */
    private function cleanSocialLinks(array $links): array
    {
        $cleaned = [];

        foreach ($links as $row) {
            $url = isset($row['url']) ? trim((string) $row['url']) : '';
            $title = isset($row['title']) ? trim((string) $row['title']) : '';
            $icon = isset($row['icon']) ? trim((string) $row['icon']) : 'globe';

            if ($url === '') {
                continue;
            }

            $cleaned[] = [
                'title' => $title !== '' ? $title : ucfirst($icon),
                'icon' => $icon !== '' ? $icon : 'globe',
                'url' => $url,
            ];
        }

        return $cleaned;
    }

    /**
     * Predefined social media icon classes and default platform titles.
     *
     * @return array<int, array{icon: string, title: string, label: string}>
     */
    private function socialIconOptions(): array
    {
        return [
            ['icon' => 'facebook', 'title' => 'Facebook', 'label' => 'Facebook (facebook)'],
            ['icon' => 'youtube', 'title' => 'YouTube', 'label' => 'YouTube (youtube)'],
            ['icon' => 'linkedin', 'title' => 'LinkedIn', 'label' => 'LinkedIn (linkedin)'],
            ['icon' => 'instagram', 'title' => 'Instagram', 'label' => 'Instagram (instagram)'],
            ['icon' => 'twitter', 'title' => 'Twitter / X', 'label' => 'Twitter / X (twitter)'],
            ['icon' => 'message-circle', 'title' => 'WhatsApp', 'label' => 'WhatsApp (whatsapp)'],
            ['icon' => 'send', 'title' => 'Telegram', 'label' => 'Telegram (telegram)'],
            ['icon' => 'globe', 'title' => 'Website', 'label' => 'Personal Website (globe)'],
        ];
    }
}
