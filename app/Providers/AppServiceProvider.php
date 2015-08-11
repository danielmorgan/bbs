<?php

namespace BulletinBoard\Providers;

use Illuminate\Support\ServiceProvider;
use BulletinBoard\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $users = User::all();
        view()->share('users', $users);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
