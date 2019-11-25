<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Components\Notification;

class AppServiceProvider extends ServiceProvider
{
	use Notification;
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        /**
         * Nhận và truyền các thông báo đến view
         */
        view()->composer('notification', function ($view) {
            $notifcations = self::getNotifications();
            return $view->with('notifications', $notifcations);
        });   
        }
}
