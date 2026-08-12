<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trusted_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo_path');
            $table->string('website_url')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });

        DB::table('trusted_brands')->insert([
            [
                'name' => 'Ziply',
                'logo_path' => 'frontend/assets/images/trusted-business/trusted-logo-ziply.png',
                'website_url' => null,
                'sort_order' => 1,
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wave',
                'logo_path' => 'frontend/assets/images/trusted-business/trusted-logo-wave.png',
                'website_url' => null,
                'sort_order' => 2,
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kanba',
                'logo_path' => 'frontend/assets/images/trusted-business/trusted-logo-kanba.png',
                'website_url' => null,
                'sort_order' => 3,
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Holler',
                'logo_path' => 'frontend/assets/images/trusted-business/trusted-logo-holler.png',
                'website_url' => null,
                'sort_order' => 4,
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Zanda',
                'logo_path' => 'frontend/assets/images/trusted-business/trusted-logo-zanda.png',
                'website_url' => null,
                'sort_order' => 5,
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Solvixa',
                'logo_path' => 'frontend/assets/images/trusted-business/trusted-logo-solvixa.png',
                'website_url' => null,
                'sort_order' => 6,
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('trusted_brands');
    }
};
