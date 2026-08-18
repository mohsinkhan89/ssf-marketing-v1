<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('content_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description');
            $table->string('status')->default('published')->index();
            $table->timestamps();
        });

        DB::table('content_pages')->insert([
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'description' => '<h2>Privacy Policy</h2><p>SSF Marketing respects your privacy. This page explains how we collect, use, and protect information shared through our website, contact forms, and marketing services.</p><h3>Information we collect</h3><p>We may collect contact details, business information, project requirements, and website usage data when you submit a form or interact with our services.</p><h3>How we use information</h3><p>We use submitted information to respond to enquiries, provide marketing services, improve our website, and communicate relevant updates.</p><h3>Contact</h3><p>For privacy questions, please contact us through the details listed on our website.</p>',
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Terms & Conditions',
                'slug' => 'terms-conditions',
                'description' => '<h2>Terms & Conditions</h2><p>These terms outline the general conditions for using the SSF Marketing website and engaging with our services.</p><h3>Website use</h3><p>You agree to use this website responsibly and not misuse its content, forms, or functionality.</p><h3>Service information</h3><p>Information on this website is provided for general guidance. Specific project terms, deliverables, and timelines are confirmed separately in writing.</p><h3>Updates</h3><p>We may update these terms from time to time. Continued use of the website means you accept the latest version.</p>',
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('content_pages');
    }
};
