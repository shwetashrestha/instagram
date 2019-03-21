<?php

namespace App\Providers;

use App\Repositories\Comment\CommentEloquent;
use App\Repositories\Comment\CommentRepository;
use App\Repositories\Post\PostEloquent;
use App\Repositories\Post\PostRepository;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CommentRepository::class, CommentEloquent::class);
        $this->app->singleton(PostRepository::class, PostEloquent::class);

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
    }
}
