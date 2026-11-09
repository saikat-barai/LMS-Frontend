<?php

namespace App\Models;

use App\Enums\ClassStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Batch extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'class_id',
        'name',
        'image',
        'is_featured',
        'sort_order',
        'status',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
            'status' => ClassStatus::class,
        ];
    }

    /**
     * Academic class that this batch belongs to.
     *
     * @return BelongsTo<AcademicClass, $this>
     */
    public function academicClass(): BelongsTo
    {
        return $this->belongsTo(AcademicClass::class, 'class_id');
    }

    /**
     * Get the full public URL of the batch image, if present.
     */
    public function imageUrl(): ?string
    {
        if (! $this->image) {
            return null;
        }

        return asset($this->image);
    }
}
