<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = collect([
            [
                'name' => 'Super Admin',
                'slug' => 'super-admin',
                'description' => 'Full dashboard, users, roles, and settings access.',
            ],
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'description' => 'Manage campaigns, reports, users, and daily operations.',
            ],
            [
                'name' => 'Author',
                'slug' => 'author',
                'description' => 'Create and update marketing content and campaign notes.',
            ],
        ])->mapWithKeys(function (array $role) {
            $model = Role::updateOrCreate(
                ['slug' => $role['slug']],
                ['name' => $role['name'], 'description' => $role['description']]
            );

            return [$role['slug'] => $model];
        });

        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@ssfmarketing.com',
                'role' => 'super-admin',
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => 'moshin123',
            ],
            [
                'name' => 'Admin User',
                'email' => 'admin@ssfmarketing.com',
                'role' => 'admin',
                'password' => 'password',
            ],
            [
                'name' => 'Author User',
                'email' => 'author@ssfmarketing.com',
                'role' => 'author',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'role_id' => $roles[$user['role']]->id,
                    'name' => $user['name'],
                    'email_verified_at' => now(),
                    'password' => Hash::make($user['password'] ?? 'password'),
                ]
            );
        }
    }
}
