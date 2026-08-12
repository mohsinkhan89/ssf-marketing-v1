<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_role')->nullable();
            $table->string('initials', 8)->nullable();
            $table->text('quote');
            $table->unsignedTinyInteger('rating')->default(5);
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });

        DB::table('reviews')->insert([
            [
                'client_name' => 'John Davis',
                'client_role' => 'CEO, TechSolutions',
                'initials' => 'JD',
                'quote' => 'Markit transformed our online presence and accelerated our marketing results. Our leads rose, and sales have never been better.',
                'rating' => 5,
                'sort_order' => 1,
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_name' => 'Sarah Mitchell',
                'client_role' => 'Founder, Northstar Studio',
                'initials' => 'SM',
                'quote' => 'The team brought clarity to our growth strategy. Within one quarter, acquisition costs fell while qualified pipeline reached a new high.',
                'rating' => 5,
                'sort_order' => 2,
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_name' => 'Alex Rivera',
                'client_role' => 'CMO, Elevate Labs',
                'initials' => 'AR',
                'quote' => 'A rare partner that understands both creative storytelling and commercial performance. Markit now feels like part of our internal team.',
                'rating' => 5,
                'sort_order' => 3,
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
