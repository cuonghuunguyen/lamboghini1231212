<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.homepage');
});

Route::get('/cart', function () {
    return view('user.payment.payment-cart');
});

Route::get('/payment-method', function () {
    return view('user.payment.payment-method');
});

Route::get('/payment-bill', function () {
    return view('user.payment.payment-bill');
});

Route::get('/pay-process', function () {
    return view('user.payment.pay-process');
});
