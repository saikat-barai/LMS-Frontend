<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageUploadService
{
    /**
     * Convert any uploaded image to high-quality WebP using Intervention Image v4
     * and save to public/assets/backend/images/{directory}.
     */
    public function uploadWebp(UploadedFile $file, string $directory = 'class', int $quality = 90): string
    {
        $cleanDir = trim($directory, '/');
        $relativeDir = 'assets/backend/images/'.$cleanDir;
        $targetDir = public_path($relativeDir);

        if (! File::isDirectory($targetDir)) {
            File::makeDirectory($targetDir, 0755, true);
        }

        $filename = Str::uuid()->toString().'.webp';
        $fullPath = $targetDir.DIRECTORY_SEPARATOR.$filename;

        $manager = ImageManager::usingDriver(Driver::class);
        $image = $manager->decodePath($file->getRealPath());

        // Encode and save as WebP preserving crisp resolution and quality
        $image->save($fullPath, quality: $quality);

        return $relativeDir.'/'.$filename;
    }

    /**
     * Delete an existing uploaded image file from public path if it exists.
     */
    public function delete(?string $relativePath): void
    {
        if (! $relativePath) {
            return;
        }

        $fullPath = public_path($relativePath);

        if (File::exists($fullPath)) {
            File::delete($fullPath);
        }
    }
}
