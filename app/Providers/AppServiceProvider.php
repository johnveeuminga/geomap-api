<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

use App\Services\SocialUserResolver;
use Hivokas\LaravelPassportSocialGrant\Resolvers\SocialUserResolverInterface;
use App\Services\CustomFacebookProvider;
use Laravel\Socialite\Facades\Socialite;

class AppServiceProvider extends ServiceProvider
{
  /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
      SocialUserResolverInterface::class => SocialUserResolver::class,
      // FacebookProvider::class => CustomFacebookProvider::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // Extend FacebookProvider class
        $socialite = $this->app->make('Laravel\Socialite\Contracts\Factory');
        $socialite->extend(
            'facebook',
            function ($app) use ($socialite) {
                $config = $app['config']['services.facebook'];
                return $socialite->buildProvider(CustomFacebookProvider::class, $config);
            }
        );
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
