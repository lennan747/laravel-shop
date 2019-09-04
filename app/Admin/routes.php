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
    $router->get('orders/{order}', 'OrdersController@show')->name('admin.orders.show');
    $router->post('orders/{order}/ship', 'OrdersController@ship')->name('admin.orders.ship');
    // 订单退款处理
    $router->post('orders/{order}/refund', 'OrdersController@handleRefund')->name('admin.orders.handle_refund');
    // 优惠券
    $router->get('coupon_codes', 'CouponCodesController@index');
});
