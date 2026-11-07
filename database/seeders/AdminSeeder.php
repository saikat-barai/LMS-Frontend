<?php

namespace Database\Seeders;

use App\Enums\AdminRole;
use App\Enums\AdminStatus;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'Super Admin',
                'phone' => '01700000001',
                'email' => 'superadmin@zacademy.edu',
                'role' => AdminRole::SuperAdmin->value,
                'gender' => 'male',
                'date_of_birth' => '1995-01-15',
                'address' => 'House 14, Road 07, Dhanmondi, Dhaka-1205',
                'password' => '12345678',
                'status' => AdminStatus::Active->value,
            ],
            [
                'name' => 'Admin User',
                'phone' => '01700000002',
                'email' => 'admin@zacademy.edu',
                'role' => AdminRole::Admin->value,
                'gender' => 'male',
                'date_of_birth' => '1997-04-20',
                'address' => 'Sector 07, Uttara, Dhaka-1230',
                'password' => '12345678',
                'status' => AdminStatus::Active->value,
            ],
            [
                'name' => 'Batch Manager',
                'phone' => '01700000003',
                'email' => 'manager@zacademy.edu',
                'role' => AdminRole::Manager->value,
                'gender' => 'male',
                'date_of_birth' => '1998-08-12',
                'address' => 'Mirpur-10, Dhaka-1216',
                'password' => '12345678',
                'status' => AdminStatus::Active->value,
            ],
            [
                'name' => 'Niaz Morshed Faysal',
                'phone' => '01700000004',
                'email' => 'teacher@zacademy.edu',
                'role' => AdminRole::Teacher->value,
                'gender' => 'male',
                'date_of_birth' => '1996-11-05',
                'address' => 'Farmgate, Dhaka-1215',
                'password' => '12345678',
                'status' => AdminStatus::Active->value,
            ],
        ];

        foreach ($admins as $adminData) {
            Admin::updateOrCreate(
                ['phone' => $adminData['phone']],
                $adminData
            );
        }
    }
}

