<?php
/**
 * Created by PhpStorm.
 * User: yyh
 * Date: 2019/7/24
 * Time: 22:32
 */

namespace Huicurry\Huijunit;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class JunitServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        echo  111;
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'junit'
        );
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Huicurry\Huijunit\Http\Controllers',
            'prefix' => 'junit',
        ];
    }
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        });
    }
}