<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ShopDetails;
use Illuminate\Support\Facades\Auth;
use Config;

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
        $appName = ShopDetails::find(4);
        config(['app.name' => $appName->shop_name]);
        Config::set('mail.from.name', $appName->shop_name);
        Config::set('mail.from.address', $appName->shop_email);
        Config::set('cart.tax', $appName->tax);
    }
}