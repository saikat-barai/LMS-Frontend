<?php

namespace App\Models;

use App\Enums\AdminRole;
use App\Enums\AdminStatus;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable([
    'name',
    'phone',
    'whatsapp_number',
    'email',
    'role',
    'designation',
    'experience',
    'gender',
    'profile_image',
    'date_of_birth',
    'address',
    'bio',
    'social_links',
    'password',
    'status',
    'sort_order',
])]
#[Hidden(['password', 'remember_token'])]
class Admin extends Authenticatable
{
    use Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'role' => AdminRole::class,
            'status' => AdminStatus::class,
            'date_of_birth' => 'date',
            'social_links' => 'array',
            'password' => 'hashed',
            'sort_order' => 'integer',
        ];
    }

    /**
     * Get the formatted role label.
     */
    public function roleLabel(): string
    {
        if ($this->role instanceof AdminRole) {
            return $this->role->label();
        }

        return ucfirst(str_replace('_', ' ', (string) $this->role));
    }

    /**
     * Get the public profile image URL, if present.
     */
    public function profileImageUrl(): ?string
    {
        if (! $this->profile_image) {
            return null;
        }

        return asset($this->profile_image);
    }

    /**
     * Subjects assigned to this instructor/teacher.
     *
     * @return BelongsToMany<Subject, $this>
     */
    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'instructor_subject', 'admin_id', 'subject_id')
            ->withTimestamps();
    }
}
