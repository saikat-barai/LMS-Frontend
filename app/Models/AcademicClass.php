<?php

namespace App\Models;

use App\Enums\ClassStatus;
use Illuminate\Database\Eloquent\Model;

class AcademicClass extends Model
{
    protected $table = 'classes';

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
     * Get the full public URL of the class image, if present.
     */
    public function imageUrl(): ?string
    {
        if (! $this->image) {
            return null;
        }

        return asset($this->image);
    }
}

