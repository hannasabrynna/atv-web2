<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Book;
use App\Policies\LibraryPolicy;
use Illuminate\Support\Facades\Gate;

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
        Paginator::useBootstrap();

        Gate::define('manage-books', function ($user) {
            return in_array($user->role, ['admin', 'bibliotecario']);
        });
    
        Gate::define('view-books', function ($user) {
            return in_array($user->role, ['admin', 'bibliotecario', 'cliente']);
        });
    }

    protected $policies = [
        Book::class => LibraryPolicy::class,
    ];
}
