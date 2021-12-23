<?php

namespace App\Providers;

use App\TwilioService\VerifyService;
use App\TwilioService\VerifyServiceInterface;
use Illuminate\Database\Eloquent\Relations\Relation;
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
        $this->app->bind(VerifyServiceInterface::class, VerifyService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::morphMap([
            'ad'      => 'App\Models\Ad',
            'user'    => 'App\Models\User',
            'review'  => 'App\Models\Review',
            'comment' => 'App\Models\Comment',

        ]);
    }
}
