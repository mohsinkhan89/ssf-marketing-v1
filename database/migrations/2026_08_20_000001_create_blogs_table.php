<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->longText('description');
            $table->string('status')->default('published')->index();
            $table->string('card_img')->nullable();
            $table->string('banner_img')->nullable();
            $table->timestamps();
        });

        DB::table('blogs')->insert([
            [
                'title' => 'The 2025 SEO Playbook: Rank Higher, Grow Faster',
                'slug' => 'the-2025-seo-playbook-rank-higher-grow-faster',
                'short_description' => 'A practical SEO playbook for sustainable organic growth in modern search.',
                'description' => '<p>Search is evolving faster than ever. From AI Overviews to zero-click results, SEO now needs sharper strategy, stronger content, and better technical execution.</p><h2>The 2025 SEO Landscape</h2><p>AI-driven search, user intent, and experience signals are shaping rankings more than ever. Google focuses on delivering the best answer in the best format.</p><ul><li>AI Overviews are changing how users interact with search results.</li><li>E-E-A-T, experience, and authority matter more than backlinks alone.</li><li>Core Web Vitals and page experience remain critical ranking factors.</li></ul><h2>Core SEO Strategy</h2><p>A strong SEO strategy starts with aligning business goals to search intent and building a roadmap that compounds over time.</p><ul><li>Keyword research should be based on intent, not just volume.</li><li>Topic clusters and internal linking build topical authority.</li><li>Helpful content should satisfy intent better than competing pages.</li></ul><h2>Measuring SEO Success</h2><p>Track organic traffic, rankings, impressions, engagement, and conversion impact so you can refine strategy and scale what works.</p>',
                'status' => 'published',
                'card_img' => 'frontend/assets/images/seo/banners/hero-section.png',
                'banner_img' => 'frontend/assets/images/seo/banners/hero-section.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Content That Converts: From Strategy to Results',
                'slug' => 'content-that-converts-from-strategy-to-results',
                'short_description' => 'Build a content strategy that attracts, engages, and turns readers into customers.',
                'description' => '<p>Content performs when it connects audience needs with business goals. The right system turns ideas into measurable demand.</p><h2>Start With Intent</h2><p>Map every topic to a clear customer question, funnel stage, and conversion goal.</p><ul><li>Prioritize pain points with commercial value.</li><li>Create clear briefs before writing.</li><li>Refresh existing pages before chasing new volume.</li></ul><h2>Make Content Useful</h2><p>Use examples, data, visuals, and concise structure to help readers make better decisions quickly.</p>',
                'status' => 'published',
                'card_img' => 'frontend/assets/images/about/about-bg.png',
                'banner_img' => 'frontend/assets/images/about/about-bg.png',
                'created_at' => now()->subDays(9),
                'updated_at' => now()->subDays(9),
            ],
            [
                'title' => 'Maximize ROAS with Smarter PPC Campaigns',
                'slug' => 'maximize-roas-with-smarter-ppc-campaigns',
                'short_description' => 'Improve paid media efficiency with better structure, creative testing, and conversion tracking.',
                'description' => '<p>Smarter PPC campaigns are built around profit, not vanity metrics. Better structure and measurement help every dollar work harder.</p><h2>Clean Campaign Structure</h2><p>Separate campaigns by intent, budget control, and landing page experience.</p><ul><li>Group keywords and audiences by funnel stage.</li><li>Use negative keywords and exclusions actively.</li><li>Align ad copy with the landing page promise.</li></ul><h2>Measure What Matters</h2><p>Track leads, revenue, ROAS, CAC, and quality signals so optimization decisions stay commercial.</p>',
                'status' => 'published',
                'card_img' => 'frontend/assets/images/proven-results/proven-dashboard.png',
                'banner_img' => 'frontend/assets/images/proven-results/proven-dashboard.png',
                'created_at' => now()->subDays(17),
                'updated_at' => now()->subDays(17),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};