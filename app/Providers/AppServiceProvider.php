<?php

namespace App\Providers;

use App\Models\ContentPage;
use App\Models\SiteSetting;
use App\Models\SocialLink;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('frontend.*', function ($view) {
            $setting = null;
            $contentPages = collect();
            $socialLinks = collect();

            if (Schema::hasTable('site_settings')) {
                $setting = SiteSetting::current();
            }

            if (Schema::hasTable('social_links')) {
                $socialLinks = SocialLink::published()->ordered()->get();
            }

            if (Schema::hasTable('content_pages')) {
                $contentPages = ContentPage::published()->orderBy('title')->get();
            }

            $view->with('siteSetting', $setting);
            $view->with('footerContentPages', $contentPages);
            $view->with('footerSocialLinks', $socialLinks);
        });
    }
}
