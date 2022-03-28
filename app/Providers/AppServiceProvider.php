<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
class AppServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Api\V1\Controllers';


    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {

    }


    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        // $this->mapManagerRoutes();
    }



    protected function mapManagerRoutes()
    {
        // app('router')->prefix('v1')
        //     ->namespace($this->namespace)
        //     ->group(base_path('app/Api/V1/routes.php'));
        //     // $router->get('/', function () use ($router) {
        //     //     return $router->app->version();
        //     // });
    }
}
