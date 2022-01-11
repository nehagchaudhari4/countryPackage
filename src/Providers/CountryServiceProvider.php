<?php
namespace Indianic\Country\Providers;

use Illuminate\Support\ServiceProvider;

class CountryServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */


     public function register(){
        $this->app->make('Indianic\Country\Controllers\CountryController');
     }
	/**
     * Bootstrap services.
     *
     * @return void
     */
	 public function boot(){
	 	$this->loadRoutesFrom(__DIR__.'/../routes/web.php');

      $this->loadViewsFrom(__DIR__.'/../views', 'country');

      $this->loadMigrationsFrom(__DIR__.'/../migrations','country');

       $this->publishes([
            __DIR__.'/assets' => public_path('vendor/country'),
        ], 'public');

        //config
        $this->publishes([
            __DIR__.'/config/country.php' => config_path('country.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/country')
        ], 'views');

	 }

}