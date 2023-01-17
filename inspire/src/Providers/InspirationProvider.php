<?php

namespace Jerickcm\Inspire\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	    //$this->loadRoutesFrom(__DIR__.'/../routes/web.php') ;
	    //$this->loadRoutesFrom('Routes/inspire.php') ;
	    $this->loadRoutesFrom(__DIR__ . '/../Routes/inspire.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
