<?php

namespace App\Http\Controllers\Backend;

use App\Enums\ClassStatus;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Services\ImageUploadService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class SubjectsController extends Controller
{
    public function __construct(public ImageUploadService $imageUploadService) {}

    public function index(): View
    {
        $subjects = Subject::query()
            ->orderBy('sort_order', 'asc')
            ->latest()
            ->paginate(10);

        return view('backend.subjects.index', [
            'subjects' => $subjects,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:subjects,name'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', Rule::in(ClassStatus::values())],
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $this->imageUploadService->uploadWebp($request->file('image'), 'subjects');
        }

        Subject::query()->create([
            'name' => trim($validated['name']),
            'image' => $imagePath,
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.subjects.index')
            ->with('success', 'Subject added successfully.');
    }

    public function update(Request $request, Subject $subject): RedirectResponse
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('subjects', 'name')->ignore($subject->id),
            ],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', Rule::in(ClassStatus::values())],
        ]);

        $imagePath = $subject->image;

        if ($request->hasFile('image')) {
            $this->imageUploadService->delete($subject->image);
            $imagePath = $this->imageUploadService->uploadWebp($request->file('image'), 'subjects');
        }

        $subject->update([
            'name' => trim($validated['name']),
            'image' => $imagePath,
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.subjects.index')
            ->with('success', 'Subject updated successfully.');
    }

    public function destroy(Subject $subject): RedirectResponse
    {
        $this->imageUploadService->delete($subject->image);
        $subject->delete();

        return redirect()
            ->route('admin.subjects.index')
            ->with('success', 'Subject deleted successfully.');
    }
}
