<?php
namespace Indianicc\Country\Providers;

use Illuminate\Support\ServiceProvider;

class CountryServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */


     public function register(){
        $this->app->make('Indianicc\Country\Controllers\CountryController');
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

       

       

	 }

}