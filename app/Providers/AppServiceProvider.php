<?php

namespace App\Providers;

use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.sidebar', function($view){
            $view->with('archives', Post::archives());
            $view->with('tags', Tag::has('posts')->pluck('name'));
            $view->with('categories', Category::has('posts')->pluck('title'));
        });
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
