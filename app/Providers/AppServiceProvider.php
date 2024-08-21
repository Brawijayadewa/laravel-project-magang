<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AttachmentRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('AttachmentRepository', function ($app) {
            return new AttachmentRepository($app->make(\App\Attachment::class));
        });
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
