<?php

namespace Database\Seeders;

use App\Models\ContentPage;
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

        foreach ([
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'description' => '<h2>Privacy Policy</h2><p>SSF Marketing respects your privacy. This page explains how we collect, use, and protect information shared through our website, contact forms, and marketing services.</p><h3>Information we collect</h3><p>We may collect contact details, business information, project requirements, and website usage data when you submit a form or interact with our services.</p><h3>How we use information</h3><p>We use submitted information to respond to enquiries, provide marketing services, improve our website, and communicate relevant updates.</p><h3>Contact</h3><p>For privacy questions, please contact us through the details listed on our website.</p>',
                'status' => 'published',
            ],
            [
                'title' => 'Terms & Conditions',
                'slug' => 'terms-conditions',
                'description' => '<h2>Terms & Conditions</h2><p>These terms outline the general conditions for using the SSF Marketing website and engaging with our services.</p><h3>Website use</h3><p>You agree to use this website responsibly and not misuse its content, forms, or functionality.</p><h3>Service information</h3><p>Information on this website is provided for general guidance. Specific project terms, deliverables, and timelines are confirmed separately in writing.</p><h3>Updates</h3><p>We may update these terms from time to time. Continued use of the website means you accept the latest version.</p>',
                'status' => 'published',
            ],
        ] as $page) {
            ContentPage::updateOrCreate(
                ['slug' => $page['slug']],
                ['title' => $page['title'], 'description' => $page['description'], 'status' => $page['status']]
            );
        }
    }
}
