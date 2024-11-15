<?php

use Illuminate\Routing\Router;
use OpenAdmin\Admin\Facades\Admin;
use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\NewsController;
use App\Admin\Controllers\ImageController;
use App\Admin\Controllers\ArticleController;
use App\Admin\Controllers\ArticleControllers;
use App\Admin\Controllers\InformationController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('news', NewsController::class);
    $router->resource('images', ImageController::class);
    $router->resource('information', InformationController::class);
    $router->resource('articles', ArticleControllers::class);
});
