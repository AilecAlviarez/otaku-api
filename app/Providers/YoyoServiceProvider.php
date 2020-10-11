<?php

namespace App\Providers;

use App\Http\Controllers\ApiController;
use App\interfaces\IRepository;
use App\Repositories\AppRepository;
use App\Services\ApiService;
use Illuminate\Cache\Repository;
use Illuminate\Support\ServiceProvider;

class YoyoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IRepository::class,AppRepository::class);
        $this->app->singleton(ApiService::class,function($app){
            return new ApiService(new Repository());
        });
        $this->app->singleton(ApiController::class,function($app){
            return new ApiController(new ApiService());
        });


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
