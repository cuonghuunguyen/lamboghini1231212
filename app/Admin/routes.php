<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/xx', 'HomeController@index');
    
    $router->resource('/categories', CategoryController::class);
    $router->resource('/products', ProductController::class);
    $router->resource('/bills', BillController::class);
    $router->resource('/bill-details', BillDetailController::class);
    $router->resource('/discounts', DiscountController::class);
    
});
