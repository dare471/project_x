<?php

namespace App\Providers;

use App\Repositories\ExternalRepositories\Blog\BlogRepository;
use App\Repositories\ExternalRepositories\Blog\BlogRepositoryInterface;
use App\Repositories\ExternalRepositories\Blog\Category\BlogCategoryRepository;
use App\Repositories\ExternalRepositories\Blog\Category\BlogCategoryRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind(BlogCategoryRepositoryInterface::class, BlogCategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
