<?php

namespace App\Providers;

use App\Models\admin\About;
use App\Models\admin\SocialMedia;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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

        view()->composer('layouts.site',function ($view){

            $view->with('socials',SocialMedia::Selection()->get());
        });

        view()->composer('layouts.admin',function ($view){

            $view->with('special',About::Selection()->first());
        });
    }
}
