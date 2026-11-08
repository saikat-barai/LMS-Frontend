<?php

namespace App\Enums;

enum ClassStatus: string
{
    case Active = 'active';
    case Inactive = 'inactive';

    /**
     * Get human-readable status label.
     */
    public function label(): string
    {
        return match ($this) {
            self::Active => 'Active',
            self::Inactive => 'Inactive',
        };
    }

    /**
     * Get all enum string values.
     *
     * @return array<int, string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

