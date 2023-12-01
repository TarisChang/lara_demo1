<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->resource('banner', 'BannerController');
    $router->resource('news', 'NewsController');
    $router->resource('product', 'ProductController');
    $router->resource('join', 'JoinController');
    $router->resource('case', 'CaseController');

    $router->get('settings', 'SettingController@index');
    $router->get('about', 'SettingController@index');
    $router->get('contact', 'ContactController@index');
});
