<?php

namespace App\Http\Controllers\Backend;

use App\Enums\ClassStatus;
use App\Http\Controllers\Controller;
use App\Models\AcademicClass;
use App\Models\Batch;
use App\Services\ImageUploadService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class BatchesController extends Controller
{
    public function __construct(public ImageUploadService $imageUploadService) {}

    public function index(Request $request): View
    {
        $classes = AcademicClass::query()
            ->where('status', ClassStatus::Active)
            ->orderBy('name')
            ->get();

        if (Schema::hasTable('batches')) {
            $batches = Batch::query()
                ->with('academicClass')
                ->orderBy('sort_order', 'asc')
                ->latest()
                ->paginate(10);
        } else {
            $batches = new LengthAwarePaginator([], 0, 10, 1, [
                'path' => $request->url(),
                'query' => $request->query(),
            ]);
        }

        return view('backend.batches.index', [
            'batches' => $batches,
            'classes' => $classes,
            'tableReady' => Schema::hasTable('batches'),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'class_id' => ['required', 'integer', 'exists:classes,id'],
            'name' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'is_featured' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', Rule::in(ClassStatus::values())],
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $this->imageUploadService->uploadWebp($request->file('image'), 'batches');
        }

        Batch::query()->create([
            'class_id' => (int) $validated['class_id'],
            'name' => trim($validated['name']),
            'image' => $imagePath,
            'is_featured' => $request->boolean('is_featured'),
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.batches.index')
            ->with('success', 'Batch created successfully.');
    }

    public function update(Request $request, Batch $batch): RedirectResponse
    {
        $validated = $request->validate([
            'class_id' => ['required', 'integer', 'exists:classes,id'],
            'name' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'is_featured' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', Rule::in(ClassStatus::values())],
        ]);

        $imagePath = $batch->image;

        if ($request->hasFile('image')) {
            $this->imageUploadService->delete($batch->image);
            $imagePath = $this->imageUploadService->uploadWebp($request->file('image'), 'batches');
        }

        $batch->update([
            'class_id' => (int) $validated['class_id'],
            'name' => trim($validated['name']),
            'image' => $imagePath,
            'is_featured' => $request->boolean('is_featured'),
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.batches.index')
            ->with('success', 'Batch updated successfully.');
    }

    public function destroy(Batch $batch): RedirectResponse
    {
        $this->imageUploadService->delete($batch->image);
        $batch->delete();

        return redirect()
            ->route('admin.batches.index')
            ->with('success', 'Batch deleted successfully.');
    }
}
