<?php

namespace App\Models;

use App\Enums\AdminRole;
use App\Enums\AdminStatus;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable([
    'name',
    'phone',
    'email',
    'role',
    'gender',
    'profile_image',
    'date_of_birth',
    'address',
    'password',
    'status',
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
            'password' => 'hashed',
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
}

