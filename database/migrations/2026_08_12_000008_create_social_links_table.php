<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('url');
            $table->string('icon_class')->default('fa-link');
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });

        if (Schema::hasTable('site_settings')) {
            $setting = DB::table('site_settings')->first();

            if ($setting) {
                $rows = [
                    ['label' => 'LinkedIn', 'field' => 'linkedin_url', 'icon_class' => 'fa-linkedin-in', 'sort_order' => 1],
                    ['label' => 'Instagram', 'field' => 'instagram_url', 'icon_class' => 'fa-instagram', 'sort_order' => 2],
                    ['label' => 'Facebook', 'field' => 'facebook_url', 'icon_class' => 'fa-facebook-f', 'sort_order' => 3],
                    ['label' => 'X', 'field' => 'x_url', 'icon_class' => 'fa-x-twitter', 'sort_order' => 4],
                    ['label' => 'YouTube', 'field' => 'youtube_url', 'icon_class' => 'fa-youtube', 'sort_order' => 5],
                ];

                foreach ($rows as $row) {
                    $url = $setting->{$row['field']} ?? null;

                    if ($url) {
                        DB::table('social_links')->insert([
                            'label' => $row['label'],
                            'url' => $url,
                            'icon_class' => $row['icon_class'],
                            'sort_order' => $row['sort_order'],
                            'is_published' => true,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }
            }
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('social_links');
    }
};
