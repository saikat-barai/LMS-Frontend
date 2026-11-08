<?php

namespace App\Models;

use App\Enums\ClassStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'image',
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
            'status' => ClassStatus::class,
        ];
    }

    /**
     * Get the full public URL of the subject image, if present.
     */
    public function imageUrl(): ?string
    {
        if (! $this->image) {
            return null;
        }

        return asset($this->image);
    }

    /**
     * Instructors teaching this subject.
     *
     * @return BelongsToMany<Admin, $this>
     */
    public function instructors(): BelongsToMany
    {
        return $this->belongsToMany(Admin::class, 'instructor_subject', 'subject_id', 'admin_id')
            ->withTimestamps();
    }
}

