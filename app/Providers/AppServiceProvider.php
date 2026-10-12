<?php

namespace App\Providers;

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
        // Copy the SEO text a controller passes (title / metaDescription) into names no page
        // template uses, before the template runs. Loop variables like $title inside a page
        // would otherwise overwrite it by the time layouts.app reads it.
        View::composer('pages.*', function (\Illuminate\View\View $view) {
            $data = $view->getData();
            $view->with([
                'seoTitle' => $data['title'] ?? null,
                'seoDescription' => $data['metaDescription'] ?? null,
            ]);
        });
    }
}
