<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panel', function () {
    return view('panel');
});

Route::get('/price', function () {
    return view('price');
})->name('price');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/order/{type}', [
    'uses' => 'Ordercontroller@getOrderPage',
    'as' => 'order.choose'
]);

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::post('/order/post', [
        'uses' => 'Ordercontroller@postOrder',
        'as' => 'order.post',
    ]);

Route::post('/order/post/verify', [
        'uses' => 'Ordercontroller@postVerifyOrder',
        'as' => 'order.verify.post',
    ]);

Route::get('/order/get/verify', [
        'uses' => 'Ordercontroller@getVerifyOrder',
        'as' => 'order.verify.get',
    ]);
Route::post('/contact/post', [
        'uses' => 'MessageController@postMessage',
        'as' => 'contact.post',
    ]);

// admin routes
Route::get('/orders', function () {
    return view('orders');
})->name('orders');

