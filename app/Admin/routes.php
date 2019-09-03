<?php


use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->resource('users', UsersController::class);
    //$router->get('users', 'UsersController@index')->name('admin.users.index');
    $router->resource('products', ProductsController::class);

    $router->get('orders', 'OrdersController@index')->name('admin.orders.index');
});
