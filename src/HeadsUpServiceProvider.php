<?php

namespace PartyGames\HeadsUp;

use Illuminate\Support\ServiceProvider;

class HeadsUpServiceProvider extends ServiceProvider
{

        public function boot()
        {
            //$this->loadRoutesFrom(__DIR__.'/../routes/web.php');
            /*
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'heads-up');
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
            $this->publishes([
                __DIR__.'/views' => resource_path('views/vendor/heads-up'),
            ], 'heads-up-views');
            */
            $this->publishes([
                __DIR__.'/../resources/static' => public_path('vendor/heads-up'),
            ], 'heads-up-assets');
        }

        public function register()
        {
            /*
            $this->mergeConfigFrom(
                __DIR__.'/../config/settings.php', 'settings');
            */
            //parent::register(); // TODO: Change the autogenerated stub
        }
}