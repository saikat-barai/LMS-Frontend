<?php

namespace App\Http\Controllers\Backend;

use App\Enums\ClassStatus;
use App\Http\Controllers\Controller;
use App\Models\AcademicClass;
use App\Services\ImageUploadService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ClassesController extends Controller
{
    public function __construct(public ImageUploadService $imageUploadService) {}

    public function index(): View
    {
        $classes = AcademicClass::query()
            ->latest()
            ->paginate(10);

        return view('backend.classes.index', [
            'classes' => $classes,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:classes,name'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'status' => ['required', Rule::in(ClassStatus::values())],
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $this->imageUploadService->uploadWebp($request->file('image'), 'class');
        }

        AcademicClass::query()->create([
            'name' => trim($validated['name']),
            'image' => $imagePath,
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.classes.index')
            ->with('success', 'Class added successfully.');
    }

    public function update(Request $request, AcademicClass $academicClass): RedirectResponse
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('classes', 'name')->ignore($academicClass->id),
            ],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'status' => ['required', Rule::in(ClassStatus::values())],
        ]);

        $imagePath = $academicClass->image;

        if ($request->hasFile('image')) {
            $this->imageUploadService->delete($academicClass->image);
            $imagePath = $this->imageUploadService->uploadWebp($request->file('image'), 'class');
        }

        $academicClass->update([
            'name' => trim($validated['name']),
            'image' => $imagePath,
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.classes.index')
            ->with('success', 'Class updated successfully.');
    }

    public function destroy(AcademicClass $academicClass): RedirectResponse
    {
        $this->imageUploadService->delete($academicClass->image);
        $academicClass->delete();

        return redirect()
            ->route('admin.classes.index')
            ->with('success', 'Class deleted successfully.');
    }
}
