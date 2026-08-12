<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('linkedin_url')->nullable()->after('transparent_logo_path');
            $table->string('instagram_url')->nullable()->after('linkedin_url');
            $table->string('facebook_url')->nullable()->after('instagram_url');
            $table->string('x_url')->nullable()->after('facebook_url');
            $table->string('youtube_url')->nullable()->after('x_url');
        });
    }

    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn([
                'linkedin_url',
                'instagram_url',
                'facebook_url',
                'x_url',
                'youtube_url',
            ]);
        });
    }
};
