<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Menu;
use App\Models\Settings;
use View;
use Cache;
use Exception;

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
        $menuList = Menu::where('is_active', 1)->whereNull('parent_id')->get();
        View::share('menuList', $menuList);

        $settings = Cache::rememberForever('settings', function() {
            try {
                return Settings::find(1) ?? new Settings;
            } catch (Exception $e) {
                return new Settings;
            }
        });
        View::share('settings', $settings);
    }
}
