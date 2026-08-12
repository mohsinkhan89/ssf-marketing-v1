<?php

namespace App\Providers;

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
            $socialLinks = collect();

            if (Schema::hasTable('site_settings')) {
                $setting = SiteSetting::current();
            }

            if (Schema::hasTable('social_links')) {
                $socialLinks = SocialLink::published()->ordered()->get();
            }

            $view->with('siteSetting', $setting);
            $view->with('footerSocialLinks', $socialLinks);
        });
    }
}
